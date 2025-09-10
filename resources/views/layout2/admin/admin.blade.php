<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin - Auto-École</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}"> {{-- ton CSS --}}
    </head>
<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <div class="logo-container">
            <div class="logo">
                <i class="fas fa-car"></i>
                <span class="logo-text">AutoDrive Admin</span>
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
                <a href="#" class="menu-link" data-page="candidates">
                    <i class="fas fa-users"></i>
                    <span class="menu-text">Gestion Candidats</span>
                </a>
            </li>
            <li class="menu-item">
                <a href="#" class="menu-link" data-page="staff">
                    <i class="fas fa-user-tie"></i>
                    <span class="menu-text">Gestion Personnel</span>
                </a>
            </li>
            <li class="menu-item">
                <a href="#" class="menu-link" data-page="courses">
                    <i class="fas fa-book"></i>
                    <span class="menu-text">Gestion des Cours</span>
                </a>
            </li>
            <li class="menu-item">
                <a href="#" class="menu-link" data-page="expenses">
                    <i class="fas fa-file-invoice-dollar"></i>
                    <span class="menu-text">Gestion des Dépenses</span>
                </a>
            </li>
            <li class="menu-item">
                <a href="#" class="menu-link" data-page="reports">
                    <i class="fas fa-chart-line"></i>
                    <span class="menu-text">Statistiques</span>
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
                <div class="user-profile">
                    <div class="user-img">AD</div>
                    <div class="user-name">Admin</div>
                </div>
            </div>
        </div>

        <!-- Dashboard Content -->
        <div id="dashboard" class="page-content active-page">
            <div class="content">
                <div class="dashboard-stats">
                    <div class="stat-card">
                        <div class="stat-icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <div class="stat-info">
                            <div class="stat-title">Candidats</div>
                            <div class="stat-value">142</div>
                            <div class="stat-change">+12% ce mois</div>
                        </div>
                    </div>
                    
                    <div class="stat-card">
                        <div class="stat-icon">
                            <i class="fas fa-user-tie"></i>
                        </div>
                        <div class="stat-info">
                            <div class="stat-title">Personnel</div>
                            <div class="stat-value">18</div>
                            <div class="stat-change">Moniteurs: 12, Secrétaires: 6</div>
                        </div>
                    </div>
                    
                    <div class="stat-card">
                        <div class="stat-icon">
                            <i class="fas fa-book"></i>
                        </div>
                        <div class="stat-info">
                            <div class="stat-title">Cours à venir</div>
                            <div class="stat-value">24</div>
                            <div class="stat-change">+5 cette semaine</div>
                        </div>
                    </div>
                    
                    <div class="stat-card">
                        <div class="stat-icon">
                            <i class="fas fa-percent"></i>
                        </div>
                        <div class="stat-info">
                            <div class="stat-title">Taux de réussite</div>
                            <div class="stat-value">78%</div>
                            <div class="stat-change">+3% vs mois dernier</div>
                        </div>
                    </div>
                </div>
                
                <div class="charts-row">
                    <div class="chart-container">
                        <div class="chart-header">
                            <div class="chart-title">Progression des candidats</div>
                            <div class="chart-actions">
                                <button><i class="fas fa-sync-alt"></i></button>
                                <button><i class="fas fa-ellipsis-v"></i></button>
                            </div>
                        </div>
                        <div class="chart-placeholder">
                            Graphique de progression des candidats
                        </div>
                    </div>
                    
                    <div class="chart-container">
                        <div class="chart-header">
                            <div class="chart-title">Taux de réussite</div>
                            <div class="chart-actions">
                                <button><i class="fas fa-sync-alt"></i></button>
                                <button><i class="fas fa-ellipsis-v"></i></button>
                            </div>
                        </div>
                        <div class="doughnut-placeholder">
                            Graphique circulaire de réussite
                        </div>
                    </div>
                </div>
                
                <div class="recent-activity">
                    <div class="chart-header">
                        <div class="chart-title">Activité récente</div>
                        <div class="chart-actions">
                            <button>Voir tout</button>
                        </div>
                    </div>
                    
                    <div class="activity-list">
                        <div class="activity-item">
                            <div class="activity-icon">
                                <i class="fas fa-user-plus"></i>
                            </div>
                            <div class="activity-info">
                                <div class="activity-title">Nouveau candidat inscrit</div>
                                <div class="activity-desc">Thomas Martin s'est inscrit au permis B</div>
                                <div class="activity-time">Il y a 15 minutes</div>
                            </div>
                        </div>
                        
                        <div class="activity-item">
                            <div class="activity-icon">
                                <i class="fas fa-check-circle"></i>
                            </div>
                            <div class="activity-info">
                                <div class="activity-title">Examen réussi</div>
                                <div class="activity-desc">Sophie Dubois a réussi son permis avec 28/31</div>
                                <div class="activity-time">Il y a 2 heures</div>
                            </div>
                        </div>
                        
                        <div class="activity-item">
                            <div class="activity-icon">
                                <i class="fas fa-car"></i>
                            </div>
                            <div class="activity-info">
                                <div class="activity-title">Leçon programmée</div>
                                <div class="activity-desc">Cours de conduite avec Julien Moreau à 14h</div>
                                <div class="activity-time">Aujourd'hui à 09:30</div>
                            </div>
                        </div>
                        
                        <div class="activity-item">
                            <div class="activity-icon">
                                <i class="fas fa-file-invoice-dollar"></i>
                            </div>
                            <div class="activity-info">
                                <div class="activity-title">Dépense validée</div>
                                <div class="activity-desc">Achat de pneus neufs pour la voiture #3</div>
                                <div class="activity-time">Hier à 16:45</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Candidates Page -->
        <div id="candidates" class="page-content">
            <div class="content">
                <h2>Gestion des Candidats</h2>
                <p>Cette section permet de gérer tous les candidats de l'auto-école.</p>
                <!-- Contenu de gestion des candidats -->
            </div>
        </div>

        <!-- Staff Page -->
        <div id="staff" class="page-content">
            <div class="content">
                <h2>Gestion du Personnel</h2>
                <p>Cette section permet de gérer le personnel de l'auto-école.</p>
                <!-- Contenu de gestion du personnel -->
            </div>
        </div>

        <!-- Courses Page -->
        <div id="courses" class="page-content">
            <div class="content">
                <h2>Gestion des Cours</h2>
                <p>Cette section permet de gérer les cours et leçons de conduite.</p>
                <!-- Contenu de gestion des cours -->
            </div>
        </div>

        <!-- Expenses Page -->
        <div id="expenses" class="page-content">
            <div class="content">
                <h2>Gestion des Dépenses</h2>
                <p>Cette section permet de gérer et valider les dépenses de l'auto-école.</p>
                <!-- Contenu de gestion des dépenses -->
            </div>
        </div>

        <!-- Reports Page -->
        <div id="reports" class="page-content">
            <div class="content">
                <h2>Statistiques et Rapports</h2>
                <p>Cette section présente les statistiques de réussite et autres indicateurs.</p>
                <!-- Contenu des statistiques -->
            </div>
        </div>
    </div>
     <script src="{{ asset('js/dashboard.js') }}"></script>
    </body>
</html>