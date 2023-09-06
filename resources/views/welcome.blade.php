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
                            @livewire('registration-form')
                        </div>
                    </div>
                </div>
            </main>
        </div>
        @livewireScripts
    </body>

</html>
