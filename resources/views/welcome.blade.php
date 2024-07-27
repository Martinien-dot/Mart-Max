<!DOCTYPE html>
<html lang="en">
<head>
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>école nationale des sciences appliquées de fès</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

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
    </style>
</head>
<body class="bg-gray-100 text-gray-900 h-screen flex flex-col overflow-hidden">

    <!-- Navbar -->
    @include('layouts.navigation')

    <!-- Main Content -->
    <div class="flex flex-grow overflow-hidden">
        <!-- Sidebar: Gestion de matériel -->
        <div class="bg-white p-6 rounded-lg shadow-lg w-1/6 overflow-y-auto">
            <h1 class="text-2xl font-serif italic text-orange-800 shadow-lg transform rotate-[-1deg]">Gestion de matériel</h1>
            <button type="button" class="focus:outline-none text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-xs px-5 py-2.5 mb-2 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900">
                <a href="{{route('materiel.index')}}">Voir tous les matériels</a>
            </button>
            <div class="pb-4">
                <h3 class="text-sm font-bold mb-4 text-white bg-blue-600 p-0.4 rounded">Gérer matériel</h3>
                <ul class="space-y-2">
                    <li>
                        <a href="{{route('materiel.create')}}" class="block bg-gray-700 text-white hover:bg-purple-700 rounded-lg text-center text-xs w-full max-w-[150px] mx-auto">
                            Ajouter matériel
                        </a>
                    </li>
                    <li>
                        <a href="{{route('materiel.searchToUpdate')}}" class="block bg-gray-700 text-white hover:bg-purple-700 rounded-lg text-center text-xs w-full max-w-[150px] mx-auto">
                            Modifier matériel
                        </a>
                    </li>
                    <li>
                        <a href="{{route('materiel.searchToDelete')}}" class="block bg-gray-700 text-white hover:bg-purple-700 rounded-lg text-center text-xs w-full max-w-[150px] mx-auto">
                            Supprimer matériel
                        </a>
                    </li>
                </ul>
            </div>
            <div class="pb-4">
                <h3 class="text-sm font-bold mb-4 text-white bg-blue-600 p-0.4 rounded">Rechercher matériel</h3>
                <ul class="space-y-2">
                    <li>
                        <a href="{{route('materiel.VchercherDate')}}" class="block bg-gray-700 text-white hover:bg-purple-700 rounded-lg text-center text-xs w-full max-w-[150px] mx-auto">Rechercher par date</a>
                    </li>
                    <li>
                        <a href="{{route('materiel.VchercherParDesignation')}}" class="block bg-gray-700 text-white hover:bg-purple-700 rounded-lg text-center text-xs w-full max-w-[150px] mx-auto">Rechercher par désignation</a>
                    </li>
                    <li>
                        <a href="{{route('materiel.VchercherParCategorie')}}" class="block bg-gray-700 text-white hover:bg-purple-700 rounded-lg text-center text-xs w-full max-w-[150px] mx-auto">Rechercher par catégorie</a>
                    </li>
                </ul>
            </div>
            <div class="pb-4">
                <h3 class="text-sm font-bold mb-4 text-white bg-blue-600 p-0.4 rounded">Affichage des statistiques</h3>
                <ul class="space-y-2">
                    <li>
                        <a href="{{route('materiel.afficherParCategorie')}}" class="block bg-gray-700 text-white hover:bg-purple-700 rounded-lg text-center text-xs w-full max-w-[150px] mx-auto">Afficher par catégorie</a>
                    </li>
                    <li>
                        <a href="{{route('materiel.CoutsParAnnee')}}" class="block bg-gray-700 text-white hover:bg-purple-700 rounded-lg text-center text-xs w-full max-w-[150px] mx-auto">Afficher coûts par année</a>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Main Area: Actualités et produits -->
        <div class="bg-white p-6 rounded-lg shadow-lg flex-1 overflow-y-auto" id="main-area">
            @if(session()->has('success'))
                <div class="mb-4 p-4 bg-green-100 text-green-800 border border-green-300 rounded-lg">
                    {{ session('success') }}
                </div>
            @endif
            @yield('content')
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-white text-center py-4 shadow-inner">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <p class="text-gray-600">&copy; 2024 ENSAFès. Tous droits réservés.</p>
        </div>
    </footer>

</body>
</html>
