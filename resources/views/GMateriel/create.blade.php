@extends('dashboard')

@section('content')
    <div class="max-w-lg mx-auto bg-white dark:bg-gray-800 p-8 rounded-lg shadow-lg">
        @if($errors->any())
            <div class="mb-4">
                <ul class="list-disc pl-5 text-red-500 dark:text-red-400">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <fieldset class="border border-blue-600 dark:border-blue-400 p-4">
            <legend class="text-2xl font-bold text-blue-600 dark:text-blue-400 mb-4 px-2">Ajouter un Nouveau Matériel</legend>
            <form action="{{ route('materiel.enregistrer') }}" method="POST">
                @csrf
                <table class="w-full text-left">
                    <tr>
                        <td class="py-2 px-3">
                            <label for="numero_ordre" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Numéro d'Ordre</label>
                        </td>
                        <td class="py-2 px-3">
                            <input type="text" id="numero_ordre" name="numero_ordre" value="{{ old('numero_ordre') }}" class="mt-1 block w-full rounded-md input-bg input-border focus:outline-none focus:ring-1 focus:ring-indigo-500 input-focus" required>
                        </td>
                    </tr>
                    <tr>
                        <td class="py-2 px-3">
                            <label for="departement" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Département</label>
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
                            <label for="designation" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Désignation</label>
                        </td>
                        <td class="py-2 px-3">
                            <input type="text" id="designation" name="designation" value="{{ old('designation') }}" class="mt-1 block w-full rounded-md input-bg input-border focus:outline-none focus:ring-1 focus:ring-indigo-500 input-focus" required>
                        </td>
                    </tr>
                    <tr>
                        <td class="py-2 px-3">
                            <label for="categorie" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Catégorie</label>
                        </td>
                        <td class="py-2 px-3">
                            <input type="text" id="categorie" name="categorie" value="{{ old('categorie') }}" class="mt-1 block w-full rounded-md input-bg input-border focus:outline-none focus:ring-1 focus:ring-indigo-500 input-focus" required>
                        </td>
                    </tr>
                    <tr>
                        <td class="py-2 px-3">
                            <label for="fournisseur" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Fournisseur</label>
                        </td>
                        <td class="py-2 px-3">
                            <input type="text" id="fournisseur" name="fournisseur" value="{{ old('fournisseur') }}" class="mt-1 block w-full rounded-md input-bg input-border focus:outline-none focus:ring-1 focus:ring-indigo-500 input-focus" required>
                        </td>
                    </tr>
                    <tr>
                        <td class="py-2 px-3">
                            <label for="prix_ht" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Prix HT (€)</label>
                        </td>
                        <td class="py-2 px-3">
                            <input type="text" id="prix_ht" name="prix_ht" value="{{ old('prix_ht') }}" class="mt-1 block w-full rounded-md input-bg input-border focus:outline-none focus:ring-1 focus:ring-indigo-500 input-focus" required>
                        </td>
                    </tr>
                    <tr>
                        <td class="py-2 px-3">
                            <label for="date_acquisition" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Date d'Acquisition</label>
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
@endsection

