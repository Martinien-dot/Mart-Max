
<!-- resources/views/GMateriel/searchToUpdate.blade.php -->
@extends('dashboard')

@section('content')
    <div class="max-w-lg mx-auto bg-white p-8 rounded-lg shadow-lg mt-10">
        @if(session('error'))
            <div class="mb-4 text-red-500">
                {{ session('error') }}
            </div>
        @endif

        <h1 class="text-center text-2xl text-gray-700 font-bold mb-6">Rechercher Matériel à Modifier</h1>
        <form method="POST" action="{{ route('materiel.searchToUpdate.submit') }}">
            @csrf
            <div class="mb-4">
                <label for="numero_ordre" class="block text-sm font-medium text-gray-700">Numéro d'Ordre</label>
                <input type="text" id="numero_ordre" name="numero_ordre" class="mt-1 block w-full rounded-md input-bg input-border focus:outline-none focus:ring-1 focus:ring-indigo-500 input-focus" required>
            </div>
            <div class="text-center">
                <button type="submit" class="btn-submit">Rechercher</button>
            </div>
        </form>
    </div>
@endsection
