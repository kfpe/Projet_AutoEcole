@extends('layout1.app')

@section('title', 'Nos Services')

@section('content2')
<section class="hero-service">
    <div class="hero-content text-center">
        <h1 class="text-light text-center">Bienvenue chez AutoDrive</h1>
        <p class="text-light">Votre partenaire pour tous vos besoins de conduite.</p>
        <a href="#services" class="btn btn-primary">Découvrir nos services</a>
    </div>
    <div class="background-slider" style="background-image: url('{{ asset('img/OIP (2).webp') }}');"></div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const images = [
            '{{ asset('img/vehicule (2).webp') }}',
            '{{ asset('img/OIP (2).webp') }}'
        ];
        let index = 0;

        function changeBackground() {
            index = (index + 1) % images.length;
            document.querySelector('.background-slider').style.backgroundImage = `url(${images[index]})`;
        }

        // Change l'image toutes les 10 secondes
        setInterval(changeBackground, 10000);
        
        // Initialisation
        changeBackground();
    });
</script>




<!-- Section des Services -->
<section id="services" class="services-section">
    <div class="container text-center">
        <h2 class="mb-5">Nos Services</h2>
        <div class="row g-4 justify-content-center">
            <div class="col-md-6 col-lg-3">
                <div class="service-card animate__animated animate__fadeIn">
                    <div class="service-icon">
                        <i class="fas fa-car fa-3x"></i>
                    </div>
                    <h3>Formation pour le Permis</h3>
                    <p>Formations complètes pour obtenir votre permis de conduire, avec un suivi personnalisé.</p>
                    <a href="{{ route('askservice') }}" class="btn btn-primary">Demander le service</a>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="service-card animate__animated animate__fadeIn" data-wow-delay="0.1s">
                    <div class="service-icon">
                        <i class="fas fa-id-card fa-3x"></i>
                    </div>
                    <h3>Renouvellement et Duplicata</h3>
                    <p>Assistance pour le renouvellement et le duplicata de vos permis de conduire.</p>
                    <a href="{{ route('askservice') }}" class="btn btn-primary">Demander le service</a>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="service-card animate__animated animate__fadeIn" data-wow-delay="0.2s">
                    <div class="service-icon">
                        <i class="fas fa-user-tie fa-3x"></i>
                    </div>
                    <h3>Délivrance de la Capacité</h3>
                    <p>Obtention de la capacité professionnelle et de badges pour chauffeurs.</p>
                    <a href="{{ route('askservice') }}" class="btn btn-primary">Demander le service</a>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="service-card animate__animated animate__fadeIn" data-wow-delay="0.3s">
                    <div class="service-icon">
                        <i class="fas fa-users fa-3x"></i>
                    </div>
                    <h3>Proposition de Chauffeurs</h3>
                    <p>Mise à disposition de chauffeurs qualifiés pour vos besoins particuliers.</p>
                    <a href="{{ route('askservice') }}" class="btn btn-primary">Demander le service</a>
                </div>
            </div>
        </div>
    </div>
    <div class="background-slider"></div>
</section>


<section class="team-section">
    <div class="container">
        <h2 class="text-center mb-5">Rencontrez Notre Équipe</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="team-member">
                    <img src="{{ asset('img/formateur1.jpg') }}" alt="Formateur 1" class="img-fluid rounded-circle">
                    <h5>Jean Martin</h5>
                    <p>Formateur certifié avec 10 ans d'expérience.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="team-member">
                    <img src="{{ asset('img/formateur2.jpg') }}" alt="Formateur 2" class="img-fluid rounded-circle">
                    <h5>Marie Dubois</h5>
                    <p>Spécialiste en formation pour conducteurs débutants.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="team-member">
                    <img src="{{ asset('img/formateur3.jpg') }}" alt="Formateur 3" class="img-fluid rounded-circle">
                    <h5>Luc Moreau</h5>
                    <p>Expert en conduite défensive et sécurité routière.</p>
                </div>
            </div>
        </div>
    </div>
</section>



<section class="blog-section">
    <div class="container">
        <h2 class="text-center mb-5">Derniers Articles</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="blog-card">
                    <h4>Conseils pour Réussir Votre Permis</h4>
                    <p>Découvrez nos meilleures astuces pour obtenir votre permis de conduire.</p>
                    <a href="#" class="btn btn-secondary">Lire Plus</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="blog-card">
                    <h4>Les Règles de Sécurité Routière</h4>
                    <p>Restez en sécurité sur la route avec ces conseils essentiels.</p>
                    <a href="#" class="btn btn-secondary">Lire Plus</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="blog-card">
                    <h4>Comment Choisir une Auto-École</h4>
                    <p>Les critères à considérer pour choisir la meilleure auto-école.</p>
                    <a href="#" class="btn btn-secondary">Lire Plus</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="faq-section">
    <div class="container">
        <h2 class="text-center mb-5">Questions Fréquemment Posées</h2>
        <div class="accordion" id="faqAccordion">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Comment s'inscrire à une formation ?
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Vous pouvez vous inscrire directement sur notre site ou nous contacter par téléphone.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Quels documents sont nécessaires pour s'inscrire ?
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Vous aurez besoin de votre pièce d'identité et d'un justificatif de domicile.
                    </div>
                </div>
            </div>
             <div class="accordion-item">
                <h2 class="accordion-header" id="headingtree">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapsetree" aria-expanded="true" aria-controls="collapsetree">
                        Comment demander un service ?
                    </button>
                </h2>
                <div id="collapsetree" class="accordion-collapse collapse show" aria-labelledby="headingtree" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Vous pouvez vous rendre sur le menu service, choisir le service que vous souhaitez demander, remplir le formulaire puis soumettre.
                    </div>
                </div>
            </div>
            <!-- Ajoute d'autres questions ici -->
        </div>
    </div>
</section>


@endsection