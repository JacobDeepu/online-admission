<x-guest-layout>
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
                            HS Registration Form
                        </h1>
                        @livewire('hs-registration')
                    </div>
                </div>
            </div>
        </main>

        <!-- Instructions Model -->
        <div x-data="{ modelOpen: true }">
            <div class="fixed inset-0 z-50 overflow-y-auto" role="dialog" aria-labelledby="modal-title" aria-modal="true" x-show="modelOpen">
                <div class="flex min-h-screen items-end justify-center px-4 text-center sm:block sm:p-0 md:items-center">
                    <div class="fixed inset-0 bg-gray-500 bg-opacity-40 transition-opacity" aria-hidden="true" x-cloak x-show="modelOpen"
                        x-transition:enter="transition ease-out duration-300 transform" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                        x-transition:leave="transition ease-in duration-200 transform" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"></div>
                    <div class="my-20 inline-block w-full max-w-2xl transform overflow-hidden rounded-lg bg-white p-8 text-left shadow-xl transition-all 2xl:max-w-2xl" x-cloak x-show="modelOpen"
                        x-transition:enter="transition ease-out duration-300 transform" x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                        x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100" x-transition:leave="transition ease-in duration-200 transform"
                        x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100" x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95">
                        <div class="flex flex-col justify-center text-center">
                            <div class="border-b px-6 py-4">
                                <h2 class="text-base font-semibold text-gray-900 lg:text-xl">
                                    INSTRUCTIONS
                                </h2>
                            </div>
                            <div class="p-6">
                                <h3 class="font-medium text-red-600">READ CAREFULLY THE INSTRUCTIONS GIVEN BEFORE FILLING IN THE APPLICATION FORM.</h3>
                                <ul class="text-md my-4 list-disc space-y-3 text-left text-gray-500">
                                    <li>Fill all required fields.</li>
                                </ul>
                            </div>
                        </div>
                        <div class="flex justify-end space-x-2 border-t p-6">
                            <button
                                class="transform rounded-md bg-blue-500 px-3 py-2 text-sm capitalize tracking-wide text-white transition-colors duration-200 hover:bg-blue-600 focus:bg-blue-500 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-50"
                                @click="modelOpen = false">
                                Continue
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
