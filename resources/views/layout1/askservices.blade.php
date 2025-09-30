@extends('layout1.app')

@section('title', 'Nos Services')

@section('content2')
@if(session('success'))
    <div class="alert alert-success text-center">
        {{ session('success') }}
    </div>
@endif

<section id="contact" class="contact-section py-5">
    <div class="container">
        <h2 class="text-center mb-4 fw-bold ">Demande de Service</h2>

        <!-- Barre de progression -->
        <div class="progress mb-5" style="height: 25px;">
            <div id="progressBar" 
                 class="progress-bar progress-bar-striped progress-bar-animated bg-primary fw-bold"
                 role="progressbar" style="width: 25%">
                Étape 1/4
            </div>
        </div>

        @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

        <form id="serviceForm"  method="POST" action="{{ route('services.store') }}" enctype="multipart/form-data" class="shadow-lg p-4 rounded bg-white">
            @csrf

            <!-- ÉTAPE 1 : Infos personnelles -->
            <div id="step1" class="step animate__animated animate__fadeIn">
                <h5 class="text-center text-secondary mb-4">Informations Personnelles</h5>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label>Prénom</label>
                        <input type="text" class="form-control" name="prenom" >
                    </div>
                    <div class="col-md-6 mb-3">
                        <label>Nom</label>
                        <input type="text" class="form-control" name="nom" >
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label>Sexe</label>
                        <select class="form-control" name="sexe" >
                            <option value="">Sélectionnez</option>
                            <option value="Homme">Homme</option>
                            <option value="Femme">Femme</option>
                        </select>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label>Adresse</label>
                        <input type="text" class="form-control" name="adresse" >
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label>Email</label>
                        <input type="email" class="form-control" name="email" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label>Téléphone</label>
                        <input type="text" class="form-control" name="telephone" required>
                    </div>
                </div>
                <div class="mb-3">
                    <label>Type de Service</label>
                    <select class="form-control" id="serviceType" name="libelle" onchange="updateServiceFields()" required>
                        <option value="">Sélectionnez</option>
                        <option value="renouvellement">Renouvellement de permis</option>
                        <option value="capacité">Délivrance de capacité</option>
                        <option value="chauffeurs">Demande de chauffeurs</option>
                    </select>
                </div>
                <div class="text-center mt-4">
                    <button type="button" class="btn btn-primary nextBtn px-4">Suivant</button>
                </div>
            </div>

            <!-- ÉTAPE 2 : Infos spécifiques service -->
            <div id="step2" class="step animate__animated animate__fadeIn" style="display:none;">
                <h5 class="text-center text-secondary mb-4">Informations relatives au service demandé</h5>
                <div id="specificFields"></div>
                <div class="text-center mt-4">
                    <button type="button" class="btn btn-secondary prevBtn px-4">Précédent</button>
                    <button type="button" class="btn btn-primary nextBtn px-4">Suivant</button>
                </div>
            </div>

            <!-- ÉTAPE 3 : Paiement -->
            <div id="step3" class="step animate__animated animate__fadeIn" style="display:none;">
                <h5 class="text-center text-secondary mb-4">Paiement du service</h5>
                <div class="mb-3">
                    <label>Montant du service</label>
                    <input type="text" class="form-control" value="2000 FCFA" readonly>
                </div>
                <div class="mb-3">
                    <label>Moyen de paiement</label>
                    <select class="form-control" name="moyen_paiement" >
                        <option value="">Choisir</option>
                        <option value="orange">Orange Money</option>
                        <option value="mtn">MTN Mobile Money</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label>Numéro de téléphone de paiement</label>
                    <input type="text" class="form-control" name="numero_paiement" >
                </div>
                <div class="text-center mt-4">
                    <button type="button" class="btn btn-secondary prevBtn px-4">Précédent</button>
                    <button type="button" class="btn btn-primary nextBtn px-4">Suivant</button>
                </div>
            </div>

            <!-- ÉTAPE 4 : Sécurisation compte -->
            <div id="step4" class="step animate__animated animate__fadeIn" style="display:none;">
                <h5 class="text-center text-secondary mb-4">Sécurisez votre compte</h5>
                <div class="mb-3">
                    <label>Mot de passe</label>
                    <input type="password" class="form-control" name="mot_de_passe" required>
                </div>
                <div class="mb-3">
                    <label>Confirmer le mot de passe</label>
                    <input type="password" class="form-control" name="mot_de_passe_confirmation" required>
                </div>

                <div class="mb-3">
                    <label>Choisir l'agence la plus proche</label>
                    <select class="form-control" name="agence_id" required>
                        <option value="">-- Choisir une agence --</option>
                        @forelse($agences as $agence)
                            <option value="{{ $agence->id }}" {{ old('agence_id') == $agence->id ? 'selected' : '' }}>
                                {{ $agence->nom ?? 'Agence #' . $agence->id }}
                            </option>
                        @empty
                            <option value="">Aucune agence disponible</option>
                        @endforelse
                    </select>
                </div>



                <div class="text-center mt-4">
                    <button type="button" class="btn btn-secondary prevBtn px-4">Précédent</button>
                    <button type="submit" class="btn btn-success px-4">Soumettre</button>
                </div>
            </div>
        </form>
    </div>
</section>

<!-- Import Animate.css pour les animations -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

<style>
    body {
        background: #f8f9fa;
    }
    .contact-section {
        background: linear-gradient(135deg, #e9f2ff, #ffffff);
    }
    .form-control:focus {
        border-color: #0d6efd;
        box-shadow: 0 0 6px rgba(13,110,253,0.5);
    }
    .btn {
        transition: transform 0.2s;
    }
    .btn:hover {
        transform: scale(1.05);
    }
</style>

<script>
let currentStep = 1;

function showStep(step) {
    document.querySelectorAll(".step").forEach((div, index) => {
        div.style.display = (index + 1 === step) ? "block" : "none";
    });

    // Mettre à jour la barre de progression
    const progressBar = document.getElementById("progressBar");
    progressBar.style.width = (step * 25) + "%";
    progressBar.innerText = "Étape " + step + "/4";

    currentStep = step;
}

document.querySelectorAll(".nextBtn").forEach(btn => {
    btn.addEventListener("click", () => {
        if (currentStep < 4) showStep(currentStep + 1);
    });
});

document.querySelectorAll(".prevBtn").forEach(btn => {
    btn.addEventListener("click", () => {
        if (currentStep > 1) showStep(currentStep - 1);
    });
});

// Champs dynamiques selon service choisi
function updateServiceFields() {
    const serviceType = document.getElementById('serviceType').value;
    const specificFields = document.getElementById('specificFields');
    let fieldsHTML = "";

    if (serviceType === "renouvellement") {
        fieldsHTML = `
            <div class="mb-3">
                <label>Numéro de l'ancien permis</label>
                <input type="text" class="form-control" name="num_permis">
            </div>
            <div class="mb-3">
                <label>Photocopie de l'ancien permis</label>
                <input type="file" class="form-control" name="num_anc">
            </div>

             <div class="mb-3">
                <label>Piece d'identité (CNI / Passeport)</label>
                <input type="file" class="form-control" name="piece">
            </div>

            <div class="mb-3">
                <label>Motif de renouvellement</label>
                <textarea class="form-control" name="motif"></textarea>
            </div>
        `;
    } else if (serviceType === "capacité") {
        fieldsHTML = `
            <div class="mb-3">
                <label>Années d'expérience</label>
                <input type="number" class="form-control" name="experience">
            </div>

            <div class="mb-3">
                <label>Permis de conduire valide</label>
                <input type="file" class="form-control" name="permis">
            </div>
            <div class="mb-3">
                <label>Certificat medical</label>
                <input type="file" class="form-control" name="certificat">
            </div>

             <div class="mb-3">
                <label>Formation complémentaire (sécurité routière, conduite défensive, etc.)</label>
                <input type="text" class="form-control" name="autre">
            </div>

            <div class="mb-3">
                <label>Type de capacité</label>
                <select class="form-control" name="capacite">
                    <option value="personnes">Transport de personnes</option>
                    <option value="marchandises">Transport de marchandises</option>
                </select>
            </div>
        `;
    } else if (serviceType === "chauffeurs") {
        fieldsHTML = `
            <div class="mb-3">
                <label>Exigences</label>
                <textarea class="form-control" name="exigences"></textarea>
            </div>
            <div class="mb-3">
                <label>Durée de l'emploi</label>
                <input type="text" class="form-control" name="duree">
            </div>
             <div class="mb-3">
                <label>Formalité de paiement</label>
                <textarea class="form-control" name="formalite"></textarea>
            </div>
            
        `;
    }
    specificFields.innerHTML = fieldsHTML;
}
</script>
@endsection
