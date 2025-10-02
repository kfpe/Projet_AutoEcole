@extends('layout2.superAdmin.dashboard')

@section('title', 'Liste des administrateurs')

@section('content')
<div class="container mt-4">
    

    @if(session('success'))
        <div class="alert alert-success text-center fw-bold animate__animated animate__fadeInDown">
            {{ session('success') }}
        </div>
    @endif

    
    
    <!-- Header de la section -->
    <div class="d-flex justify-content-between align-items-center mb-3 my-4">
        <h3 class="fw-bold text-dark"><i class="bi bi-building text-primary me-2"></i> 👨‍💼 Liste des Administrateurs</h3>
        <a href="{{ route('administrateurs.create') }}" class="btn btn-primary shadow-sm">
            <i class="bi bi-plus-circle me-1"></i>  Ajouter un administrateur
        </a>
    </div>

    <div class="card shadow-lg border-0 animate__animated animate__fadeInUp">
        <div class="card-body p-0">
            <div class="table-responsive">
               <table class="table table-hover table-bordered mb-0 text-center align-middle">
                    <thead class="table-primary text-dark">
                        <tr>
                            <th>ID</th>
                            <th>Nom complet</th>
                            <th>Email</th>
                            <th>Téléphone</th>
                            <th>Agence</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($admins as $admin)
                        <tr>
                            <td class="fw-bold text-secondary">{{ $admin->id }}</td>
                            <td>{{ $admin->nom }} {{ $admin->prenom }}</td>
                            <td>{{ $admin->email }}</td>
                            <td>{{ $admin->tel }}</td>
                            <td>
                                <span class="badge bg-info text-dark">
                                    {{ $admin->agence->nom ?? '---' }}
                                </span>
                            </td>
                            <td>
                                <a href="{{ route('administrateurs.edit', $admin) }}" 
                                   class="btn btn-warning btn-sm rounded-pill shadow-sm">
                                   ✏️ Modifier
                                </a>
                                <form method="POST" action="{{ route('administrateurs.destroy', $admin->id) }}" 
                                      style="display:inline;" 
                                      onsubmit="return confirm('Voulez-vous vraiment supprimer cet administrateur ?');">
                                    @csrf 
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm rounded-pill shadow-sm">
                                        🗑️ Supprimer
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="6" class="text-muted">Aucun administrateur trouvé.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

{{-- CSS personnalisé --}}
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
@endsection
