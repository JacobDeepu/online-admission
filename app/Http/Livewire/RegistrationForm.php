<?php

namespace App\Http\Livewire;

use App\Models\Contact;
use App\Models\Registration;
use App\Models\Student;
use Livewire\Component;
use Livewire\WithFileUploads;

class RegistrationForm extends Component
{
    use WithFileUploads;
    public $current_tab = 1;
    // Student
    public $first_name;
    public $last_name;
    public $gender;
    public $date_of_birth;
    public $date_of_birth_word;
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
    public $road;
    public $street;
    public $area;
    public $city;
    public $post_office;
    public $pin_code;
    public $permanent_house_name;
    public $permanent_road;
    public $permanent_street;
    public $permanent_area;
    public $permanent_city;
    public $permanent_post_office;
    public $permanent_pin_code;
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

    public function render()
    {
        return view('livewire.registration-form');
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
            'gender' => 'required|string|max:8',
            'date_of_birth' => 'required',
            'date_of_birth_word' => 'required|max:255',
            'uid' => 'required|numeric|digits:12',
            'religion' => 'required|string|max:255',
            'caste' => 'required|string|max:255',
            'social_category' => 'required|string|max:255',
            'place_of_birth' => 'required|string|max:255',
            'nationality' => 'required|string|max:255',
            'mother_tongue' => 'required|string|max:255'
        ]);
    }

    public function validate_contact()
    {
        $this->validate([
            'primary_number' => 'required|numeric|digits:10',
            'secondary_number' => 'nullable|numeric|digits:10',
            'house_name' => 'required|string|max:255',
            'road' => 'required|string|max:255',
            'street' => 'required|string|max:255',
            'area' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'post_office' => 'required|string|max:255',
            'pin_code' => 'required|numeric|digits:6',
            'permanent_house_name' => 'required|string|max:255',
            'permanent_road' => 'required|string|max:255',
            'permanent_street' => 'required|string|max:255',
            'permanent_area' => 'required|string|max:255',
            'permanent_city' => 'required|string|max:255',
            'permanent_post_office' => 'required|string|max:255',
            'permanent_pin_code' => 'required|numeric|digits:6'
        ]);
    }

    public function validate_parent_details()
    {
        $this->validate([
            'father_name' => 'required|string|max:255',
            'father_occupation' => 'required|string|max:255',
            'father_annual_income' => 'required|string|max:255',
            'father_office_address' => 'required|string|max:255',
            'father_office_number' => 'required|numeric|digits:10',
            'father_mobile_number' => 'required|numeric|digits:10',
            'father_email' => 'required|email',
            'mother_name' => 'required|string|max:255',
            'mother_occupation' => 'required|string|max:255',
            'mother_annual_income' => 'nullable|string|max:255',
            'mother_office_address' => 'nullable|string|max:255',
            'mother_office_number' => 'nullable|numeric|digits:10',
            'mother_mobile_number' => 'required|numeric|digits:10',
            'mother_email' => 'nullable|email'
        ]);
    }

    public function register()
    {
        $this->resetErrorBag();
        $this->validate_student();
        $this->validate_contact();
        $this->validate_parent_details();

        $this->validate([
            'class' => 'required|string|max:255',
            'academic_year' => 'required|string|max:255',
            'previous_institution' => 'required|string|max:255',
            'photo' => 'required|mimes:pdf,jpg,png,jpeg|max:1024',
            'birth_certificate' => 'required|mimes:pdf,jpg,png,jpeg|max:1024',
            'aadhaar' => 'required|mimes:pdf,jpg,png,jpeg|max:1024',
            'address_proof' => 'required|mimes:pdf,jpg,png,jpeg|max:1024'
        ]);

        $student = Student::create([
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'gender' => $this->gender,
            'date_of_birth' => $this->date_of_birth,
            'date_of_birth_word' => $this->date_of_birth_word,
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
            'road' => $this->road,
            'street' => $this->street,
            'area' => $this->area,
            'city' => $this->city,
            'post_office' => $this->post_office,
            'pin_code' => $this->pin_code,
            'permanent_house_name' => $this->permanent_house_name,
            'permanent_road' => $this->permanent_road,
            'permanent_street' => $this->permanent_street,
            'permanent_area' => $this->permanent_area,
            'permanent_city' => $this->permanent_city,
            'permanent_post_office' => $this->permanent_post_office,
            'permanent_pin_code' => $this->permanent_pin_code
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

        Registration::create([
            'student_id' => $student->id,
            'contact_id' => $contact->id,
            'class' => $this->class,
            'academic_year' => $this->academic_year,
            'previous_institution' => $this->previous_institution,
            'photo' => $this->photo->store('uploads/photos'),
            'birth_certificate' => $this->birth_certificate->store('uploads/birth-certificates'),
            'aadhaar' => $this->aadhaar->store('uploads/aadhaar-cards'),
            'address_proof' => $this->address_proof->store('uploads/address-proofs')
        ]);

        return redirect('/')->with('status', 'Registration Successful!!');
    }
}
