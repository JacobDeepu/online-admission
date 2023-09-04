<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRegistrationRequest;
use App\Http\Requests\UpdateRegistrationRequest;
use App\Models\Contact;
use App\Models\ParentDetail;
use App\Models\Registration;
use App\Models\Student;

class RegistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRegistrationRequest $request)
    {
        $request->validated();

        $student = Student::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'gender' => $request->gender,
            'date_of_birth' => $request->date_of_birth,
            'date_of_birth_word' => $request->date_of_birth_word,
            'uid' => $request->uid,
            'religion' => $request->religion,
            'caste' => $request->caste,
            'social_category' => $request->social_category,
            'place_of_birth' => $request->place_of_birth,
            'nationality' => $request->nationality,
            'mother_tongue' => $request->mother_tongue
        ]);

        $contact = Contact::create([
            'primary_number' => $request->primary_number,
            'secondary_number' => $request->secondary_number,
            'house_name' => $request->house_name,
            'road' => $request->road,
            'street' => $request->street,
            'area' => $request->area,
            'city' => $request->city,
            'post_office' => $request->post_office,
            'pin_code' => $request->pin_code,
            'permanent_house_name' => $request->permanent_house_name,
            'permanent_road' => $request->permanent_road,
            'permanent_street' => $request->permanent_street,
            'permanent_area' => $request->permanent_area,
            'permanent_city' => $request->permanent_city,
            'permanent_post_office' => $request->permanent_post_office,
            'permanent_pin_code' => $request->permanent_pin_code
        ]);

        $parent = $student->parent_details()->createMany([
            [
                'name' => $request->father_name,
                'occupation' => $request->father_occupation,
                'annual_income' => $request->father_annual_income,
                'office_address' => $request->father_office_address,
                'office_number' => $request->father_office_number,
                'mobile_number' => $request->father_mobile_number,
                'email' => $request->father_email,
                'relationship' => 'father'
            ],
            [
                'name' => $request->mother_name,
                'occupation' => $request->mother_occupation,
                'annual_income' => $request->mother_annual_income,
                'office_address' => $request->mother_office_address,
                'office_number' => $request->mother_office_number,
                'mobile_number' => $request->mother_mobile_number,
                'email' => $request->mother_email,
                'relationship' => 'mother'
            ]
        ]);

        return redirect('/')->with('status', 'Registration Successful!!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Registration $registration)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Registration $registration)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRegistrationRequest $request, Registration $registration)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Registration $registration)
    {
        //
    }
}
