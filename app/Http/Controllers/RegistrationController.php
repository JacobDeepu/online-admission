<?php

namespace App\Http\Controllers;

use App\Mail\Admission;
use App\Models\Registration;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Mail;

class RegistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $registrations = Registration::latest();
        $registrations = $registrations->paginate(6);
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
        $date_of_birth = date_format($date_of_birth, "d/m/Y");
        $data = [
            'title' => 'Admission 2024-25',
            'registration' => $registration,
            'date_of_birth' => $date_of_birth,
            'photo' => public_path('storage/' . $registration->documents->photo)
        ];

        $file = $registration->student->first_name . $registration->id . '.pdf';

        if ($registration->section == 1) {
            PDF::loadView('registration.print', $data)->save('storage/print/' . $file);
        } else {
            PDF::loadView('registration.print-hs', $data)->save('storage/print/' . $file);
        }

        Mail::to($registration->student->parent_details[0]['email'])
            ->send(new Admission($registration, $file));

        return redirect(asset('storage/print/' . $file));
    }
}
