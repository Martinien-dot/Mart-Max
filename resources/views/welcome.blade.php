<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page d'Accueil - ENSAFès</title>
    @vite('resources/css/app.css')
    <style>
        .input-bg {
            background-color: #2D2D72; /* Couleur foncée avec une touche de violet */
            color: #F3F4F6; /* Couleur du texte claire pour le contraste */
            padding-left: 1rem; /* Espace à gauche pour le texte */
        }
        .input-border {
            border: 1px solid #4A4A6A; /* Bordure sombre pour plus de visibilité */
        }
        .input-focus {
            border-color: #4A4A6A; /* Couleur de la bordure au focus */
            ring-color: #6366F1; /* Couleur de l'anneau au focus */
        }
        .btn-submit {
            background-color: #3B82F6; /* Couleur de fond du bouton */
            color: white; /* Couleur du texte du bouton */
            border-radius: 0.375rem; /* Coins arrondis */
            padding: 0.5rem 1rem; /* Espacement interne du bouton */
            font-weight: 600; /* Poids de la police du bouton */
        }
        .btn-submit:hover {
            background-color: #2563EB; /* Couleur de fond du bouton au survol */
        }
    </style>
</head>
<body class="bg-gray-100 text-gray-900 h-screen flex flex-col overflow-hidden">

    <!-- Navbar -->
    <nav class="bg-gray shadow-lg">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <!-- Logo and School Name -->
                    <div class="flex-shrink-0">
                    <img class="h-10 w-10 pl-0 ml-0" src="{{ asset('logoensaf.png') }}" alt="Logo de l'École">
                    </div>
                    <div class="ml-2 text-xl font-semibold">
                        Ecole National Des Sciences Appliquées Fès
                    </div>
                </div>
                <!-- Search and History -->
                <div class="flex items-center">
                    <div class="relative">
                        <input type="text" class="border border-gray-300 rounded-full pl-8 pr-4 py-2 w-64 focus:outline-none focus:ring-2 focus:ring-indigo-500" placeholder="Recherche...">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-2 pointer-events-none">
                            <svg class="h-5 w-5 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16.707 16.707a8 8 0 111.414-1.414l4.243 4.243-1.414 1.414-4.243-4.243z"/>
                            </svg>
                        </div>
                    </div>
                    <a href="#" class="ml-4 text-gray-600 hover:text-gray-900">Historique des derniers jours</a>
                </div>
            </div>
        </div>
    </nav>
    @if(session()->has('success'))
        <div class="mb-4 p-4 bg-green-100 text-green-800 border border-green-300 rounded-lg">
            {{ session('success') }}
        </div>
    @endif
    <!-- Main Content -->
    <div class="flex flex-grow overflow-hidden">
        <!-- Sidebar: Gestion de matériel -->
        <div class="bg-white p-6 rounded-lg shadow-lg w-1/6 overflow-y-auto">
        <h1 class="text-2xl font-serif italic text-orange-800 shadow-lg transform rotate-[-1deg]">Gestion de matériel</h1>
        <button type="button" class="focus:outline-none text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-xs px-5 py-2.5 mb-2 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900"><a href="{{route('materiel.index')}}">Voir tous les matériels</a></button>
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
                    <a href="{{route('materiel.searchToDelete')}}" class="block bg-gray-700 text-white text-xxs hover:bg-purple-700 rounded-lg text-center text-xs w-full max-w-[150px] mx-auto">
                        Supprimer matériel
                    </a>
                </li>
            </ul>

            </div>
            <div class="pb-4">
            <h3 class="text-sm font-bold mb-4 text-white bg-blue-600 p-0.4 rounded">Rechercher matériel</h3>
            <ul class="space-y-2">
                <li><a href="#" class="block bg-gray-700 text-white hover:bg-purple-700 rounded-lg text-center text-xs w-full max-w-[150px] mx-auto">Rechercher par date</a></li>
                <li><a href="#" class="block bg-gray-700 text-white hover:bg-purple-700 rounded-lg text-center text-xs w-full max-w-[150px] mx-auto">Rechercher par désignation</a></li>
                <li><a href="#" class="block bg-gray-700 text-white hover:bg-purple-700 rounded-lg text-center text-xs w-full max-w-[150px] mx-auto">Rechercher par catégorie</a></li>
            </ul>
            </div>
            <div class="pb-4">
            <h3 class="text-sm font-bold mb-4 text-white bg-blue-600 p-0.4 rounded">Affichage des statistiques</h3>
            <ul class="space-y-2">
                <li><a href="#" class="block bg-gray-700 text-white hover:bg-purple-700 rounded-lg text-center text-xs w-full max-w-[150px] mx-auto">Afficher par catégorie</a></li>
                <li><a href="#" class="block bg-gray-700 text-white hover:bg-purple-700 rounded-lg text-center text-xs w-full max-w-[150px] mx-auto">Afficher coûts par année</a></li>
            </ul>
            </div>
                <!-- Duplicate sections omitted for brevity -->
        </div>


        <!-- Main Area: Actualités et produits -->
        <div class="bg-white p-6 rounded-lg shadow-lg flex-1 overflow-y-auto"  id="main-area">
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