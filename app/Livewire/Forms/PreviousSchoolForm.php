<?php

namespace App\Livewire\Forms;

use App\Models\PreviousSchool;
use Livewire\Attributes\Validate;
use Livewire\Form;

class PreviousSchoolForm extends Form
{
    #[Validate('nullable|string|max:255')]
    public $institution = '';

    #[Validate('nullable|string|max:255')]
    public $city = '';

    #[Validate('nullable|string|max:255')]
    public $year = '';

    #[Validate('nullable|string|max:255')]
    public $previous_class = '';

    #[Validate('nullable|string|max:255')]
    public $syllabus = '';

    #[Validate('nullable|string|max:255')]
    public $reason = '';

    public function store($registration_id)
    {
        $this->validate();

        PreviousSchool::create([
            'registration_id' => $registration_id,
            'name' => $this->institution,
            'city' => $this->city,
            'year' => $this->year,
            'class' => $this->previous_class,
            'syllabus' => $this->syllabus,
            'reason' => $this->reason
        ]);
    }
}
