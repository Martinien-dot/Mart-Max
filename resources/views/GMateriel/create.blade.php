<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Création d'un Nouveau Matériel</title>
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
<body>
    <nav class="bg-white shadow-md rounded-lg p-4 mb-6 flex items-center justify-between">
            <h1 class="text-2xl font-bold">Création d'un Nouveau Matériel</h1>
            <a href="{{ route('materiel.welcome') }}" class="inline-block px-6 py-3 bg-blue-600 text-white font-semibold rounded-lg shadow-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 transition duration-300 ease-in-out">
                Accueil
            </a>
        </nav>
    <div class="max-w-lg mx-auto bg-white p-8 rounded-lg shadow-lg">
        @if($errors->any())
            <div class="mb-4">
                <ul class="list-disc pl-5 text-red-500">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <fieldset class="border border-blue-600 p-4">
            <legend class="text-2xl font-bold text-blue-600 mb-4 px-2">Ajouter un Nouveau Matériel</legend>
            <form action="{{ route('materiel.enregistrer') }}" method="POST">
                @csrf
                <table class="w-full text-left">
                    <tr>
                        <td class="py-2 px-3">
                            <label for="numero_ordre" class="block text-sm font-medium text-gray-700">Numéro d'Ordre</label>
                        </td>
                        <td class="py-2 px-3">
                            <input type="text" id="numero_ordre" name="numero_ordre" value="{{ old('numero_ordre') }}" class="mt-1 block w-full rounded-md input-bg input-border focus:outline-none focus:ring-1 focus:ring-indigo-500 input-focus" required>
                        </td>
                    </tr>
                    <tr>
                        <td class="py-2 px-3">
                            <label for="departement" class="block text-sm font-medium text-gray-700">Département</label>
                        </td>
                        <td class="py-2 px-3">
                            <select id="departement" name="departement" class="mt-1 block w-full rounded-md input-bg input-border focus:outline-none focus:ring-1 focus:ring-indigo-500 input-focus" required>
                                <option value="GEI" {{ old('departement') == 'GEI' ? 'selected' : '' }}>GEI</option>
                                <option value="GI" {{ old('departement') == 'GI' ? 'selected' : '' }}>GI</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td class="py-2 px-3">
                            <label for="designation" class="block text-sm font-medium text-gray-700">Désignation</label>
                        </td>
                        <td class="py-2 px-3">
                            <input type="text" id="designation" name="designation" value="{{ old('designation') }}" class="mt-1 block w-full rounded-md input-bg input-border focus:outline-none focus:ring-1 focus:ring-indigo-500 input-focus" required>
                        </td>
                    </tr>
                    <tr>
                        <td class="py-2 px-3">
                            <label for="categorie" class="block text-sm font-medium text-gray-700">Catégorie</label>
                        </td>
                        <td class="py-2 px-3">
                            <input type="text" id="categorie" name="categorie" value="{{ old('categorie') }}" class="mt-1 block w-full rounded-md input-bg input-border focus:outline-none focus:ring-1 focus:ring-indigo-500 input-focus" required>
                        </td>
                    </tr>
                    <tr>
                        <td class="py-2 px-3">
                            <label for="fournisseur" class="block text-sm font-medium text-gray-700">Fournisseur</label>
                        </td>
                        <td class="py-2 px-3">
                            <input type="text" id="fournisseur" name="fournisseur" value="{{ old('fournisseur') }}" class="mt-1 block w-full rounded-md input-bg input-border focus:outline-none focus:ring-1 focus:ring-indigo-500 input-focus" required>
                        </td>
                    </tr>
                    <tr>
                        <td class="py-2 px-3">
                            <label for="prix_ht" class="block text-sm font-medium text-gray-700">Prix HT (€)</label>
                        </td>
                        <td class="py-2 px-3">
                            <input type="text" id="prix_ht" name="prix_ht" value="{{ old('prix_ht') }}" class="mt-1 block w-full rounded-md input-bg input-border focus:outline-none focus:ring-1 focus:ring-indigo-500 input-focus" required>
                        </td>
                    </tr>
                    <tr>
                        <td class="py-2 px-3">
                            <label for="date_acquisition" class="block text-sm font-medium text-gray-700">Date d'Acquisition</label>
                        </td>
                        <td class="py-2 px-3">
                            <input type="date" id="date_acquisition" name="date_acquisition" value="{{ old('date_acquisition') }}" class="mt-1 block w-full rounded-md input-bg input-border focus:outline-none focus:ring-1 focus:ring-indigo-500 input-focus" required>
                        </td>
                    </tr>
                </table>
                <div class="mt-6 text-center">
                    <button type="submit" class="btn-submit">Ajouter le Matériel</button>
                </div>
            </form>
        </fieldset>
    </div>
</body>
</html>


