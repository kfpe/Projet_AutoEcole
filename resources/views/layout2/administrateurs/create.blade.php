@extends('layout2.superAdmin.dashboard')

@section('title', 'Ajouter un administrateur')

@section('content')
<div class="container mt-4">
    <div class="card shadow-lg border-0">
        <div class="card-header bg-primary text-white text-center fw-bold fs-4">
            👨‍💼 Ajouter un Administrateur
        </div>
        <div class="card-body p-4">

            {{-- Message de succès ou erreur --}}
            @if(session('success'))
                <div class="alert alert-success text-center fw-bold animate__animated animate__fadeInDown">
                    {{ session('success') }}
                </div>
            @endif

            @if($errors->any())
                <div class="alert alert-danger animate__animated animate__fadeInDown">
                    <ul class="mb-0">
                        @foreach($errors->all() as $error)
                            <li>⚠️ {{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('administrateurs.store') }}" method="POST" class="animate__animated animate__fadeInUp">
                @csrf

                <div class="row g-3">
                    <div class="col-md-6">
                        <label class="form-label fw-semibold">Nom</label>
                        <input type="text" name="nom" class="form-control" required>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label fw-semibold">Prénom</label>
                        <input type="text" name="prenom" class="form-control" required>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label fw-semibold">Sexe</label>
                        <select name="sexe" class="form-select" required>
                            <option value="">-- Sélectionner --</option>
                            <option value="Homme">Homme</option>
                            <option value="Femme">Femme</option>
                        </select>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label fw-semibold">Téléphone</label>
                        <input type="text" name="tel" class="form-control" required>
                    </div>

                    <div class="col-md-12">
                        <label class="form-label fw-semibold">Adresse</label>
                        <input type="text" name="adresse" class="form-control" required>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label fw-semibold">Email</label>
                        <input type="email" name="email" class="form-control" required>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label fw-semibold">Rôle</label>
                        <select name="role" class="form-select" required>
                            <option value="">-- Sélectionner --</option>
                            <option value="Admin">Admin</option>
                            <option value="Moniteur">Moniteur</option>
                            <option value="Secrétaire">Secrétaire</option>
                            <option value="Élève">Élève</option>
                        </select>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label fw-semibold">Mot de passe</label>
                        <input type="password" name="password" class="form-control" required>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label fw-semibold">Confirmer le mot de passe</label>
                        <input type="password" name="password_confirmation" class="form-control" required>
                    </div>

                    <div class="col-md-12">
                        <label class="form-label fw-semibold">Agence</label>
                        <select name="agence_id" class="form-select" required>
                            <option value="">-- Sélectionner une agence --</option>
                            @foreach($agences as $agence)
                                <option value="{{ $agence->id }}">{{ $agence->nom }} - {{ $agence->ville }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="text-center mt-4">
                    <button type="submit" class="btn btn-primary px-4 rounded-pill shadow-sm">
                        ✅ Ajouter
                    </button>
                    <a href="{{ route('administrateurs.index') }}" class="btn btn-secondary px-4 rounded-pill">
                        🔙 Retour
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>

{{-- 🎨 Style personnalisé --}}
<style>
    .form-control:focus, .form-select:focus {
        border-color: #002f6c;
        box-shadow: 0 0 6px rgba(0, 47, 108, 0.5);
    }
    .btn {
        transition: all 0.3s ease;
    }
    .btn:hover {
        transform: scale(1.05);
    }
</style>
@endsection
