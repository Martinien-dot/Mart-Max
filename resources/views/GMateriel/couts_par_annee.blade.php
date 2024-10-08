@extends('dashboard')

@section('content')
<div class="max-w-6xl mx-auto p-8">
    <h1 class="text-3xl font-bold text-center mb-6">Coûts des Matériels par Année</h1>
    <canvas id="costChart" width="400" height="200"></canvas>
    <script>
        const ctx = document.getElementById('costChart').getContext('2d');
        const costChart = new Chart(ctx, {
            type: 'bar', // ou 'line', selon vos préférences
            data: {
                labels: @json($years),
                datasets: [{
                    label: 'Coûts par Année',
                    data: @json($totals),
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>


</div>
@endsection
