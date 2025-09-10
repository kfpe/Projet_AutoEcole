<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion/Inscription - SOSMobil</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}"> 

    
</head>
<body class="font-sans antialiased bg-gray-50 min-h-screen flex items-center justify-center auth-container">

    <div class="container mx-auto px-4 py-12">
        <div class="max-w-3xl mx-auto auth-card rounded-xl overflow-hidden">
            <!-- En-tête avec onglets -->
            <div class="flex border-b border-gray-200">
                <button id="login-tab" class="flex-1 py-4 px-6 text-center font-medium tab-btn tab-active">
                    Connexion
                </button>
                <button id="register-tab" class="flex-1 py-4 px-6 text-center font-medium tab-btn">
                    Inscription
                </button>
            </div>
            
            <!-- Contenu des onglets -->
            <div class="p-8">
                <!-- Formulaire de connexion -->
                <div id="login-form">
                    <h2 class="text-2xl font-bold text-center mb-6 text-gray-800">Connectez-vous à votre compte</h2>
                    
                    <form class="space-y-6">
                        <div>
                            <label for="login-email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <i class="fas fa-envelope text-gray-400"></i>
                                </div>
                                <input type="email" id="login-email" class="pl-10 w-full py-3 input-field focus:outline-none bg-transparent" placeholder="votre@email.com" required>
                            </div>
                        </div>
                        
                        <div>
                            <label for="login-password" class="block text-sm font-medium text-gray-700 mb-1">Mot de passe</label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <i class="fas fa-lock text-gray-400"></i>
                                </div>
                                <input type="password" id="login-password" class="pl-10 w-full py-3 input-field focus:outline-none bg-transparent" placeholder="••••••••" required>
                                <button type="button" class="absolute right-0 top-0 mt-3 mr-3 text-gray-400 hover:text-gray-600 toggle-password">
                                    <i class="far fa-eye"></i>
                                </button>
                            </div>
                            <div class="flex justify-end mt-1">
                                <a href="#" class="text-sm text-blue-500 hover:text-blue-700">Mot de passe oublié ?</a>
                            </div>
                        </div>
                        
                        <div class="flex items-center">
                            <input id="remember-me" name="remember-me" type="checkbox" class="h-4 w-4 text-blue-500 focus:ring-blue-500 border-gray-300 rounded">
                            <label for="remember-me" class="ml-2 block text-sm text-gray-700">Se souvenir de moi</label>
                        </div>
                        
                        <button type="submit" class="w-full btn-primary">
                            Se connecter <i class="fas fa-sign-in-alt ml-2"></i>
                        </button>
                    </form>
                    
                    <div class="mt-6">
                        <div class="relative">
                            <div class="absolute inset-0 flex items-center">
                                <div class="w-full border-t border-gray-300"></div>
                            </div>
                            <div class="relative flex justify-center text-sm">
                                <span class="px-2 bg-white text-gray-500">Ou continuer avec</span>
                            </div>
                        </div>
                        
                        <div class="mt-6 grid grid-cols-2 gap-3">
                            <button type="button" class="social-btn w-full inline-flex justify-center py-2 px-4 rounded-md bg-white text-gray-700">
                                <i class="fab fa-google text-red-500 mr-2"></i> Google
                            </button>
                            <button type="button" class="social-btn w-full inline-flex justify-center py-2 px-4 rounded-md bg-white text-gray-700">
                                <i class="fab fa-facebook-f text-blue-600 mr-2"></i> Facebook
                            </button>
                        </div>
                    </div>
                </div>
                
                <!-- Formulaire d'inscription (caché par défaut) -->
                <div id="register-form" class="hidden">
                    <h2 class="text-2xl font-bold text-center mb-6 text-gray-800">Créez votre compte</h2>
                    
                    <form class="space-y-6">
                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <label for="register-lastname" class="block text-sm font-medium text-gray-700 mb-1">Nom</label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                        <i class="fas fa-user text-gray-400"></i>
                                    </div>
                                    <input type="text" id="register-lastname" class="pl-10 w-full py-3 input-field focus:outline-none bg-transparent" placeholder="Votre nom" required>
                                </div>
                            </div>
                            <div>
                                <label for="register-firstname" class="block text-sm font-medium text-gray-700 mb-1">Prénom</label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                        <i class="fas fa-user text-gray-400"></i>
                                    </div>
                                    <input type="text" id="register-firstname" class="pl-10 w-full py-3 input-field focus:outline-none bg-transparent" placeholder="Votre prénom" required>
                                </div>
                            </div>
                        </div>

                        <div>
                            <label for="register-gender" class="block text-sm font-medium text-gray-700 mb-1">Sexe</label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <i class="fas fa-venus-mars text-gray-400"></i>
                                </div>
                                <select id="register-gender" class="pl-10 w-full py-3 input-field focus:outline-none bg-transparent" required>
                                    <option value="">Sélectionnez votre sexe</option>
                                    <option value="male">Masculin</option>
                                    <option value="female">Féminin</option>
                                </select>
                            </div>
                        </div>

                        <div>
                            <label for="register-address" class="block text-sm font-medium text-gray-700 mb-1">Adresse</label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <i class="fas fa-map-marker-alt text-gray-400"></i>
                                </div>
                                <input type="text" id="register-address" class="pl-10 w-full py-3 input-field focus:outline-none bg-transparent" placeholder="Votre adresse complète" required>
                            </div>
                        </div>

                        <div>
                            <label for="register-phone" class="block text-sm font-medium text-gray-700 mb-1">Téléphone</label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <i class="fas fa-phone text-gray-400"></i>
                                </div>
                                <input type="tel" id="register-phone" class="pl-10 w-full py-3 input-field focus:outline-none bg-transparent" placeholder="Votre numéro de téléphone" required>
                            </div>
                        </div>

                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <label for="register-password" class="block text-sm font-medium text-gray-700 mb-1">Mot de passe</label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                        <i class="fas fa-lock text-gray-400"></i>
                                    </div>
                                    <input type="password" id="register-password" class="pl-10 w-full py-3 input-field focus:outline-none bg-transparent" placeholder="••••••••" required>
                                    <button type="button" class="absolute right-0 top-0 mt-3 mr-3 text-gray-400 hover:text-gray-600 toggle-password">
                                        <i class="far fa-eye"></i>
                                    </button>
                                </div>
                                <p class="mt-1 text-xs text-gray-500">8 caractères minimum avec majuscule, minuscule et chiffre</p>
                            </div>
                            <div>
                                <label for="register-confirm-password" class="block text-sm font-medium text-gray-700 mb-1">Confirmer le mot de passe</label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                        <i class="fas fa-lock text-gray-400"></i>
                                    </div>
                                    <input type="password" id="register-confirm-password" class="pl-10 w-full py-3 input-field focus:outline-none bg-transparent" placeholder="••••••••" required>
                                </div>
                            </div>
                        </div>

                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <label for="register-birthdate" class="block text-sm font-medium text-gray-700 mb-1">Date de naissance</label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                        <i class="fas fa-calendar-alt text-gray-400"></i>
                                    </div>
                                    <input type="date" id="register-birthdate" class="pl-10 w-full py-3 input-field focus:outline-none bg-transparent" required>
                                </div>
                            </div>
                            <div>
                                <label for="register-birthplace" class="block text-sm font-medium text-gray-700 mb-1">Lieu de naissance</label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                        <i class="fas fa-map-pin text-gray-400"></i>
                                    </div>
                                    <input type="text" id="register-birthplace" class="pl-10 w-full py-3 input-field focus:outline-none bg-transparent" placeholder="Lieu de naissance" required>
                                </div>
                            </div>
                        </div>

                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <label for="register-father" class="block text-sm font-medium text-gray-700 mb-1">Nom du père</label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                        <i class="fas fa-male text-gray-400"></i>
                                    </div>
                                    <input type="text" id="register-father" class="pl-10 w-full py-3 input-field focus:outline-none bg-transparent" placeholder="Nom complet du père" required>
                                </div>
                            </div>
                            <div>
                                <label for="register-mother" class="block text-sm font-medium text-gray-700 mb-1">Nom de la mère</label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                        <i class="fas fa-female text-gray-400"></i>
                                    </div>
                                    <input type="text" id="register-mother" class="pl-10 w-full py-3 input-field focus:outline-none bg-transparent" placeholder="Nom complet de la mère" required>
                                </div>
                            </div>
                        </div>

                        <div>
                            <label for="register-decision" class="block text-sm font-medium text-gray-700 mb-1">Décision</label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <i class="fas fa-file-alt text-gray-400"></i>
                                </div>
                                <input type="text" id="register-decision" class="pl-10 w-full py-3 input-field focus:outline-none bg-transparent" placeholder="Décision" required>
                            </div>
                        </div>

                        <div>
                            <label for="register-date" class="block text-sm font-medium text-gray-700 mb-1">Date d'inscription</label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <i class="fas fa-calendar-day text-gray-400"></i>
                                </div>
                                <input type="date" id="register-date" class="pl-10 w-full py-3 input-field focus:outline-none bg-transparent" required>
                            </div>
                        </div>
                        
                        <div class="flex items-center">
                            <input id="terms" name="terms" type="checkbox" class="h-4 w-4 text-blue-500 focus:ring-blue-500 border-gray-300 rounded" required>
                            <label for="terms" class="ml-2 block text-sm text-gray-700">
                                J'accepte les <a href="#" class="text-blue-500 hover:text-blue-700">conditions d'utilisation</a>
                            </label>
                        </div>
                        
                        <button type="submit" class="w-full btn-primary">
                            S'inscrire <i class="fas fa-user-plus ml-2"></i>
                        </button>
                    </form>
                    
                    <div class="mt-4 text-center text-sm text-gray-600">
                        Vous avez déjà un compte ? 
                        <button class="text-blue-500 hover:text-blue-700 switch-to-login">Connectez-vous</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/login.js') }}"></script>
</body>
</html>