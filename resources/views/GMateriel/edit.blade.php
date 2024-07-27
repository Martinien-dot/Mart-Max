
@extends('welcome')

@section('content')
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
            <legend class="text-2xl font-bold text-blue-600 mb-4 px-2">Modification de Matériel</legend>
            <form method="POST" action="{{ route('materiel.update', ['materiel' => $materiel->id]) }}">
                @csrf
                @method('PUT')
                <table class="w-full text-left">
                    <tr>
                        <td class="py-2 px-3">
                            <label for="numero_ordre" class="block text-sm font-medium text-gray-700">Numéro d'Ordre</label>
                        </td>
                        <td class="py-2 px-3">
                            <input type="text" id="numero_ordre" name="numero_ordre" value="{{ old('numero_ordre', $materiel->numero_ordre) }}" class="mt-1 block w-full rounded-md input-bg input-border focus:outline-none focus:ring-1 focus:ring-indigo-500 input-focus" required>
                        </td>
                    </tr>
                    <tr>
                        <td class="py-2 px-3">
                            <label for="departement" class="block text-sm font-medium text-gray-700">Département</label>
                        </td>
                        <td class="py-2 px-3">
                            <select id="departement" name="departement" class="mt-1 block w-full rounded-md input-bg input-border focus:outline-none focus:ring-1 focus:ring-indigo-500 input-focus" required>
                                <option value="GEI" {{ old('departement', $materiel->departement) == 'GEI' ? 'selected' : '' }}>GEI</option>
                                <option value="GI" {{ old('departement', $materiel->departement) == 'GI' ? 'selected' : '' }}>GI</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td class="py-2 px-3">
                            <label for="designation" class="block text-sm font-medium text-gray-700">Désignation</label>
                        </td>
                        <td class="py-2 px-3">
                            <input type="text" id="designation" name="designation" value="{{ old('designation', $materiel->designation) }}" class="mt-1 block w-full rounded-md input-bg input-border focus:outline-none focus:ring-1 focus:ring-indigo-500 input-focus" required>
                        </td>
                    </tr>
                    <tr>
                        <td class="py-2 px-3">
                            <label for="categorie" class="block text-sm font-medium text-gray-700">Catégorie</label>
                        </td>
                        <td class="py-2 px-3">
                            <input type="text" id="categorie" name="categorie" value="{{ old('categorie', $materiel->categorie) }}" class="mt-1 block w-full rounded-md input-bg input-border focus:outline-none focus:ring-1 focus:ring-indigo-500 input-focus" required>
                        </td>
                    </tr>
                    <tr>
                        <td class="py-2 px-3">
                            <label for="fournisseur" class="block text-sm font-medium text-gray-700">Fournisseur</label>
                        </td>
                        <td class="py-2 px-3">
                            <input type="text" id="fournisseur" name="fournisseur" value="{{ old('fournisseur', $materiel->fournisseur) }}" class="mt-1 block w-full rounded-md input-bg input-border focus:outline-none focus:ring-1 focus:ring-indigo-500 input-focus" required>
                        </td>
                    </tr>
                    <tr>
                        <td class="py-2 px-3">
                            <label for="prix_ht" class="block text-sm font-medium text-gray-700">Prix HT (€)</label>
                        </td>
                        <td class="py-2 px-3">
                            <input type="text" id="prix_ht" name="prix_ht" value="{{ old('prix_ht', $materiel->prix_ht) }}" class="mt-1 block w-full rounded-md input-bg input-border focus:outline-none focus:ring-1 focus:ring-indigo-500 input-focus" required>
                        </td>
                    </tr>
                    <tr>
                        <td class="py-2 px-3">
                            <label for="date_acquisition" class="block text-sm font-medium text-gray-700">Date d'Acquisition</label>
                        </td>
                        <td class="py-2 px-3">
                            <input type="date" id="date_acquisition" name="date_acquisition" value="{{ old('date_acquisition', $materiel->date_acquisition) }}" class="mt-1 block w-full rounded-md input-bg input-border focus:outline-none focus:ring-1 focus:ring-indigo-500 input-focus" required>
                        </td>
                    </tr>
                </table>
                <div class="mt-6 text-center">
                    <button type="submit" class="btn-submit">Effectuer</button>
                </div>
            </form>
        </fieldset>
    </div>
@endsection
