<?php

namespace App\Livewire;

use App\Http\Controllers\PaymentController;
use App\Models\Contact;
use App\Models\Registration;
use App\Models\Student;
use Livewire\Component;
use Livewire\WithFileUploads;

class RegistrationForm extends Component
{
    use WithFileUploads;
    public $current_tab = 1;
    public $is_submitted = false;
    // Student
    public $first_name;
    public $last_name;
    public $gender;
    public $date_of_birth;
    public $age;
    public $uid;
    public $religion;
    public $caste;
    public $social_category;
    public $place_of_birth;
    public $nationality;
    public $mother_tongue;
    //Contact
    public $primary_number;
    public $secondary_number;
    public $house_name;
    public $street;
    public $post_office;
    public $pin_code;
    public $city;
    public $district;
    public $state;
    public $permanent_house_name;
    public $permanent_street;
    public $permanent_post_office;
    public $permanent_pin_code;
    public $permanent_city;
    public $permanent_district;
    public $permanent_state;
    public $same_as;
    // Parent Details
    public $father_name;
    public $father_occupation;
    public $father_annual_income;
    public $father_office_address;
    public $father_office_number;
    public $father_mobile_number;
    public $father_email;
    public $mother_name;
    public $mother_occupation;
    public $mother_annual_income;
    public $mother_office_address;
    public $mother_office_number;
    public $mother_mobile_number;
    public $mother_email;
    // Registration
    public $class;
    public $academic_year;
    public $previous_institution;
    public $photo;
    public $birth_certificate;
    public $aadhaar;
    public $address_proof;
    public $immunization;
    public $siblings;
    public $registration_id;

    public function render()
    {
        return view('livewire.registration-form');
    }

    public function updatedSameAs()
    {
        if ($this->same_as) {
            $this->permanent_house_name = $this->house_name;
            $this->permanent_street = $this->street;
            $this->permanent_post_office = $this->post_office;
            $this->permanent_pin_code = $this->pin_code;
            $this->permanent_city = $this->city;
            $this->permanent_district = $this->district;
            $this->permanent_state = $this->state;
        }
    }

    public function updatedDateOfBirth()
    {
        $dob = date_create($this->date_of_birth);
        $limit = date_create("2024-06-01");
        $age = date_diff($dob, $limit);
        $this->age = $age->format('%y');;
    }

    public function validate_data()
    {
        $this->resetErrorBag();
        if ($this->current_tab == 1) {
            $this->validate_student();
        } elseif ($this->current_tab == 2) {
            $this->validate_contact();
        } elseif ($this->current_tab == 3) {
            $this->validate_parent_details();
        }
        $this->current_tab++;
    }

    public function validate_student()
    {
        $this->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'gender' => 'nullable|string|max:8',
            'date_of_birth' => 'required',
            'age' => 'required|numeric|max:255',
            'uid' => 'nullable|numeric',
            'religion' => 'nullable|string|max:255',
            'caste' => 'nullable|string|max:255',
            'social_category' => 'nullable|string|max:255',
            'place_of_birth' => 'nullable|string|max:255',
            'nationality' => 'nullable|string|max:255',
            'mother_tongue' => 'nullable|string|max:255'
        ]);
    }

    public function validate_contact()
    {
        $this->validate([
            'primary_number' => 'required|numeric',
            'secondary_number' => 'nullable|numeric',
            'house_name' => 'nullable|string|max:255',
            'street' => 'nullable|string|max:255',
            'post_office' => 'nullable|string|max:255',
            'pin_code' => 'nullable|numeric|digits:6',
            'city' => 'nullable|string|max:255',
            'district' => 'nullable|string|max:255',
            'state' => 'nullable|string|max:255',
            'permanent_house_name' => 'nullable|string|max:255',
            'permanent_street' => 'nullable|string|max:255',
            'permanent_post_office' => 'nullable|string|max:255',
            'permanent_pin_code' => 'nullable|numeric|digits:6',
            'permanent_city' => 'nullable|string|max:255',
            'permanent_district' => 'nullable|string|max:255',
            'permanent_state' => 'nullable|string|max:255'
        ]);
    }

    public function validate_parent_details()
    {
        $this->validate([
            'father_name' => 'required|string|max:255',
            'father_occupation' => 'nullable|string|max:255',
            'father_annual_income' => 'nullable|string|max:255',
            'father_office_address' => 'nullable|string|max:255',
            'father_office_number' => 'nullable|numeric',
            'father_mobile_number' => 'required|numeric',
            'father_email' => 'required|email',
            'mother_name' => 'required|string|max:255',
            'mother_occupation' => 'nullable|string|max:255',
            'mother_annual_income' => 'nullable|string|max:255',
            'mother_office_address' => 'nullable|string|max:255',
            'mother_office_number' => 'nullable|numeric',
            'mother_mobile_number' => 'nullable|numeric',
            'mother_email' => 'nullable|email'
        ]);
    }

    public function generatePayData()
    {
        $amount = 20.00;
        $payment = new PaymentController();
        $pay_data = $payment->setPayData($amount, $this->father_email, $this->primary_number, $this->registration_id);
        return $pay_data;
    }

    public function payment()
    {
        $data = $this->generatePayData();
        $json_data = '{
            "atomTokenId": "' . $data['token'] . '",
            "merchId": "' . $data['login'] . '",
            "custEmail": "' . $this->father_email . '",
            "custMobile": "' . $this->primary_number . '",
            "returnUrl": "' . $data['url'] . '"
        }';
        $this->js('let atom = new AtomPaynetz(' . $json_data . ', "uat");');
    }

    public function register()
    {
        $this->resetErrorBag();
        $this->validate_student();
        $this->validate_contact();
        $this->validate_parent_details();

        $this->validate([
            'class' => 'nullable|string|max:255',
            'academic_year' => 'nullable|string|max:255',
            'previous_institution' => 'nullable|string|max:255',
            'photo' => 'required|mimes:pdf,jpg,png,jpeg|max:1024',
            'birth_certificate' => 'required|mimes:pdf,jpg,png,jpeg|max:1024',
            'aadhaar' => 'required|mimes:pdf,jpg,png,jpeg|max:1024',
            'address_proof' => 'required|mimes:pdf,jpg,png,jpeg|max:1024',
            'immunization' => 'required|mimes:pdf,jpg,png,jpeg|max:1024',
            'siblings' => 'nullable|string|max:255'
        ]);

        $student = Student::create([
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

        $contact = Contact::create([
            'primary_number' => $this->primary_number,
            'secondary_number' => $this->secondary_number,
            'house_name' => $this->house_name,
            'street' => $this->street,
            'post_office' => $this->post_office,
            'pin_code' => $this->pin_code,
            'city' => $this->city,
            'district' => $this->district,
            'state' => $this->state,
            'permanent_house_name' => $this->permanent_house_name,
            'permanent_street' => $this->permanent_street,
            'permanent_post_office' => $this->permanent_post_office,
            'permanent_pin_code' => $this->permanent_pin_code,
            'permanent_city' => $this->permanent_city,
            'permanent_district' => $this->permanent_district,
            'permanent_state' => $this->permanent_state

        ]);

        $student->parent_details()->createMany([
            [
                'name' => $this->father_name,
                'occupation' => $this->father_occupation,
                'annual_income' => $this->father_annual_income,
                'office_address' => $this->father_office_address,
                'office_number' => $this->father_office_number,
                'mobile_number' => $this->father_mobile_number,
                'email' => $this->father_email,
                'relationship' => 'father'
            ],
            [
                'name' => $this->mother_name,
                'occupation' => $this->mother_occupation,
                'annual_income' => $this->mother_annual_income,
                'office_address' => $this->mother_office_address,
                'office_number' => $this->mother_office_number,
                'mobile_number' => $this->mother_mobile_number,
                'email' => $this->mother_email,
                'relationship' => 'mother'
            ]
        ]);

        $registration = Registration::create([
            'student_id' => $student->id,
            'contact_id' => $contact->id,
            'class' => $this->class,
            'academic_year' => $this->academic_year,
            'previous_institution' => $this->previous_institution,
            'photo' => $this->photo->store('uploads/photos', 'public'),
            'birth_certificate' => $this->birth_certificate->store('uploads/birth-certificates', 'public'),
            'aadhaar' => $this->aadhaar->store('uploads/aadhaar-cards', 'public'),
            'address_proof' => $this->address_proof->store('uploads/address-proofs', 'public'),
            'immunization' => $this->immunization->store('uploads/immunization-certs', 'public'),
            'siblings' => $this->siblings,
            'status' => 0
        ]);

        $this->registration_id = $registration->id;

        $this->payment();

        $this->is_submitted = true;
    }
}
