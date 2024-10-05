@extends('dashboard')

@section('content')
<div class="max-w-6xl mx-auto p-8">
    <h1 class="text-3xl font-bold text-center mb-6 text-gray-900 dark:text-gray-100">Liste des Matériels</h1>

    <div class="mb-4 text-right">
        <a href="{{ route('materiel.create') }}" class="inline-block px-4 py-2 bg-blue-600 text-white font-semibold rounded-lg shadow-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-blue-500 dark:hover:bg-blue-600 dark:focus:ring-blue-400">
            Ajouter un Matériel
        </a>
    </div>

    <table class="w-full border-collapse border border-gray-400 dark:border-gray-600">
        <thead>
            <tr class='bg-gray-200 dark:bg-gray-700'>
                <th class="px-5 py-2 text-center border border-gray-300 dark:border-gray-600 dark:text-gray-200">Numéro d'Ordre</th>
                <th class="px-5 py-2 text-center border border-gray-300 dark:border-gray-600 dark:text-gray-200">Département</th>
                <th class="px-5 py-2 text-center border border-gray-300 dark:border-gray-600 dark:text-gray-200">Catégorie</th>
                <th class="px-5 py-2 text-center border border-gray-300 dark:border-gray-600 dark:text-gray-200">Désignation</th>
                <th class="px-5 py-2 text-center border border-gray-300 dark:border-gray-600 dark:text-gray-200">Fournisseur</th>
                <th class="px-5 py-2 text-center border border-gray-300 dark:border-gray-600 dark:text-gray-200">Prix HT(DH)</th>
                <th class="px-5 py-2 text-center border border-gray-300 dark:border-gray-600 dark:text-gray-200">Date d'Acquisition</th>
                <th class="px-5 py-2 text-center border border-gray-300 dark:border-gray-600 dark:text-gray-200">Modifier</th>
                <th class="px-5 py-2 text-center border border-gray-300 dark:border-gray-600 dark:text-gray-200">Supprimer</th>
            </tr>
        </thead>
        <tbody>
            @foreach($materiels as $materiel)
                <tr class="border-b dark:border-gray-600 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <td class="px-4 py-2 border border-gray-300 dark:border-gray-600">{{ $materiel->numero_ordre }}</td>
                    <td class="px-4 py-2 border border-gray-300 dark:border-gray-600">{{ $materiel->departement }}</td>
                    <td class="px-4 py-2 border border-gray-300 dark:border-gray-600">{{ $materiel->categorie }}</td>
                    <td class="px-4 py-2 border border-gray-300 dark:border-gray-600">{{ $materiel->designation }}</td>
                    <td class="px-4 py-2 border border-gray-300 dark:border-gray-600">{{ $materiel->fournisseur }}</td>
                    <td class="px-4 py-2 border border-gray-300 dark:border-gray-600">{{ $materiel->prix_ht }}</td>
                    <td class="px-4 py-2 border border-gray-300 dark:border-gray-600">{{ $materiel->date_acquisition }}</td>
                    <td class="px-4 py-2 text-center border border-gray-300 dark:border-gray-600">
                        <a href="{{route('materiel.edit', ['materiel' => $materiel->id])}}" class="inline-block px-4 py-2 bg-blue-600 text-white font-semibold rounded-lg shadow-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-blue-500 dark:hover:bg-blue-600 dark:focus:ring-blue-400">
                            Modifier
                        </a>
                    </td>
                    <td class="px-4 py-2 text-center border border-gray-300 dark:border-gray-600">
                        <form action="{{route('materiel.destroy', ['materiel' => $materiel->id])}}" method="POST" onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer ce matériel ?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="inline-block px-4 py-2 bg-red-600 text-white font-semibold rounded-lg shadow-sm hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 dark:bg-red-500 dark:hover:bg-red-600 dark:focus:ring-red-400">
                                Supprimer
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection






























