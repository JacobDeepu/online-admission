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
            'siblings' => $this->siblings,
            'distance' => $this->distance,
            'status' => 0
        ]);
    }
}