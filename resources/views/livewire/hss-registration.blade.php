<div x-data="{ currentTab: @entangle('current_tab').live, isSubmitted: @entangle('is_submitted').live, isDisabled: @entangle('is_disabled').live }">
    <div class="px-2">
        <ul class="-mb-px flex flex-wrap text-center text-sm font-medium text-gray-500">
            <li class="mr-2" @click="currentTab = 1">
                <button class="group inline-flex items-center justify-center rounded-t-lg border-b-2 p-4"
                    :class="currentTab === 1 ? 'text-blue-600 border-blue-600' : 'border-transparent hover:text-gray-600 hover:border-gray-300'">
                    <svg class="mr-2 h-6 w-6" aria-hidden="true" :class="currentTab === 1 ? 'text-blue-600' : 'text-gray-400 group-hover:text-gray-500'" xmlns="http://www.w3.org/2000/svg"
                        fill="currentColor" viewBox="0 0 256 256">
                        <path
                            d="M251.76,88.94l-120-64a8,8,0,0,0-7.52,0l-120,64a8,8,0,0,0,0,14.12L32,117.87v48.42a15.91,15.91,0,0,0,4.06,10.65C49.16,191.53,78.51,216,128,216a130,130,0,0,0,48-8.76V240a8,8,0,0,0,16,0V199.51a115.63,115.63,0,0,0,27.94-22.57A15.91,15.91,0,0,0,224,166.29V117.87l27.76-14.81a8,8,0,0,0,0-14.12ZM128,200c-43.27,0-68.72-21.14-80-33.71V126.4l76.24,40.66a8,8,0,0,0,7.52,0L176,143.47v46.34C163.4,195.69,147.52,200,128,200Zm80-33.75a97.83,97.83,0,0,1-16,14.25V134.93l16-8.53ZM188,118.94l-.22-.13-56-29.87a8,8,0,0,0-7.52,14.12L171,128l-43,22.93L25,96,128,41.07,231,96Z">
                        </path>
                    </svg>Student Details
                </button>
            </li>
            <li class="mr-2" @click="currentTab = 2">
                <button class="group inline-flex items-center justify-center rounded-t-lg border-b-2 p-4" aria-current="page"
                    :class="currentTab === 2 ? 'text-blue-600 border-blue-600' :
                        'border-transparent hover:text-gray-600 hover:border-gray-300'">
                    <svg class="mr-2 h-6 w-6" aria-hidden="true" :class="currentTab === 2 ? 'text-blue-600' : 'text-gray-400 group-hover:text-gray-500'" xmlns="http://www.w3.org/2000/svg"
                        fill="currentColor" viewBox="0 0 256 256">
                        <path
                            d="M83.19,174.4a8,8,0,0,0,11.21-1.6,52,52,0,0,1,83.2,0,8,8,0,1,0,12.8-9.6A67.88,67.88,0,0,0,163,141.51a40,40,0,1,0-53.94,0A67.88,67.88,0,0,0,81.6,163.2,8,8,0,0,0,83.19,174.4ZM112,112a24,24,0,1,1,24,24A24,24,0,0,1,112,112Zm96-88H64A16,16,0,0,0,48,40V64H32a8,8,0,0,0,0,16H48v40H32a8,8,0,0,0,0,16H48v40H32a8,8,0,0,0,0,16H48v24a16,16,0,0,0,16,16H208a16,16,0,0,0,16-16V40A16,16,0,0,0,208,24Zm0,192H64V40H208Z">
                        </path>
                    </svg>Contact Details
                </button>
            </li>
            <li class="mr-2" @click="currentTab = 3">
                <button class="group inline-flex items-center justify-center rounded-t-lg border-b-2 p-4" aria-current="page"
                    :class="currentTab === 3 ? 'text-blue-600 border-blue-600' :
                        'border-transparent hover:text-gray-600 hover:border-gray-300'">
                    <svg class="mr-2 h-6 w-6" aria-hidden="true" :class="currentTab === 3 ? 'text-blue-600' :
                        'text-gray-400 group-hover:text-gray-500'"
                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 256 256">
                        <path
                            d="M244.8,150.4a8,8,0,0,1-11.2-1.6A51.6,51.6,0,0,0,192,128a8,8,0,0,1-7.37-4.89,8,8,0,0,1,0-6.22A8,8,0,0,1,192,112a24,24,0,1,0-23.24-30,8,8,0,1,1-15.5-4A40,40,0,1,1,219,117.51a67.94,67.94,0,0,1,27.43,21.68A8,8,0,0,1,244.8,150.4ZM190.92,212a8,8,0,1,1-13.84,8,57,57,0,0,0-98.16,0,8,8,0,1,1-13.84-8,72.06,72.06,0,0,1,33.74-29.92,48,48,0,1,1,58.36,0A72.06,72.06,0,0,1,190.92,212ZM128,176a32,32,0,1,0-32-32A32,32,0,0,0,128,176ZM72,120a8,8,0,0,0-8-8A24,24,0,1,1,87.24,82a8,8,0,1,0,15.5-4A40,40,0,1,0,37,117.51,67.94,67.94,0,0,0,9.6,139.19a8,8,0,1,0,12.8,9.61A51.6,51.6,0,0,1,64,128,8,8,0,0,0,72,120Z">
                        </path>
                    </svg>Parent Details
                </button>
            </li>
            <li class="mr-2" @click="currentTab = 4">
                <button class="group inline-flex items-center justify-center rounded-t-lg border-b-2 p-4" aria-current="page"
                    :class="currentTab === 4 ? 'text-blue-600 border-blue-600' :
                        'border-transparent hover:text-gray-600 hover:border-gray-300'">
                    <svg class="mr-2 h-6 w-6" aria-hidden="true" :class="currentTab === 4 ? 'text-blue-600' :
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
    @if (session('status'))
        <script>
            alert(@js(session('status')))
        </script>
    @endif
    <form wire:submit="register">
        <div class="rounded-lg border-2 border-gray-200 p-5">
            <div class="grid gap-4 sm:grid-cols-3" x-show="currentTab === 1">
                <div class="mt-0">
                    <x-input-float-label class="block w-full" name="student_form.first_name" type="text" wire:model="student_form.first_name" label="{{ __('First Name') }}" @mouseenter="addFocus"
                        required autofocus />
                </div>
                <div class="mt-0">
                    <x-input-float-label class="block w-full" name="student_form.last_name" type="text" wire:model="student_form.last_name" label="{{ __('Last Name') }}" @mouseenter="addFocus" />
                </div>
                <div class="mt-0">
                    <x-select class="block w-full" name="student_form.gender" wire:model="student_form.gender" label="{{ __('Gender') }}" @mouseenter="addFocus">
                        <option>-- choose --</option>
                        <option value="Male"> Male </option>
                        <option value="Female"> Female </option>
                    </x-select>
                </div>
                <div class="mt-0">
                    <x-input-float-label class="block w-full" name="student_form.date_of_birth" type="date" wire:model="student_form.date_of_birth" label="{{ __('Date Of Birth In Figure') }}"
                        required autofocus />
                </div>
                <div class="mt-0">
                    <x-select class="block w-full" name="student_form.religion" wire:model="student_form.religion" label="{{ __('Religion') }}" @mouseenter="addFocus">
                        <option>-- choose --</option>
                        <option value="CHRISTIAN"> CHRISTIAN </option>
                        <option value="HINDU"> HINDU </option>
                        <option value="JEWISH"> JEWISH </option>
                        <option value="MUSLIM"> MUSLIM </option>
                        <option value="OTHER"> OTHER </option>
                    </x-select>
                </div>
                <div class="mt-0">
                    <x-input-float-label class="block w-full" name="student_form.caste" type="text" wire:model="student_form.caste" label="{{ __('Caste') }}" @mouseenter="addFocus" />
                </div>
                <div class="mt-0">
                    <x-select class="block w-full" name="student_form.social_category" wire:model="student_form.social_category" label="{{ __('Social Category') }}" @mouseenter="addFocus">
                        <option>-- choose --</option>
                        <option value="General"> General </option>
                        <option value="OBC"> OBC </option>
                        <option value="OEC"> OEC </option>
                        <option value="SC"> SC </option>
                        <option value="ST"> ST </option>
                        <option value="Other"> Other </option>
                    </x-select>
                </div>
                <div class="mt-0">
                    <x-input-float-label class="block w-full" name="student_form.uid" type="text" wire:model="student_form.uid" label="{{ __('Aadhaar No') }}" @mouseenter="addFocus" />
                </div>
                <div class="mt-0">
                    <x-input-float-label class="block w-full" name="student_form.blood_group" type="text" wire:model="student_form.blood_group" label="{{ __('Blood Group') }}"
                        @mouseenter="addFocus" />
                </div>
                <div class="mt-0">
                    <x-select class="block w-full" name="student_form.disability" wire:model.live="student_form.disability"
                        label="{{ __('Learning Disability/Orthopedically Handicapped
                                                                                                                                                                    ') }}"
                        @mouseenter="addFocus">
                        <option value="No"> No </option>
                        <option value="Yes"> Yes </option>
                    </x-select>
                </div>
                <div class="mt-0" x-show="isDisabled">
                    <x-input-float-label class="block w-full" name="student_form.disability_details" type="text" wire:model="student_form.disability_details" label="{{ __('Give Details') }}"
                        @mouseenter="addFocus" />
                </div>
            </div>
            <div class="grid gap-2 sm:grid-cols-2" x-show="currentTab === 2">
                <div class="rounded border border-sky-500 p-2">
                    <div class="grid gap-2 sm:grid-cols-2">
                        <div class="mt-0 rounded bg-blue-500 p-2 sm:col-span-2">
                            <h6 class="text-sm font-medium text-white">
                                PRESENT ADDRESS
                            </h6>
                        </div>
                        <div class="mt-0 sm:col-span-2">
                            <x-input-float-label class="block w-full" name="contact_form.house_name" type="text" wire:model="contact_form.house_name"
                                label="{{ __('Address of Parent(House / Flat No)') }}" @mouseenter="addFocus" />
                        </div>
                        <div class="mt-0">
                            <x-input-float-label class="block w-full" name="contact_form.street" type="text" wire:model="contact_form.street" label="{{ __('Street') }}"
                                @mouseenter="addFocus" />
                        </div>
                        <div class="mt-0">
                            <x-input-float-label class="block w-full" name="contact_form.post_office" type="text" wire:model="contact_form.post_office" label="{{ __('Post Office') }}"
                                @mouseenter="addFocus" />
                        </div>
                        <div class="mt-0">
                            <x-input-float-label class="block w-full" name="contact_form.pin_code" type="text" wire:model="contact_form.pin_code" label="{{ __('Pin Code') }}"
                                @mouseenter="addFocus" />
                        </div>
                        <div class="mt-0">
                            <x-input-float-label class="block w-full" name="contact_form.city" type="text" wire:model="contact_form.city" label="{{ __('City') }}"
                                @mouseenter="addFocus" />
                        </div>
                        <div class="mt-0">
                            <x-input-float-label class="block w-full" name="contact_form.district" type="text" wire:model="contact_form.district" label="{{ __('District') }}"
                                @mouseenter="addFocus" />
                        </div>
                        <div class="mt-0">
                            <x-input-float-label class="block w-full" name="contact_form.state" type="text" wire:model="contact_form.state" label="{{ __('State') }}"
                                @mouseenter="addFocus" />
                        </div>
                    </div>
                </div>
                <div class="rounded border border-sky-500 p-2">
                    <div class="grid gap-2 sm:grid-cols-2">
                        <div class="mt-0 flex justify-between rounded bg-blue-500 p-2 sm:col-span-2">
                            <h6 class="text-sm font-medium text-white">
                                PERMANENT ADDRESS
                            </h6>
                            <div class="mr-4 flex items-center">
                                <input class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-red-400 focus:ring-2 focus:ring-red-500" type="checkbox" wire:model.live="contact_form.same_as">
                                <label class="ml-2 text-sm font-medium text-white" for="same_as">Same as Present</label>
                            </div>
                        </div>
                        <div class="mt-0 sm:col-span-2">
                            <x-input-float-label class="block w-full" name="contact_form.permanent_house_name" type="text" wire:model="contact_form.permanent_house_name"
                                label="{{ __('Address of Parent(House / Flat No)') }}" @mouseenter="addFocus" />
                        </div>
                        <div class="mt-0">
                            <x-input-float-label class="block w-full" name="contact_form.permanent_street" type="text" wire:model="contact_form.permanent_street" label="{{ __('Street') }}"
                                @mouseenter="addFocus" />
                        </div>
                        <div class="mt-0">
                            <x-input-float-label class="block w-full" name="contact_form.permanent_post_office" type="text" wire:model="contact_form.permanent_post_office"
                                label="{{ __('Post Office') }}" @mouseenter="addFocus" />
                        </div>
                        <div class="mt-0">
                            <x-input-float-label class="block w-full" name="contact_form.permanent_pin_code" type="text" wire:model="contact_form.permanent_pin_code"
                                label="{{ __('Pin Code') }}" @mouseenter="addFocus" />
                        </div>
                        <div class="mt-0">
                            <x-input-float-label class="block w-full" name="contact_form.permanent_city" type="text" wire:model="contact_form.permanent_city" label="{{ __('City') }}"
                                @mouseenter="addFocus" />
                        </div>
                        <div class="mt-0">
                            <x-input-float-label class="block w-full" name="contact_form.permanent_district" type="text" wire:model="contact_form.permanent_district"
                                label="{{ __('District') }}" @mouseenter="addFocus" />
                        </div>
                        <div class="mt-0">
                            <x-input-float-label class="block w-full" name="contact_form.permanent_state" type="text" wire:model="contact_form.permanent_state" label="{{ __('State') }}"
                                @mouseenter="addFocus" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="grid gap-2 sm:grid-cols-1" x-show="currentTab === 3">
                <div class="mt-0 rounded bg-blue-500 p-2 sm:col-span-4">
                    <h6 class="text-sm font-medium text-white">
                        FATHER'S DETAILS
                    </h6>
                </div>
                <div class="mt-0 sm:col-span-2">
                    <x-input-float-label class="block w-full" name="parentDetailsForm.father_name" type="text" wire:model="parentDetailsForm.father_name" label="{{ __('Name') }}"
                        @mouseenter="addFocus" required autofocus />
                </div>
                <div class="mt-0">
                    <x-input-float-label class="block w-full" name="parentDetailsForm.father_nationality" type="text" wire:model="parentDetailsForm.father_nationality"
                        label="{{ __('Nationality') }}" @mouseenter="addFocus" />
                </div>
                <div class="mt-0">
                    <x-select class="block w-full" name="parentDetailsForm.father_qualification" wire:model="parentDetailsForm.father_qualification" label="{{ __('Qualification') }}"
                        @mouseenter="addFocus">
                        <option>-- choose --</option>
                        <option value="High School Diploma">High School Diploma</option>
                        <option value="Bachelor's Degree">Bachelor's Degree</option>
                        <option value="Master's Degree">Master's Degree</option>
                        <option value="Doctorate (Ph.D.)">Doctorate (Ph.D.)</option>
                        <option value="Technical Certification">Technical Certification</option>
                        <option value="Vocational Training">Vocational Training</option>
                    </x-select>
                </div>
                <div class="mt-0">
                    <x-input-float-label class="block w-full" name="parentDetailsForm.father_occupation" type="text" wire:model="parentDetailsForm.father_occupation"
                        label="{{ __('Occupation') }}" @mouseenter="addFocus" />
                </div>
                <div class="mt-0">
                    <x-input-float-label class="block w-full" name="parentDetailsForm.father_annual_income" type="text" wire:model="parentDetailsForm.father_annual_income"
                        label="{{ __('Annual Income') }}" @mouseenter="addFocus" />
                </div>
                <div class="mt-0">
                    <x-input-float-label class="block w-full" name="parentDetailsForm.father_mobile_number" type="text" wire:model="parentDetailsForm.father_mobile_number"
                        label="{{ __('Mobile Number') }}" @mouseenter="addFocus" required autofocus />
                </div>
                <div class="mt-0">
                    <x-input-float-label class="block w-full" name="parentDetailsForm.father_email" type="email" wire:model="parentDetailsForm.father_email" label="{{ __('Email Id') }}"
                        @mouseenter="addFocus" required autofocus />
                </div>
                <div class="mt-0 rounded bg-blue-500 p-2 sm:col-span-4">
                    <h6 class="text-sm font-medium text-white">
                        MOTHER'S DETAILS
                    </h6>
                </div>
                <div class="mt-0 sm:col-span-2">
                    <x-input-float-label class="block w-full" name="parentDetailsForm.mother_name" type="text" wire:model="parentDetailsForm.mother_name" label="{{ __('Name') }}"
                        @mouseenter="addFocus" required autofocus />
                </div>
                <div class="mt-0">
                    <x-input-float-label class="block w-full" name="parentDetailsForm.mother_nationality" type="text" wire:model="parentDetailsForm.mother_nationality"
                        label="{{ __('Nationality') }}" @mouseenter="addFocus" />
                </div>
                <div class="mt-0">
                    <x-select class="block w-full" name="parentDetailsForm.mother_qualification" wire:model="parentDetailsForm.mother_qualification" label="{{ __('Qualification') }}"
                        @mouseenter="addFocus">
                        <option>-- choose --</option>
                        <option value="High School Diploma">High School Diploma</option>
                        <option value="Bachelor's Degree">Bachelor's Degree</option>
                        <option value="Master's Degree">Master's Degree</option>
                        <option value="Doctorate (Ph.D.)">Doctorate (Ph.D.)</option>
                        <option value="Technical Certification">Technical Certification</option>
                        <option value="Vocational Training">Vocational Training</option>
                    </x-select>
                </div>
                <div class="mt-0">
                    <x-input-float-label class="block w-full" name="parentDetailsForm.mother_occupation" type="text" wire:model="parentDetailsForm.mother_occupation"
                        label="{{ __('Occupation') }}" @mouseenter="addFocus" />
                </div>
                <div class="mt-0">
                    <x-input-float-label class="block w-full" name="parentDetailsForm.mother_annual_income" type="text" wire:model="parentDetailsForm.mother_annual_income"
                        label="{{ __('Annual Income') }}" @mouseenter="addFocus" />
                </div>
                <div class="mt-0">
                    <x-input-float-label class="block w-full" name="parentDetailsForm.mother_mobile_number" type="text" wire:model="parentDetailsForm.mother_mobile_number"
                        label="{{ __('Mobile Number') }}" @mouseenter="addFocus" />
                </div>
                <div class="mt-0">
                    <x-input-float-label class="block w-full" name="parentDetailsForm.mother_email" type="email" wire:model="parentDetailsForm.mother_email" label="{{ __('Email Id') }}"
                        @mouseenter="addFocus" />
                </div>

                <div class="mt-0 rounded bg-blue-500 p-2 sm:col-span-4">
                    <h6 class="text-sm font-medium text-white">
                        GUARDIAN'S DETAILS
                    </h6>
                </div>
                <div class="mt-0 sm:col-span-2">
                    <x-input-float-label class="block w-full" name="parentDetailsForm.guardian_name" type="text" wire:model="parentDetailsForm.guardian_name" label="{{ __('Name') }}"
                        @mouseenter="addFocus" />
                </div>
                <div class="mt-0">
                    <x-input-float-label class="block w-full" name="parentDetailsForm.guardian_nationality" type="text" wire:model="parentDetailsForm.guardian_nationality"
                        label="{{ __('Nationality') }}" @mouseenter="addFocus" />
                </div>
                <div class="mt-0">
                    <x-select class="block w-full" name="parentDetailsForm.guardian_qualification" wire:model="parentDetailsForm.guardian_qualification" label="{{ __('Qualification') }}"
                        @mouseenter="addFocus">
                        <option>-- choose --</option>
                        <option value="High School Diploma">High School Diploma</option>
                        <option value="Bachelor's Degree">Bachelor's Degree</option>
                        <option value="Master's Degree">Master's Degree</option>
                        <option value="Doctorate (Ph.D.)">Doctorate (Ph.D.)</option>
                        <option value="Technical Certification">Technical Certification</option>
                        <option value="Vocational Training">Vocational Training</option>
                    </x-select>
                </div>
                <div class="mt-0">
                    <x-input-float-label class="block w-full" name="parentDetailsForm.guardian_occupation" type="text" wire:model="parentDetailsForm.guardian_occupation"
                        label="{{ __('Occupation') }}" @mouseenter="addFocus" />
                </div>
                <div class="mt-0">
                    <x-input-float-label class="block w-full" name="parentDetailsForm.guardian_annual_income" type="text" wire:model="parentDetailsForm.guardian_annual_income"
                        label="{{ __('Annual Income') }}" @mouseenter="addFocus" />
                </div>
                <div class="mt-0">
                    <x-input-float-label class="block w-full" name="parentDetailsForm.guardian_mobile_number" type="text" wire:model="parentDetailsForm.guardian_mobile_number"
                        label="{{ __('Mobile Number') }}" @mouseenter="addFocus" />
                </div>
                <div class="mt-0">
                    <x-input-float-label class="block w-full" name="parentDetailsForm.guardian_email" type="email" wire:model="parentDetailsForm.guardian_email" label="{{ __('Email Id') }}"
                        @mouseenter="addFocus" />
                </div>
            </div>
            <div class="grid gap-4 sm:grid-cols-3" x-show="currentTab === 4">
                <div class="mt-0 rounded bg-blue-500 p-2 sm:col-span-3">
                    <h6 class="text-sm font-medium text-white"> DOCUMENTS </h6>
                </div>
                <div class="mt-0">
                    <label class="@error('photo') text-red-500 @else text-gray-900 @enderror mb-2 block text-sm font-medium" for="photo">Applicant Photo</label>
                    <input
                        class="@error('photo') border-red-600 @else border-gray-300 @enderror block w-full cursor-pointer rounded-lg border bg-gray-50 p-2.5 text-sm text-gray-900 focus:outline-none"
                        type="file" wire:model.blur="photo" required />
                </div>
                <div class="mt-0">
                    <label class="@error('birth_certificate') text-red-500 @else text-gray-900 @enderror mb-2 block text-sm font-medium" for="birth_certificate">Applicant
                        Birth Certificate</label>
                    <input
                        class="@error('birth_certificate') border-red-600 @else border-gray-300 @enderror block w-full cursor-pointer rounded-lg border bg-gray-50 p-2.5 text-sm text-gray-900 focus:outline-none"
                        type="file" wire:model.blur="birth_certificate" required />
                </div>
                <div class="mt-0">
                    <label class="@error('aadhaar') text-red-500 @else text-gray-900 @enderror mb-2 block text-sm font-medium" for="aadhaar">Applicant Aadhaar Card</label>
                    <input
                        class="@error('aadhaar') border-red-600 @else border-gray-300 @enderror block w-full cursor-pointer rounded-lg border bg-gray-50 p-2.5 text-sm text-gray-900 focus:outline-none"
                        type="file" wire:model.blur="aadhaar" required />
                </div>
                <div class="mt-0">
                    <label class="@error('immunization') text-red-500 @else text-gray-900 @enderror mb-2 block text-sm font-medium" for="immunization">
                        Immunization Certificate
                    </label>
                    <input
                        class="@error('immunization') border-red-600 @else border-gray-300 @enderror block w-full cursor-pointer rounded-lg border bg-gray-50 p-2.5 text-sm text-gray-900 focus:outline-none"
                        type="file" wire:model.blur="immunization" required />
                </div>
                <div class="mt-0">
                    <label class="@error('mark_list') text-red-500 @else text-gray-900 @enderror mb-2 block text-sm font-medium" for="mark_list">
                        Previous Exam Mark list
                    </label>
                    <input
                        class="@error('mark_list') border-red-600 @else border-gray-300 @enderror block w-full cursor-pointer rounded-lg border bg-gray-50 p-2.5 text-sm text-gray-900 focus:outline-none"
                        type="file" wire:model.blur="mark_list" />
                </div>
                <div class="mt-0">
                    <label class="@error('tc') text-red-500 @else text-gray-900 @enderror mb-2 block text-sm font-medium" for="tc">
                        Original TC
                    </label>
                    <input class="@error('tc') border-red-600 @else border-gray-300 @enderror block w-full cursor-pointer rounded-lg border bg-gray-50 p-2.5 text-sm text-gray-900 focus:outline-none"
                        type="file" wire:model.blur="tc" />
                </div>
                <div class="mt-0 p-2">
                    <p class="text-sm font-medium text-red-600">Allowed File Formats pdf, jpg, png, jpeg.</p>
                </div>
                <div class="mt-0 p-2">
                </div>
                <div class="mt-0 p-2">
                    <p class="text-sm font-medium text-red-600">Allowed File Size Maximum 1MB.</p>
                </div>
                <div class="mt-0 rounded bg-blue-500 p-2 sm:col-span-3">
                    <h6 class="text-sm font-medium text-white"> Previous Institution </h6>
                </div>
                <div class="mt-0">
                    <x-input-float-label class="block w-full" name="previous_school.institution" type="text" wire:model="previous_school.institution" label="{{ __('Institution') }}"
                        @mouseenter="addFocus" />
                </div>
                <div class="mt-0">
                    <x-input-float-label class="block w-full" name="previous_school.city" type="text" wire:model="previous_school.city" label="{{ __('City/Country') }}"
                        @mouseenter="addFocus" />
                </div>
                <div class="mt-0">
                    <x-input-float-label class="block w-full" name="previous_school.year" type="text" wire:model="previous_school.year" label="{{ __('Year(From-To)') }}"
                        @mouseenter="addFocus" />
                </div>
                <div class="mt-0">
                    <x-input-float-label class="block w-full" name="previous_school.previous_class" type="text" wire:model="previous_school.previous_class" label="{{ __('Class') }}"
                        @mouseenter="addFocus" />
                </div>
                <div class="mt-0">
                    <x-input-float-label class="block w-full" name="previous_school.syllabus" type="text" wire:model="previous_school.syllabus" label="{{ __('Syllabus') }}"
                        @mouseenter="addFocus" />
                </div>
                <div class="mt-0">
                    <x-input-float-label class="block w-full" name="previous_school.reason" type="text" wire:model="previous_school.reason"
                        label="{{ __('Reason for leaving the present school') }}" @mouseenter="addFocus" />
                </div>
                <div class="mt-0 rounded bg-blue-500 p-2 sm:col-span-3">
                    <h6 class="text-sm font-medium text-white"> ACADEMIC </h6>
                </div>
                <input type="text" name="registrationForm.class" wire:model="registrationForm.class" value="hss" hidden>
                <div class="mt-0">
                    <x-select class="block w-full" name="choice_one" wire:model="choice_one" label="{{ __('Choice 1') }}" @mouseenter="addFocus">
                        <option>-- choose --</option>
                        <option value="group-1">group-1</option>
                        <option value="group-2">group-2</option>
                        <option value="group-3">group-3</option>
                        <option value="group-4">group-4</option>
                        <option value="group-5">group-5</option>
                        <option value="group-6">group-6</option>
                        <option value="group-7">group-7</option>
                        <option value="group-8">group-8</option>
                        <option value="group-9">group-9</option>
                        <option value="group-10">group-10</option>
                        <option value="group-11">group-11</option>
                        <option value="group-12">group-12</option>
                        <option value="group-13">group-13</option>
                        <option value="group-14">group-14</option>
                    </x-select>
                </div>
                <div class="mt-0">
                    <x-select class="block w-full" name="choice_one" wire:model="choice_two" label="{{ __('Choice 2') }}" @mouseenter="addFocus">
                        <option>-- choose --</option>
                        <option value="group-1">group-1</option>
                        <option value="group-2">group-2</option>
                        <option value="group-3">group-3</option>
                        <option value="group-4">group-4</option>
                        <option value="group-5">group-5</option>
                        <option value="group-6">group-6</option>
                        <option value="group-7">group-7</option>
                        <option value="group-8">group-8</option>
                        <option value="group-9">group-9</option>
                        <option value="group-10">group-10</option>
                        <option value="group-11">group-11</option>
                        <option value="group-12">group-12</option>
                        <option value="group-13">group-13</option>
                        <option value="group-14">group-14</option>
                    </x-select>
                </div>
                <div class="mt-0">
                    <x-select class="block w-full" name="choice_one" wire:model="choice_three" label="{{ __('Choice 3') }}" @mouseenter="addFocus">
                        <option>-- choose --</option>
                        <option value="group-1">group-1</option>
                        <option value="group-2">group-2</option>
                        <option value="group-3">group-3</option>
                        <option value="group-4">group-4</option>
                        <option value="group-5">group-5</option>
                        <option value="group-6">group-6</option>
                        <option value="group-7">group-7</option>
                        <option value="group-8">group-8</option>
                        <option value="group-9">group-9</option>
                        <option value="group-10">group-10</option>
                        <option value="group-11">group-11</option>
                        <option value="group-12">group-12</option>
                        <option value="group-13">group-13</option>
                        <option value="group-14">group-14</option>
                    </x-select>
                </div>
                <div class="mt-0 p-2 sm:col-span-3">
                    <p class="text-sm font-medium text-red-600">* Enter the group number corresponding to your chosen
                        combination of subjects</p>
                </div>
                <div class="mt-0">
                    <x-select class="block w-full" name="registrationForm.academic_year" wire:model="registrationForm.academic_year" label="{{ __('Academic Year') }}" @mouseenter="addFocus">
                        <option>-- choose --</option>
                        <option value="2023-24"> 2024-25 </option>
                    </x-select>
                </div>
                <div class="mt-0">
                    <x-input-float-label class="block w-full" name="registrationForm.siblings" type="text" wire:model="registrationForm.siblings"
                        label="{{ __('Name of Siblings and Class') }}" @mouseenter="addFocus" />
                </div>
                <div class="mt-0">
                    <x-input-float-label class="block w-full" name="registrationForm.distance" type="text" wire:model="registrationForm.distance"
                        label="{{ __('Distance From Home to School') }}" @mouseenter="addFocus" />
                </div>
                <div class="mt-0">
                    <x-input-float-label class="block w-full" name="registrationForm.break" type="text" wire:model="registrationForm.break" label="{{ __('Break in Academics') }}"
                        @mouseenter="addFocus" />
                </div>
            </div>
            <div class="mt-4 flex items-center justify-end sm:col-span-2">
                <x-secondary-button class="ml-4" x-show="currentTab > 1" @click="currentTab--">
                    {{ __('Previous') }}
                </x-secondary-button>
                <x-secondary-button class="ml-4" x-show="currentTab < 4" wire:click="validateData()">
                    {{ __('Next') }}
                </x-secondary-button>
                <x-secondary-button class="ml-4" x-show="currentTab === 4 && isSubmitted" wire:click="payment()">
                    {{ __('Complete Payment') }}
                </x-secondary-button>
                <x-button class="ml-4" x-show="currentTab === 4 && !isSubmitted">
                    {{ __('Submit') }}
                </x-button>
            </div>
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
<script src="https://pgtest.atomtech.in/staticdata/ots/js/atomcheckout.js"></script>
<script>
    function addFocus(e) {
        e.target.focus();
    }
</script>
