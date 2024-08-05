<?php

namespace App\Livewire;

use App\Models\ParentDetail;
use App\Services\PaymentService;
use Livewire\Attributes\Validate;
use Livewire\Component;

class RetryPayment extends Component
{
    #[Validate('required|numeric|digits_between:10,12')]
    public $mobile_number = '';

    #[Validate('required|email')]
    public $email = '';

    public function render()
    {
        return view('livewire.retry-payment');
    }

    public function submit()
    {
        $this->validate();

        $parent = ParentDetail::where('mobile_number', $this->mobile_number)
            ->where('email', $this->email)
            ->first();

        if ($parent) {
            $payData = [
                'registration' => $parent->registration,
                'amount' => 10,
                'prod_id' => config('payment.product_id'),
                'email' => $this->email,
                'mobile' => $this->mobile_number,
            ];

            $paymentService = new PaymentService;

            $jsonData = $paymentService->processPayment($payData);
            $jsonData = json_decode($jsonData->getContent(), true);
            if (is_null($jsonData['atomTokenId'])) {
                session()->flash('status', 'Payment processing failed, please try again later.');
                $this->redirectRoute('kg');
            } else {
                $this->dispatch('payment-processed', jsonData: $jsonData);
            }
        } else {
            session()->flash('status', 'No registrations found for the provided details.');
            $this->redirectIntended('/');
        }
    }
}
