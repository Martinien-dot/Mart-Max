@extends('dashboard')
@section('content')

<form action="{{ route('materiel.chercherParDesignation') }}" method="GET" class="max-w-md mx-auto bg-white p-8 rounded-lg shadow-md space-y-4">
    <div class="flex flex-col">
        <label for="designation" class="text-lg font-semibold text-gray-700 mb-2">Désignation :</label>
        <input type="text" id="designation" name="designation" class="w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500" placeholder="Ecrire la désignation ici">
    </div>
    <button type="submit" class="w-full py-2 bg-blue-600 text-white font-bold rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 transition duration-300">Rechercher</button>
</form>


@endsection