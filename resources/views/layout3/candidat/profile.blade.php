<x-app-layout>
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
                <div class="card rounded-4 overflow-hidden">
                    <div class="card-body p-4 p-md-5">
                        <h2 class="text-center mb-4">Compléter votre profil</h2>

                        <form method="POST" action="{{ route('candidat.profile.update') }}" enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')

                            <!-- Champs existants de User -->
                            <div class="row mb-3">
                                <div class="col-md-6 mb-3 mb-md-0">
                                    <x-input-label for="nom" :value="__('Nom')" class="form-label" />
                                    <div class="position-relative">
                                        <span class="position-absolute top-50 translate-middle-y ms-3 text-muted">
                                            <i class="fas fa-user"></i>
                                        </span>
                                        <x-text-input id="nom" class="form-control ps-5" type="text" name="nom" :value="old('nom', auth()->user()->nom)" required />
                                        <x-input-error :messages="$errors->get('nom')" class="mt-2" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <x-input-label for="prenom" :value="__('Prénom')" class="form-label" />
                                    <div class="position-relative">
                                        <span class="position-absolute top-50 translate-middle-y ms-3 text-muted">
                                            <i class="fas fa-user"></i>
                                        </span>
                                        <x-text-input id="prenom" class="form-control ps-5" type="text" name="prenom" :value="old('prenom', auth()->user()->prenom)" required />
                                        <x-input-error :messages="$errors->get('prenom')" class="mt-2" />
                                    </div>
                                </div>
                            </div>

                            <!-- Autres champs de User -->
                            <div class="mb-3">
                                <x-input-label for="sexe" :value="__('Sexe')" class="form-label" />
                                <div class="position-relative">
                                    <span class="position-absolute top-50 translate-middle-y ms-3 text-muted">
                                        <i class="fas fa-venus-mars"></i>
                                    </span>
                                    <select id="sexe" name="sexe" class="form-select ps-5" required>
                                        <option value="homme" {{ auth()->user()->sexe == 'homme' ? 'selected' : '' }}>Masculin</option>
                                        <option value="femme" {{ auth()->user()->sexe == 'femme' ? 'selected' : '' }}>Féminin</option>
                                        <option value="autre" {{ auth()->user()->sexe == 'autre' ? 'selected' : '' }}>Autre</option>
                                    </select>
                                    <x-input-error :messages="$errors->get('sexe')" class="mt-2" />
                                </div>
                            </div>

                            <div class="mb-3">
                                <x-input-label for="adresse" :value="__('Adresse')" class="form-label" />
                                <div class="position-relative">
                                    <span class="position-absolute top-50 translate-middle-y ms-3 text-muted">
                                        <i class="fas fa-map-marker-alt"></i>
                                    </span>
                                    <x-text-input id="adresse" class="form-control ps-5" type="text" name="adresse" :value="old('adresse', auth()->user()->adresse)" required />
                                    <x-input-error :messages="$errors->get('adresse')" class="mt-2" />
                                </div>
                            </div>

                            <div class="mb-3">
                                <x-input-label for="tel" :value="__('Téléphone')" class="form-label" />
                                <div class="position-relative">
                                    <span class="position-absolute top-50 translate-middle-y ms-3 text-muted">
                                        <i class="fas fa-phone"></i>
                                    </span>
                                    <x-text-input id="tel" class="form-control ps-5" type="tel" name="tel" :value="old('tel', auth()->user()->tel)" required />
                                    <x-input-error :messages="$errors->get('tel')" class="mt-2" />
                                </div>
                            </div>

                            <div class="mb-3">
                                <x-input-label for="email" :value="__('Email')" class="form-label" />
                                <div class="position-relative">
                                    <span class="position-absolute top-50 translate-middle-y ms-3 text-muted">
                                        <i class="fas fa-envelope"></i>
                                    </span>
                                    <x-text-input id="email" class="form-control ps-5" type="email" name="email" :value="old('email', auth()->user()->email)" required />
                                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                </div>
                            </div>

                            <!-- Champs spécifiques au candidat -->
                            <div class="mb-3">
                                <x-input-label for="date_nais" :value="__('Date de naissance')" class="form-label" />
                                <div class="position-relative">
                                    <span class="position-absolute top-50 translate-middle-y ms-3 text-muted">
                                        <i class="fas fa-calendar-alt"></i>
                                    </span>
                                    <x-text-input id="date_nais" class="form-control ps-5" type="date" name="date_nais" :value="old('date_nais', auth()->user()->candidat->date_nais)" />
                                    <x-input-error :messages="$errors->get('date_nais')" class="mt-2" />
                                </div>
                            </div>

                            <div class="mb-3">
                                <x-input-label for="lieu_nais" :value="__('Lieu de naissance')" class="form-label" />
                                <div class="position-relative">
                                    <span class="position-absolute top-50 translate-middle-y ms-3 text-muted">
                                        <i class="fas fa-map-pin"></i>
                                    </span>
                                    <x-text-input id="lieu_nais" class="form-control ps-5" type="text" name="lieu_nais" :value="old('lieu_nais', auth()->user()->candidat->lieu_nais)" placeholder="Lieu de naissance" />
                                    <x-input-error :messages="$errors->get('lieu_nais')" class="mt-2" />
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6 mb-3 mb-md-0">
                                    <x-input-label for="nom_pere" :value="__('Nom du père')" class="form-label" />
                                    <div class="position-relative">
                                        <span class="position-absolute top-50 translate-middle-y ms-3 text-muted">
                                            <i class="fas fa-male"></i>
                                        </span>
                                        <x-text-input id="nom_pere" class="form-control ps-5" type="text" name="nom_pere" :value="old('nom_pere', auth()->user()->candidat->nom_pere)" placeholder="Nom complet du père" />
                                        <x-input-error :messages="$errors->get('nom_pere')" class="mt-2" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <x-input-label for="nom_mere" :value="__('Nom de la mère')" class="form-label" />
                                    <div class="position-relative">
                                        <span class="position-absolute top-50 translate-middle-y ms-3 text-muted">
                                            <i class="fas fa-female"></i>
                                        </span>
                                        <x-text-input id="nom_mere" class="form-control ps-5" type="text" name="nom_mere" :value="old('nom_mere', auth()->user()->candidat->nom_mere)" placeholder="Nom complet de la mère" />
                                        <x-input-error :messages="$errors->get('nom_mere')" class="mt-2" />
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3">
                                <x-input-label for="statut" :value="__('Statut')" class="form-label" />
                                <div class="position-relative">
                                    <span class="position-absolute top-50 translate-middle-y ms-3 text-muted">
                                        <i class="fas fa-file-alt"></i>
                                    </span>
                                    <select id="statut" name="statut" class="form-select ps-5">
                                        <option value="solvable" {{ auth()->user()->candidat->statut == 'solvable' ? 'selected' : '' }}>Solvable</option>
                                        <option value="insolvable" {{ auth()->user()->candidat->statut == 'insolvable' ? 'selected' : '' }}>Insolvable</option>
                                    </select>
                                    <x-input-error :messages="$errors->get('statut')" class="mt-2" />
                                </div>
                            </div>

                            <div class="mb-3">
                                <x-input-label for="photo" :value="__('Photo')" class="form-label" />
                                <div class="position-relative">
                                    <input id="photo" class="form-control" type="file" name="photo" />
                                    <x-input-error :messages="$errors->get('photo')" class="mt-2" />
                                </div>
                            </div>

                            <x-primary-button class="btn btn-primary w-100">
                                {{ __('Mettre à jour') }} <i class="fas fa-save ms-2"></i>
                            </x-primary-button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
