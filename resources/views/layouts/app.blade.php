<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>École Nationale des Sciences Appliquées de Fès</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
 
    <script>
        // On page load or when changing themes, best to add inline in `head` to avoid FOUC
        if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark')
        }
    </script>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        .input-bg {
            background-color: #2D2D72;
            color: #F3F4F6;
            padding-left: 1rem;
        }
        .input-border {
            border: 1px solid #4A4A6A;
        }
        .input-focus {
            border-color: #4A4A6A;
            ring-color: #6366F1;
        }
        .btn-submit {
            background-color: #3B82F6;
            color: white;
            border-radius: 0.375rem;
            padding: 0.5rem 1rem;
            font-weight: 600;
        }
        .btn-submit:hover {
            background-color: #2563EB;
        }
        .btn-submit:hover {
            background-color: #2563EB;
        }
        /* Custom styles for dark mode toggle button */
        .icon {
            width: 24px;
            height: 24px;
        }
    </style>
</head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @isset($header)
                <header class="bg-white dark:bg-gray-800 shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endisset


            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
        <footer class="bg-white dark:bg-gray-800 text-center py-4 shadow-inner">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <p class="text-gray-600 dark:text-gray-400">&copy; 2024 ENSAFès. Tous droits réservés.</p>
        </div>
    </footer>
        <script>
        // Dark mode toggle logic
        const themeToggleBtn = document.getElementById('theme-toggle');
        const sunIcon = document.getElementById('sun-icon');
        const moonIcon = document.getElementById('moon-icon');

        // Load theme from localStorage
        if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
            sunIcon.classList.add('hidden');
            moonIcon.classList.remove('hidden');
        } else {
            document.documentElement.classList.remove('dark');
            sunIcon.classList.remove('hidden');
            moonIcon.classList.add('hidden');
        }

        themeToggleBtn.addEventListener('click', () => {
            document.documentElement.classList.toggle('dark');
            const isDarkMode = document.documentElement.classList.contains('dark');
            localStorage.setItem('color-theme', isDarkMode ? 'dark' : 'light');
            sunIcon.classList.toggle('hidden', isDarkMode);
            moonIcon.classList.toggle('hidden', !isDarkMode);
        });
    </script>
    </body>
</html>
