<div class="jetstream-modal fixed inset-0 z-50 overflow-y-auto px-4 py-6 sm:px-0" style="display: none;" x-on:close.stop="retryPaymentModelOpen = false"
    x-on:keydown.escape.window="retryPaymentModelOpen = false" x-show="retryPaymentModelOpen">
    <div class="fixed inset-0 transform transition-all" x-show="retryPaymentModelOpen" x-on:click="retryPaymentModelOpen = false" x-transition:enter="ease-out duration-300"
        x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0">
        <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
    </div>
    <div class="mb-6 transform overflow-hidden rounded-lg bg-white shadow-xl transition-all sm:mx-auto sm:w-full sm:max-w-xl" x-show="retryPaymentModelOpen"
        x-trap.inert.noscroll="retryPaymentModelOpen" x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
        x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100" x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
        x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95">
        <form wire:submit="submit">
            <div class="flex flex-col justify-center text-center">
                <div class="p-6">
                    <h2 class="text-base font-semibold text-gray-900 lg:text-xl">
                        Retry Payment
                    </h2>
                </div>
                <div class="px-6">
                    <h3 class="font-medium text-red-600">Please enter the father's email and mobile number to retry the payment.</h3>
                    <div class="mt-4">
                        <x-input-float-label class="block w-full" name="mobile_number" type="text" wire:model="mobile_number" label="{{ __('Mobile Number') }}" @mouseenter="addFocus" required
                            autofocus />
                    </div>
                    <div class="mt-4">
                        <x-input-float-label class="block w-full" name="email" type="email" wire:model="email" label="{{ __('Email Id') }}" @mouseenter="addFocus" required autofocus />
                    </div>
                </div>
            </div>
            <div class="flex justify-end p-6">
                <x-button class="ml-4">
                    {{ __('Submit') }}
                </x-button>
            </div>
        </form>
        
    </div>
</div>
