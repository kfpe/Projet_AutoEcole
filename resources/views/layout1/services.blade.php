@extends('layout1.app')

@section('title', 'Nos Services')

@section('content2')
<section class="hero-service">
    <div class="background-slider" style="background-image: url('{{ asset('img/OIP (1).webp') }}');"></div>
    <div class="overlay"></div>

    <div class="hero-contents text-center">
        <h3 class="display-4 fw-bold text-light">Bienvenue chez AutoDrive</h3>
        <p class="lead text-light">Votre partenaire pour tous vos besoins de conduite.</p>
        <a href="#services" class="btn btn-dark btn-lg mt-3">Découvrir nos services</a>
    </div>
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
<section id="services" class="services-section bg-white">
  <div class="container-fluid">
    <h2 class="mb-5 text-center">Nos Services</h2>
    <div class="row align-items-center">
      
      <!-- Colonne gauche : liste des services -->
      <div class="col-lg-6">
        <ul class="list-unstyled services-list ps-lg-4">
          <li>
            <i class="fas fa-circle text-primary me-3"></i>
            <div>
              <h4 class="service-title">Formation pour le Permis</h4>
              <p class="service-desc">Formations complètes pour obtenir votre permis de conduire, avec un suivi personnalisé.</p>
            </div>
          </li>
          <li>
            <i class="fas fa-circle text-primary me-3"></i>
            <div>
              <h4 class="service-title">Renouvellement et Duplicata</h4>
              <p class="service-desc">Assistance rapide et efficace pour le renouvellement et le duplicata de vos permis de conduire.</p>
            </div>
          </li>
          <li>
            <i class="fas fa-circle text-primary me-3"></i>
            <div>
              <h4 class="service-title">Délivrance de la Capacité</h4>
              <p class="service-desc">Obtenez facilement votre capacité professionnelle et les badges nécessaires aux chauffeurs.</p>
            </div>
          </li>
          <li>
            <i class="fas fa-circle text-primary me-3"></i>
            <div>
              <h4 class="service-title">Proposition de Chauffeurs</h4>
              <p class="service-desc">Mise à disposition de chauffeurs qualifiés et fiables pour répondre à vos besoins.</p>
            </div>
          </li>
        </ul>
        <div class="text-center">
          <a href="{{ route('askservice') }}" class="btn btn-primary mt-4">Demander un service</a>
        </div>
      </div>

      <!-- Colonne droite : image -->
      <div class="col-lg-6 text-center mt-4 mt-lg-0">
        <img src="{{ asset('img/OIP (3).webp') }}" alt="Nos services" class="img-fluid floating-img">
      </div>

    </div>
  </div>
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



<section id="inscription" class="section-inscription d-flex align-items-center text-center text-white">
  <div class="container">
    <!-- Sous-titre -->
    <div class="heading-sub">Rejoignez nous !</div>

    <!-- Titre -->
    <h1 class="heading-title">
      <span class="heading-first">AUTO-DRIVES</span>
    </h1>

    <!-- Texte -->
    <p class="lead mb-4">
     Une auto ecole puissante dans ses activités. 
       <span class="heading-first">rejoignez nous pour decouvrir de vous meme</span>
    </p>

    <!-- Bouton -->
    <a href="/" 
       target="_blank" 
       class="btn btn-light btn-lg">
      S'INSCRIRE
    </a>
  </div>
</section>


<style>
    
.section-inscription {
  position: relative;
  min-height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
  background: url('{{ asset('img/IMG_20241230_143342.jpg') }}') no-repeat center center fixed;
  background-size: cover;
  overflow: hidden;
}

</style>

<section class="faq-section">
    <div class="container">
        <h2 class="text-center mb-5">Questions Fréquemment Posées</h2>
        <div class="accordion" id="faqAccordion">
            <div class="accordion-item">
                <h3 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Comment s'inscrire à une formation ?
                    </button>
                </h3>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Vous pouvez vous inscrire directement sur notre site ou nous contacter par téléphone.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h3 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Quels documents sont nécessaires pour s'inscrire ?
                    </button>
                </h3>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Vous aurez besoin de votre pièce d'identité et d'un justificatif de domicile.
                    </div>
                </div>
            </div>
             <div class="accordion-item">
                <h3 class="accordion-header" id="headingtree">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapsetree" aria-expanded="true" aria-controls="collapsetree">
                        Comment demander un service ?
                    </button>
                </h3>
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