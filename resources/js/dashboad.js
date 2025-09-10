 document.querySelectorAll('.menu-link').forEach(link => {
            link.addEventListener('click', function(e) {
                e.preventDefault();
                
                // Retirer la classe active de tous les liens
                document.querySelectorAll('.menu-link').forEach(item => {
                    item.classList.remove('active');
                });
                
                // Ajouter la classe active au lien cliqué
                this.classList.add('active');
                
                // Masquer toutes les pages
                document.querySelectorAll('.page-content').forEach(page => {
                    page.classList.remove('active-page');
                });
                
                // Afficher la page correspondante
                const pageId = this.getAttribute('data-page');
                document.getElementById(pageId).classList.add('active-page');
                
                // Mettre à jour le titre de l'en-tête
                const pageTitle = this.querySelector('.menu-text').textContent;
                document.querySelector('.header-title').textContent = pageTitle;
            });
        });