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
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 text-gray-900 h-screen flex flex-col justify-between">

    <div class="flex-grow flex flex-col items-center justify-center" style="background-image: url('{{ 'Ensa_fes.jpg' }}');">
        <h1 class="text-4xl font-bold text-gray-800 mb-8">Gestion de Matériel ENSA</h1>
        
        <!-- Bloc de connexion -->
        <div class="bg-gray-300 shadow-md rounded-lg p-6 mb-6 w-80 text-center">
            <h2 class="text-xl font-semibold text-gray-700">Se connecter</h2>
            <p class="text-gray-600 mb-4">Accédez à votre compte pour gérer le matériel</p>
            <a href="{{ route('login') }}" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                Connexion
            </a>
        </div>
        

        <!-- Bloc des autres sites -->
        <div class="bg-gray-300 shadow-md rounded-lg p-6 mb-6 w-80 text-center">
            <h2 class="text-xl font-semibold text-gray-700">Site Principal ENSA Fès</h2>
            <p class="text-gray-600 mb-4">Visitez le site officiel de l'ENSA Fès</p>
            <a href="https://www.ensaf.ac.ma" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">
                Visiter
            </a>
        </div>

        <div class="bg-gray-300 shadow-md rounded-lg p-6 mb-6 w-80 text-center">
            <h2 class="text-xl font-semibold text-gray-700">Portail Étudiant ENSA</h2>
            <p class="text-gray-600 mb-4">Accédez au portail des étudiants de l'ENSA</p>
            <a href="https://dws.ensaf.ac.ma/" class="bg-purple-600 text-white px-4 py-2 rounded hover:bg-purple-700">
                Visiter
            </a>
        </div>
        </div>

    <footer class="bg-white w-full py-4">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <p class="text-gray-600">&copy; 2024 ENSAFès. Tous droits réservés.</p>
        </div>
    </footer>

</body>
</html>


