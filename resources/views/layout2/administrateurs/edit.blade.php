@extends('base')

@section('content')
<div class="container">
    <h2>Modifier l’Administrateur</h2>

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

    <form action="{{ route('administrateurs.update', $administrateur->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">Nom</label>
            <input type="text" name="nom" value="{{ $administrateur->nom }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Prénom</label>
            <input type="text" name="prenom" value="{{ $administrateur->prenom }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Sexe</label>
            <select name="sexe" class="form-select" required>
                <option value="Homme" {{ $administrateur->sexe == 'Homme' ? 'selected' : '' }}>Homme</option>
                <option value="Femme" {{ $administrateur->sexe == 'Femme' ? 'selected' : '' }}>Femme</option>
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Adresse</label>
            <input type="text" name="adresse" value="{{ $administrateur->adresse }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Téléphone</label>
            <input type="text" name="tel" value="{{ $administrateur->tel }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" name="email" value="{{ $administrateur->email }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Rôle</label>
            <select name="role" class="form-select" required>
                <option value="Admin" {{ $administrateur->role == 'Admin' ? 'selected' : '' }}>Admin</option>
                <option value="Moniteur" {{ $administrateur->role == 'Moniteur' ? 'selected' : '' }}>Moniteur</option>
                <option value="Secrétaire" {{ $administrateur->role == 'Secrétaire' ? 'selected' : '' }}>Secrétaire</option>
                <option value="Élève" {{ $administrateur->role == 'Élève' ? 'selected' : '' }}>Élève</option>
            </select>
        </div>

        {{-- 🔥 Sélection de l’agence --}}
        <div class="mb-3">
            <label class="form-label">Agence</label>
            <select name="agence_id" class="form-select" required>
                @foreach($agences as $agence)
                    <option value="{{ $agence->id }}" {{ $administrateur->agence_id == $agence->id ? 'selected' : '' }}>
                        {{ $agence->nom }} - {{ $agence->ville }}
                    </option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-success">Mettre à jour</button>
    </form>
</div>
@endsection
