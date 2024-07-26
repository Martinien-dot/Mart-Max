<!-- resources/views/materiel/delete.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Supprimer Matériel</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="max-w-lg mx-auto bg-white p-8 rounded-lg shadow-lg mt-10">
        @if(session('success'))
            <div class="mb-4 text-green-500">
                {{ session('success') }}
            </div>
        @endif

        <h1 class="text-center text-2xl font-bold mb-6">Confirmer la Suppression</h1>
        <p class="mb-4">Êtes-vous sûr de vouloir supprimer le matériel suivant ?</p>
        <form method="POST" action="{{ route('materiel.destroy', $materiel) }}">
            @csrf
            @method('DELETE')
            <div class="mb-4">
                <p><strong>Numéro d'Ordre:</strong> {{ $materiel->numero_ordre }}</p>
                <p><strong>Désignation:</strong> {{ $materiel->designation }}</p>
                <!-- Ajoutez d'autres champs si nécessaire -->
            </div>
            <div class="text-center">
                <button type="submit" class="btn-submit">Supprimer</button>
                <a href="{{ route('materiel.searchToDelete') }}" class="btn-submit mt-4">Annuler</a>
            </div>
        </form>
    </div>
</body>
</html>
