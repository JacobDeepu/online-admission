<?php

namespace App\Livewire\Forms;

use App\Models\Registration;
use Livewire\Attributes\Validate;
use Livewire\Form;

class RegistrationForm extends Form
{
    #[Validate('nullable|string|max:255')]
    public $class;

    #[Validate('nullable|string|max:255')]
    public $academic_year;

    #[Validate('nullable|string|max:255')]
    public $previous_institution;

    #[Validate('required|mimes:pdf,jpg,png,jpeg|max:1024')]
    public $photo;

    #[Validate('required|mimes:pdf,jpg,png,jpeg|max:1024')]
    public $birth_certificate;

    #[Validate('required|mimes:pdf,jpg,png,jpeg|max:1024')]
    public $aadhaar;

    #[Validate('required|mimes:pdf,jpg,png,jpeg|max:1024')]
    public $address_proof;

    #[Validate('required|mimes:pdf,jpg,png,jpeg|max:1024')]
    public $immunization;

    #[Validate('nullable|string|max:255')]
    public $siblings;

    #[Validate('nullable|string|max:255')]
    public $distance;

    public function store($student, $contact)
    {
        $this->validate();
        return Registration::create([
            'student_id' => $student,
            'contact_id' => $contact,
            'class' => $this->class,
            'academic_year' => $this->academic_year,
            'previous_institution' => $this->previous_institution,
            'photo' => $this->photo->store('uploads/photos', 'public'),
            'birth_certificate' => $this->birth_certificate->store('uploads/birth-certificates', 'public'),
            'aadhaar' => $this->aadhaar->store('uploads/aadhaar-cards', 'public'),
            'address_proof' => $this->address_proof->store('uploads/address-proofs', 'public'),
            'immunization' => $this->immunization->store('uploads/immunization-certs', 'public'),
            'siblings' => $this->siblings,
            'distance' => $this->distance,
            'status' => 0
        ]);
    }
}
