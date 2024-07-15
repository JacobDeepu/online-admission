<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;

class ParentDetailsForm extends Form
{
    #[Validate('required|string|max:255')]
    public $father_name = '';

    #[Validate('nullable|string|max:255')]
    public $father_nationality = '';

    #[Validate('nullable|string|max:255')]
    public $father_qualification = '';

    #[Validate('nullable|string|max:255')]
    public $father_occupation = '';

    #[Validate('nullable|string|max:255')]
    public $father_annual_income = '';

    #[Validate('required|numeric')]
    public $father_mobile_number = '';

    #[Validate('required|email')]
    public $father_email = '';

    #[Validate('required|string|max:255')]
    public $mother_name = '';

    #[Validate('nullable|string|max:255')]
    public $mother_nationality = '';

    #[Validate('nullable|string|max:255')]
    public $mother_qualification = '';

    #[Validate('nullable|string|max:255')]
    public $mother_occupation = '';

    #[Validate('nullable|string|max:255')]
    public $mother_annual_income = '';

    #[Validate('nullable|numeric')]
    public $mother_mobile_number = '';

    #[Validate('nullable|email')]
    public $mother_email = '';

    #[Validate('nullable|string|max:255')]
    public $guardian_name = '';

    #[Validate('nullable|string|max:255')]
    public $guardian_nationality = '';

    #[Validate('nullable|string|max:255')]
    public $guardian_qualification = '';

    #[Validate('nullable|string|max:255')]
    public $guardian_occupation = '';

    #[Validate('nullable|string|max:255')]
    public $guardian_annual_income = '';

    #[Validate('nullable|numeric')]
    public $guardian_mobile_number = '';

    #[Validate('nullable|email')]
    public $guardian_email = '';

    public function store($student)
    {
        $this->validate();

        $student->parent_details()->createMany([
            [
                'name' => $this->father_name,
                'occupation' => $this->father_occupation,
                'annual_income' => $this->father_annual_income,
                'nationality' => $this->father_nationality,
                'qualification' => $this->father_qualification,
                'mobile_number' => $this->father_mobile_number,
                'email' => $this->father_email,
                'relationship' => 'father',
            ],
            [
                'name' => $this->mother_name,
                'occupation' => $this->mother_occupation,
                'annual_income' => $this->mother_annual_income,
                'nationality' => $this->mother_nationality,
                'qualification' => $this->mother_qualification,
                'mobile_number' => $this->mother_mobile_number,
                'email' => $this->mother_email,
                'relationship' => 'mother',
            ],
            [
                'name' => $this->guardian_name,
                'occupation' => $this->guardian_occupation,
                'annual_income' => $this->guardian_annual_income,
                'nationality' => $this->guardian_nationality,
                'qualification' => $this->guardian_qualification,
                'mobile_number' => $this->guardian_mobile_number,
                'email' => $this->guardian_email,
                'relationship' => 'guardian',
            ],
        ]);
    }
}
