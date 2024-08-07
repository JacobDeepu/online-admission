<?php

namespace App\Http\Controllers;

use App\Mail\Admission;
use App\Models\Registration;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Mail;

class RegistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $registrations = Registration::with('student')->latest();
        if (request()->has('search')) {
            $searchTerm = request()->input('search');
            $registrations = $registrations->whereHas('student', function ($query) use ($searchTerm) {
                $query->where('first_name', 'like', '%'.$searchTerm.'%');
            });
        }
        $registrations = $registrations->paginate(10);

        return view('registration.index', compact('registrations'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Registration $registration)
    {
        //
    }

    /**
     * Export as pdf.
     */
    public function exportPDF(Registration $registration)
    {
        $date_of_birth = date_create($registration->student->date_of_birth);
        $date_of_birth = date_format($date_of_birth, 'd/m/Y');
        $data = [
            'title' => 'Admission 2024-25',
            'registration' => $registration,
            'date_of_birth' => $date_of_birth,
            'photo' => public_path('storage/'.$registration->document->photo),
        ];

        $file = $registration->student->first_name.$registration->id.'.pdf';

        if ($registration->section == 1) {
            PDF::loadView('registration.print', $data)->save('storage/print/'.$file);
        } elseif ($registration->section == 2) {
            PDF::loadView('registration.print-hs', $data)->save('storage/print/'.$file);
        } else {
            PDF::loadView('registration.print-hss', $data)->save('storage/print/'.$file);
        }

        Mail::to($registration->student->parentDetails[0]['email'])
            ->send(new Admission($registration, $file));

        return redirect(asset('storage/print/'.$file));
    }

    public function getData(): JsonResponse
    {
        $cacheKey = 'chart_data_'.now()->format('Y-m');
        $cacheDuration = now()->addMinutes(30);

        return cache()->remember($cacheKey, $cacheDuration, function () {
            $pending = Registration::whereHas('transaction', function ($query) {
                $query->where('status', 0);
            })->count();
            $paid = Registration::whereHas('transaction', function ($query) {
                $query->where('status', 1);
            })->count();

            $currentMonth = now()->format('Y-m');
            $registrations = Registration::selectRaw('DATE(created_at) as date, COUNT(*) as count')
                ->where('created_at', 'like', "$currentMonth%")
                ->groupBy('date')
                ->get();

            $today = now()->format('Y-m-d');
            $paidToday = Registration::whereDate('created_at', $today)
                ->whereHas('transaction', function ($query) {
                    $query->where('status', 1);
                })
                ->count();

            $pendingToday = Registration::whereDate('created_at', $today)
                ->whereHas('transaction', function ($query) {
                    $query->where('status', 0);
                })
                ->count();

            $registrationData = [
                'total' => $pending + $paid,
                'pending' => $pending,
                'paid' => $paid,
                'dates' => $registrations->pluck('date'),
                'counts' => $registrations->pluck('count'),
                'countToday' => $pendingToday + $paidToday,
                'paidToday' => $paidToday,
                'pendingToday' => $pendingToday,
            ];

            return response()->json([
                'registrations' => $registrationData,
            ]);
        });
    }
}
