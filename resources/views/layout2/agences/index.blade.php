@extends('layout2.superAdmin.dashboard')

@section('title', 'Liste des agences')

@section('content')
<div class="container mt-4">
    @if(session('success'))
        <div class="alert alert-success text-center shadow-sm animate__animated animate__fadeInDown">
            {{ session('success') }}
        </div>
    @endif

    <style>
        .card {
            border-radius: 15px;
            overflow: hidden;
            animation: fadeInUp 0.6s ease-in-out;
        }
        .btn-primary {
            background: #002f6c;
            border: none;
            transition: all 0.3s ease-in-out;
        }
        .btn-primary:hover {
            background: #00408a;
            transform: translateY(-2px);
        }
        .btn-warning {
            transition: all 0.3s ease-in-out;
        }
        .btn-warning:hover {
            transform: scale(1.05);
        }
        .btn-danger {
            border-radius: 8px;
            transition: all 0.3s ease-in-out;
        }
        .btn-danger:hover {
            background: #b30000;
            transform: scale(1.05);
        }
        .table thead {
            background-color: #002f6c;
        }
        .table thead th {
            color: #070332ff;
            text-transform: uppercase;
            font-size: 0.9rem;
        }
        .table tbody tr {
            transition: all 0.2s ease-in-out;
        }
        .table tbody tr:hover {
            background: #f1f5ff;
            transform: scale(1.01);
        }
        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>

    <!-- Header de la section -->
    <div class="d-flex justify-content-between align-items-center mb-3 my-4">
        <h3 class="fw-bold text-dark"><i class="bi bi-building text-primary me-2"></i> Liste des agences</h3>
        <a href="{{ route('agences.create') }}" class="btn btn-primary shadow-sm">
            <i class="bi bi-plus-circle me-1"></i> Ajouter une agence
        </a>
    </div>

    <!-- Tableau -->
    <div class="card shadow-sm">
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover table-bordered mb-0 text-center align-middle">
                    <thead class="table-primary">
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
                            <td><span class="badge bg-secondary">{{ $agence->id }}</span></td>
                            <td class="fw-semibold">{{ $agence->nom }}</td>
                            <td>{{ $agence->tel }}</td>
                            <td><i class="bi bi-geo-alt-fill text-danger"></i> {{ $agence->ville }}</td>
                            <td>{{ $agence->quartier }}</td>
                            <td>{{ $agence->created_at ? $agence->created_at->format('d/m/Y H:i') : 'N/A' }}</td>
                            <td>
                                <a href="{{ route('agences.edit', $agence) }}" class="btn btn-sm btn-warning shadow-sm">
                                    ✏️ Modifier
                                </a>

                                <form action="{{ route('agences.destroy', $agence) }}" method="POST" class="d-inline" onsubmit="return confirm('Voulez-vous vraiment supprimer cette agence ?');">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-sm btn-danger shadow-sm">🗑️ Supprimer</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" class="text-muted py-4">Aucune agence trouvée.</td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Pagination -->
    <div class="mt-3 d-flex justify-content-center">
        {{ $agences->links() }}
    </div>
</div>
@endsection
