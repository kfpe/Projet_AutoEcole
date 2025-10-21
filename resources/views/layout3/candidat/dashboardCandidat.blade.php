<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau de Bord - Auto-École</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="resources/css/candidats/dashboard_style.css">
    
</head>
<style>
    
      
        :root {
            --primary: #002f6c;
            --secondary: #002f6c;
            --success: #1cc88a;
            --info: #36b9cc;
            --warning: #f6c23e;
            --danger: #e74a3b;
            --light: #f8f9fc;
            --dark: #5a5c69;
            --sidebar-width: 250px;
            --header-height: 70px;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Nunito', 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background-color: #f5f7fb;
            display: flex;
            min-height: 100vh;
            overflow-x: hidden;
        }

        .sidebar {
            width: var(--sidebar-width);
            background: linear-gradient(180deg, var(--primary), var(--secondary));
            color: white;
            height: 100vh;
            position: fixed;
            padding: 20px 0;
            transition: all 0.3s ease;
            z-index: 1000;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        }

        .logo-container {
            text-align: center;
            padding: 20px 10px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            margin-bottom: 20px;
        }

        .logo {
            font-size: 24px;
            font-weight: bold;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .logo i {
            margin-right: 10px;
            font-size: 28px;
        }

        .sidebar-menu {
            list-style: none;
            padding: 0 15px;
        }

        .menu-item {
            margin-bottom: 5px;
        }

        .menu-link {
            display: flex;
            align-items: center;
            padding: 12px 15px;
            border-radius: 8px;
            color: rgba(255, 255, 255, 0.8);
            text-decoration: none;
            transition: all 0.3s;
            font-size: 16px;
        }

        .menu-link:hover, .menu-link.active {
            background-color: rgba(255, 255, 255, 0.1);
            color: white;
        }

        .menu-link i {
            margin-right: 12px;
            font-size: 18px;
            width: 25px;
            text-align: center;
        }

        .main-content {
            flex: 1;
            margin-left: var(--sidebar-width);
            transition: all 0.3s ease;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 30px;
            height: var(--header-height);
            background-color: white;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
            position: sticky;
            top: 0;
            z-index: 100;
        }

        .header-title {
            font-size: 22px;
            font-weight: 600;
            color: var(--dark);
        }

        .header-right {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .notification-icon {
            position: relative;
            cursor: pointer;
            color: var(--dark);
            font-size: 18px;
        }

        .notification-badge {
            position: absolute;
            top: -5px;
            right: -5px;
            background-color: var(--danger);
            color: white;
            border-radius: 50%;
            width: 18px;
            height: 18px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 10px;
            font-weight: bold;
        }

        .user-profile {
            display: flex;
            align-items: center;
            cursor: pointer;
        }

        .user-img {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: linear-gradient(135deg, var(--primary), var(--info));
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: bold;
            margin-right: 10px;
        }

        .user-name {
            font-weight: 500;
            color: var(--dark);
        }

        .content {
            padding: 30px;
        }

        .dashboard-stats {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
            gap: 20px;
            margin-bottom: 30px;
        }

        .stat-card {
            background: white;
            border-radius: 12px;
            padding: 20px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
            display: flex;
            align-items: center;
            transition: transform 0.3s;
            border-left: 4px solid var(--primary);
        }

        .stat-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.08);
        }

        .stat-icon {
            width: 60px;
            height: 60px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            margin-right: 15px;
            background-color: rgba(78, 115, 223, 0.1);
            color: var(--primary);
        }

        .stat-info {
            flex: 1;
        }

        .stat-title {
            font-size: 14px;
            color: #6c757d;
            margin-bottom: 5px;
        }

        .stat-value {
            font-size: 24px;
            font-weight: 700;
            color: var(--dark);
        }

        .stat-change {
            font-size: 12px;
            color: #28a745;
            font-weight: 500;
        }

        /* Charts */
        .chart-container {
            background: white;
            border-radius: 12px;
            padding: 25px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
            margin-bottom: 30px;
        }

        .chart-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .chart-title {
            font-size: 18px;
            font-weight: 600;
            color: var(--dark);
        }

        .chart-placeholder {
            height: 300px;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #f8f9fc;
            border-radius: 8px;
            color: #6c757d;
            font-weight: 500;
            text-align: center;
            padding: 20px;
            font-size: 16px;
        }

        /* Responsive */
        @media (max-width: 992px) {
            .dashboard-stats {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 768px) {
            .sidebar {
                width: 70px;
            }

            .sidebar .logo-text,
            .sidebar .menu-text {
                display: none;
            }

            .sidebar .menu-link i {
                margin-right: 0;
                font-size: 20px;
            }

            .main-content {
                margin-left: 70px;
            }

            .header-title {
                font-size: 18px;
            }

            .user-name {
                display: none;
            }
        }

        @media (max-width: 576px) {
            .content {
                padding: 15px;
            }

            .dashboard-stats {
                grid-template-columns: 1fr;
            }
        }

</style>
<body>
<!-- Sidebar -->
<div class="sidebar">
    <div class="logo-container">
        <div class="logo">
            <i class="fas fa-car"></i>
            <span class="logo-text">AutoDrive</span>
        </div>
    </div>

    <ul class="sidebar-menu">
        <li class="menu-item">
            <a href="#" class="menu-link active" data-page="dashboard">
                <i class="fas fa-tachometer-alt"></i>
                <span class="menu-text">Tableau de Bord</span>
            </a>
        </li>
        <li class="menu-item">
            <a href="#" class="menu-link" data-page="quiz">
                <i class="fas fa-question-circle"></i>
                <span class="menu-text">Effectuer un Quiz</span>
            </a>
        </li>
        <li class="menu-item">
            <a href="#" class="menu-link" data-page="formations">
                <i class="fas fa-video"></i>
                <span class="menu-text">Formations en Ligne</span>
            </a>
        </li>
        <li class="menu-item">
            <a href="#" class="menu-link" data-page="planning">
                <i class="fas fa-calendar-alt"></i>
                <span class="menu-text">Planning de Cours</span>
            </a>
        </li>
        <li class="menu-item">
            <a href="#" class="menu-link" data-page="confirmation">
                <i class="fas fa-check-circle"></i>
                <span class="menu-text">Confirmer Présence</span>
            </a>
        </li>
        <li class="menu-item">
            <a href="#" class="menu-link" data-page="progression">
                <i class="fas fa-chart-line"></i>
                <span class="menu-text">Progression des Quiz</span>
            </a>
        </li>
        <li class="menu-item">
            <a href="#" class="menu-link" data-page="historique">
                <i class="fas fa-history"></i>
                <span class="menu-text">Historique de Paiement</span>
            </a>
        </li>
        <li class="menu-item">
            <a href="#" class="menu-link" data-page="parametres">
                <i class="fas fa-cog"></i>
                <span class="menu-text">Paramètres</span>
            </a>
        </li>
        <li class="menu-item">
            <a href="#" class="menu-link" data-page="aide">
                <i class="fas fa-question-circle"></i>
                <span class="menu-text">Aide</span>
            </a>
        </li>
        <li class="menu-item spe">
            <a href="#" class="menu-link" data-page="deconnexion">
                <i class="fas fa-sign-out-alt"></i>
                <span class="menu-text">Déconnexion</span>
            </a>
        </li>
    </ul>
</div>

<!-- Main Content -->
<div class="main-content">
    <!-- Header -->
    <div class="header">
        <div class="header-title">Tableau de Bord</div>
        <div class="header-right">
            <div class="notification-icon">
                <i class="fas fa-bell"></i>
                <span class="notification-badge">3</span>
            </div>
            <div class="user-profile">
                <div class="user-img">SC</div>
                <div class="user-name">Sophie Christelle</div>
            </div>
        </div>
    </div>

    <!-- Dashboard Content -->
    <div id="dashboard" class="page-content active-page">
        <div class="content">
            <div class="welcome-banner">
                <div class="welcome-text">
                    <h2>Bonjour, Sophie Christelle</h2>
                    <p>Bienvenue sur votre tableau de bord Candidate. Vous avez 3 nouveaux quiz à consulter et 2 formations disponibles.</p>
                    <div class="welcome-icon">
                        <i class="fas fa-car"></i>
                    </div>
                </div>

            </div>

            <div class="dashboard-stats">
                <div class="stat-card">
                    <div class="stat-icon">
                        <i class="fas fa-question-circle"></i>
                    </div>
                    <div class="stat-info">
                        <div class="stat-title">Quiz Disponibles</div>
                        <div class="stat-value">3</div>
                        <div class="stat-change">À effectuer</div>
                    </div>
                </div>

                <div class="stat-card">
                    <div class="stat-icon">
                        <i class="fas fa-video"></i>
                    </div>
                    <div class="stat-info">
                        <div class="stat-title">Formations en Ligne</div>
                        <div class="stat-value">2</div>
                        <div class="stat-change">Nouveau</div>
                    </div>
                </div>

                <div class="stat-card">
                    <div class="stat-icon">
                        <i class="fas fa-calendar-alt"></i>
                    </div>
                    <div class="stat-info">
                        <div class="stat-title">Cours Planifiés</div>
                        <div class="stat-value">4</div>
                        <div class="stat-change">Cette semaine</div>
                    </div>
                </div>

                <div class="stat-card">
                    <div class="stat-icon">
                        <i class="fas fa-history"></i>
                    </div>
                    <div class="stat-info">
                        <div class="stat-title">Historique des Paiements</div>
                        <div class="stat-value">5</div>
                        <div class="stat-change">À vérifier</div>
                    </div>
                </div>
            </div>

            <div class="chart-container">
                <div class="chart-header">
                    <div class="chart-title">Progression des Quiz</div>
                </div>
                <div class="chart-placeholder">
                    <i class="fas fa-chart-bar" style="font-size: 40px; margin-bottom: 15px;"></i><br>
                    Graphique de progression des quiz
                </div>
            </div>

            <div class="chart-container">
                <div class="chart-header">
                    <div class="chart-title">Statut des Formations</div>
                </div>
                <div class="chart-placeholder">
                    <i class="fas fa-chart-pie" style="font-size: 40px; margin-bottom: 15px;"></i><br>
                    Répartition des formations suivies
                </div>
            </div>

            <div class="chart-container">
                <div class="chart-header">
                    <div class="chart-title">Planning de Cours</div>
                </div>
                <div class="chart-placeholder">
                    <i class="fas fa-calendar-alt" style="font-size: 40px; margin-bottom: 15px;"></i><br>
                    Visualisation du planning de cours
                </div>
            </div>
        </div>
    </div>

    <!-- Quiz Page -->
    <div id="quiz" class="page-content">
        <div class="content">
            <h2>Effectuer un Quiz</h2>
            <div class="chart-placeholder">
                <p>Veuillez sélectionner le quiz à passer parmi les options disponibles ci-dessous.</p>
                <!-- Liste des quiz -->
            </div>
        </div>
    </div>

    <!-- Formations Page -->
    <div id="formations" class="page-content">
        <div class="content">
            <h2>Formations en Ligne</h2>
            <div class="chart-placeholder">
                <p>Consultez les formations disponibles (vidéos et PDF).</p>
                <!-- Liste des formations -->
            </div>
        </div>
    </div>

    <!-- Planning Page -->
    <div id="planning" class="page-content">
        <div class="content">
            <h2>Planning de Cours</h2>
            <div class="chart-placeholder">
                <p>Consultez votre planning de cours (théorique et pratique).</p>
                <!-- Planning -->
            </div>
        </div>
    </div>

    <!-- Confirmation Page -->
    <div id="confirmation" class="page-content">
        <div class="content">
            <h2>Confirmer Présence</h2>
            <div class="chart-placeholder">
                <p>Confirmez votre présence aux cours en présentiel.</p>
                <!-- Confirmation -->
            </div>
        </div>
    </div>

    <!-- Progression Page -->
    <div id="progression" class="page-content">
        <div class="content">
            <h2>Progression des Quiz</h2>
            <div class="chart-placeholder">
                <p>Consultez votre progression sur les quiz déjà effectués.</p>
                <!-- Progression -->
            </div>
        </div>
    </div>

    <!-- Historique Page -->
    <div id="historique" class="page-content">
        <div class="content">
            <h2>Historique de Paiement</h2>
            <div class="chart-placeholder">
                <p>Consultez votre historique de paiements.</p>
                <!-- Historique -->
            </div>
        </div>
    </div>

    <!-- Paramètres Page -->
    <div id="parametres" class="page-content">
        <div class="content">
            <h2>Paramètres</h2>
            <div class="chart-placeholder">
                <p>Gérez vos paramètres de compte.</p>
                <!-- Paramètres -->
            </div>
        </div>
    </div>

    <!-- Aide Page -->
    <div id="aide" class="page-content">
        <div class="content">
            <h2>Aide</h2>
            <div class="chart-placeholder">
                <p>Obtenez de l'aide sur les fonctionnalités du site.</p>
                <!-- Aide -->
            </div>
        </div>
    </div>
    <script>
        const sidebar = document.querySelector('.sidebar');
        const menuItems = sidebar.querySelectorAll('.menu-item');
        const content = document
            .querySelector('.content');
        const pages = document.querySelectorAll('.page-content');
        menuItems.forEach(item => { item.addEventListener('click', () => { sidebar.classList.remove('active');})})
        content.addEventListener('click', () => { sidebar.classList.remove('active');})
        pages.forEach(page => { page.addEventListener('click', () => { sidebar.classList.remove('active');})})
        window.addEventListener('scroll', () => { sidebar.classList.remove('active');})

    </script>
