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
                            d="M83.19,174.4a8,8,0,0,0,11.21-1.6,52,52,0,0,1,83.2,0,8,8,0,1,0,12.8-9.6A67.88,67.88,0,0,0,163,141.51a40,40,0,1,0-53.94,0A67.88,67.88,0,0,0,81.6,163.2,8,8,0,0,0,83.19,174.4ZM112,112a24,24,0,1,1,24,24A24,24,0,0,1,112,112Zm96-88H64A16,16,0,0,0,48,40V64H32a8,8,0,0,0,0,16H48v40H32a8,8,0,0,0,0,16H48v40H32a8,8,0,0,0,0,16H48v24a16,16,0,0,0,16,16H208a16,16,0,0,0,16-16V40A16,16,0,0,0,208,24Zm0,192H64V40H208Z">
                        </path>
                    </svg>Contact Details
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
                    <x-input-float-label class="block w-full" name="first_name" type="text"
                        wire:model.lazy="first_name" label="{{ __('First Name') }}" required autofocus />
                </div>
                <div class="mt-0">
                    <x-input-float-label class="block w-full" name="last_name" type="text"
                        wire:model.lazy="last_name" label="{{ __('Last Name') }}" required autofocus />
                </div>
                <div class="mt-0">
                    <x-select class="block w-full" name="gender" wire:model.lazy="gender" label="{{ __('Gender') }}">
                        <option>-- choose --</option>
                        <option value="Male"> Male </option>
                        <option value="Female"> Female </option>
                    </x-select>
                </div>
                <div class="mt-0">
                    <x-input-float-label class="block w-full" name="date_of_birth" type="date"
                        wire:model.lazy="date_of_birth" label="{{ __('Date Of Birth In Figure') }}" required
                        autofocus />
                </div>
                <div class="mt-0">
                    <x-input-float-label class="block w-full" name="date_of_birth_word" type="text"
                        wire:model.lazy="date_of_birth_word" label="{{ __('Date Of Birth In Words') }}" required
                        autofocus />
                </div>
                <div class="mt-0">
                    <x-input-float-label class="block w-full" name="uid" type="text" wire:model.lazy="uid"
                        label="{{ __('Aadhaar') }}" required autofocus />
                </div>
                <div class="mt-0">
                    <x-input-float-label class="block w-full" name="religion" type="text" wire:model.lazy="religion"
                        label="{{ __('Religion') }}" required autofocus />
                </div>
                <div class="mt-0">
                    <x-input-float-label class="block w-full" name="caste" type="text" wire:model.lazy="caste"
                        label="{{ __('Caste') }}" required autofocus />
                </div>
                <div class="mt-0">
                    <x-select class="block w-full" name="social_category" wire:model.lazy="social_category"
                        label="{{ __('Social Category') }}">
                        <option>-- choose --</option>
                        <option value="General"> General </option>
                        <option value="OBC"> OBC </option>
                        <option value="OEC"> OEC </option>
                        <option value="SC"> SC </option>
                        <option value="ST"> ST </option>
                    </x-select>
                </div>
                <div class="mt-0">
                    <x-input-float-label class="block w-full" name="place_of_birth" type="text"
                        wire:model.lazy="place_of_birth" label="{{ __('Place Of Birth With State') }}" required
                        autofocus />
                </div>
                <div class="mt-0">
                    <x-input-float-label class="block w-full" name="nationality" type="text"
                        wire:model.lazy="nationality" label="{{ __('Nationality') }}" required autofocus />
                </div>
                <div class="mt-0">
                    <x-input-float-label class="block w-full" name="mother_tongue" type="text"
                        wire:model.lazy="mother_tongue" label="{{ __('Mother Tongue') }}" required autofocus />
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
                    <x-input-float-label class="block w-full" name="primary_number" type="text"
                        wire:model.lazy="primary_number" label="{{ __('Primary Mobile') }}" required autofocus />
                </div>
                <div class="mt-0">
                    <x-input-float-label class="block w-full" name="secondary_number" type="text"
                        wire:model.lazy="secondary_number" label="{{ __('Secondary Mobile') }}" />
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
                            <x-input-float-label class="block w-full" name="house_name" type="text"
                                wire:model.lazy="house_name" label="{{ __('Address of Parent(House / Flat No)') }}"
                                required autofocus />
                        </div>
                        <div class="mt-0">
                            <x-input-float-label class="block w-full" name="road" type="text"
                                wire:model.lazy="road" label="{{ __('Road') }}" required autofocus />
                        </div>
                        <div class="mt-0">
                            <x-input-float-label class="block w-full" name="street" type="text"
                                wire:model.lazy="street" label="{{ __('Street') }}" required autofocus />
                        </div>
                        <div class="mt-0">
                            <x-input-float-label class="block w-full" name="area" type="text"
                                wire:model.lazy="area" label="{{ __('Area') }}" required autofocus />
                        </div>
                        <div class="mt-0">
                            <x-input-float-label class="block w-full" name="city" type="text"
                                wire:model.lazy="city" label="{{ __('City') }}" required autofocus />
                        </div>
                        <div class="mt-0">
                            <x-input-float-label class="block w-full" name="post_office" type="text"
                                wire:model.lazy="post_office" label="{{ __('Post Office') }}" required autofocus />
                        </div>
                        <div class="mt-0">
                            <x-input-float-label class="block w-full" name="pin_code" type="text"
                                wire:model.lazy="pin_code" label="{{ __('Pin Code') }}" required autofocus />
                        </div>
                    </div>
                </div>
                <div class="rounded border border-sky-500 p-2">
                    <div class="grid gap-2 sm:grid-cols-2">
                        <div class="mt-0 sm:col-span-2">
                            <x-input-float-label class="block w-full" name="permanent_house_name" type="text"
                                wire:model.lazy="permanent_house_name"
                                label="{{ __('Address of Parent(House / Flat No)') }}" required autofocus />
                        </div>
                        <div class="mt-0">
                            <x-input-float-label class="block w-full" name="permanent_road" type="text"
                                wire:model.lazy="permanent_road" label="{{ __('Road') }}" required autofocus />
                        </div>
                        <div class="mt-0">
                            <x-input-float-label class="block w-full" name="permanent_street" type="text"
                                wire:model.lazy="permanent_street" label="{{ __('Street') }}" required autofocus />
                        </div>
                        <div class="mt-0">
                            <x-input-float-label class="block w-full" name="permanent_area" type="text"
                                wire:model.lazy="permanent_area" label="{{ __('Area') }}" required autofocus />
                        </div>
                        <div class="mt-0">
                            <x-input-float-label class="block w-full" name="permanent_city" type="text"
                                wire:model.lazy="permanent_city" label="{{ __('City') }}" required autofocus />
                        </div>
                        <div class="mt-0">
                            <x-input-float-label class="block w-full" name="permanent_post_office" type="text"
                                wire:model.lazy="permanent_post_office" label="{{ __('Post Office') }}" required
                                autofocus />
                        </div>
                        <div class="mt-0">
                            <x-input-float-label class="block w-full" name="permanent_pin_code" type="text"
                                wire:model.lazy="permanent_pin_code" label="{{ __('Pin Code') }}" required
                                autofocus />
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
                            <x-input-float-label class="block w-full" name="father_name" type="text"
                                wire:model.lazy="father_name" label="{{ __('Name') }}" required autofocus />
                        </div>
                        <div class="mt-0">
                            <x-input-float-label class="block w-full" name="father_occupation" type="text"
                                wire:model.lazy="father_occupation" label="{{ __('Occupation') }}" required
                                autofocus />
                        </div>
                        <div class="mt-0">
                            <x-input-float-label class="block w-full" name="father_annual_income" type="text"
                                wire:model.lazy="father_annual_income" label="{{ __('Annual Income') }}" required
                                autofocus />
                        </div>
                        <div class="mt-0">
                            <x-input-float-label class="block w-full" name="father_mobile_number" type="text"
                                wire:model.lazy="father_mobile_number" label="{{ __('Mobile Number') }}" required
                                autofocus />
                        </div>
                        <div class="mt-0">
                            <x-input-float-label class="block w-full" name="father_email" type="email"
                                wire:model.lazy="father_email" label="{{ __('Email Id') }}" required autofocus />
                        </div>
                        <div class="mt-0">
                            <x-input-float-label class="block w-full" name="father_office_number" type="text"
                                wire:model.lazy="father_office_number" label="{{ __('Office Number') }}" required
                                autofocus />
                        </div>
                        <div class="mt-0">
                            <x-input-float-label class="block w-full" name="father_office_address" type="text"
                                wire:model.lazy="father_office_address" label="{{ __('Office Address') }}" required
                                autofocus />
                        </div>
                    </div>
                </div>
                <div class="rounded border border-sky-500 p-2">
                    <div class="grid gap-2 sm:grid-cols-2">
                        <div class="mt-0 sm:col-span-2">
                            <x-input-float-label class="block w-full" name="mother_name" type="text"
                                wire:model.lazy="mother_name" label="{{ __('Name') }}" required autofocus />
                        </div>
                        <div class="mt-0">
                            <x-input-float-label class="block w-full" name="mother_occupation" type="text"
                                wire:model.lazy="mother_occupation" label="{{ __('Occupation') }}" required
                                autofocus />
                        </div>
                        <div class="mt-0">
                            <x-input-float-label class="block w-full" name="mother_annual_income" type="text"
                                wire:model.lazy="mother_annual_income" label="{{ __('Annual Income') }}" />
                        </div>
                        <div class="mt-0">
                            <x-input-float-label class="block w-full" name="mother_mobile_number" type="text"
                                wire:model.lazy="mother_mobile_number" label="{{ __('Mobile Number') }}" required
                                autofocus />
                        </div>
                        <div class="mt-0">
                            <x-input-float-label class="block w-full" name="mother_email" type="email"
                                wire:model.lazy="mother_email" label="{{ __('Email Id') }}" />
                        </div>
                        <div class="mt-0">
                            <x-input-float-label class="block w-full" name="mother_office_number" type="text"
                                wire:model.lazy="mother_office_number" label="{{ __('Office Number') }}" />
                        </div>
                        <div class="mt-0">
                            <x-input-float-label class="block w-full" name="mother_office_address" type="text"
                                wire:model.lazy="mother_office_address" label="{{ __('Office Address') }}" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="grid gap-4 sm:grid-cols-2" x-show="currentTab === 4">
                <div class="mt-0 rounded bg-blue-500 p-2 sm:col-span-2">
                    <h6 class="text-sm font-medium text-white"> DOCUMENTS </h6>
                </div>
                <div class="mt-0">
                    <label class="mb-2 block text-sm font-medium text-gray-900" for="photo">Applicant Photo</label>
                    <input
                        class="block w-full cursor-pointer rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:outline-none"
                        type="file" wire:model.lazy="photo" required />
                </div>
                <div class="mt-0">
                    <label class="mb-2 block text-sm font-medium text-gray-900" for="birth_certificate">Applicant
                        Birth Certificate</label>
                    <input
                        class="block w-full cursor-pointer rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:outline-none"
                        type="file" wire:model.lazy="birth_certificate" required />
                </div>
                <div class="mt-0">
                    <label class="mb-2 block text-sm font-medium text-gray-900" for="aadhaar">Aadhaar Card</label>
                    <input
                        class="block w-full cursor-pointer rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:outline-none"
                        type="file" wire:model.lazy="aadhaar" required />
                </div>
                <div class="mt-0">
                    <label class="mb-2 block text-sm font-medium text-gray-900" for="address_proof">Address Proof
                        (Aadhaar Card, Driving License, Voter ID)</label>
                    <input
                        class="block w-full cursor-pointer rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:outline-none"
                        type="file" wire:model.lazy="address_proof" required />
                </div>
                <div class="mt-0 rounded bg-blue-500 p-2 sm:col-span-2">
                    <h6 class="text-sm font-medium text-white"> ACADEMIC </h6>
                </div>
                <div class="mt-0">
                    <x-input-float-label class="block w-full" name="class" type="text"
                        wire:model.lazy="class" label="{{ __('Class to which admission is sought for') }}" required
                        autofocus />
                </div>
                <div class="mt-0">
                    <x-input-float-label class="block w-full" name="academic_year" type="text"
                        wire:model.lazy="academic_year" label="{{ __('Academic Year') }}" required autofocus />
                </div>
                <div class="mt-0">
                    <x-input-float-label class="block w-full" name="previous_institution" type="text"
                        wire:model.lazy="previous_institution" label="{{ __('Previous Institution') }}" required
                        autofocus />
                </div>
                <div class="mt-0">
                    <x-input-float-label class="block w-full" name="siblings" type="text"
                        wire:model.lazy="siblings" label="{{ __('Siblings') }}" required autofocus disabled />
                </div>
            </div>
            <div class="mt-4 flex items-center justify-end sm:col-span-2">
                <x-secondary-button class="ml-4" x-show="currentTab > 1" @click="currentTab--">
                    {{ __('Previous') }}
                </x-secondary-button>
                <x-secondary-button class="ml-4" x-show="currentTab < 4" wire:click="validate_data()">
                    {{ __('Next') }}
                </x-secondary-button>
                <x-button class="ml-4" x-show="currentTab === 4">
                    {{ __('Submit') }}
                </x-button>
            </div>
        </div>
    </form>
</div>
