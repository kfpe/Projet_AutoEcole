@extends('layout2.superAdmin.dashboard')

@section('content')
<div class="container mt-4">
    <h2 class="text-center">Modifier l’Administrateur</h2>

    {{-- Message de succès ou erreur --}}
    @if(session('success'))
        <div class="alert alert-success text-center">{{ session('success') }}</div>
    @endif
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>⚠️ {{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="card shadow-lg border-0">
        <div class="card-body p-4">
            <form action="{{ route('administrateurs.update', $administrateur->id) }}" method="POST" class="animate__animated animate__fadeInUp">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label class="form-label fw-semibold">Nom</label>
                    <input type="text" name="nom" value="{{ $administrateur->nom }}" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label fw-semibold">Prénom</label>
                    <input type="text" name="prenom" value="{{ $administrateur->prenom }}" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label fw-semibold">Sexe</label>
                    <select name="sexe" class="form-select" required>
                        <option value="Homme" {{ $administrateur->sexe == 'Homme' ? 'selected' : '' }}>Homme</option>
                        <option value="Femme" {{ $administrateur->sexe == 'Femme' ? 'selected' : '' }}>Femme</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label fw-semibold">Adresse</label>
                    <input type="text" name="adresse" value="{{ $administrateur->adresse }}" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label fw-semibold">Téléphone</label>
                    <input type="text" name="tel" value="{{ $administrateur->tel }}" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label fw-semibold">Email</label>
                    <input type="email" name="email" value="{{ $administrateur->email }}" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label fw-semibold">Rôle</label>
                    <select name="role" class="form-select" required>
                        <option value="Admin" {{ $administrateur->role == 'Admin' ? 'selected' : '' }}>Admin</option>
                        <option value="Moniteur" {{ $administrateur->role == 'Moniteur' ? 'selected' : '' }}>Moniteur</option>
                        <option value="Secrétaire" {{ $administrateur->role == 'Secrétaire' ? 'selected' : '' }}>Secrétaire</option>
                        <option value="Élève" {{ $administrateur->role == 'Élève' ? 'selected' : '' }}>Élève</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label fw-semibold">Agence</label>
                    <select name="agence_id" class="form-select" required>
                        @foreach($agences as $agence)
                            <option value="{{ $agence->id }}" {{ $administrateur->agence_id == $agence->id ? 'selected' : '' }}>
                                {{ $agence->nom }} - {{ $agence->ville }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="text-center mt-4">
                    <button type="submit" class="btn btn-success px-4 rounded-pill shadow-sm">
                        💾 Mettre à jour
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