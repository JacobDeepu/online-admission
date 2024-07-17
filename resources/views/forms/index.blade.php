<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Forms') }}
        </h2>
    </x-slot>

    <div class="mx-auto max-w-7xl py-10 sm:px-6 lg:px-8">
        <div class="overflow-hidden bg-white shadow-xl sm:rounded-lg">
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <div class="flex items-center justify-between">
                    <form class="m-4" method="GET" action="{{ route('forms.index') }}">
                        <div class="flex w-56">
                            <div class="relative w-full">
                                <input class="z-20 inline-flex w-full rounded-lg border border-gray-300 bg-gray-50 py-2 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500" name="search"
                                    type="search" value="{{ request()->input('search') }}" placeholder="Search..." required />
                                <x-button class="absolute right-0 top-0">
                                    <svg class="h-5 w-5" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                    </svg>
                                    <span class="sr-only">Search</span>
                                </x-button>
                            </div>
                        </div>
                    </form>
                </div>
                <table class="w-full text-left text-sm text-gray-500">
                    <thead class="bg-gray-50 text-xs uppercase text-gray-700">
                        <tr>
                            <th class="px-6 py-3" scope="col">
                                {{ __('Sl No.') }}
                            </th>
                            <th class="px-6 py-3" scope="col">
                                {{ __('Name') }}
                            </th>
                            <th class="px-6 py-3" scope="col">
                                {{ __('Actions') }}
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($forms as $form)
                            <tr class="border-b bg-white">
                                <td class="whitespace-nowrap px-6 py-4 font-medium text-gray-900">
                                    {{ $loop->iteration }}
                                </td>
                                <td class="whitespace-nowrap px-6 py-4 font-medium text-gray-900">
                                    {{ $form->form_name }}
                                </td>
                                <td class="whitespace-nowrap px-6 py-4">
                                    <x-link href="{{ route('export', $form) }}" target="_blank">
                                        <svg class="feather feather-check-square mr-1 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                            <polyline points="9 11 12 14 22 4"></polyline>
                                            <path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path>
                                        </svg> View
                                    </x-link>
                                </td>
                            </tr>
                        @empty
                            <tr class="border-b bg-white">
                                <td class="whitespace-nowrap px-6 py-4 font-medium text-gray-900" colspan="2">
                                    {{ __('No forms Found') }}
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
                <div class="px-6 py-4">
                    {{ $forms->appends(request()->query())->links() }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
