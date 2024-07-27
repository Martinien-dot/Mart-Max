

@extends('welcome')

@section('content')
<div class="max-w-6xl mx-auto p-8">
    <h1 class="text-3xl font-bold text-center mb-6">Coûts des Matériels par Année</h1>

    @if($coutsParAnnee->isEmpty())
        <p class="text-center text-gray-600">Aucun coût de matériel trouvé.</p>
    @else
        <table class="w-full border-collapse border border-slate-400">
            <tr>
                <th class="px-5 py-2 text-center border border-slate-300">Année</th>
                <th class="px-5 py-2 text-center border border-slate-300">Coût Total (HT)</th>
            </tr>
            @foreach($coutsParAnnee as $cout)
                <tr class="border-b hover:bg-gray-50">
                    <td class="px-4 py-2 border border-slate-300">{{ $cout->annee }}</td>
                    <td class="px-4 py-2 border border-slate-300">{{ number_format($cout->cout_total, 2, ',', ' ') }} DH</td>
                </tr>
            @endforeach
        </table>
    @endif
</div>
@endsection
