<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page d'Accueil - Nom de l'École</title>
    @vite('resources/css/app.css')
    <style>
        .custom-width {
            max-width: 8rem; /* ou la largeur de votre choix */
            overflow: auto;
            white-space: nowrap;
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
                        <img class="h-15 w-10 pl-0 ml-0" src="logoensaf.png" alt="Logo de l'École">
                    </div>
                    <div class="ml-2 text-xl font-semibold">
                        Nom de l'École
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

    <!-- Main Content -->
    <div class="flex flex-grow overflow-hidden">
        <!-- Sidebar: Gestion de matériel -->
        <div class="bg-white p-6 rounded-lg shadow-lg w-1/4 overflow-y-auto">
        <h1 class="text-2xl font-serif italic text-orange-800 shadow-lg transform rotate-[-1deg]">Gestion de matériel</h1>

            <div class="pb-4">
            <h3 class="text-lg font-bold mb-4 text-white bg-blue-600 p-0.4 rounded">Gérer matériel</h3>
            <ul class="space-y-2">
                <li>
                    <a href="#" class="block bg-purple-500 text-white hover:bg-purple-700 rounded-lg text-center w-full max-w-[300px] mx-auto">
                        Ajouter matériel
                    </a>
                </li>
                <li>
                    <a href="#" class="block bg-purple-500 text-white hover:bg-purple-700 rounded-lg text-center w-full max-w-[300px] mx-auto">
                        Modifier matériel
                    </a>
                </li>
                <li>
                    <a href="#" class="block bg-purple-500 text-white text-xxs hover:bg-purple-700 rounded-lg text-center w-full max-w-[300px] mx-auto">
                        Supprimer matériel
                    </a>
                </li>
            </ul>

            </div>
            <div class="pb-4">
            <h3 class="text-lg font-bold mb-4 text-white bg-blue-600 p-0.4 rounded">Rechercher matériel</h3>
            <ul class="space-y-2">
                <li><a href="#" class="block bg-purple-500 text-white hover:bg-purple-700 rounded-lg text-center w-full max-w-[300px] mx-auto">Rechercher par date</a></li>
                <li><a href="#" class="block bg-purple-500 text-white hover:bg-purple-700 rounded-lg text-center w-full max-w-[300px] mx-auto">Rechercher par désignation</a></li>
                <li><a href="#" class="block bg-purple-500 text-white hover:bg-purple-700 rounded-lg text-center w-full max-w-[300px] mx-auto">Rechercher par catégorie</a></li>
            </ul>
            </div>
            <div class="pb-4">
            <h3 class="text-lg font-bold mb-4 text-white bg-blue-600 p-0.4 rounded">Affichage des statistiques</h3>
            <ul class="space-y-2">
                <li><a href="#" class="block bg-purple-500 text-white hover:bg-purple-700 rounded-lg text-center w-full max-w-[300px] mx-auto">Afficher par catégorie</a></li>
                <li><a href="#" class="block bg-purple-500 text-white hover:bg-purple-700 rounded-lg text-center w-full max-w-[300px] mx-auto">Afficher coûts par année</a></li>
            </ul>
            </div>
                <!-- Duplicate sections omitted for brevity -->
        </div>

        <!-- Main Area: Actualités et produits -->
        <div class="bg-white p-6 rounded-lg shadow-lg flex-1 overflow-y-auto">
        <div class="max-w-6xl mx-auto p-8">
       <h1 class="text-3xl font-bold text-center mb-6">Liste des Matériels</h1>


       @if(session()->has('success'))
           <div class="mb-4 p-4 bg-green-100 text-green-800 border border-green-300 rounded-lg">
               {{ session('success') }}
           </div>
       @endif


       <div class="mb-4 text-right">
           <a href="{{ route('materiel.create') }}" class="inline-block px-4 py-2 bg-blue-600 text-white font-semibold rounded-lg shadow-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
               Ajouter un Matériel
           </a>
       </div>


       <table class="w-full border-collapse border border-slate-400">
           <tr>
           <th class="px-5 py-2 text-center border border-slate-300">Numéro d'Ordre</th>
               <th class="px-5 py-2 text-center border border-slate-300">Département</th>
               <th class="px-5 py-2 text-center border border-slate-300">Catégorie</th>
               <th class="px-5 py-2 text-center border border-slate-300">Désignation</th>
               <th class="px-5 py-2 text-center border border-slate-300">Fournisseur</th>
               <th class="px-5 py-2 text-center border border-slate-300">Prix HT</th>
               <th class="px-5 py-2 text-center border border-slate-300">Date d'Acquisition</th>
               <th class="px-5 py-2 text-center border border-slate-300">Modifier</th>
               <th class="px-5 py-2 text-center border border-slate-300">Supprimer</th>
           </tr>
           @foreach($materiels as $materiel)
               <tr class="border-b hover:bg-gray-50">
                   <td class="px-4 py-2 border border-slate-300 custom-width">{{ $materiel->numero_ordre }}</td>
                   <td class="px-4 py-2 border border-slate-300 custom-width">{{ $materiel->departement }}</td>
                   <td class="px-4 py-2 border border-slate-300 custom-width">{{ $materiel->categorie }}</td>
                   <td class="px-4 py-2 border border-slate-300 custom-width">{{ $materiel->designation }}</td>
                   <td class="px-4 py-2 border border-slate-300 custom-width">{{ $materiel->fournisseur }}</td>
                   <td class="px-4 py-2 border border-slate-300 custom-width">{{ $materiel->prix_ht }}</td>
                   <td class="px-4 py-2 border border-slate-300 custom-width">{{ $materiel->date_acquisition }}</td>
                   <td class="px-4 py-2 text-center border border-slate-300">
                       <a href="{{route('materiel.edit', ['materiel' => $materiel->id])}}" class="inline-block px-4 py-2 bg-blue-600 text-white font-semibold rounded-lg shadow-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
                           Modifier
                       </a>
                       </td>
                   <td class="px-4 py-2 text-center border border-slate-300">
                       <form action="{{route('materiel.destroy', ['materiel' => $materiel->id])}}" method="POST" onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer ce matériel ?');">
                           @csrf
                           @method('DELETE')
                           <button type="submit" class="inline-block px-4 py-2 bg-red-600 text-white font-semibold rounded-lg shadow-sm hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500">
                               Supprimer
                           </button>
                       </form>
                   </td>
               </tr>
           @endforeach
       </table>
    </div>
    </div>
</div>

    <!-- Footer -->
    <footer class="bg-white text-center py-4 shadow-inner">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <p class="text-gray-600">&copy; 2024 Nom de l'École. Tous droits réservés.</p>
        </div>
    </footer>
</body>
</html>




























