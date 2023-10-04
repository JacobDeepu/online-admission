<?php

namespace App\Http\Controllers;

use App\Models\Registration;
use Barryvdh\DomPDF\Facade\Pdf;

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
        $data = [
            'title' => 'Admission 2024-25',
            'date' => date('m/d/Y'),
            'registration' => $registration,
            'photo' => public_path('storage/' . $registration->photo)
        ];

        $file = $registration->student->first_name . $registration->id . '.pdf';

        PDF::loadView('registration.print', $data)->save('storage/print/' . $file );

        return redirect(asset('storage/print/' . $file));
    }
}
