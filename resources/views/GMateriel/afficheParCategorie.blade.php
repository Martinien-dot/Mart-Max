@extends('dashboard')

@section('content')
<div class="max-w-6xl mx-auto p-8">
    <h1 class="text-3xl font-bold text-center mb-6">Liste des Matériels par Catégorie</h1>

    @forelse($materiels as $categorie => $materielParCategorie)
        <div class="mb-6">
            <h2 class="text-2xl font-semibold mb-4">{{ $categorie }}</h2>
            @if($materielParCategorie->isEmpty())
                <p class="text-center text-gray-600">Aucun matériel trouvé dans cette catégorie.</p>
            @else
                <table class="w-full border-collapse border border-slate-400">
                    <tr>
                        <th class="px-5 py-2 text-center border border-slate-300">Numéro d'Ordre</th>
                        <th class="px-5 py-2 text-center border border-slate-300">Département</th>
                        <th class="px-5 py-2 text-center border border-slate-300">Désignation</th>
                        <th class="px-5 py-2 text-center border border-slate-300">Fournisseur</th>
                        <th class="px-5 py-2 text-center border border-slate-300">Prix HT</th>
                        <th class="px-5 py-2 text-center border border-slate-300">Date d'Acquisition</th>
                        <th class="px-5 py-2 text-center border border-slate-300">Modifier</th>
                        <th class="px-5 py-2 text-center border border-slate-300">Supprimer</th>
                    </tr>
                    @foreach($materielParCategorie as $materiel)
                        <tr class="border-b hover:bg-gray-50">
                            <td class="px-4 py-2 border border-slate-300">{{ $materiel->numero_ordre }}</td>
                            <td class="px-4 py-2 border border-slate-300">{{ $materiel->departement }}</td>
                            <td class="px-4 py-2 border border-slate-300">{{ $materiel->designation }}</td>
                            <td class="px-4 py-2 border border-slate-300">{{ $materiel->fournisseur }}</td>
                            <td class="px-4 py-2 border border-slate-300">{{ $materiel->prix_ht }}</td>
                            <td class="px-4 py-2 border border-slate-300">{{ $materiel->date_acquisition }}</td>
                            <td class="px-4 py-2 text-center border border-slate-300">
                                <a href="{{ route('materiel.edit', ['materiel' => $materiel->id]) }}" class="inline-block px-4 py-2 bg-blue-600 text-white font-semibold rounded-lg shadow-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
                                    Modifier
                                </a>
                            </td>
                            <td class="px-4 py-2 text-center border border-slate-300">
                                <form action="{{ route('materiel.destroy', ['materiel' => $materiel->id]) }}" method="POST" onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer ce matériel ?');">
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
            @endif
        </div>
    @empty
        <p class="text-center text-gray-600">Aucun matériel trouvé.</p>
    @endforelse
</div>
@endsection
