<?php

namespace App\Livewire\Forms;

use App\Models\Student;
use Livewire\Attributes\Validate;
use Livewire\Form;

class StudentForm extends Form
{
    #[Validate('required|string|max:255')]
    public $first_name = '';

    #[Validate('required|string|max:255')]
    public $last_name = '';

    #[Validate('required|string|max:20')]
    public $gender = '';

    #[Validate('required')]
    public $date_of_birth = '';

    #[Validate('nullable|string|max:20')]
    public $religion = '';

    #[Validate('nullable|string|max:255')]
    public $caste = '';

    #[Validate('nullable|string|max:20')]
    public $social_category = '';

    #[Validate('nullable|numeric')]
    public $uid = '';

    #[Validate('nullable|string|max:10')]
    public $blood_group = '';

    #[Validate('required|string|max:5')]
    public $disability = 'No';

    #[Validate('nullable|string|max:255')]
    public $disability_details = '';

    public function store()
    {
        $this->validate();

        return Student::create([
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'gender' => $this->gender,
            'date_of_birth' => $this->date_of_birth,
            'religion' => $this->religion,
            'caste' => $this->caste,
            'social_category' => $this->social_category,
            'uid' => $this->uid,
            'blood_group' => $this->blood_group,
            'disability' => $this->disability,
            'disability_details' => $this->disability_details,
        ]);
    }
}
