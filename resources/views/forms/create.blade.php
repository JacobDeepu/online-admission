<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Forms') }}
        </h2>
    </x-slot>

    <div class="mx-auto max-w-7xl py-10 sm:px-6 lg:px-8">
        <div class="relative overflow-hidden bg-white shadow-md sm:rounded-lg">
            <div class="p-6">
                <form method="POST" action="{{ route('forms.store') }}">
                    @csrf
                    <div>
                        <x-label for="form_name" value="{{ __('Name') }}" />
                        <x-input class="mt-1 block w-full" id="form_name" name="form_name" type="text" :value="old('form_name')" required autofocus />
                    </div>
                    <div>
                        <x-label for="description" value="{{ __('Description') }}" />
                        <x-input class="mt-1 block w-full" id="description" name="description" type="text" :value="old('description')" />
                    </div>
                    <div class="mt-4 flex">
                        <x-button>
                            {{ __('Save') }}
                        </x-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
