<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion - SOSMobil</title>
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
                            <button class="nav-link active w-100 text-center py-3" id="login-tab" data-bs-toggle="tab" data-bs-target="#login-form" type="button" role="tab">Connexion</button>
                        </li>
                        <li class="nav-item flex-fill" role="presentation">
                            <button class="nav-link w-100 text-center py-3" id="register-tab" data-bs-toggle="tab" data-bs-target="#register-form" type="button" role="tab">Inscription</button>
                        </li>
                    </ul>
                </div>

                <!-- Contenu des onglets -->
                <div class="card-body p-4 p-md-5">
                    <div class="tab-content" id="authTabContent">
                        <!-- Formulaire de connexion -->
                        <div class="tab-pane fade show active" id="login-form" role="tabpanel">
                            <h2 class="text-center mb-4">Connectez-vous à votre compte</h2>

                            <form method="POST" action="{{ route('login') }}">
                                @csrf

                                <!-- Email -->
                                <div class="mb-3">
                                    <x-input-label for="email" :value="__('Email')" class="form-label" />
                                    <div class="position-relative">
                                            <span class="position-absolute top-50 translate-middle-y ms-3 text-muted">
                                                <i class="fas fa-envelope"></i>
                                            </span>
                                        <x-text-input id="email" class="form-control ps-5" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" placeholder="votre@email.com" />
                                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                    </div>
                                </div>

                                <!-- Mot de passe -->
                                <div class="mb-3">
                                    <x-input-label for="password" :value="__('Mot de passe')" class="form-label" />
                                    <div class="position-relative">
                                            <span class="position-absolute top-50 translate-middle-y ms-3 text-muted">
                                                <i class="fas fa-lock"></i>
                                            </span>
                                        <x-text-input id="password" class="form-control ps-5" type="password" name="password" required autocomplete="current-password" placeholder="••••••••" />
                                        <button type="button" class="btn btn-link position-absolute end-0 top-50 translate-middle-y me-3 text-decoration-none text-muted toggle-password">
                                            <i class="far fa-eye"></i>
                                        </button>
                                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                    </div>
                                    <div class="text-end mt-1">
                                        @if (Route::has('password.request'))
                                            <a href="{{ route('password.request') }}" class="text-decoration-none">Mot de passe oublié ?</a>
                                        @endif
                                    </div>
                                </div>

                                <!-- Se souvenir de moi -->
                                <div class="mb-3 form-check">
                                    <input id="remember_me" name="remember" type="checkbox" class="form-check-input">
                                    <label for="remember_me" class="form-check-label">{{ __('Se souvenir de moi') }}</label>
                                </div>

                                <!-- Bouton de connexion -->
                                <x-primary-button class="btn btn-primary w-100 mb-3">
                                    {{ __('Se connecter') }} <i class="fas fa-sign-in-alt ms-2"></i>
                                </x-primary-button>
                            </form>

                            <hr class="my-4">
                            <p class="text-center mb-3">Ou continuer avec</p>

                            <div class="row g-2">
                                <div class="col-md-6">
                                    <button type="button" class="btn btn-outline-secondary w-100">
                                        <i class="fab fa-google text-danger me-2"></i> Google
                                    </button>
                                </div>
                                <div class="col-md-6">
                                    <button type="button" class="btn btn-outline-secondary w-100">
                                        <i class="fab fa-facebook-f text-primary me-2"></i> Facebook
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- Placeholder pour l'inscription -->
                        <div class="tab-pane fade" id="register-form" role="tabpanel">
                            <p class="text-center">Veuillez cliquer sur l'onglet Inscription pour créer un compte.</p>
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

        document.getElementById('register-tab').addEventListener('click', function(e) {
            e.preventDefault();
            window.location.href = "{{ route('register') }}";
        });
    });
</script>
</body>
</html>
