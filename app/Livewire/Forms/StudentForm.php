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

    #[Validate('required|string|max:8')]
    public $gender = '';

    #[Validate('required')]
    public $date_of_birth = '';

    #[Validate('required|numeric|max:255')]
    public $age = '';

    #[Validate('nullable|numeric|max:255')]
    public $uid = '';

    #[Validate('nullable|string|max:255')]
    public $religion = '';

    #[Validate('nullable|string|max:255')]
    public $caste = '';

    #[Validate('nullable|string|max:255')]
    public $social_category = '';

    #[Validate('nullable|string|max:255')]
    public $place_of_birth = '';

    #[Validate('nullable|string|max:255')]
    public $nationality = '';

    #[Validate('nullable|string|max:255')]
    public $mother_tongue = '';

    public function store()
    {
        $this->validate();

        return Student::create([
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'gender' => $this->gender,
            'date_of_birth' => $this->date_of_birth,
            'age' => $this->age,
            'uid' => $this->uid,
            'religion' => $this->religion,
            'caste' => $this->caste,
            'social_category' => $this->social_category,
            'place_of_birth' => $this->place_of_birth,
            'nationality' => $this->nationality,
            'mother_tongue' => $this->mother_tongue
        ]);
    }
}
