@extends('layout2.administrateurs.admin')

@section('title', 'Gestion des Candidats')

@section('content')
<div class="content">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h4 class="fw-bold text-primary border-start border-4 ps-3 border-primary">
            <i class="fas fa-users me-2"></i> Gestion des Candidats
        </h4>
        <a href="{{ route('admin.candidats.create') }}" class="btn btn-primary">
            <i class="fas fa-user-plus me-2"></i> Ajouter un candidat
        </a>
    </div>

    <div class="card p-3 shadow-sm rounded-3">
        <table class="table table-hover align-middle">
            <thead class="table-primary">
                <tr>
                    <th>#</th>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Email</th>
                    <th>Permis</th>
                    <th>Statut</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($candidats as $candidat)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $candidat->nom }}</td>
                        <td>{{ $candidat->prenom }}</td>
                        <td>{{ $candidat->email }}</td>
                        <td>{{ $candidat->type_permis }}</td>
                        <td>
                            <span class="badge bg-{{ $candidat->statut == 'actif' ? 'success' : 'secondary' }}">
                                {{ ucfirst($candidat->statut) }}
                            </span>
                        </td>
                        <td>
                            <a href="{{ route('admin.candidats.show', $candidat->id) }}" class="btn btn-sm btn-info"><i class="fas fa-eye"></i></a>
                            <a href="{{ route('admin.candidats.edit', $candidat->id) }}" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i></a>
                            <form action="{{ route('admin.candidats.destroy', $candidat->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-danger" onclick="return confirm('Supprimer ce candidat ?')">
                                    <i class="fas fa-trash-alt"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
