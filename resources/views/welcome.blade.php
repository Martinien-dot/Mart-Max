<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>École Nationale des Sciences Appliquées de Fès</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

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
<body class="bg-gray-100 dark:bg-gray-900 text-gray-900 dark:text-gray-100 h-screen flex flex-col overflow-hidden">

    <!-- Navbar -->
    @include('layouts.navigation')

    <!-- Dark mode toggle button -->
    <div class="p-4 flex justify-end">
        <button id="theme-toggle" class="text-gray-800 dark:text-gray-200 focus:outline-none">
            <!-- Sun Icon -->
            <svg id="sun-icon" xmlns="http://www.w3.org/2000/svg" class="icon hidden" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1M12 20v1M4.22 4.22l.707.707M17.07 17.07l.707.707M3 12h1M20 12h1M4.22 19.78l.707-.707M17.07 6.93l.707-.707M12 7a5 5 0 1 0 0 10 5 5 0 0 0 0-10z"/>
            </svg>
            <!-- Moon Icon -->
            <svg id="moon-icon" xmlns="http://www.w3.org/2000/svg" class="icon hidden" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.293 16.293a8 8 0 1 0-1.414 1.414A6 6 0 0 1 16 14a6 6 0 0 1 1.293 2.293z"/>
            </svg>
        </button>
    </div>

    <!-- Main Content -->
    <div class="flex flex-grow overflow-hidden">
        <!-- Sidebar: Gestion de matériel -->
        <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-lg w-1/6 max-h-screen overflow-y-auto">
            <h1 class="text-3xl font-bold text-gray-900 dark:text-gray-100 mb-8">Gestion de matériel</h1>
            
            <a href="{{ route('materiel.index') }}" class="block text-gray-700 dark:text-gray-300 hover:bg-blue-100 dark:hover:bg-blue-900 hover:text-blue-700 dark:hover:text-blue-200 rounded-lg px-4 py-3 mb-3 transition duration-300">
                Voir tous les matériels
            </a>

            <div class="pb-6">
                <h3 class="text-xl font-semibold mb-4 text-gray-800 dark:text-gray-200">Gérer matériel</h3>
                <ul class="space-y-3">
                    <li>
                        <a href="{{ route('materiel.create') }}" class="block text-gray-700 dark:text-gray-300 hover:bg-green-100 dark:hover:bg-green-900 hover:text-green-700 dark:hover:text-green-200 rounded-lg px-4 py-3 transition duration-300">
                            Ajouter matériel
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('materiel.searchToUpdate') }}" class="block text-gray-700 dark:text-gray-300 hover:bg-yellow-100 dark:hover:bg-yellow-900 hover:text-yellow-700 dark:hover:text-yellow-200 rounded-lg px-4 py-3 transition duration-300">
                            Modifier matériel
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('materiel.searchToDelete') }}" class="block text-gray-700 dark:text-gray-300 hover:bg-red-100 dark:hover:bg-red-900 hover:text-red-700 dark:hover:text-red-200 rounded-lg px-4 py-3 transition duration-300">
                            Supprimer matériel
                        </a>
                    </li>
                </ul>
            </div>

            <div class="pb-6">
                <h3 class="text-xl font-semibold mb-4 text-gray-800 dark:text-gray-200">Rechercher matériel</h3>
                <ul class="space-y-3">
                    <li>
                        <a href="{{ route('materiel.VchercherDate') }}" class="block text-gray-700 dark:text-gray-300 hover:bg-purple-100 dark:hover:bg-purple-900 hover:text-purple-700 dark:hover:text-purple-200 rounded-lg px-4 py-3 transition duration-300">Rechercher par date</a>
                    </li>
                    <li>
                        <a href="{{ route('materiel.VchercherParDesignation') }}" class="block text-gray-700 dark:text-gray-300 hover:bg-purple-100 dark:hover:bg-purple-900 hover:text-purple-700 dark:hover:text-purple-200 rounded-lg px-4 py-3 transition duration-300">Rechercher par désignation</a>
                    </li>
                    <li>
                        <a href="{{ route('materiel.VchercherParCategorie') }}" class="block text-gray-700 dark:text-gray-300 hover:bg-purple-100 dark:hover:bg-purple-900 hover:text-purple-700 dark:hover:text-purple-200 rounded-lg px-4 py-3 transition duration-300">Rechercher par catégorie</a>
                    </li>
                </ul>
            </div>

            <div class="pb-6">
                <h3 class="text-xl font-semibold mb-4 text-gray-800 dark:text-gray-200">Affichage des statistiques</h3>
                <ul class="space-y-3">
                    <li>
                        <a href="{{ route('materiel.afficherParCategorie') }}" class="block text-gray-700 dark:text-gray-300 hover:bg-teal-100 dark:hover:bg-teal-900 hover:text-teal-700 dark:hover:text-teal-200 rounded-lg px-4 py-3 transition duration-300">Afficher par catégorie</a>
                    </li>
                    <li>
                        <a href="{{ route('materiel.CoutsParAnnee') }}" class="block text-gray-700 dark:text-gray-300 hover:bg-teal-100 dark:hover:bg-teal-900 hover:text-teal-700 dark:hover:text-teal-200 rounded-lg px-4 py-3 transition duration-300">Afficher coûts par année</a>
                    </li>
                </ul>
            </div>

            <div class="flex flex-col space-y-3">
                <a href="{{ route('materiel.exportToTxt') }}" class="block text-white bg-blue-600 dark:bg-blue-700 hover:bg-blue-700 dark:hover:bg-blue-800 rounded-lg px-4 py-3 transition duration-300 text-center">
                    Télécharger DB (TXT)
                </a>
                <a href="{{ route('materiel.exportToExcel') }}" class="block text-white bg-blue-600 dark:bg-blue-700 hover:bg-blue-700 dark:hover:bg-blue-800 rounded-lg px-4 py-3 transition duration-300 text-center">
                    Télécharger DB (Excel)
                </a>
            </div>
        </div>

        <!-- Main Area: Actualités et produits -->
        <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-lg flex-1 overflow-y-auto" id="main-area">
            @if(session()->has('success'))
                <div class="mb-4 p-4 bg-green-100 dark:bg-green-900 text-green-800 dark:text-green-200 border border-green-300 dark:border-green-700 rounded-lg">
                    {{ session('success') }}
                </div>
            @endif
            @yield('content')
        </div>
    </div>

    <!-- Footer -->
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

