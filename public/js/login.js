  document.addEventListener('DOMContentLoaded', function() {
            // Basculer entre connexion et inscription
            const loginTab = document.getElementById('login-tab');
            const registerTab = document.getElementById('register-tab');
            const loginForm = document.getElementById('login-form');
            const registerForm = document.getElementById('register-form');
            const switchToLogin = document.querySelector('.switch-to-login');
            
            // Gestion des onglets
            function showLogin() {
                loginTab.classList.add('tab-active');
                registerTab.classList.remove('tab-active');
                loginForm.classList.remove('hidden');
                registerForm.classList.add('hidden');
            }
            
            function showRegister() {
                loginTab.classList.remove('tab-active');
                registerTab.classList.add('tab-active');
                loginForm.classList.add('hidden');
                registerForm.classList.remove('hidden');
            }
            
            loginTab.addEventListener('click', showLogin);
            registerTab.addEventListener('click', showRegister);
            switchToLogin.addEventListener('click', showLogin);
            
            // Toggle password visibility
            document.querySelectorAll('.toggle-password').forEach(button => {
                button.addEventListener('click', function() {
                    const input = this.parentElement.querySelector('input');
                    const icon = this.querySelector('i');
                    
                    if (input.type === 'password') {
                        input.type = 'text';
                        icon.classList.remove('fa-eye');
                        icon.classList.add('fa-eye-slash');
                    } else {
                        input.type = 'password';
                        icon.classList.remove('fa-eye-slash');
                        icon.classList.add('fa-eye');
                    }
                });
            });
            
            // Préremplir la date d'inscription avec la date du jour
            const today = new Date();
            const yyyy = today.getFullYear();
            let mm = today.getMonth() + 1;
            let dd = today.getDate();
            
            if (dd < 10) dd = '0' + dd;
            if (mm < 10) mm = '0' + mm;
            
            const formattedToday = yyyy + '-' + mm + '-' + dd;
            document.getElementById('register-date').value = formattedToday;
            
            // Validation des formulaires
            document.querySelectorAll('form').forEach(form => {
                form.addEventListener('submit', function(e) {
                    e.preventDefault();
                    // Ici vous ajouteriez la logique de validation et de soumission
                    alert('Fonctionnalité de connexion/inscription à implémenter');
                });
            });
        });