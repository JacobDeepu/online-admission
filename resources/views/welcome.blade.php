<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Admission</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com" rel="preconnect">
        <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles
    </head>

    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-300 bg-hero-bg bg-cover bg-center bg-no-repeat">
            <header class="bg-white shadow">
                <div class="bg-blue-600">
                    <div class="mx-auto max-w-screen-xl px-4 py-3">
                        <div class="flex items-center">
                            <ul class="mr-6 mt-0 flex flex-row space-x-8 text-sm font-medium">
                                <li>
                                    <a class="text-sm text-white hover:underline" href="#">Email</a>
                                </li>
                                <li>
                                    <a class="text-sm text-white hover:underline" href="#">Phone</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <nav class="bg-white">
                    <div class="mx-auto flex max-w-screen-xl flex-wrap items-center justify-between p-4">
                        <a class="flex items-center" href="/">
                            <x-application-logo class="mr-3 block h-12 w-auto" />
                        </a>
                    </div>
                </nav>
            </header>
            <main class="py-12">
                <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                    <div class="overflow-hidden bg-white shadow-xl sm:rounded-lg">
                        <div class="border-b border-gray-200 bg-white p-6 lg:p-8">
                            <h1 class="text-center text-4xl font-bold uppercase text-blue-600">
                                Registration Form
                            </h1>
                            <div x-data="{ currentTab: 1 }">
                                <div class="px-2">
                                    <ul class="-mb-px flex flex-wrap text-center text-sm font-medium text-gray-500">
                                        <li class="mr-2" @click="currentTab = 1">
                                            <button
                                                class="group inline-flex items-center justify-center rounded-t-lg border-b-2 p-4"
                                                :class="currentTab === 1 ? 'text-blue-600 border-blue-600' :
                                                    'border-transparent hover:text-gray-600 hover:border-gray-300'">
                                                <svg class="mr-2 h-6 w-6" aria-hidden="true"
                                                    :class="currentTab === 1 ? 'text-blue-600' :
                                                        'text-gray-400 group-hover:text-gray-500'"
                                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                    viewBox="0 0 256 256">
                                                    <path
                                                        d="M251.76,88.94l-120-64a8,8,0,0,0-7.52,0l-120,64a8,8,0,0,0,0,14.12L32,117.87v48.42a15.91,15.91,0,0,0,4.06,10.65C49.16,191.53,78.51,216,128,216a130,130,0,0,0,48-8.76V240a8,8,0,0,0,16,0V199.51a115.63,115.63,0,0,0,27.94-22.57A15.91,15.91,0,0,0,224,166.29V117.87l27.76-14.81a8,8,0,0,0,0-14.12ZM128,200c-43.27,0-68.72-21.14-80-33.71V126.4l76.24,40.66a8,8,0,0,0,7.52,0L176,143.47v46.34C163.4,195.69,147.52,200,128,200Zm80-33.75a97.83,97.83,0,0,1-16,14.25V134.93l16-8.53ZM188,118.94l-.22-.13-56-29.87a8,8,0,0,0-7.52,14.12L171,128l-43,22.93L25,96,128,41.07,231,96Z">
                                                    </path>
                                                </svg>Student Details
                                            </button>
                                        </li>
                                        <li class="mr-2" @click="currentTab = 2">
                                            <button
                                                class="group inline-flex items-center justify-center rounded-t-lg border-b-2 p-4"
                                                aria-current="page"
                                                :class="currentTab === 2 ? 'text-blue-600 border-blue-600' :
                                                    'border-transparent hover:text-gray-600 hover:border-gray-300'">
                                                <svg class="mr-2 h-6 w-6" aria-hidden="true"
                                                    :class="currentTab === 2 ? 'text-blue-600' :
                                                        'text-gray-400 group-hover:text-gray-500'"
                                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                    viewBox="0 0 256 256">
                                                    <path
                                                        d="M128,64a40,40,0,1,0,40,40A40,40,0,0,0,128,64Zm0,64a24,24,0,1,1,24-24A24,24,0,0,1,128,128Zm0-112a88.1,88.1,0,0,0-88,88c0,31.4,14.51,64.68,42,96.25a254.19,254.19,0,0,0,41.45,38.3,8,8,0,0,0,9.18,0A254.19,254.19,0,0,0,174,200.25c27.45-31.57,42-64.85,42-96.25A88.1,88.1,0,0,0,128,16Zm0,206c-16.53-13-72-60.75-72-118a72,72,0,0,1,144,0C200,161.23,144.53,209,128,222Z">
                                                    </path>
                                                </svg>Address
                                            </button>
                                        </li>
                                        <li class="mr-2" @click="currentTab = 3">
                                            <button
                                                class="group inline-flex items-center justify-center rounded-t-lg border-b-2 p-4"
                                                aria-current="page"
                                                :class="currentTab === 3 ? 'text-blue-600 border-blue-600' :
                                                    'border-transparent hover:text-gray-600 hover:border-gray-300'">
                                                <svg class="mr-2 h-6 w-6" aria-hidden="true"
                                                    :class="currentTab === 3 ? 'text-blue-600' :
                                                        'text-gray-400 group-hover:text-gray-500'"
                                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                    viewBox="0 0 256 256">
                                                    <path
                                                        d="M244.8,150.4a8,8,0,0,1-11.2-1.6A51.6,51.6,0,0,0,192,128a8,8,0,0,1-7.37-4.89,8,8,0,0,1,0-6.22A8,8,0,0,1,192,112a24,24,0,1,0-23.24-30,8,8,0,1,1-15.5-4A40,40,0,1,1,219,117.51a67.94,67.94,0,0,1,27.43,21.68A8,8,0,0,1,244.8,150.4ZM190.92,212a8,8,0,1,1-13.84,8,57,57,0,0,0-98.16,0,8,8,0,1,1-13.84-8,72.06,72.06,0,0,1,33.74-29.92,48,48,0,1,1,58.36,0A72.06,72.06,0,0,1,190.92,212ZM128,176a32,32,0,1,0-32-32A32,32,0,0,0,128,176ZM72,120a8,8,0,0,0-8-8A24,24,0,1,1,87.24,82a8,8,0,1,0,15.5-4A40,40,0,1,0,37,117.51,67.94,67.94,0,0,0,9.6,139.19a8,8,0,1,0,12.8,9.61A51.6,51.6,0,0,1,64,128,8,8,0,0,0,72,120Z">
                                                    </path>
                                                </svg>Parent Details
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                                <x-validation-errors class="mb-4" />

                                @if (session('status'))
                                    <div class="mb-4 text-sm font-medium text-green-600">
                                        {{ session('status') }}
                                    </div>
                                @endif

                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="rounded-lg border-2 border-gray-200 p-5">
                                        <div class="grid gap-2 sm:grid-cols-3" x-show="currentTab === 1">
                                            <div class="mt-0">
                                                <x-label for="first_name" value="{{ __('First Name') }}" />
                                                <x-input class="mt-1 block w-full" id="first_name" name="first_name"
                                                    type="text" :value="old('first_name')" required autofocus />
                                            </div>
                                            <div class="mt-0">
                                                <x-label for="last_name" value="{{ __('Last Name') }}" />
                                                <x-input class="mt-1 block w-full" id="last_name" name="last_name"
                                                    type="text" :value="old('last_name')" required autofocus />
                                            </div>
                                            <div class="mt-0">
                                                <x-label for="gender" value="{{ __('Gender') }}" />
                                                <x-input class="mt-1 block w-full" id="gender" name="gender"
                                                    type="text" :value="old('gender')" required autofocus />
                                            </div>
                                            <div class="mt-4">
                                                <x-label for="class"
                                                    value="{{ __('Class to which admission is sought for') }}" />
                                                <x-input class="mt-1 block w-full" id="class" name="class"
                                                    type="text" :value="old('class')" required autofocus />
                                            </div>
                                            <div class="mt-4">
                                                <x-label for="academic_year" value="{{ __('Academic Year') }}" />
                                                <x-input class="mt-1 block w-full" id="academic_year"
                                                    name="academic_year" type="text" :value="old('academic_year')" required
                                                    autofocus />
                                            </div>
                                            <div class="mt-4">
                                                <x-label for="nationality" value="{{ __('Nationality') }}" />
                                                <x-input class="mt-1 block w-full" id="nationality"
                                                    name="nationality" type="text" :value="old('nationality')" required
                                                    autofocus />
                                            </div>
                                            <div class="mt-4">
                                                <x-label for="date_of_birth"
                                                    value="{{ __('Date Of Birth In Figure') }}" />
                                                <x-input class="mt-1 block w-full" id="date_of_birth"
                                                    name="date_of_birth" type="date" :value="old('date_of_birth')" required
                                                    autofocus />
                                            </div>
                                            <div class="mt-4">
                                                <x-label for="date_of_birth_word"
                                                    value="{{ __('Date Of Birth In Words') }}" />
                                                <x-input class="mt-1 block w-full" id="date_of_birth_word"
                                                    name="date_of_birth_word" type="text" :value="old('date_of_birth_word')"
                                                    required autofocus />
                                            </div>
                                            <div class="mt-4">
                                                <x-label for="place_of_birth"
                                                    value="{{ __('Place Of Birth With State') }}" />
                                                <x-input class="mt-1 block w-full" id="place_of_birth"
                                                    name="place_of_birth" type="text" :value="old('place_of_birth')" required
                                                    autofocus />
                                            </div>
                                            <div class="mt-4">
                                                <x-label for="religion" value="{{ __('Religion') }}" />
                                                <x-input class="mt-1 block w-full" id="religion" name="religion"
                                                    type="text" :value="old('religion')" required autofocus />
                                            </div>
                                            <div class="mt-4">
                                                <x-label for="caste" value="{{ __('Caste') }}" />
                                                <x-input class="mt-1 block w-full" id="caste" name="caste"
                                                    type="text" :value="old('caste')" required autofocus />
                                            </div>
                                            <div class="mt-4">
                                                <x-label for="social_category" value="{{ __('Social Category') }}" />
                                                <x-input class="mt-1 block w-full" id="social_category"
                                                    name="social_category" type="text" :value="old('social_category')" required
                                                    autofocus />
                                            </div>
                                            <div class="mt-4">
                                                <x-label for="mother_tongue" value="{{ __('Mother Tongue') }}" />
                                                <x-input class="mt-1 block w-full" id="mother_tongue"
                                                    name="mother_tongue" type="text" :value="old('mother_tongue')" required
                                                    autofocus />
                                            </div>
                                            <div class="mt-4">
                                                <x-label for="previous_institution"
                                                    value="{{ __('Previous Institution') }}" />
                                                <x-input class="mt-1 block w-full" id="previous_institution"
                                                    name="previous_institution" type="text" :value="old('previous_institution')"
                                                    required autofocus disabled />
                                            </div>
                                            <div class="mt-4">
                                                <x-label for="siblings" value="{{ __('Siblings') }}" />
                                                <x-input class="mt-1 block w-full" id="siblings" name="siblings"
                                                    type="text" :value="old('siblings')" required autofocus disabled />
                                            </div>
                                        </div>
                                        <div class="grid gap-2 sm:grid-cols-2" x-show="currentTab === 2">
                                            <div class="rounded border border-sky-500 p-2">
                                                <div class="grid gap-2 sm:grid-cols-2">
                                                    <div class="mt-0 sm:col-span-2">
                                                        <x-label for="address"
                                                            value="{{ __('Address of Parent(House / Flat No)') }}" />
                                                        <x-input class="mt-1 block w-full" id="address"
                                                            name="address" type="text" :value="old('address')" required
                                                            autofocus />
                                                    </div>
                                                    <div class="mt-4">
                                                        <x-label for="road" value="{{ __('Road') }}" />
                                                        <x-input class="mt-1 block w-full" id="road"
                                                            name="road" type="text" :value="old('road')" required
                                                            autofocus />
                                                    </div>
                                                    <div class="mt-4">
                                                        <x-label for="street" value="{{ __('Street') }}" />
                                                        <x-input class="mt-1 block w-full" id="street"
                                                            name="street" type="text" :value="old('street')" required
                                                            autofocus />
                                                    </div>
                                                    <div class="mt-4">
                                                        <x-label for="area" value="{{ __('Area') }}" />
                                                        <x-input class="mt-1 block w-full" id="area"
                                                            name="area" type="text" :value="old('area')" required
                                                            autofocus />
                                                    </div>
                                                    <div class="mt-4">
                                                        <x-label for="city" value="{{ __('City') }}" />
                                                        <x-input class="mt-1 block w-full" id="city"
                                                            name="city" type="text" :value="old('city')" required
                                                            autofocus />
                                                    </div>
                                                    <div class="mt-4">
                                                        <x-label for="post_office" value="{{ __('Post Office') }}" />
                                                        <x-input class="mt-1 block w-full" id="post_office"
                                                            name="post_office" type="text" :value="old('post_office')"
                                                            required autofocus />
                                                    </div>
                                                    <div class="mt-4">
                                                        <x-label for="pincode" value="{{ __('Pincode') }}" />
                                                        <x-input class="mt-1 block w-full" id="pincode"
                                                            name="pincode" type="text" :value="old('pincode')" required
                                                            autofocus />
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="rounded border border-sky-500 p-2">
                                                <div class="grid gap-2 sm:grid-cols-2">
                                                    <div class="mt-0 sm:col-span-2">
                                                        <x-label for="permanent_address"
                                                            value="{{ __('Address of Parent(House / Flat No)') }}" />
                                                        <x-input class="mt-1 block w-full" id="permanent_address"
                                                            name="permanent_address" type="text" :value="old('permanent_address')"
                                                            required autofocus />
                                                    </div>
                                                    <div class="mt-4">
                                                        <x-label for="permanent_road" value="{{ __('Road') }}" />
                                                        <x-input class="mt-1 block w-full" id="permanent_road"
                                                            name="permanent_road" type="text" :value="old('permanent_road')"
                                                            required autofocus />
                                                    </div>
                                                    <div class="mt-4">
                                                        <x-label for="permanent_street"
                                                            value="{{ __('Street') }}" />
                                                        <x-input class="mt-1 block w-full" id="permanent_street"
                                                            name="permanent_street" type="text" :value="old('permanent_street')"
                                                            required autofocus />
                                                    </div>
                                                    <div class="mt-4">
                                                        <x-label for="permanent_area" value="{{ __('Area') }}" />
                                                        <x-input class="mt-1 block w-full" id="permanent_area"
                                                            name="permanent_area" type="text" :value="old('permanent_area')"
                                                            required autofocus />
                                                    </div>
                                                    <div class="mt-4">
                                                        <x-label for="permanent_city" value="{{ __('City') }}" />
                                                        <x-input class="mt-1 block w-full" id="permanent_city"
                                                            name="permanent_city" type="text" :value="old('permanent_city')"
                                                            required autofocus />
                                                    </div>
                                                    <div class="mt-4">
                                                        <x-label for="permanent_post_office"
                                                            value="{{ __('Post Office') }}" />
                                                        <x-input class="mt-1 block w-full" id="permanent_post_office"
                                                            name="permanent_post_office" type="text"
                                                            :value="old('permanent_post_office')" required autofocus />
                                                    </div>
                                                    <div class="mt-4">
                                                        <x-label for="permanent_pincode"
                                                            value="{{ __('Pincode') }}" />
                                                        <x-input class="mt-1 block w-full" id="permanent_pincode"
                                                            name="permanent_pincode" type="text" :value="old('permanent_pincode')"
                                                            required autofocus />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="grid gap-2 sm:grid-cols-2" x-show="currentTab === 3">
                                            @for ($i = 0; $i < 2; $i++)
                                                <div class="rounded border border-sky-500 p-2">
                                                    <div class="{{ $i }} grid gap-2 sm:grid-cols-2">
                                                        <div class="mt-0 sm:col-span-2">
                                                            <x-label for="parent_name" value="{{ __('Name') }}" />
                                                            <x-input class="mt-1 block w-full" id="parent_name"
                                                                name="parent_name" type="text" :value="old('parent_name')"
                                                                required autofocus />
                                                        </div>
                                                        <div class="mt-4">
                                                            <x-label for="occupation"
                                                                value="{{ __('Occupation') }}" />
                                                            <x-input class="mt-1 block w-full" id="occupation"
                                                                name="occupation" type="text" :value="old('occupation')"
                                                                required autofocus />
                                                        </div>
                                                        <div class="mt-4">
                                                            <x-label for="annual_income"
                                                                value="{{ __('Annual Income') }}" />
                                                            <x-input class="mt-1 block w-full" id="annual_income"
                                                                name="annual_income" type="text" :value="old('annual_income')"
                                                                required autofocus />
                                                        </div>
                                                        <div class="mt-4">
                                                            <x-label for="mobile_number"
                                                                value="{{ __('Mobile Number') }}" />
                                                            <x-input class="mt-1 block w-full" id="mobile_number"
                                                                name="mobile_number" type="text" :value="old('mobile_number')"
                                                                required autofocus />
                                                        </div>
                                                        <div class="mt-4">
                                                            <x-label for="email" value="{{ __('Email Id') }}" />
                                                            <x-input class="mt-1 block w-full" id="email"
                                                                name="email" type="email" :value="old('email')"
                                                                required autofocus />
                                                        </div>
                                                        <div class="mt-4">
                                                            <x-label for="office_number"
                                                                value="{{ __('Office Number') }}" />
                                                            <x-input class="mt-1 block w-full" id="office_number"
                                                                name="office_number" type="text" :value="old('office_number')"
                                                                required autofocus />
                                                        </div>
                                                        <div class="mt-4">
                                                            <x-label for="office_address"
                                                                value="{{ __('Office Address') }}" />
                                                            <x-input class="mt-1 block w-full" id="office_address"
                                                                name="office_address" type="text"
                                                                :value="old('office_address')" required autofocus />
                                                        </div>
                                                    </div>
                                                </div>
                                            @endfor
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </body>
</html>
