<?php

namespace App\Livewire;

use App\Http\Controllers\PaymentController;
use App\Livewire\Forms\ContactForm;
use App\Livewire\Forms\ParentDetailsForm;
use App\Livewire\Forms\RegistrationForm;
use App\Livewire\Forms\StudentForm;
use App\Models\Documents;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;

class KgRegistration extends Component
{
    use WithFileUploads;

    public StudentForm $studentForm;
    public ContactForm $contactForm;
    public ParentDetailsForm $parentDetailsForm;
    public RegistrationForm $registrationForm;

    public $current_tab = 1;
    public $is_submitted = false;

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
    public $address_proof;

    #[Validate('required|mimes:pdf,jpg,png,jpeg|max:1024')]
    public $immunization;

    public function render()
    {
        return view('livewire.kg-registration-form');
    }

    public function updatedStudentFormDateOfBirth()
    {
        $dob = date_create($this->studentForm->date_of_birth);
        $limit = date_create("2024-06-01");
        $age = date_diff($dob, $limit);
        $this->studentForm->age = $age->format('%y');
    }

    public function updatedContactFormSameAs()
    {
        if ($this->contactForm->same_as) {
            $this->contactForm->permanent_house_name = $this->contactForm->house_name;
            $this->contactForm->permanent_street = $this->contactForm->street;
            $this->contactForm->permanent_post_office = $this->contactForm->post_office;
            $this->contactForm->permanent_pin_code = $this->contactForm->pin_code;
            $this->contactForm->permanent_city = $this->contactForm->city;
            $this->contactForm->permanent_district = $this->contactForm->district;
            $this->contactForm->permanent_state = $this->contactForm->state;
        }
    }

    public function validateData()
    {
        $this->resetErrorBag();
        if ($this->current_tab == 1) {
            $this->studentForm->validate();
        } elseif ($this->current_tab == 2) {
            $this->contactForm->validate();
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

        $this->validate();

        $student = $this->studentForm->store();

        $contact = $this->contactForm->store();

        $parentDetails = $this->parentDetailsForm->store($student);

        $registration = $this->registrationForm->store($student->id, $contact->id);

        $this->registration_id = $registration->id;

        Documents::create([
            'registration_id' => $this->registration_id,
            'photo' => $this->photo->store('uploads/photos', 'public'),
            'birth_certificate' => $this->birth_certificate->store('uploads/birth-certificates', 'public'),
            'aadhaar' => $this->aadhaar->store('uploads/aadhaar-cards', 'public'),
            'address_proof' => $this->address_proof->store('uploads/address-proofs', 'public'),
            'immunization' => $this->immunization->store('uploads/immunization-certs', 'public')
        ]);

        $this->payment();

        $this->is_submitted = true;
    }
}
