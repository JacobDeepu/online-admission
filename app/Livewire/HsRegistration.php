<?php

namespace App\Livewire;

use App\Http\Controllers\PaymentController;
use App\Livewire\Forms\ContactForm;
use App\Livewire\Forms\ParentDetailsForm;
use App\Livewire\Forms\PreviousSchoolForm;
use App\Livewire\Forms\RegistrationForm;
use App\Livewire\Forms\StudentForm;
use App\Models\Documents;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;

class HsRegistration extends Component
{
    use WithFileUploads;

    public StudentForm $student_form;
    public ContactForm $contact_form;
    public ParentDetailsForm $parentDetailsForm;
    public RegistrationForm $registrationForm;
    public PreviousSchoolForm $previous_school;

    public $current_tab = 1;
    public $is_submitted = false;
    public $is_disabled = false;

    // Registration
    public $registration_id;

    //Documents
    #[Validate('required|mimes:pdf,jpg,png,jpeg|max:1024')]
    public $photo;

    #[Validate('required|mimes:pdf,jpg,png,jpeg|max:1024')]
    public $birth_certificate;

    #[Validate('required|mimes:pdf,jpg,png,jpeg|max:1024')]
    public $aadhaar;

    #[Validate('required|mimes:pdf,jpg,png,jpeg|max:1024')]
    public $immunization;

    #[Validate('nullable|mimes:pdf,jpg,png,jpeg|max:1024')]
    public $tc;

    #[Validate('nullable|mimes:pdf,jpg,png,jpeg|max:1024')]
    public $mark_list;

    public function render()
    {
        return view('livewire.hs-registration');
    }

    public function updatedContactFormSameAs()
    {
        if ($this->contact_form->same_as) {
            $this->contact_form->permanent_house_name = $this->contact_form->house_name;
            $this->contact_form->permanent_street = $this->contact_form->street;
            $this->contact_form->permanent_post_office = $this->contact_form->post_office;
            $this->contact_form->permanent_pin_code = $this->contact_form->pin_code;
            $this->contact_form->permanent_city = $this->contact_form->city;
            $this->contact_form->permanent_district = $this->contact_form->district;
            $this->contact_form->permanent_state = $this->contact_form->state;
        }
    }

    public function updatedStudentFormDisability()
    {
        $this->is_disabled = $this->student_form->disability === 'Yes' ? true : false;
    }

    public function validateData()
    {
        $this->resetErrorBag();
        if ($this->current_tab == 1) {
            $this->student_form->validate();
        } elseif ($this->current_tab == 2) {
            $this->contact_form->validate();
        } elseif ($this->current_tab == 3) {
            $this->parentDetailsForm->validate();
        }
        $this->current_tab++;
    }

    public function generatePayData()
    {
        $amount = 20.00;
        $payment = new PaymentController();
        $pay_data = $payment->setPayData($amount, $this->parentDetailsForm->father_email, $this->parentDetailsForm->father_mobile_number, $this->registration_id);
        return $pay_data;
    }

    public function payment()
    {
        $data = $this->generatePayData();
        $json_data = '{
            "atomTokenId": "' . $data['token'] . '",
            "merchId": "' . $data['login'] . '",
            "custEmail": "' . $this->parentDetailsForm->father_email . '",
            "custMobile": "' . $this->parentDetailsForm->father_mobile_number . '",
            "returnUrl": "' . $data['url'] . '"
        }';
        $this->js('let atom = new AtomPaynetz(' . $json_data . ', "uat");');
    }

    public function register()
    {
        $this->resetErrorBag();

        $student = $this->student_form->store();

        $contact = $this->contact_form->store();

        $parentDetails = $this->parentDetailsForm->store($student);

        $registration = $this->registrationForm->store($student->id, $contact->id);

        $this->registration_id = $registration->id;

        $this->previous_school->store($this->registration_id);

        Documents::create([
            'registration_id' => $this->registration_id,
            'photo' => $this->photo->store('uploads/photos', 'public'),
            'birth_certificate' => $this->birth_certificate->store('uploads/birth-certificates', 'public'),
            'aadhaar' => $this->aadhaar->store('uploads/aadhaar-cards', 'public'),
            'immunization' => $this->immunization->store('uploads/immunization-certs', 'public'),
            'tc' => $this->tc ? $this->tc->store('uploads/tc', 'public') : '',
            'mark_list' => $this->mark_list ? $this->mark_list->store('uploads/marklist', 'public') : ''
        ]);

        $this->payment();

        $this->is_submitted = true;
    }
}
