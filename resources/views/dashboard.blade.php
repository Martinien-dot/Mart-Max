<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

     <!-- Main Content -->
     <div class="flex flex-grow overflow-hidden">
        <!-- Sidebar: Gestion de matériel -->
        <div class="bg-gray-0 dark:bg-gray-800 p-6 rounded-lg shadow-lg w-1/6 max-h-screen overflow-y-auto">
    <h1 class="text-3xl font-bold text-gray-900 dark:text-gray-100 mb-8">Gestion de matériel</h1>

    <!-- Voir tous les matériels -->
    <a href="{{ route('materiel.index') }}" class="block flex items-center text-gray-700 dark:text-gray-300 hover:bg-blue-100 dark:hover:bg-blue-900 hover:text-blue-700 dark:hover:text-blue-200 rounded-lg px-4 py-3 mb-3 transition duration-300">
        <!-- Icône liste -->
        <svg class="w-5 h-5 mr-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
        </svg>
        Voir tous les matériels
    </a>

    <!-- Bloc: Gérer matériel avec Dropdown -->
    <div x-data="{ open: false }" class="pb-6">
        <button @click="open = !open" class="w-full flex items-center p-2 text-xl font-semibold text-gray-800 dark:text-gray-200 transition duration-75 group hover:bg-gray-100 dark:hover:bg-gray-900">
            <!-- Icône engrenage -->
            <svg class="w-5 h-5 mr-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v8m0 0l4-4m-4 4l-4-4" />
            </svg>
            Gérer matériel
            <svg x-show="!open" class="w-5 h-5 ml-auto" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
            </svg>
            <svg x-show="open" class="w-5 h-5 ml-auto" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7" />
            </svg>
        </button>
        <ul x-show="open" class="space-y-3 pl-6 mt-2">
            <li>
                <a href="{{ route('materiel.create') }}" class="block flex items-center text-gray-700 dark:text-gray-300 hover:bg-green-100 dark:hover:bg-green-900 hover:text-green-700 dark:hover:text-green-200 rounded-lg px-4 py-3 transition duration-300">
                    <!-- Icône ajouter -->
                    <svg class="w-5 h-5 mr-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                    </svg>
                    Ajouter matériel
                </a>
            </li>
            <li>
                <a href="{{ route('materiel.searchToUpdate') }}" class="block flex items-center text-gray-700 dark:text-gray-300 hover:bg-yellow-100 dark:hover:bg-yellow-900 hover:text-yellow-700 dark:hover:text-yellow-200 rounded-lg px-4 py-3 transition duration-300">
                    <!-- Icône modifier -->
                    <svg class="w-5 h-5 mr-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 3.375l7.125 7.125a3 3 0 010 4.243l-8.25 8.25A3 3 0 0112 19.5H8.625a2.625 2.625 0 01-2.625-2.625V15m10.5-10.5L6.75 13.5" />
                    </svg>
                    Modifier matériel
                </a>
            </li>
            <li>
                <a href="{{ route('materiel.searchToDelete') }}" class="block flex items-center text-gray-700 dark:text-gray-300 hover:bg-red-100 dark:hover:bg-red-900 hover:text-red-700 dark:hover:text-red-200 rounded-lg px-4 py-3 transition duration-300">
                    <!-- Icône supprimer -->
                    <svg class="w-5 h-5 mr-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12H9m3-9v6m3 6h3a2 2 0 002-2v-1m-7 1H5m0 0V5a2 2 0 012-2h10a2 2 0 012 2v1" />
                    </svg>
                    Supprimer matériel
                </a>
            </li>
        </ul>
    </div>

    <!-- Bloc: Rechercher matériel avec Dropdown -->
    <div x-data="{ open: false }" class="pb-6">
        <button @click="open = !open" class="w-full flex items-center p-2 text-xl font-semibold text-gray-800 dark:text-gray-200 transition duration-75 group hover:bg-gray-100 dark:hover:bg-gray-900">
            <!-- Icône recherche -->
            <svg class="w-5 h-5 mr-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 4a6 6 0 016 6c0 1.445-.529 2.775-1.414 3.586l3.168 3.168a1 1 0 01-1.414 1.414l-3.168-3.168A6 6 0 1010 4z" />
            </svg>
            Rechercher matériel
            <svg x-show="!open" class="w-5 h-5 ml-auto" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
            </svg>
            <svg x-show="open" class="w-5 h-5 ml-auto" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7" />
            </svg>
        </button>
        <ul x-show="open" class="space-y-3 pl-6 mt-2">
            <li>
                <a href="{{ route('materiel.VchercherDate') }}" class="block flex items-center text-gray-700 dark:text-gray-300 hover:bg-purple-100 dark:hover:bg-purple-900 hover:text-purple-700 dark:hover:text-purple-200 rounded-lg px-4 py-3 transition duration-300">
                    <!-- Icône calendrier -->
                    <svg class="w-5 h-5 mr-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 3v1a2 2 0 002 2h2a2 2 0 012 2v12a2 2 0 01-2 2h-2a2 2 0 00-2 2v1M8 3v1a2 2 0 00-2 2H4a2 2 0 00-2 2v12a2 2 0 002 2h2a2 2 0 002 2v1" />
                    </svg>
                    Rechercher par date
                </a>
            </li>
            <li>
                <a href="{{ route('materiel.VchercherParDesignation') }}" class="block flex items-center text-gray-700 dark:text-gray-300 hover:bg-purple-100 dark:hover:bg-purple-900 hover:text-purple-700 dark:hover:text-purple-200 rounded-lg px-4 py-3 transition duration-300">
                    <!-- Icône étiquette -->
                    <svg class="w-5 h-5 mr-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 3.375l7.125 7.125a3 3 0 010 4.243l-8.25 8.25A3 3 0 0112 19.5H8.625a2.625 2.625 0 01-2.625-2.625V15m10.5-10.5L6.75 13.5" />
                    </svg>
                    Rechercher par désignation
                </a>
            </li>
            <li>
                <a href="{{ route('materiel.VchercherParCategorie') }}" class="block flex items-center text-gray-700 dark:text-gray-300 hover:bg-purple-100 dark:hover:bg-purple-900 hover:text-purple-700 dark:hover:text-purple-200 rounded-lg px-4 py-3 transition duration-300">
                    <!-- Icône archive -->
                    <svg class="w-5 h-5 mr-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7h18M4 7l2-4h12l2 4M5 7v12a2 2 0 002 2h10a2 2 0 002-2V7" />
                    </svg>
                    Rechercher par catégorie
                </a>
            </li>
        </ul>
    </div>

    <!-- Bloc: Affichage des statistiques avec Dropdown -->
    <div x-data="{ open: false }" class="pb-6">
        <button @click="open = !open" class="w-full flex items-center p-2 text-xl font-semibold text-gray-800 dark:text-gray-200 transition duration-75 group hover:bg-gray-100 dark:hover:bg-gray-900">
            <!-- Icône graphique -->
            <svg class="w-5 h-5 mr-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3v18h18V3H3zM8 8h2v2H8V8zm0 4h2v6H8v-6zm4-4h2v10h-2V8zm4 6h2v4h-2v-4z" />
            </svg>
            Affichage des statistiques
            <svg x-show="!open" class="w-5 h-5 ml-auto" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
            </svg>
            <svg x-show="open" class="w-5 h-5 ml-auto" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7" />
            </svg>
        </button>
        <ul x-show="open" class="space-y-3 pl-6 mt-2">
            <li>
                <a href="{{ route('materiel.afficherParCategorie') }}" class="block flex items-center text-gray-700 dark:text-gray-300 hover:bg-teal-100 dark:hover:bg-teal-900 hover:text-teal-700 dark:hover:text-teal-200 rounded-lg px-4 py-3 transition duration-300">
                    <!-- Icône cube -->
                    <svg class="w-5 h-5 mr-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 2l8 4-8 4-8-4 8-4zm0 10v8l-8-4 8-4zm0 0h8l-8 4-8-4h8z" />
                    </svg>
                    Afficher par catégorie
                </a>
            </li>
            <li>
                <a href="{{ route('materiel.CoutsParAnnee') }}" class="block flex items-center text-gray-700 dark:text-gray-300 hover:bg-teal-100 dark:hover:bg-teal-900 hover:text-teal-700 dark:hover:text-teal-200 rounded-lg px-4 py-3 transition duration-300">
                    <!-- Icône dollar -->
                    <svg class="w-5 h-5 mr-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v2M12 18v2m6-10h2m-18 0h2m2 8H6a2 2 0 01-2-2V4a2 2 0 012-2h6M8 18h8a2 2 0 002-2v-2a2 2 0 00-2-2H8a2 2 0 00-2 2v2a2 2 0 002 2z" />
                    </svg>
                    Afficher coûts par année
                </a>
            </li>
        </ul>
    </div>

    <!-- Actions: Exporter la base de données avec Dropdown -->
    <div x-data="{ open: false }" class="pb-6">
        <button @click="open = !open" class="w-full flex items-center p-2 text-xl font-semibold text-gray-800 dark:text-gray-200 transition duration-75 group hover:bg-gray-100 dark:hover:bg-gray-900">
            <!-- Icône téléchargement -->
            <svg class="w-5 h-5 mr-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 14h16l-2 2H6l-2-2zm0 0V6h16v8" />
            </svg>
            Exporter la base de données
            <svg x-show="!open" class="w-5 h-5 ml-auto" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
            </svg>
            <svg x-show="open" class="w-5 h-5 ml-auto" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7" />
            </svg>
        </button>
        <ul x-show="open" class="space-y-3 pl-6 mt-2">
            <li>
                <a href="{{ route('materiel.exportToTxt') }}" class="block flex items-center text-white bg-blue-600 dark:bg-blue-700 hover:bg-blue-700 dark:hover:bg-blue-800 rounded-lg px-4 py-3 transition duration-300">
                    <!-- Icône fichier texte -->
                    <svg class="w-5 h-5 mr-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v2M12 18v2m6-10h2m-18 0h2m2 8H6a2 2 0 01-2-2V4a2 2 0 012-2h6M8 18h8a2 2 0 002-2v-2a2 2 0 00-2-2H8a2 2 0 00-2 2v2a2 2 0 002 2z" />
                    </svg>
                    Télécharger DB (TXT)
                </a>
            </li>
            <li>
                <a href="{{ route('materiel.exportToExcel') }}" class="block flex items-center text-white bg-blue-600 dark:bg-blue-700 hover:bg-blue-700 dark:hover:bg-blue-800 rounded-lg px-4 py-3 transition duration-300">
                    <!-- Icône fichier Excel -->
                    <svg class="w-5 h-5 mr-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 14h16l-2 2H6l-2-2zm0 0V6h16v8" />
                    </svg>
                    Télécharger DB (Excel)
                </a>
            </li>
        </ul>
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
    
</x-app-layout>
