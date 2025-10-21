<x-guest-layout>
    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
        @csrf

        <!-- Nom -->
        <div>
            <x-input-label for="nom" :value="__('Nom')" />
            <x-text-input id="nom" class="block mt-1 w-full" type="text" name="nom" :value="old('nom')" required autofocus autocomplete="nom" />
            <x-input-error :messages="$errors->get('nom')" class="mt-2" />
        </div>

        <!-- Prénom -->
        <div class="mt-4">
            <x-input-label for="prenom" :value="__('Prénom')" />
            <x-text-input id="prenom" class="block mt-1 w-full" type="text" name="prenom" :value="old('prenom')" required autocomplete="prenom" />
            <x-input-error :messages="$errors->get('prenom')" class="mt-2" />
        </div>

        <!-- Sexe -->
        <div class="mt-4">
            <x-input-label for="sexe" :value="__('Sexe')" />
            <select id="sexe" name="sexe" class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" required>
                <option value="homme">Homme</option>
                <option value="femme">Femme</option>
                <option value="autre">Autre</option>
            </select>
            <x-input-error :messages="$errors->get('sexe')" class="mt-2" />
        </div>

        <!-- Adresse -->
        <div class="mt-4">
            <x-input-label for="adresse" :value="__('Adresse')" />
            <x-text-input id="adresse" class="block mt-1 w-full" type="text" name="adresse" :value="old('adresse')" required autocomplete="adresse" />
            <x-input-error :messages="$errors->get('adresse')" class="mt-2" />
        </div>

        <!-- Téléphone -->
        <div class="mt-4">
            <x-input-label for="tel" :value="__('Téléphone')" />
            <x-text-input id="tel" class="block mt-1 w-full" type="text" name="tel" :value="old('tel')" required autocomplete="tel" />
            <x-input-error :messages="$errors->get('tel')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="email" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />
            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
            <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <!-- Agence -->
        <div class="mt-4">
            <x-input-label for="agence_id" :value="__('Agence')" />
            <select id="agence_id" name="agence_id" class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" required>
                @foreach($agences as $agence)
                    <option value="{{ $agence->id }}">{{ $agence->nom ?? $agence->id }}</option>
                @endforeach
            </select>
            <x-input-error :messages="$errors->get('agence_id')" class="mt-2" />
        </div>

        <!-- Rôle -->
        <div class="mt-4">
            <x-input-label for="role" :value="__('Rôle')" />
            <select id="role" name="role" class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" required>
                <option value="admin">Admin</option>
                <option value="candidat">Candidat</option>
                <option value="secretaire">Secrétaire</option>
                <option value="moniteur">Moniteur</option>
            </select>
            <x-input-error :messages="$errors->get('role')" class="mt-2" />
        </div>

        <!-- Champs spécifiques par rôle -->
        <div id="admin-fields" style="display: none;">
            <!-- Rien pour admin -->
        </div>

        <div id="candidat-fields" style="display: none;">
            <!-- Date de naissance -->
            <div class="mt-4">
                <x-input-label for="date_nais" :value="__('Date de naissance')" />
                <x-text-input id="date_nais" class="block mt-1 w-full" type="date" name="date_nais" :value="old('date_nais')" />
                <x-input-error :messages="$errors->get('date_nais')" class="mt-2" />
            </div>
            <!-- Lieu de naissance -->
            <div class="mt-4">
                <x-input-label for="lieu_nais" :value="__('Lieu de naissance')" />
                <x-text-input id="lieu_nais" class="block mt-1 w-full" type="text" name="lieu_nais" :value="old('lieu_nais')" />
                <x-input-error :messages="$errors->get('lieu_nais')" class="mt-2" />
            </div>
            <!-- Nom du père -->
            <div class="mt-4">
                <x-input-label for="nom_pere" :value="__('Nom du père')" />
                <x-text-input id="nom_pere" class="block mt-1 w-full" type="text" name="nom_pere" :value="old('nom_pere')" />
                <x-input-error :messages="$errors->get('nom_pere')" class="mt-2" />
            </div>
            <!-- Nom de la mère -->
            <div class="mt-4">
                <x-input-label for="nom_mere" :value="__('Nom de la mère')" />
                <x-text-input id="nom_mere" class="block mt-1 w-full" type="text" name="nom_mere" :value="old('nom_mere')" />
                <x-input-error :messages="$errors->get('nom_mere')" class="mt-2" />
            </div>
            <!-- Statut -->
            <div class="mt-4">
                <x-input-label for="statut" :value="__('Statut')" />
                <select id="statut" name="statut" class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
                    <option value="solvable">Solvable</option>
                    <option value="insolvable">Insolvable</option>
                </select>
                <x-input-error :messages="$errors->get('statut')" class="mt-2" />
            </div>
            <!-- Formation -->
            <div class="mt-4">
                <x-input-label for="formation_id" :value="__('Formation')" />
                <select id="formation_id" name="formation_id" class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
                    @foreach($formations as $formation)
                        <option value="{{ $formation->id }}">{{ $formation->nom ?? $formation->id }}</option>
                    @endforeach
                </select>
                <x-input-error :messages="$errors->get('formation_id')" class="mt-2" />
            </div>
            <!-- Photo (optionnel) -->
            <div class="mt-4">
                <x-input-label for="photo" :value="__('Photo')" />
                <input id="photo" class="block mt-1 w-full" type="file" name="photo" />
                <x-input-error :messages="$errors->get('photo')" class="mt-2" />
            </div>
        </div>

        <div id="secretaire-fields" style="display: none;">
            <!-- Salaire (optionnel) -->
            <div class="mt-4">
                <x-input-label for="salaire" :value="__('Salaire')" />
                <x-text-input id="salaire" class="block mt-1 w-full" type="number" step="0.01" name="salaire" :value="old('salaire')" />
                <x-input-error :messages="$errors->get('salaire')" class="mt-2" />
            </div>
            <!-- CV (optionnel) -->
            <div class="mt-4">
                <x-input-label for="cv" :value="__('CV')" />
                <input id="cv" class="block mt-1 w-full" type="file" name="cv" />
                <x-input-error :messages="$errors->get('cv')" class="mt-2" />
            </div>
        </div>

        <div id="moniteur-fields" style="display: none;">
            <!-- Salaire (optionnel) -->
            <div class="mt-4">
                <x-input-label for="salaire" :value="__('Salaire')" />
                <x-text-input id="salaire" class="block mt-1 w-full" type="number" step="0.01" name="salaire" :value="old('salaire')" />
                <x-input-error :messages="$errors->get('salaire')" class="mt-2" />
            </div>
            <!-- Catégorie de permis (optionnel) -->
            <div class="mt-4">
                <x-input-label for="categorie_permis" :value="__('Catégorie de permis')" />
                <x-text-input id="categorie_permis" class="block mt-1 w-full" type="text" name="categorie_permis" :value="old('categorie_permis')" />
                <x-input-error :messages="$errors->get('categorie_permis')" class="mt-2" />
            </div>
            <!-- CV (optionnel) -->
            <div class="mt-4">
                <x-input-label for="cv" :value="__('CV')" />
                <input id="cv" class="block mt-1 w-full" type="file" name="cv" />
                <x-input-error :messages="$errors->get('cv')" class="mt-2" />
            </div>
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>

    <script>
        document.getElementById('role').addEventListener('change', function() {
            var role = this.value;
            ['admin', 'candidat', 'secretaire', 'moniteur'].forEach(function(r) {
                document.getElementById(r + '-fields').style.display = (role === r) ? 'block' : 'none';
            });
        });
    </script>
</x-guest-layout>
