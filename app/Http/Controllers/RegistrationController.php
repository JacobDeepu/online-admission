<?php

namespace App\Http\Controllers;

use App\Models\Registration;

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

}
