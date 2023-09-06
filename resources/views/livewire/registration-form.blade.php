<div x-data="{ currentTab: @entangle('current_tab') }">
    <div class="px-2">
        <ul class="-mb-px flex flex-wrap text-center text-sm font-medium text-gray-500">
            <li class="mr-2" @click="currentTab = 1">
                <button class="group inline-flex items-center justify-center rounded-t-lg border-b-2 p-4"
                    :class="currentTab === 1 ? 'text-blue-600 border-blue-600' :
                        'border-transparent hover:text-gray-600 hover:border-gray-300'">
                    <svg class="mr-2 h-6 w-6" aria-hidden="true"
                        :class="currentTab === 1 ? 'text-blue-600' :
                            'text-gray-400 group-hover:text-gray-500'"
                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 256 256">
                        <path
                            d="M251.76,88.94l-120-64a8,8,0,0,0-7.52,0l-120,64a8,8,0,0,0,0,14.12L32,117.87v48.42a15.91,15.91,0,0,0,4.06,10.65C49.16,191.53,78.51,216,128,216a130,130,0,0,0,48-8.76V240a8,8,0,0,0,16,0V199.51a115.63,115.63,0,0,0,27.94-22.57A15.91,15.91,0,0,0,224,166.29V117.87l27.76-14.81a8,8,0,0,0,0-14.12ZM128,200c-43.27,0-68.72-21.14-80-33.71V126.4l76.24,40.66a8,8,0,0,0,7.52,0L176,143.47v46.34C163.4,195.69,147.52,200,128,200Zm80-33.75a97.83,97.83,0,0,1-16,14.25V134.93l16-8.53ZM188,118.94l-.22-.13-56-29.87a8,8,0,0,0-7.52,14.12L171,128l-43,22.93L25,96,128,41.07,231,96Z">
                        </path>
                    </svg>Student Details
                </button>
            </li>
            <li class="mr-2" @click="currentTab = 2">
                <button class="group inline-flex items-center justify-center rounded-t-lg border-b-2 p-4"
                    aria-current="page"
                    :class="currentTab === 2 ? 'text-blue-600 border-blue-600' :
                        'border-transparent hover:text-gray-600 hover:border-gray-300'">
                    <svg class="mr-2 h-6 w-6" aria-hidden="true"
                        :class="currentTab === 2 ? 'text-blue-600' :
                            'text-gray-400 group-hover:text-gray-500'"
                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 256 256">
                        <path
                            d="M128,64a40,40,0,1,0,40,40A40,40,0,0,0,128,64Zm0,64a24,24,0,1,1,24-24A24,24,0,0,1,128,128Zm0-112a88.1,88.1,0,0,0-88,88c0,31.4,14.51,64.68,42,96.25a254.19,254.19,0,0,0,41.45,38.3,8,8,0,0,0,9.18,0A254.19,254.19,0,0,0,174,200.25c27.45-31.57,42-64.85,42-96.25A88.1,88.1,0,0,0,128,16Zm0,206c-16.53-13-72-60.75-72-118a72,72,0,0,1,144,0C200,161.23,144.53,209,128,222Z">
                        </path>
                    </svg>Address
                </button>
            </li>
            <li class="mr-2" @click="currentTab = 3">
                <button class="group inline-flex items-center justify-center rounded-t-lg border-b-2 p-4"
                    aria-current="page"
                    :class="currentTab === 3 ? 'text-blue-600 border-blue-600' :
                        'border-transparent hover:text-gray-600 hover:border-gray-300'">
                    <svg class="mr-2 h-6 w-6" aria-hidden="true"
                        :class="currentTab === 3 ? 'text-blue-600' :
                            'text-gray-400 group-hover:text-gray-500'"
                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 256 256">
                        <path
                            d="M244.8,150.4a8,8,0,0,1-11.2-1.6A51.6,51.6,0,0,0,192,128a8,8,0,0,1-7.37-4.89,8,8,0,0,1,0-6.22A8,8,0,0,1,192,112a24,24,0,1,0-23.24-30,8,8,0,1,1-15.5-4A40,40,0,1,1,219,117.51a67.94,67.94,0,0,1,27.43,21.68A8,8,0,0,1,244.8,150.4ZM190.92,212a8,8,0,1,1-13.84,8,57,57,0,0,0-98.16,0,8,8,0,1,1-13.84-8,72.06,72.06,0,0,1,33.74-29.92,48,48,0,1,1,58.36,0A72.06,72.06,0,0,1,190.92,212ZM128,176a32,32,0,1,0-32-32A32,32,0,0,0,128,176ZM72,120a8,8,0,0,0-8-8A24,24,0,1,1,87.24,82a8,8,0,1,0,15.5-4A40,40,0,1,0,37,117.51,67.94,67.94,0,0,0,9.6,139.19a8,8,0,1,0,12.8,9.61A51.6,51.6,0,0,1,64,128,8,8,0,0,0,72,120Z">
                        </path>
                    </svg>Parent Details
                </button>
            </li>
            <li class="mr-2" @click="currentTab = 4">
                <button class="group inline-flex items-center justify-center rounded-t-lg border-b-2 p-4"
                    aria-current="page"
                    :class="currentTab === 4 ? 'text-blue-600 border-blue-600' :
                        'border-transparent hover:text-gray-600 hover:border-gray-300'">
                    <svg class="mr-2 h-6 w-6" aria-hidden="true"
                        :class="currentTab === 4 ? 'text-blue-600' :
                            'text-gray-400 group-hover:text-gray-500'"
                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 256 256">
                        <path
                            d="M213.66,82.34l-56-56A8,8,0,0,0,152,24H56A16,16,0,0,0,40,40V216a16,16,0,0,0,16,16H200a16,16,0,0,0,16-16V88A8,8,0,0,0,213.66,82.34ZM160,51.31,188.69,80H160ZM200,216H56V40h88V88a8,8,0,0,0,8,8h48V216Zm-42.34-77.66a8,8,0,0,1-11.32,11.32L136,139.31V184a8,8,0,0,1-16,0V139.31l-10.34,10.35a8,8,0,0,1-11.32-11.32l24-24a8,8,0,0,1,11.32,0Z">
                        </path>
                    </svg>Futher Details
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
    <form wire:submit.prevent="register">
        <div class="rounded-lg border-2 border-gray-200 p-5">
            <div class="grid gap-4 sm:grid-cols-3" x-show="currentTab === 1">
                <div class="mt-0">
                    <x-input-float-label class="block w-full" id="first_name" name="first_name" type="text"
                        label="{{ __('First Name') }}" :value="old('first_name')" required autofocus />
                </div>
                <div class="mt-0">
                    <x-input-float-label class="block w-full" id="last_name" name="last_name" type="text"
                        label="{{ __('Last Name') }}" :value="old('last_name')" required autofocus />
                </div>
                <div class="mt-0">
                    <x-select class="block w-full" id="gender" name="gender" label="{{ __('Gender') }}">
                        <option value="Male" @selected(old('gender') == 'Male')>Male</option>
                        <option value="Female" @selected(old('gender') == 'Female')>Female
                        </option>
                    </x-select>
                </div>
                <div class="mt-0">
                    <x-input-float-label class="block w-full" id="date_of_birth" name="date_of_birth" type="date"
                        label="{{ __('Date Of Birth In Figure') }}" :value="old('date_of_birth')" required autofocus />
                </div>
                <div class="mt-0">
                    <x-input-float-label class="block w-full" id="date_of_birth_word" name="date_of_birth_word"
                        type="text" label="{{ __('Date Of Birth In Words') }}" :value="old('date_of_birth_word')" required
                        autofocus />
                </div>
                <div class="mt-0">
                    <x-input-float-label class="block w-full" id="uid" name="uid" type="text"
                        label="{{ __('Aadhaar') }}" :value="old('uid')" required autofocus />
                </div>
                <div class="mt-0">
                    <x-input-float-label class="block w-full" id="religion" name="religion" type="text"
                        label="{{ __('Religion') }}" :value="old('religion')" required autofocus />
                </div>
                <div class="mt-0">
                    <x-input-float-label class="block w-full" id="caste" name="caste" type="text"
                        label="{{ __('Caste') }}" :value="old('caste')" required autofocus />
                </div>
                <div class="mt-0">
                    <x-select class="block w-full" id="social_category" name="social_category"
                        label="{{ __('Social Category') }}">
                        <option value="General" @selected(old('social_category') == 'General')>
                            General
                        </option>
                        <option value="OBC" @selected(old('gender') == 'OBC')>OBC</option>
                        <option value="OEC" @selected(old('gender') == 'OBC')>OEC</option>
                        <option value="SC" @selected(old('gender') == 'SC')>SC</option>
                        <option value="ST" @selected(old('ST') == 'OBC')>ST</option>
                    </x-select>
                </div>
                <div class="mt-0">
                    <x-input-float-label class="block w-full" id="place_of_birth" name="place_of_birth"
                        type="text" label="{{ __('Place Of Birth With State') }}" :value="old('place_of_birth')" required
                        autofocus />
                </div>
                <div class="mt-0">
                    <x-input-float-label class="block w-full" id="nationality" name="nationality" type="text"
                        label="{{ __('Nationality') }}" :value="old('nationality')" required autofocus />
                </div>
                <div class="mt-0">
                    <x-input-float-label class="block w-full" id="mother_tongue" name="mother_tongue" type="text"
                        label="{{ __('Mother Tongue') }}" :value="old('mother_tongue')" required autofocus />
                </div>
            </div>
            <div class="grid gap-2 sm:grid-cols-2" x-show="currentTab === 2">
                <div class="mt-0 rounded bg-blue-500 p-2 sm:col-span-2">
                    <h6 class="text-sm font-medium text-white">
                        PRIMARY CONTACT ( This no. will be used for SMS
                        communication and will
                        be printed in student's ID card )
                    </h6>
                </div>
                <div class="mt-0">
                    <x-input-float-label class="block w-full" id="primary_number" name="primary_number"
                        type="text" label="{{ __('Primary Mobile') }}" :value="old('primary_number')" required autofocus />
                </div>
                <div class="mt-0">
                    <x-input-float-label class="block w-full" id="secondary_number" name="secondary_number"
                        type="text" label="{{ __('Secondary Mobile') }}" :value="old('secondary_number')" />
                </div>
                <div class="mt-0 rounded bg-blue-500 p-2">
                    <h6 class="text-sm font-medium text-white">
                        PRESENT ADDRESS
                    </h6>
                </div>
                <div class="mt-0 rounded bg-blue-500 p-2">
                    <h6 class="text-sm font-medium text-white">
                        PERMANENT ADDRESS
                    </h6>
                </div>
                <div class="rounded border border-sky-500 p-2">
                    <div class="grid gap-2 sm:grid-cols-2">
                        <div class="mt-0 sm:col-span-2">
                            <x-input-float-label class="block w-full" id="house_name" name="house_name"
                                type="text" label="{{ __('Address of Parent(House / Flat No)') }}"
                                :value="old('house_name')" required autofocus />
                        </div>
                        <div class="mt-0">
                            <x-input-float-label class="block w-full" id="road" name="road" type="text"
                                label="{{ __('Road') }}" :value="old('road')" required autofocus />
                        </div>
                        <div class="mt-0">
                            <x-input-float-label class="block w-full" id="street" name="street" type="text"
                                label="{{ __('Street') }}" :value="old('street')" required autofocus />
                        </div>
                        <div class="mt-0">
                            <x-input-float-label class="block w-full" id="area" name="area" type="text"
                                label="{{ __('Area') }}" :value="old('area')" required autofocus />
                        </div>
                        <div class="mt-0">
                            <x-input-float-label class="block w-full" id="city" name="city" type="text"
                                label="{{ __('City') }}" :value="old('city')" required autofocus />
                        </div>
                        <div class="mt-0">
                            <x-input-float-label class="block w-full" id="post_office" name="post_office"
                                type="text" label="{{ __('Post Office') }}" :value="old('post_office')" required
                                autofocus />
                        </div>
                        <div class="mt-0">
                            <x-input-float-label class="block w-full" id="pin_code" name="pin_code" type="text"
                                label="{{ __('Pin Code') }}" :value="old('pin_code')" required autofocus />
                        </div>
                    </div>
                </div>
                <div class="rounded border border-sky-500 p-2">
                    <div class="grid gap-2 sm:grid-cols-2">
                        <div class="mt-0 sm:col-span-2">
                            <x-input-float-label class="block w-full" id="permanent_house_name"
                                name="permanent_house_name" type="text"
                                label="{{ __('Address of Parent(House / Flat No)') }}" :value="old('permanent_house_name')" required
                                autofocus />
                        </div>
                        <div class="mt-0">
                            <x-input-float-label class="block w-full" id="permanent_road" name="permanent_road"
                                type="text" label="{{ __('Road') }}" :value="old('permanent_road')" required autofocus />
                        </div>
                        <div class="mt-0">
                            <x-input-float-label class="block w-full" id="permanent_street" name="permanent_street"
                                type="text" label="{{ __('Street') }}" :value="old('permanent_street')" required autofocus />
                        </div>
                        <div class="mt-0">
                            <x-input-float-label class="block w-full" id="permanent_area" name="permanent_area"
                                type="text" label="{{ __('Area') }}" :value="old('permanent_area')" required autofocus />
                        </div>
                        <div class="mt-0">
                            <x-input-float-label class="block w-full" id="permanent_city" name="permanent_city"
                                type="text" label="{{ __('City') }}" :value="old('permanent_city')" required autofocus />
                        </div>
                        <div class="mt-0">
                            <x-input-float-label class="block w-full" id="permanent_post_office"
                                name="permanent_post_office" type="text" label="{{ __('Post Office') }}"
                                :value="old('permanent_post_office')" required autofocus />
                        </div>
                        <div class="mt-0">
                            <x-input-float-label class="block w-full" id="permanent_pin_code"
                                name="permanent_pin_code" type="text" label="{{ __('Pin Code') }}"
                                :value="old('permanent_pin_code')" required autofocus />
                        </div>
                    </div>
                </div>
            </div>
            <div class="grid gap-2 sm:grid-cols-2" x-show="currentTab === 3">
                <div class="mt-0 rounded bg-blue-500 p-2">
                    <h6 class="text-sm font-medium text-white">
                        FATHER'S DETAILS
                    </h6>
                </div>
                <div class="mt-0 rounded bg-blue-500 p-2">
                    <h6 class="text-sm font-medium text-white">
                        MOTHER'S DETAILS
                    </h6>
                </div>
                <div class="rounded border border-sky-500 p-2">
                    <div class="grid gap-2 sm:grid-cols-2">
                        <div class="mt-0 sm:col-span-2">
                            <x-input-float-label class="block w-full" id="father_name" name="father_name"
                                type="text" label="{{ __('Name') }}" :value="old('father_name')" required autofocus />
                        </div>
                        <div class="mt-0">
                            <x-input-float-label class="block w-full" id="father_occupation" name="father_occupation"
                                type="text" label="{{ __('Occupation') }}" :value="old('father_occupation')" required
                                autofocus />
                        </div>
                        <div class="mt-0">
                            <x-input-float-label class="block w-full" id="father_annual_income"
                                name="father_annual_income" type="text" label="{{ __('Annual Income') }}"
                                :value="old('father_annual_income')" required autofocus />
                        </div>
                        <div class="mt-0">
                            <x-input-float-label class="block w-full" id="father_mobile_number"
                                name="father_mobile_number" type="text" label="{{ __('Mobile Number') }}"
                                :value="old('father_mobile_number')" required autofocus />
                        </div>
                        <div class="mt-0">
                            <x-input-float-label class="block w-full" id="father_email" name="father_email"
                                type="email" label="{{ __('Email Id') }}" :value="old('father_email')" required autofocus />
                        </div>
                        <div class="mt-0">
                            <x-input-float-label class="block w-full" id="father_office_number"
                                name="father_office_number" type="text" label="{{ __('Office Number') }}"
                                :value="old('father_office_number')" required autofocus />
                        </div>
                        <div class="mt-0">
                            <x-input-float-label class="block w-full" id="father_office_address"
                                name="father_office_address" type="text" label="{{ __('Office Address') }}"
                                :value="old('father_office_address')" required autofocus />
                        </div>
                    </div>
                </div>
                <div class="rounded border border-sky-500 p-2">
                    <div class="grid gap-2 sm:grid-cols-2">
                        <div class="mt-0 sm:col-span-2">
                            <x-input-float-label class="block w-full" id="mother_name" name="mother_name"
                                type="text" label="{{ __('Name') }}" :value="old('mother_name')" required autofocus />
                        </div>
                        <div class="mt-0">
                            <x-input-float-label class="block w-full" id="mother_occupation" name="mother_occupation"
                                type="text" label="{{ __('Occupation') }}" :value="old('mother_occupation')" required
                                autofocus />
                        </div>
                        <div class="mt-0">
                            <x-input-float-label class="block w-full" id="mother_annual_income"
                                name="mother_annual_income" type="text" label="{{ __('Annual Income') }}"
                                :value="old('mother_annual_income')" />
                        </div>
                        <div class="mt-0">
                            <x-input-float-label class="block w-full" id="mother_mobile_number"
                                name="mother_mobile_number" type="text" label="{{ __('Mobile Number') }}"
                                :value="old('mother_mobile_number')" required autofocus />
                        </div>
                        <div class="mt-0">
                            <x-input-float-label class="block w-full" id="mother_email" name="mother_email"
                                type="email" label="{{ __('Email Id') }}" :value="old('mother_email')" />
                        </div>
                        <div class="mt-0">
                            <x-input-float-label class="block w-full" id="mother_office_number"
                                name="mother_office_number" type="text" label="{{ __('Office Number') }}"
                                :value="old('mother_office_number')" />
                        </div>
                        <div class="mt-0">
                            <x-input-float-label class="block w-full" id="mother_office_address"
                                name="mother_office_address" type="text" label="{{ __('Office Address') }}"
                                :value="old('mother_office_address')" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="grid gap-4 sm:grid-cols-2" x-show="currentTab === 4">
                <div class="mt-0">
                    <label class="mb-2 block text-sm font-medium text-gray-900" for="photo">Applicant Photo</label>
                    <input
                        class="block w-full cursor-pointer rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:outline-none"
                        id="photo" name="photo" type="file" value="" required />
                </div>
                <div class="mt-0">
                    <label class="mb-2 block text-sm font-medium text-gray-900" for="birth_certificate">Applicant
                        Birth Certificate</label>
                    <input
                        class="block w-full cursor-pointer rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:outline-none"
                        id="birth_certificate" name="birth_certificate" type="file" value="" required />
                </div>
                <div class="mt-0">
                    <label class="mb-2 block text-sm font-medium text-gray-900" for="aadhar">Aadhaar Card</label>
                    <input
                        class="block w-full cursor-pointer rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:outline-none"
                        id="aadhar" name="aadhar" type="file" value="" required />
                </div>
                <div class="mt-0">
                    <label class="mb-2 block text-sm font-medium text-gray-900" for="address_proof">Address Proof
                        (Aadhar Card, Driving License, Voter ID of either Father or Mother)</label>
                    <input
                        class="block w-full cursor-pointer rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:outline-none"
                        id="address_proof" name="address_proof" type="file" value="" required />
                </div>
                <div class="mt-0">
                    <x-input-float-label class="block w-full" id="class" name="class" type="text"
                        label="{{ __('Class to which admission is sought for') }}" :value="old('class')" required
                        autofocus />
                </div>
                <div class="mt-0">
                    <x-input-float-label class="block w-full" id="academic_year" name="academic_year" type="text"
                        label="{{ __('Academic Year') }}" :value="old('academic_year')" required autofocus />
                </div>
                <div class="mt-0">
                    <x-input-float-label class="block w-full" id="previous_institution" name="previous_institution"
                        type="text" label="{{ __('Previous Institution') }}" :value="old('previous_institution')" required
                        autofocus />
                </div>
                <div class="mt-0">
                    <x-input-float-label class="block w-full" id="siblings" name="siblings" type="text"
                        label="{{ __('Siblings') }}" :value="old('siblings')" required autofocus disabled />
                </div>
            </div>
            <div class="mt-4 flex items-center justify-end sm:col-span-2">
                <x-secondary-button class="ml-4" x-show="currentTab > 1" @click="currentTab--">
                    {{ __('Previous') }}
                </x-secondary-button>
                <x-secondary-button class="ml-4" x-show="currentTab < 4" @click="currentTab++">
                    {{ __('Next') }}
                </x-secondary-button>
                <x-button class="ml-4" x-show="currentTab === 4">
                    {{ __('Submit') }}
                </x-button>
            </div>
        </div>
    </form>
</div>
