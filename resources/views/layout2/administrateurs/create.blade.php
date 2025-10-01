@extends('base')

@section('content')
<div class="container">
    <h2>Ajouter un Administrateur</h2>

    {{-- Message de succès ou erreur --}}
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('administrateurs.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label class="form-label">Nom</label>
            <input type="text" name="nom" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Prénom</label>
            <input type="text" name="prenom" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Sexe</label>
            <select name="sexe" class="form-select" required>
                <option value="">-- Sélectionner --</option>
                <option value="Homme">Homme</option>
                <option value="Femme">Femme</option>
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Adresse</label>
            <input type="text" name="adresse" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Téléphone</label>
            <input type="text" name="tel" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" name="email" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Mot de passe</label>
            <input type="password" name="password" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Confirmer le mot de passe</label>
            <input type="password" name="password_confirmation" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Rôle</label>
            <select name="role" class="form-select" required>
                <option value="">-- Sélectionner --</option>
                <option value="Admin">Admin</option>
                <option value="Moniteur">Moniteur</option>
                <option value="Secrétaire">Secrétaire</option>
                <option value="Élève">Élève</option>
            </select>
        </div>

        {{-- 🔥 Sélection de l'agence --}}
        <div class="mb-3">
            <label class="form-label">Agence</label>
            <select name="agence_id" class="form-select" required>
                <option value="">-- Sélectionner une agence --</option>
                @foreach($agences as $agence)
                    <option value="{{ $agence->id }}">{{ $agence->nom }} - {{ $agence->ville }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Ajouter</button>
    </form>
</div>
@endsection
