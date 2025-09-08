<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion/Inscription - SOSMobil</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="resources\css\userStyle.css">
</head>
<body class="bg-light d-flex align-items-center justify-content-center min-vh-100">
        <x-alert type="success">
            {{session('message')}}
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

                            <form>
                                <div class="mb-3">
                                    <label for="login-email" class="form-label">Email</label>
                                    <div class="position-relative">
                                            <span class="position-absolute top-50 translate-middle-y ms-3 text-muted">
                                                <i class="fas fa-envelope"></i>
                                            </span>
                                        <input type="email" id="login-email" class="form-control ps-5" placeholder="votre@email.com" required>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="login-password" class="form-label">Mot de passe</label>
                                    <div class="position-relative">
                                            <span class="position-absolute top-50 translate-middle-y ms-3 text-muted">
                                                <i class="fas fa-lock"></i>
                                            </span>
                                        <input type="password" id="login-password" class="form-control ps-5" placeholder="••••••••" required>
                                        <button type="button" class="btn btn-link position-absolute end-0 top-50 translate-middle-y me-3 text-decoration-none text-muted toggle-password">
                                            <i class="far fa-eye"></i>
                                        </button>
                                    </div>
                                    <div class="text-end mt-1">
                                        <a href="#" class="text-decoration-none">Mot de passe oublié ?</a>
                                    </div>
                                </div>

                                <div class="mb-3 form-check">
                                    <input id="remember-me" name="remember-me" type="checkbox" class="form-check-input">
                                    <label for="remember-me" class="form-check-label">Se souvenir de moi</label>
                                </div>

                                <button type="submit" class="btn btn-primary w-100 mb-3">
                                    Se connecter <i class="fas fa-sign-in-alt ms-2"></i>
                                </button>
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

                        <!-- Formulaire d'inscription -->
                        <div class="tab-pane fade" id="register-form" role="tabpanel">
                            <h2 class="text-center mb-4">Créez votre compte</h2>

                            <form action="{{ route('users.store')}}" method="post">

                                @csrf
                                <div class="row mb-3">
                                    <div class="col-md-6 mb-3 mb-md-0">
                                        <label for="register-lastname" class="form-label">Nom</label>
                                        <div class="position-relative">
                                                <span class="position-absolute top-50 translate-middle-y ms-3 text-muted">
                                                    <i class="fas fa-user"></i>
                                                </span>
                                            <input type="text" id="register-lastname" class="form-control ps-5" placeholder="Votre nom" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="register-firstname" class="form-label">Prénom</label>
                                        <div class="position-relative">
                                                <span class="position-absolute top-50 translate-middle-y ms-3 text-muted">
                                                    <i class="fas fa-user"></i>
                                                </span>
                                            <input type="text" id="register-firstname" class="form-control ps-5" placeholder="Votre prénom" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="register-gender" class="form-label">Sexe</label>
                                    <div class="position-relative">
                                            <span class="position-absolute top-50 translate-middle-y ms-3 text-muted">
                                                <i class="fas fa-venus-mars"></i>
                                            </span>
                                        <select id="register-gender" class="form-select ps-5" required>
                                            <option value="">Sélectionnez votre sexe</option>
                                            <option value="male">Masculin</option>
                                            <option value="female">Féminin</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="register-address" class="form-label">Adresse</label>
                                    <div class="position-relative">
                                            <span class="position-absolute top-50 translate-middle-y ms-3 text-muted">
                                                <i class="fas fa-map-marker-alt"></i>
                                            </span>
                                        <input type="text" id="register-address" class="form-control ps-5" placeholder="Votre adresse complète" required>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="register-phone" class="form-label">Téléphone</label>
                                    <div class="position-relative">
                                            <span class="position-absolute top-50 translate-middle-y ms-3 text-muted">
                                                <i class="fas fa-phone"></i>
                                            </span>
                                        <input type="tel" id="register-phone" class="form-control ps-5" placeholder="Votre numéro de téléphone" required>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-md-6 mb-3 mb-md-0">
                                        <label for="register-password" class="form-label">Mot de passe</label>
                                        <div class="position-relative">
                                                <span class="position-absolute top-50 translate-middle-y ms-3 text-muted">
                                                    <i class="fas fa-lock"></i>
                                                </span>
                                            <input type="password" id="register-password" class="form-control ps-5" placeholder="••••••••" required>
                                            <button type="button" class="btn btn-link position-absolute end-0 top-50 translate-middle-y me-3 text-decoration-none text-muted toggle-password">
                                                <i class="far fa-eye"></i>
                                            </button>
                                        </div>
                                        <div class="form-text">8 caractères minimum avec majuscule, minuscule et chiffre</div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="register-confirm-password" class="form-label">Confirmer le mot de passe</label>
                                        <div class="position-relative">
                                                <span class="position-absolute top-50 translate-middle-y ms-3 text-muted">
                                                    <i class="fas fa-lock"></i>
                                                </span>
                                            <input type="password" id="register-confirm-password" class="form-control ps-5" placeholder="••••••••" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-md-6 mb-3 mb-md-0">
                                        <label for="register-birthdate" class="form-label">Date de naissance</label>
                                        <div class="position-relative">
                                                <span class="position-absolute top-50 translate-middle-y ms-3 text-muted">
                                                    <i class="fas fa-calendar-alt"></i>
                                                </span>
                                            <input type="date" id="register-birthdate" class="form-control ps-5" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="register-birthplace" class="form-label">Lieu de naissance</label>
                                        <div class="position-relative">
                                                <span class="position-absolute top-50 translate-middle-y ms-3 text-muted">
                                                    <i class="fas fa-map-pin"></i>
                                                </span>
                                            <input type="text" id="register-birthplace" class="form-control ps-5" placeholder="Lieu de naissance" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-md-6 mb-3 mb-md-0">
                                        <label for="register-father" class="form-label">Nom du père</label>
                                        <div class="position-relative">
                                                <span class="position-absolute top-50 translate-middle-y ms-3 text-muted">
                                                    <i class="fas fa-male"></i>
                                                </span>
                                            <input type="text" id="register-father" class="form-control ps-5" placeholder="Nom complet du père" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="register-mother" class="form-label">Nom de la mère</label>
                                        <div class="position-relative">
                                                <span class="position-absolute top-50 translate-middle-y ms-3 text-muted">
                                                    <i class="fas fa-female"></i>
                                                </span>
                                            <input type="text" id="register-mother" class="form-control ps-5" placeholder="Nom complet de la mère" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="register-decision" class="form-label">Décision</label>
                                    <div class="position-relative">
                                            <span class="position-absolute top-50 translate-middle-y ms-3 text-muted">
                                                <i class="fas fa-file-alt"></i>
                                            </span>
                                        <input type="text" id="register-decision" class="form-control ps-5" placeholder="Décision" required>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="register-date" class="form-label">Date d'inscription</label>
                                    <div class="position-relative">
                                            <span class="position-absolute top-50 translate-middle-y ms-3 text-muted">
                                                <i class="fas fa-calendar-day"></i>
                                            </span>
                                        <input type="date" id="register-date" class="form-control ps-5" required>
                                    </div>
                                </div>

                                <div class="mb-3 form-check">
                                    <input id="terms" name="terms" type="checkbox" class="form-check-input" required>
                                    <label for="terms" class="form-check-label">
                                        J'accepte les <a href="#" class="text-decoration-none">conditions d'utilisation</a>
                                    </label>
                                </div>

                                <button type="submit" class="btn btn-primary w-100">
                                    S'inscrire <i class="fas fa-user-plus ms-2"></i>
                                </button>
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

        // Préremplir la date d'inscription avec la date du jour
        const today = new Date();
        const yyyy = today.getFullYear();
        let mm = today.getMonth() + 1;
        let dd = today.getDate();

        if (dd < 10) dd = '0' + dd;
        if (mm < 10) mm = '0' + mm;

        const formattedToday = yyyy + '-' + mm + '-' + dd;
        document.getElementById('register-date').value = formattedToday;

        // Validation des formulaires
        document.querySelectorAll('form').forEach(form => {
            form.addEventListener('submit', function(e) {
                e.preventDefault();
                // Ici vous ajouteriez la logique de validation et de soumission
                alert('Fonctionnalité de connexion/inscription à implémenter');
            });
        });
    });
</script>
</body>
</html>
