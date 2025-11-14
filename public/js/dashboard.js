document.addEventListener("DOMContentLoaded", function () {
    const menuLinks = document.querySelectorAll(".menu-link");
    const contentContainer = document.getElementById("contentContainer");
    const pageTitle = document.getElementById("pageTitle");

    // Fonction pour charger une page via Laravel
    function loadPage(page) {
        contentContainer.innerHTML = "<div class='text-center py-5 text-muted'>Chargement...</div>";

        // Correspondance entre les pages du menu et les vraies routes Laravel
        const routes = {
            dashboard_home: '/admin/home',
            candidates: '/admin/candidates',
        };

        fetch(routes[page])
            .then(response => {
                if (!response.ok) throw new Error("Erreur serveur");
                return response.text();
            })
            .then(html => {
                contentContainer.innerHTML = html;

                // Met à jour le titre en haut de page
                const activeMenu = document.querySelector(`[data-page="${page}"] .menu-text`);
                if (activeMenu && pageTitle) {
                    pageTitle.textContent = activeMenu.textContent;
                }
            })
            .catch((error) => {
                console.error(error);
                contentContainer.innerHTML = "<div class='alert alert-danger text-center'>Erreur de chargement</div>";
            });
    }

    // Activation des liens du menu
    menuLinks.forEach(link => {
        link.addEventListener("click", (e) => {
            e.preventDefault();
            menuLinks.forEach(l => l.classList.remove("active"));
            link.classList.add("active");

            const page = link.getAttribute("data-page");
            loadPage(page);
        });
    });

    // Charger la page d’accueil par défaut
    loadPage("dashboard_home");
});
