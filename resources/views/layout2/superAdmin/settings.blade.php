@extends('layout2.superAdmin.dashboard')

@section('title', 'Paramètres')

@section('content')
<div class="card p-4">
    <h5 class="fw-bold"><i class="bi bi-gear me-2"></i> Paramètres</h5>
    <form class="mt-3">
        <div class="mb-3">
            <label class="form-label">Langue</label>
            <select class="form-select">
                <option value="fr">Français</option>
                <option value="en">Anglais</option>
            </select>
        </div>
        <div class="mb-3">
            <label class="form-label">Thème</label>
            <select class="form-select">
                <option value="light">Clair</option>
                <option value="dark">Sombre</option>
            </select>
        </div>
        <button class="btn btn-success"><i class="bi bi-check-circle me-1"></i> Sauvegarder</button>
    </form>
</div>
@endsection
