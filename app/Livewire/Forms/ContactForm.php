<?php

namespace App\Livewire\Forms;

use App\Models\Contact;
use Livewire\Attributes\Validate;
use Livewire\Form;

class ContactForm extends Form
{
    #[Validate('required|numeric')]
    public $primary_number = '';

    #[Validate('nullable|numeric')]
    public $secondary_number = '';

    #[Validate('nullable|string|max:255')]
    public $house_name = '';

    #[Validate('nullable|string|max:255')]
    public $street = '';

    #[Validate('nullable|string|max:255')]
    public $post_office = '';

    #[Validate('nullable|string|max:255')]
    public $pin_code = '';

    #[Validate('nullable|string|max:255')]
    public $city = '';

    #[Validate('nullable|string|max:255')]
    public $district = '';

    #[Validate('nullable|string|max:255')]
    public $state = '';

    #[Validate('nullable|string|max:255')]
    public $permanent_house_name = '';

    #[Validate('nullable|string|max:255')]
    public $permanent_street = '';

    #[Validate('nullable|string|max:255')]
    public $permanent_post_office = '';

    #[Validate('nullable|string|max:255')]
    public $permanent_pin_code = '';

    #[Validate('nullable|string|max:255')]
    public $permanent_city = '';

    #[Validate('nullable|string|max:255')]
    public $permanent_district = '';

    #[Validate('nullable|string|max:255')]
    public $permanent_state = '';

    public $same_as = '';

    public function store()
    {
        $this->validate();

        return Contact::create([
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
    }
}
