@extends('base')

@section('content')
<div class="container mt-4">
    <h2 class="text-center mb-4">📋 Liste des Administrateurs</h2>

    @if(session('success'))
        <div class="alert alert-success text-center fw-bold">{{ session('success') }}</div>
    @endif

    <div class="text-end mb-3">
        <a href="{{ route('administrateurs.create') }}" class="btn btn-primary">➕ Ajouter</a>
    </div>

    <table class="table table-bordered table-hover text-center align-middle">
        <thead class="table-dark">
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
                <td>{{ $admin->id }}</td>
                <td>{{ $admin->nom }} {{ $admin->prenom }}</td>
                <td>{{ $admin->email }}</td>
                <td>{{ $admin->tel }}</td>
                <td>{{ $admin->agence->nom ?? '---' }}</td>
                <td>
                    <a href="{{ route('administrateurs.edit', $admin) }}" class="btn btn-warning btn-sm">✏️</a>
                    <form method="POST" action="{{ route('administrateurs.destroy', $admin->id) }}" style="display:inline;">
                        @csrf @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Supprimer ?')">🗑️</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr><td colspan="6" class="text-muted">Aucun admin</td></tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
