@extends('layout1.app')

@section('title', 'Nos Services')

@section('content2')
@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif


<section id="contact" class="contact-section">
    <div class="container">
        <h2 class="text-center mb-5">Demande de Service</h2>
        <form id="serviceForm" class="service-form"  method="POST" action="{{ route('services.store') }}">
            <div id="step1">
                <h6 class="text-center">Remplir le formulaire pour demander le service</h6>
                <div class="form-group">
                    <label for="firstName" >Prénom <i class="fas fa-user"></i></label>
                    <input type="text"  class="form-control" id="firstName" name="prenom" required>
                </div>
                <div class="form-group">
                    <label for="lastName">Nom <i class="fas fa-user"></i></label>
                    <input type="text"  class="form-control" id="lastName" name="nom" required>
                </div>
                <div class="form-group">
                    <label for="gender">Sexe <i class="fas fa-venus-mars"></i></label>
                    <select class="form-control" id="gender" name="sexe" required>
                        <option value="">Sélectionnez</option>
                        <option value="male">Homme</option>
                        <option value="female">Femme</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="address">Adresse <i class="fas fa-map-marker-alt"></i></label>
                    <input type="text" class="form-control" id="address" name="adresse" required>
                </div>
                <div class="form-group">
                    <label for="email">Email <i class="fas fa-envelope"></i></label>
                    <input type="email" class="form-control" id="email"  name="email" required>
                </div>
                <div class="form-group">
                    <label for="phone">Téléphone <i class="fas fa-phone"></i></label>
                    <input type="phone" class="form-control" id="phone" name="telephone" required>
                </div>
                <div class="form-group">
                    <label for="serviceType">Type de Service <i class="fas fa-cogs"></i></label>
                    <select class="form-control" id="serviceType" onchange="updateServiceFields()" name="libelle" required>
                        <option value="">Sélectionnez un service</option>
                        <option value="formation">Formation pour le Permis</option>
                        <option value="renouvellement">Renouvellement et Duplicata</option>
                        <option value="capacité">Délivrance de la Capacité</option>
                        <option value="chauffeurs">Proposition de Chauffeurs</option>
                    </select>
                </div>
                <div id="specificFields" class="mt-4"></div>
                <div class="text-center mt-4">
                    <button type="button" class="btn btn-primary" id="nextStep1">Poursuivre <i class="fas fa-arrow-right"></i></button>
                    <a type="button" class="btn btn-secondary" href="{{ route('services') }}">Annuler <i class="fas fa-times"></i></a>
                </div>
            </div>

            <div id="step2" style="display:none;">
                <h6 class="text-center">Sécuriser votre compte d'un mot de passe unique</h6>
                <div class="form-group">
                    <label for="password">Mot de Passe <i class="fas fa-lock"></i></label>
                    <input type="password" class="form-control" id="password" name="mot_de_passe" required>
                </div>
                <div class="form-group">
                    <label for="confirmPassword">Confirmer le Mot de Passe <i class="fas fa-lock"></i></label>
                    <input type="password" class="form-control" id="confirmPassword" name="mot_de_passe_confirmation" required>
                </div>
                <div class="text-center mt-4">
                    <button type="submit" class="btn btn-success">Soumettre <i class="fas fa-check"></i></button>
                    <button type="button" class="btn btn-secondary" id="cancelStep2">Annuler <i class="fas fa-times"></i></button>
                </div>
            </div>
        </form>
    </div>
</section>

<style>
    .contact-section {
        background-color: white;
        padding: 50px 0;
    }
    
    .service-form {
        border: 1px solid #002f6c;
        border-radius: 10px;
        padding: 30px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }

    .form-group label {
        color: #002f6c;
    }

    .form-control {
        border: 1px solid #002f6c;
        border-radius: 5px;
    }

    .form-control:focus {
        border-color: #0056b3;
        box-shadow: 0 0 5px rgba(0, 86, 179, 0.5);
    }

    .btn-primary {
        background-color: #002f6c;
        border: none;
    }

    .btn-primary:hover {
        background-color: #0056b3;
    }

    .btn-success {
        background-color: #28a745;
        border: none;
    }

    .btn-success:hover {
        background-color: #218838;
    }

    .btn-secondary {
        background-color: #ccc;
        border: none;
    }

    .btn-secondary:hover {
        background-color: #bbb;
    }

    h3 {
        margin-bottom: 20px;
        color: #002f6c;
    }
</style>

<script>
function updateServiceFields() {
    const serviceType = document.getElementById('serviceType').value;
    const specificFields = document.getElementById('specificFields');
    
    let fieldsHTML = '';

    switch(serviceType) {
        case 'formation':
            fieldsHTML = `<div class="form-group">
                <label for="drivingExperience">Expérience de conduite <i class="fas fa-car"></i></label>
                <input type="text" class="form-control" id="drivingExperience" name="experience" required>
            </div>
            <div class="form-group">
                <label for="lessonCount">Nombre de leçons <i class="fas fa-book"></i></label>
                <input type="number" class="form-control" id="lessonCount" required>
            </div>`;
            break;
        case 'renouvellement':
            fieldsHTML = `<div class="form-group">
                <label for="oldLicense">Numéro de l'ancien permis <i class="fas fa-id-card"></i></label>
                <input type="text" class="form-control" id="oldLicense" name="numpermis" required>
            </div>
            <div class="form-group">
                <label for="renewalReason">Raison du renouvellement <i class="fas fa-recycle"></i></label>
                <textarea class="form-control" id="renewalReason" name="motif" required></textarea>
            </div>`;
            break;
        case 'capacité':
            fieldsHTML = `<div class="form-group">
                <label for="professionalExperience">Expérience professionnelle <i class="fas fa-briefcase"></i></label>
                <input type="text" class="form-control" id="professionalExperience" name="motdepasse"exper required>
            </div>
            <div class="form-group">
                <label for="capacityType">Type de capacité <i class="fas fa-tasks"></i></label>
                <select class="form-control" id="capacityType" name="capacite" required>
                    <option value="chauffeur">Chauffeur</option>
                    <option value="transport">Transport de marchandises</option>
                </select>
            </div>`;
            break;
        case 'chauffeurs':
            fieldsHTML = `<div class="form-group">
                <label for="chauffeurRequirements">Exigences pour le chauffeur <i class="fas fa-user-tie"></i></label>
                <textarea class="form-control" id="chauffeurRequirements" required></textarea>
            </div>
            <div class="form-group">
                <label for="jobDuration">Durée de l'emploi <i class="fas fa-clock"></i></label>
                <input type="text" class="form-control" id="jobDuration" name="duree" required>
            </div>`;
            break;
        default:
            fieldsHTML = '';
    }

    specificFields.innerHTML = fieldsHTML;
}

document.getElementById('nextStep1').addEventListener('click', function() {
    document.getElementById('step1').style.display = 'none';
    document.getElementById('step2').style.display = 'block';
});

document.getElementById('cancelStep1').addEventListener('click', function() {
    // Logique pour annuler la demande
    window.location.href = '#'; // Redirection ou autre action
});

document.getElementById('cancelStep2').addEventListener('click', function() {
    document.getElementById('step2').style.display = 'none';
    document.getElementById('step1').style.display = 'block';
});
</script>
@endsection