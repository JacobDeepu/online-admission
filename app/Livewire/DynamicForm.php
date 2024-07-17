<?php

namespace App\Livewire;

use App\Models\Form;
use App\Models\FormResponse;
use App\Models\ResponseValue;
use Livewire\Component;

class DynamicForm extends Component
{
    public $form;
    public $currentStep = 0;
    public $responses = [];

    public function mount()
    {
        $this->form = Form::with('categories.fields')->findOrFail(1);
    }

    public function nextStep()
    {
        $this->currentStep++;
    }

    public function previousStep()
    {
        $this->currentStep--;
    }

    public function submitForm()
    {
        $formResponse = FormResponse::create(['form_id' => $this->form->id, 'submitted_at' => now()]);

        foreach ($this->responses as $fieldId => $value) {
            ResponseValue::create(['response_id' => $formResponse->id, 'field_id' => $fieldId, 'field_value' => $value]);
        }

        // session()->flash('message', 'Form submitted successfully.');
        return redirect()->route('form.submitted');
    }

    public function render()
    {
        return view('livewire.dynamic-form');
    }
}
