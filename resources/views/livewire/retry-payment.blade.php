<div class="jetstream-modal fixed inset-0 z-50 overflow-y-auto px-4 py-6 sm:px-0" style="display: none;" x-on:close.stop="retryPaymentModelOpen = false"
    x-on:keydown.escape.window="retryPaymentModelOpen = false" x-show="retryPaymentModelOpen" @payment-processed="handlePaymentToken($event.detail.jsonData)">
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
            <div class="fixed bottom-0 left-0 right-0 top-0 z-50 h-screen w-full flex-col items-center justify-center overflow-hidden bg-gray-700 opacity-75" wire:loading.flex>
                <svg class="mr-2 inline h-24 w-24 animate-spin fill-blue-600 text-center text-gray-200" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256">
                    <path
                        d="M136,32V64a8,8,0,0,1-16,0V32a8,8,0,0,1,16,0Zm88,88H192a8,8,0,0,0,0,16h32a8,8,0,0,0,0-16Zm-45.09,47.6a8,8,0,0,0-11.31,11.31l22.62,22.63a8,8,0,0,0,11.32-11.32ZM128,184a8,8,0,0,0-8,8v32a8,8,0,0,0,16,0V192A8,8,0,0,0,128,184ZM77.09,167.6,54.46,190.22a8,8,0,0,0,11.32,11.32L88.4,178.91A8,8,0,0,0,77.09,167.6ZM72,128a8,8,0,0,0-8-8H32a8,8,0,0,0,0,16H64A8,8,0,0,0,72,128ZM65.78,54.46A8,8,0,0,0,54.46,65.78L77.09,88.4A8,8,0,0,0,88.4,77.09Z">
                    </path>
                </svg>
            </div>
        </form>
    </div>
</div>
