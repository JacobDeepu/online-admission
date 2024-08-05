<?php

namespace App\Livewire;

use App\Livewire\Forms\ContactForm;
use App\Livewire\Forms\ParentDetailsForm;
use App\Livewire\Forms\PreviousSchoolForm;
use App\Livewire\Forms\RegistrationForm;
use App\Livewire\Forms\StudentForm;
use App\Services\PaymentService;
use Illuminate\Support\Facades\DB;
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
    public $registration;

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

    public function payment()
    {
        $payData = [
            'registration' => $this->registration,
            'amount' => 10,
            'prod_id' => config('payment.product_id'),
            'email' => $this->parentDetailsForm->father_email,
            'mobile' => $this->parentDetailsForm->father_mobile_number,
        ];

        $paymentService = new PaymentService;

        $jsonData = $paymentService->processPayment($payData);
        $jsonData = json_decode($jsonData->getContent(), true);
        if (is_null($jsonData['atomTokenId'])) {
            session()->flash('status', 'Payment processing failed, please try again later.');
            $this->redirectRoute('hs');
        } else {
            $this->dispatch('payment-processed', jsonData: $jsonData);
        }
    }

    public function register()
    {
        $this->resetErrorBag();

        $this->validate();

        DB::transaction(function () {
            $student = $this->student_form->store();
            $contact = $this->contact_form->store();
            $parentDetails = $this->parentDetailsForm->store($student);
            $registration = $this->registrationForm->store($student->id, $contact->id, 2);

            $this->registration = $registration;

            $this->previous_school->store($this->registration);

            $registration->document()->create([
                'registration_id' => $this->registration_id,
                'photo' => $this->photo->store('uploads/photos', 'public'),
                'birth_certificate' => $this->birth_certificate->store('uploads/birth-certificates', 'public'),
                'aadhaar' => $this->aadhaar->store('uploads/aadhaar-cards', 'public'),
                'immunization' => $this->immunization->store('uploads/immunization-certs', 'public'),
                'tc' => $this->tc ? $this->tc->store('uploads/tc', 'public') : '',
                'mark_list' => $this->mark_list ? $this->mark_list->store('uploads/marklist', 'public') : '',
            ]);

            $registration->transaction()->create(['status' => 0]);
        });
        $this->is_submitted = true;
        $this->payment();
    }
}
