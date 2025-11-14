
document.addEventListener("DOMContentLoaded", function() {
    const toggler = document.getElementById("navbarToggler");
    const menu = document.getElementById("navbarCollapse");

    toggler.addEventListener("click", function() {
        menu.classList.toggle("open");
    });
});





(function () {
  const carousel = document.getElementById('carouselAutoEcole');
  if (!carousel) return;

  const items = Array.from(carousel.querySelectorAll('.carousel-item'));

  // Nettoie les clones (garde seulement la 1ère colonne dans chaque slide)
  function resetSlidesToSingle() {
    items.forEach(item => {
      const row = item.querySelector('.row');
      if (!row) return;
      const cols = Array.from(row.children);
      cols.slice(1).forEach(c => c.remove()); // on ne garde que la première .col-md-4
      // s'assure que la première colonne est visible à toutes tailles
      cols[0]?.classList.remove('d-none', 'd-md-block');
    });
  }

  // Ajoute 2 clones pour afficher 3 cartes sur desktop
  function makeMultiItemDesktop() {
    items.forEach((item, i) => {
      const row = item.querySelector('.row');
      if (!row) return;

      // on clone la carte suivante et la suivante+1 (boucle circulaire)
      const next1 = items[(i + 1) % items.length].querySelector('.col-md-4').cloneNode(true);
      const next2 = items[(i + 2) % items.length].querySelector('.col-md-4').cloneNode(true);

      // Les clones ne doivent JAMAIS apparaître en mobile
      next1.classList.add('d-none', 'd-md-block');
      next2.classList.add('d-none', 'd-md-block');

      row.appendChild(next1);
      row.appendChild(next2);
    });
  }

  function isDesktop() {
    return window.matchMedia('(min-width: 768px)').matches;
  }

  // Ajoute/retire la classe active sur la bonne carte (milieu en desktop, unique en mobile)
  function updateActiveCard() {
    carousel.querySelectorAll('.presentation-card').forEach(c => c.classList.remove('active-card'));

    const activeItem = carousel.querySelector('.carousel-item.active');
    if (!activeItem) return;

    const cards = activeItem.querySelectorAll('.presentation-card');
    if (isDesktop()) {
      if (cards[1]) cards[1].classList.add('active-card'); // milieu (2ème carte)
    } else {
      if (cards[0]) cards[0].classList.add('active-card'); // seule carte
    }
  }

  // Initialisation responsive
  function setup() {
    resetSlidesToSingle();
    if (isDesktop()) {
      makeMultiItemDesktop();
    }
    updateActiveCard();
  }

  // Debounce simple pour le resize
  let resizeTO;
  window.addEventListener('resize', () => {
    clearTimeout(resizeTO);
    resizeTO = setTimeout(setup, 150);
  });

  // Met à jour la carte active après chaque slide
  carousel.addEventListener('slid.bs.carousel', updateActiveCard);

  // Démarrage
  document.addEventListener('DOMContentLoaded', setup);
})();


  document.addEventListener("scroll", function () {
    const section = document.getElementById("inscription");
    const rect = section.getBoundingClientRect();

    if (rect.top < window.innerHeight && rect.bottom > 0) {
      section.classList.add("active");
    } else {
      section.classList.remove("active");
    }
  });



