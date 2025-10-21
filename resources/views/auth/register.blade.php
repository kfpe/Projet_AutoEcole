<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription - SOSMobil</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="resources/css/userStyle.css">
</head>
<body class="bg-light d-flex align-items-center justify-content-center min-vh-100">
<x-alert type="success">
    {{ session('message') }}
</x-alert>
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6">
            <div class="card rounded-4 overflow-hidden">
                <!-- En-tête avec onglets -->
                <div class="card-header p-0">
                    <ul class="nav nav-tabs" id="authTabs" role="tablist">
                        <li class="nav-item flex-fill" role="presentation">
                            <button class="nav-link w-100 text-center py-3" id="login-tab" data-bs-toggle="tab" data-bs-target="#login-form" type="button" role="tab">Connexion</button>
                        </li>
                        <li class="nav-item flex-fill" role="presentation">
                            <button class="nav-link active w-100 text-center py-3" id="register-tab" data-bs-toggle="tab" data-bs-target="#register-form" type="button" role="tab">Inscription</button>
                        </li>
                    </ul>
                </div>

                <!-- Contenu des onglets -->
                <div class="card-body p-4 p-md-5">
                    <div class="tab-content" id="authTabContent">
                        <!-- Placeholder pour la connexion -->
                        <div class="tab-pane fade" id="login-form" role="tabpanel">
                            <p class="text-center">Veuillez cliquer sur l'onglet Connexion pour vous connecter.</p>
                        </div>

                        <!-- Formulaire d'inscription -->
                        <div class="tab-pane fade show active" id="register-form" role="tabpanel">
                            <h2 class="text-center mb-4">Créez votre compte</h2>

                            <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                                @csrf

                                <!-- Nom et Prénom -->
                                <div class="row mb-3">
                                    <div class="col-md-6 mb-3 mb-md-0">
                                        <x-input-label for="nom" :value="__('Nom')" class="form-label" />
                                        <div class="position-relative">
                                                <span class="position-absolute top-50 translate-middle-y ms-3 text-muted">
                                                    <i class="fas fa-user"></i>
                                                </span>
                                            <x-text-input id="nom" class="form-control ps-5" type="text" name="nom" :value="old('nom')" required autofocus autocomplete="nom" placeholder="Votre nom" />
                                            <x-input-error :messages="$errors->get('nom')" class="mt-2" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <x-input-label for="prenom" :value="__('Prénom')" class="form-label" />
                                        <div class="position-relative">
                                                <span class="position-absolute top-50 translate-middle-y ms-3 text-muted">
                                                    <i class="fas fa-user"></i>
                                                </span>
                                            <x-text-input id="prenom" class="form-control ps-5" type="text" name="prenom" :value="old('prenom')" required autocomplete="prenom" placeholder="Votre prénom" />
                                            <x-input-error :messages="$errors->get('prenom')" class="mt-2" />
                                        </div>
                                    </div>
                                </div>

                                <!-- Sexe -->
                                <div class="mb-3">
                                    <x-input-label for="sexe" :value="__('Sexe')" class="form-label" />
                                    <div class="position-relative">
                                            <span class="position-absolute top-50 translate-middle-y ms-3 text-muted">
                                                <i class="fas fa-venus-mars"></i>
                                            </span>
                                        <select id="sexe" name="sexe" class="form-select ps-5" required>
                                            <option value="">Sélectionnez votre sexe</option>
                                            <option value="homme">Masculin</option>
                                            <option value="femme">Féminin</option>
                                        </select>
                                        <x-input-error :messages="$errors->get('sexe')" class="mt-2" />
                                    </div>
                                </div>

                                <!-- Adresse -->
                                <div class="mb-3">
                                    <x-input-label for="adresse" :value="__('Adresse')" class="form-label" />
                                    <div class="position-relative">
                                            <span class="position-absolute top-50 translate-middle-y ms-3 text-muted">
                                                <i class="fas fa-map-marker-alt"></i>
                                            </span>
                                        <x-text-input id="adresse" class="form-control ps-5" type="text" name="adresse" :value="old('adresse')" required autocomplete="adresse" placeholder="Votre adresse complète" />
                                        <x-input-error :messages="$errors->get('adresse')" class="mt-2" />
                                    </div>
                                </div>

                                <!-- Téléphone -->
                                <div class="mb-3">
                                    <x-input-label for="tel" :value="__('Téléphone')" class="form-label" />
                                    <div class="position-relative">
                                            <span class="position-absolute top-50 translate-middle-y ms-3 text-muted">
                                                <i class="fas fa-phone"></i>
                                            </span>
                                        <x-text-input id="tel" class="form-control ps-5" type="tel" name="tel" :value="old('tel')" required autocomplete="tel" placeholder="Votre numéro de téléphone" />
                                        <x-input-error :messages="$errors->get('tel')" class="mt-2" />
                                    </div>
                                </div>

                                <!-- Email -->
                                <div class="mb-3">
                                    <x-input-label for="email" :value="__('Email')" class="form-label" />
                                    <div class="position-relative">
                                            <span class="position-absolute top-50 translate-middle-y ms-3 text-muted">
                                                <i class="fas fa-envelope"></i>
                                            </span>
                                        <x-text-input id="email" class="form-control ps-5" type="email" name="email" :value="old('email')" required autocomplete="username" placeholder="votre@email.com" />
                                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                    </div>
                                </div>

                                <!-- Mot de passe -->
                                <div class="row mb-3">
                                    <div class="col-md-6 mb-3 mb-md-0">
                                        <x-input-label for="password" :value="__('Mot de passe')" class="form-label" />
                                        <div class="position-relative">
                                                <span class="position-absolute top-50 translate-middle-y ms-3 text-muted">
                                                    <i class="fas fa-lock"></i>
                                                </span>
                                            <x-text-input id="password" class="form-control ps-5" type="password" name="password" required autocomplete="new-password" placeholder="••••••••" />
                                            <button type="button" class="btn btn-link position-absolute end-0 top-50 translate-middle-y me-3 text-decoration-none text-muted toggle-password">
                                                <i class="far fa-eye"></i>
                                            </button>
                                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                        </div>
                                        <div class="form-text">8 caractères minimum avec majuscule, minuscule et chiffre</div>
                                    </div>
                                    <div class="col-md-6">
                                        <x-input-label for="password_confirmation" :value="__('Confirmer le mot de passe')" class="form-label" />
                                        <div class="position-relative">
                                                <span class="position-absolute top-50 translate-middle-y ms-3 text-muted">
                                                    <i class="fas fa-lock"></i>
                                                </span>
                                            <x-text-input id="password_confirmation" class="form-control ps-5" type="password" name="password_confirmation" required autocomplete="new-password" placeholder="••••••••" />
                                            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                                        </div>
                                    </div>
                                </div>

                                <!-- Agence -->
                                <div class="mb-3">
                                    <x-input-label for="agence_id" :value="__('Agence')" class="form-label" />
                                    <div class="position-relative">
                                            <span class="position-absolute top-50 translate-middle-y ms-3 text-muted">
                                                <i class="fas fa-building"></i>
                                            </span>
                                        <select id="agence_id" name="agence_id" class="form-select ps-5" required>
                                            <option value="">Sélectionnez une agence</option>
                                            @foreach($agences as $agence)
                                                <option value="{{ $agence->id }}">{{ $agence->nom ?? $agence->id }}</option>
                                            @endforeach
                                        </select>
                                        <x-input-error :messages="$errors->get('agence_id')" class="mt-2" />
                                    </div>
                                </div>

                                <!-- Rôle -->
                                <div class="mb-3">
                                    <x-input-label for="role" :value="__('Rôle')" class="form-label" />
                                    <div class="position-relative">
                                            <span class="position-absolute top-50 translate-middle-y ms-3 text-muted">
                                                <i class="fas fa-user-tag"></i>
                                            </span>
                                        <select id="role" name="role" class="form-select ps-5" required>
                                            <option value="">Sélectionnez un rôle</option>
                                            <option value="admin">Admin</option>
                                            <option value="candidat">Candidat</option>
                                            <option value="secretaire">Secrétaire</option>
                                            <option value="moniteur">Moniteur</option>
                                        </select>
                                        <x-input-error :messages="$errors->get('role')" class="mt-2" />
                                    </div>
                                </div>

                                <!-- Champs spécifiques pour candidat -->
                                <div id="candidat-fields" style="display: none;">
                                    <div class="mb-3">
                                        <x-input-label for="formation_id" :value="__('Formation')" class="form-label" />
                                        <div class="position-relative">
                                                <span class="position-absolute top-50 translate-middle-y ms-3 text-muted">
                                                    <i class="fas fa-book"></i>
                                                </span>
                                            <select id="formation_id" name="formation_id" class="form-select ps-5" required>
                                                <option value="">Sélectionnez une Categorie</option>
                                                @foreach($formations as $formation)
                                                    <option value="{{ $formation->id }}"> categorie: {{ $formation->categories ?? $formation->id }} </option>
                                                @endforeach
                                            </select>
                                            <x-input-error :messages="$errors->get('formation_id')" class="mt-2" />
                                        </div>
                                    </div>
                                </div>

                                <!-- Conditions d'utilisation -->
                                <div class="mb-3 form-check">
                                    <input id="terms" name="terms" type="checkbox" class="form-check-input" required>
                                    <label for="terms" class="form-check-label">
                                        J'accepte les <a href="#" class="text-decoration-none">conditions d'utilisation</a>
                                    </label>
                                    <x-input-error :messages="$errors->get('terms')" class="mt-2" />
                                </div>

                                <!-- Bouton d'inscription -->
                                <x-primary-button class="btn btn-primary w-100">
                                    {{ __('S\'inscrire') }} <i class="fas fa-user-plus ms-2"></i>
                                </x-primary-button>
                            </form>

                            <div class="mt-4 text-center">
                                <p class="mb-0">Vous avez déjà un compte ?
                                    <button class="btn btn-link p-0 text-decoration-none" data-bs-toggle="tab" data-bs-target="#login-form">Connectez-vous</button>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Toggle password visibility
        document.querySelectorAll('.toggle-password').forEach(button => {
            button.addEventListener('click', function() {
                const input = this.closest('.position-relative').querySelector('input');
                const icon = this.querySelector('i');
                if (input.type === 'password') {
                    input.type = 'text';
                    icon.classList.remove('fa-eye');
                    icon.classList.add('fa-eye-slash');
                } else {
                    input.type = 'password';
                    icon.classList.remove('fa-eye-slash');
                    icon.classList.add('fa-eye');
                }
            });
        });

        // Afficher/masquer les champs spécifiques au rôle
        document.getElementById('role').addEventListener('change', function() {
            const candidatFields = document.getElementById('candidat-fields');
            candidatFields.style.display = this.value === 'candidat' ? 'block' : 'none';
        });

        // Redirection vers la page de connexion
        document.getElementById('login-tab').addEventListener('click', function(e) {
            e.preventDefault();
            window.location.href = "{{ route('login') }}";
        });
    });
</script>
</body>
</html>
