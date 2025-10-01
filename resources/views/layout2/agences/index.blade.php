@extends('base')

@section('title', 'Liste des agences')

@section('content')
<div class="container mt-4">
    @if(session('success'))
        <div class="alert alert-success text-center">{{ session('success') }}</div>
    @endif

   <style> body { background: #f8f9fa; font-family: 'Segoe UI', sans-serif; } .navbar { background-color: #002f6c !important; } .card { border-radius: 15px; } .btn-primary { background: #002f6c; border: none; } .btn-primary:hover { background: #00408a; } .btn-danger { border-radius: 8px; } .table th { background-color: #002f6c; color: #fff; } </style>



   
    <div class="d-flex justify-content-between mb-3 my-4">
        <h3>🏢 Liste des agences</h3>
        <a href="{{ route('agences.create') }}" class="btn btn-primary">➕ Ajouter une agence</a>
    </div>

    <div class="card shadow-sm">
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-bordered mb-0 text-center align-middle">
                    <thead class="table-dark">
                        <tr>
                            <th>ID</th>
                            <th>Nom</th>
                            <th>Numéro</th>
                            <th>Ville</th>
                            <th>Quartier</th>
                            <th>Date création</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    @forelse($agences as $agence)
                        <tr>
                            <td>{{ $agence->id }}</td>
                            <td>{{ $agence->nom }}</td>
                            <td>{{ $agence->tel }}</td>
                            <td>{{ $agence->ville }}</td>
                            <td>{{ $agence->quartier }}</td>
                            <td>{{ $agence->created_at ? $agence->created_at->format('d/m/Y H:i') : 'N/A' }}</td>
                            <td>
                                <a href="{{ route('agences.edit', $agence) }}" class="btn btn-sm btn-warning">✏️ Modifier</a>

                                <form action="{{ route('agences.destroy', $agence) }}" method="POST" class="d-inline" onsubmit="return confirm('Voulez-vous vraiment supprimer cette agence ?');">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-sm btn-danger">🗑️ Supprimer</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" class="text-muted">Aucune agence trouvée.</td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="mt-3">
        {{ $agences->links() }} {{-- pagination --}}
    </div>
</div>
@endsection
