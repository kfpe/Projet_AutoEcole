@extends('layout1.app')

@section('title', 'Accueil')


@section('content2')
<section id="home" class="page-section">
    <div class="hero">
        <div class="container">
            <div class="hero-content">
                <h1>Bienvenue sur AutoDrive</h1>
                <p>La plateforme numérique qui révolutionne la gestion des auto-écoles et facilite la communication entre élèves, moniteurs et administration.</p>
                <div class="hero-buttons">
                    <a href="#choix" class="btn btn-primary">Découvrir </a>
                    <a href="" class="btn btn-outline-primary">Commencer</a>
                </div>
            </div>
            <div class="hero-image">
                <img src="{{ asset('img/OIP.jpeg') }}" alt="Auto-école">
            </div>
            
        </div>
    </div>

    <div class="features" id="choix">
    <div class="container">
        <h2>Pourquoi choisir AutoDrive ?</h2>
        <div class="features-grid">
            <div class="feature-card">
                <div class="feature-icon car-icon">
                    <i class="fas fa-car"></i>
                </div>
                <h5>Formation flexible</h5>
                <p>Apprenez à conduire à votre rythme, avec des horaires adaptés à vos disponibilités.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon user-icon">
                    <i class="fas fa-user-tie"></i>
                </div>
                <h5>Moniteurs experts</h5>
                <p>Des professionnels diplômés et expérimentés pour vous accompagner dans votre apprentissage.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon comments-icon">
                    <i class="fas fa-comments"></i>
                </div>
                <h5>Suivi personnalisé</h5>
                <p>Un accompagnement sur mesure avec un suivi régulier de votre progression.</p>
            </div>
        </div>
    </div>
</div>
    <!-- ================== STATISTIQUES ================== -->
<section class="statistics container py-5">
  <h2 class="text-center">Statistiques des Dernières Sessions</h2>
  <div class="row g-4 text-center">
    <!-- Élèves formés -->
    <div class="col-md-4">
      <div class="p-4 bg-white shadow rounded-3">
        <div class="stat-circle mx-auto mb-3" data-value="200">
          <span class="stat-value fs-2 fw-bold text-primary">+0</span>
        </div>
        <i class="fas fa-user-graduate fa-2x text-primary mb-2"></i>
        <p class="fw-semibold">Élèves formés</p>
      </div>
    </div>
    <!-- Taux de réussite -->
    <div class="col-md-4">
      <div class="p-4 bg-white shadow rounded-3">
        <div class="stat-circle mx-auto mb-3" data-value="95">
          <span class="stat-value fs-2 fw-bold text-success">+0%</span>
        </div>
        <i class="fas fa-trophy fa-2x text-success mb-2"></i>
        <p class="fw-semibold">Taux de réussite</p>
      </div>
    </div>
    <!-- Formateurs -->
    <div class="col-md-4">
      <div class="p-4 bg-white shadow rounded-3">
        <div class="stat-circle mx-auto mb-3" data-value="10">
          <span class="stat-value fs-2 fw-bold text-warning">+0</span>
        </div>
        <i class="fas fa-chalkboard-teacher fa-2x text-warning mb-2"></i>
        <p class="fw-semibold">Formateurs</p>
      </div>
    </div>
  </div>
</section>

<section class="auto-ecole py-5 bg-light">
  <div class="container">
    <h2 class="text-center mb-5">Découvrez Notre Auto-École</h2>

    <div id="carouselAutoEcole" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
      
      <div class="carousel-inner">

        <!-- Carte 1 -->
        <div class="carousel-item active">
          <div class="row">
            <div class="col-md-4">
              <div class="presentation-card">
                <div class="presentation-image">
                  <img src="{{ asset('img/th.jpeg') }}" class="d-block w-100" alt="Formateurs qualifiés">
                </div>
                <div class="presentation-content">
                  <p class="mt-3 fst-italic">"Formateurs qualifiés vous suivent pendant votre formation."</p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Carte 2 -->
        <div class="carousel-item">
          <div class="row">
            <div class="col-md-4">
              <div class="presentation-card">
                <div class="presentation-image">
                  <img src="{{ asset('img/OIP (4).webp') }}" class="d-block w-100" alt="Suivi personnalisé">
                </div>
                <div class="presentation-content">
                  <p class="mt-3 fst-italic">"Un suivi personnalisé pour garantir votre succès."</p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Carte 3 -->
        <div class="carousel-item">
          <div class="row">
            <div class="col-md-4">
              <div class="presentation-card">
                <div class="presentation-image">
                  <img src="{{ asset('img/imm.jpeg') }}" class="d-block w-100" alt="Flexibilité">
                </div>
                <div class="presentation-content">
                  <p class="mt-3 fst-italic">"Des horaires flexibles pour s'adapter à votre emploi du temps."</p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Carte 4 -->
        <div class="carousel-item">
          <div class="row">
            <div class="col-md-4">
              <div class="presentation-card">
                <div class="presentation-image">
                  <img src="{{ asset('img/IMG_20241230_143343.jpg') }}" class="d-block w-100" alt="Formation interactive">
                </div>
                <div class="presentation-content">
                  <p class="mt-3 fst-italic">"Des méthodes interactives pour un meilleur engagement."</p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Carte 5 -->
        <div class="carousel-item">
          <div class="row">
            <div class="col-md-4">
              <div class="presentation-card">
                <div class="presentation-image">
                  <img src="{{ asset('img/télécharger.webp') }}" class="d-block w-100" alt="Sécurité">
                </div>
                <div class="presentation-content">
                  <p class="mt-3 fst-italic">"Nous formons des conducteurs responsables et sécuritaires."</p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Carte 6 -->
        <div class="carousel-item">
          <div class="row">
            <div class="col-md-4">
              <div class="presentation-card">
                <div class="presentation-image">
                  <img src="{{ asset('img/satisf.jpg') }}" class="d-block w-100" alt="Satisfaction client">
                </div>
                <div class="presentation-content">
                  <p class="mt-3 fst-italic">"Un taux de satisfaction client exceptionnel."</p>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

      <!-- Contrôles -->
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselAutoEcole" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselAutoEcole" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
      </button>

      <!-- Points en dessous -->
      <div class="carousel-indicators position-relative mt-4">
        <button type="button" data-bs-target="#carouselAutoEcole" data-bs-slide-to="0" class="active"></button>
        <button type="button" data-bs-target="#carouselAutoEcole" data-bs-slide-to="1"></button>
        <button type="button" data-bs-target="#carouselAutoEcole" data-bs-slide-to="2"></button>
        <button type="button" data-bs-target="#carouselAutoEcole" data-bs-slide-to="3"></button>
        <button type="button" data-bs-target="#carouselAutoEcole" data-bs-slide-to="4"></button>
        <button type="button" data-bs-target="#carouselAutoEcole" data-bs-slide-to="5"></button>
      </div>

    </div>
  </div>
</section>


<div class="testimonials">
    <div class="container">
        <h2>Témoignages</h2>
        <div class="testimonials-list">
            <div class="testimonial-item">
                <img src="{{ asset('img/OIP (2).jpeg') }}" alt="Témoignage 1" class="testimonial-image">
                <div class="testimonial-content">
                    <h5>Emryk Patrick</h5>
                    <p>"C'était une expérience incroyable ! J'ai appris à conduire en toute confiance."</p>
                </div>
            </div>
            <div class="testimonial-item">
                <img src="{{ asset('img/OIP (2).jpeg') }}" alt="Témoignage 2" class="testimonial-image">
                <div class="testimonial-content">
                    <h5>Divin Philipp</h5>
                    <p>"Les moniteurs étaient très professionnels et attentifs."</p>
                </div>
            </div>
            <div class="testimonial-item">
                <img src="{{ asset('img/imm.jpeg') }}" alt="Témoignage 3" class="testimonial-image">
                <div class="testimonial-content">
                    <h5>Styve Yann</h5>
                    <p>"Je recommande vivement AutoDrive à tous ceux qui veulent apprendre à conduire."</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ================== FORMULAIRE ================== -->
<section class="registration py-5">
  <div class="container">
    <h2 class="text-center mb-4">📝 Inscription</h2>
    <form class="row g-3 justify-content-center">
      <div class="col-md-4">
        <input type="text" class="form-control" placeholder="Nom" required>
      </div>
      <div class="col-md-4">
        <input type="email" class="form-control" placeholder="Email" required>
      </div>
      <div class="col-md-2 d-grid">
        <button type="submit" class="btn btn-primary">Poursuivre</button>
      </div>
    </form>
  </div>
</section>

<!-- ================== JS COMPTEURS ================== -->
<script>
document.addEventListener("DOMContentLoaded", function () {
  const counters = document.querySelectorAll(".stat-circle");
  counters.forEach(counter => {
    let target = parseInt(counter.dataset.value);
    let span = counter.querySelector(".stat-value");
    let count = 0;
    let increment = Math.ceil(target / 100); // vitesse animation
    let interval = setInterval(() => {
      count += increment;
      if (count >= target) {
        count = target;
        clearInterval(interval);
      }
      span.textContent = span.textContent.includes("%") ? count + "%" : count;
    }, 30);
  });
});
</script>





@endsection