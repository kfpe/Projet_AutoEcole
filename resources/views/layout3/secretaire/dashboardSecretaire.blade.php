<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau de Bord Secrétaire - Auto-École</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/secretaire.css') }}"> 
    </head>
<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <div class="logo-container">
            <div class="logo">
                <i class="fas fa-car"></i>
                <span class="logo-text">AutoDrive Secrétaire</span>
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
                <a href="#" class="menu-link" data-page="inscriptions">
                    <i class="fas fa-user-plus"></i>
                    <span class="menu-text">Inscriptions</span>
                </a>
            </li>
            <li class="menu-item">
                <a href="#" class="menu-link" data-page="candidates">
                    <i class="fas fa-users"></i>
                    <span class="menu-text">Liste des Candidats</span>
                </a>
            </li>
            <li class="menu-item">
                <a href="#" class="menu-link" data-page="monitors">
                    <i class="fas fa-chalkboard-teacher"></i>
                    <span class="menu-text">Gestion Moniteurs</span>
                </a>
            </li>
            <li class="menu-item">
                <a href="#" class="menu-link" data-page="reussite">
                    <i class="fas fa-check-circle"></i>
                    <span class="menu-text">Candidats Validés</span>
                </a>
            </li>
            <li class="menu-item">
                <a href="#" class="menu-link" data-page="depenses">
                    <i class="fas fa-file-invoice-dollar"></i>
                    <span class="menu-text">Gestion Dépenses</span>
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
                    <div class="user-img">SM</div>
                    <div class="user-name">Sophie christelle</div>
                </div>
            </div>
        </div>

        <!-- Dashboard Content -->
        <div id="dashboard" class="page-content active-page">
            <div class="content">
                <div class="welcome-banner">
                    <div class="welcome-text">
                        <h2>Bonjour, Sophie christelle</h2>
                        <p>Bienvenue sur votre tableau de bord secrétaire. Vous avez 5 nouvelles inscriptions et 3 dépenses à traiter aujourd'hui.</p>
                    </div>
                    <div class="welcome-icon">
                        <i class="fas fa-car"></i>
                    </div>
                </div>
                
                <div class="dashboard-stats">
                    <div class="stat-card">
                        <div class="stat-icon">
                            <i class="fas fa-user-plus"></i>
                        </div>
                        <div class="stat-info">
                            <div class="stat-title">Nouvelles inscriptions</div>
                            <div class="stat-value">5</div>
                            <div class="stat-change">À traiter aujourd'hui</div>
                        </div>
                    </div>
                    
                    <div class="stat-card">
                        <div class="stat-icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <div class="stat-info">
                            <div class="stat-title">Candidats actifs</div>
                            <div class="stat-value">84</div>
                            <div class="stat-change">+8% ce mois</div>
                        </div>
                    </div>
                    
                    <div class="stat-card">
                        <div class="stat-icon">
                            <i class="fas fa-check-circle"></i>
                        </div>
                        <div class="stat-info">
                            <div class="stat-title">Pratique validée</div>
                            <div class="stat-value">12</div>
                            <div class="stat-change">Cette semaine</div>
                        </div>
                    </div>
                    
                    <div class="stat-card">
                        <div class="stat-icon">
                            <i class="fas fa-file-invoice-dollar"></i>
                        </div>
                        <div class="stat-info">
                            <div class="stat-title">Dépenses en attente</div>
                            <div class="stat-value">3</div>
                            <div class="stat-change">Validation requise</div>
                        </div>
                    </div>
                </div>
                
                <div class="charts-row">
                    <div class="chart-container">
                        <div class="chart-header">
                            <div class="chart-title">Inscriptions par mois</div>
                            <div class="chart-actions">
                                <button><i class="fas fa-sync-alt"></i></button>
                                <button><i class="fas fa-ellipsis-v"></i></button>
                            </div>
                        </div>
                        <div class="chart-placeholder">
                            <i class="fas fa-chart-bar" style="font-size: 40px; margin-bottom: 15px;"></i><br>
                            Graphique des inscriptions mensuelles
                        </div>
                    </div>
                    
                    <div class="chart-container">
                        <div class="chart-header">
                            <div class="chart-title">Statut des candidats</div>
                            <div class="chart-actions">
                                <button><i class="fas fa-sync-alt"></i></button>
                                <button><i class="fas fa-ellipsis-v"></i></button>
                            </div>
                        </div>
                        <div class="chart-placeholder">
                            <i class="fas fa-chart-pie" style="font-size: 40px; margin-bottom: 15px;"></i><br>
                            Répartition des candidats par statut
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
                                <div class="activity-title">Nouvelle inscription</div>
                                <div class="activity-desc">Thomas Martin - Permis B</div>
                                <div class="activity-time">Il y a 15 minutes</div>
                            </div>
                        </div>
                        
                        <div class="activity-item">
                            <div class="activity-icon">
                                <i class="fas fa-check-circle"></i>
                            </div>
                            <div class="activity-info">
                                <div class="activity-title">Examen pratique réussi</div>
                                <div class="activity-desc">Sophie Dubois a réussi son permis</div>
                                <div class="activity-time">Il y a 2 heures</div>
                            </div>
                        </div>
                        
                        <div class="activity-item">
                            <div class="activity-icon">
                                <i class="fas fa-car"></i>
                            </div>
                            <div class="activity-info">
                                <div class="activity-title">Cours planifié</div>
                                <div class="activity-desc">Cours de conduite avec Julien Moreau</div>
                                <div class="activity-time">Aujourd'hui à 14:00</div>
                            </div>
                        </div>
                        
                        <div class="activity-item">
                            <div class="activity-icon">
                                <i class="fas fa-file-invoice-dollar"></i>
                            </div>
                            <div class="activity-info">
                                <div class="activity-title">Dépense soumise</div>
                                <div class="activity-desc">Achat de matériel pédagogique</div>
                                <div class="activity-time">Hier à 16:45</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Inscriptions Page -->
        <div id="inscriptions" class="page-content">
            <div class="content">
                <h2>Gestion des Inscriptions</h2>
                <p>Gérez les nouvelles inscriptions des candidats.</p>
                
                <div class="table-container">
                    <div class="table-title">Nouvelles inscriptions à traiter</div>
                    <table>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nom</th>
                                <th>Type Permis</th>
                                <th>Date Inscription</th>
                                <th>Statut</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>001</td>
                                <td>ARIEL</td>
                                <td>Permis B</td>
                                <td>05/08/2003</td>
                                <td><span class="status-badge status-pending">En attente</span></td>
                                <td>
                                    <button class="btn btn-primary btn-sm">Valider</button>
                                    <button class="btn btn-sm">Détails</button>
                                </td>
                            </tr>
                            <tr>
                                <td>002</td>
                                <td>Luc Bernard</td>
                                <td>Permis A</td>
                                <td>05/08/2000</td>
                                <td><span class="status-badge status-pending">En attente</span></td>
                                <td>
                                    <button class="btn btn-primary btn-sm">Valider</button>
                                    <button class="btn btn-sm">Détails</button>
                                </td>
                            </tr>
                            <tr>
                                <td>003</td>
                                <td>MAGNE</td>
                                <td>Permis B</td>
                                <td>04/08/2004</td>
                                <td><span class="status-badge status-pending">En attente</span></td>
                                <td>
                                    <button class="btn btn-primary btn-sm">Valider</button>
                                    <button class="btn btn-sm">Détails</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Candidates Page -->
        <div id="candidates" class="page-content">
            <div class="content">
                <h2>Liste des Candidats</h2>
                <p>Consultez et gérez tous les candidats de l'auto-école.</p>
                
                <div class="table-container">
                    <div class="table-title">Candidats actifs</div>
                    <table>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nom</th>
                                <th>Téléphone</th>
                                <th>Type Permis</th>
                                <th>Moniteur</th>
                                <th>Progression</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>001</td>
                                <td>Thomas Martin</td>
                                <td>6 79 34 56 78</td>
                                <td>Permis B</td>
                                <td>JUNIOR</td>
                                <td>75%</td>
                              
                            </tr>
                            <tr>
                                <td>002</td>
                                <td>Julie </td>
                                <td>6 98 76 54 32</td>
                                <td>Permis B</td>
                                <td>Marie </td>
                                <td>60%</td>
                               
                            </tr>
                            <tr>
                                <td>003</td>
                                <td>Marc </td>
                                <td>6 95 43 21 09</td>
                                <td>Permis A</td>
                                <td>Paul Richard</td>
                                <td>45%</td>
                               
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Monitors Page -->
        <div id="monitors" class="page-content">
            <div class="content">
                <h2>Gestion des Moniteurs</h2>
                <p>Gérez les moniteurs et leurs disponibilités.</p>
                
                <div class="table-container">
                    <div class="table-title">Liste des moniteurs</div>
                    <table>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nom</th>
                                <th>Spécialité</th>
                                <th>Disponibilité</th>
                                <th>Étudiants</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>M01</td>
                                <td>cedrick talla</td>
                                <td>Permis B</td>
                                <td>Disponible</td>
                                <td>12</td>
                                <td>
                                    <button class="btn btn-sm">Planifier</button>
                                    <button class="btn btn-sm">Détails</button>
                                </td>
                            </tr>
                            <tr>
                                <td>M02</td>
                                <td>Marie flore</td>
                                <td>Permis B/A</td>
                                <td>Occupé</td>
                                <td>15</td>
                                
                            </tr>
                            <tr>
                                <td>M03</td>
                                <td>Paul Richard</td>
                                <td>Permis A</td>
                                <td>Disponible</td>
                                <td>8</td>
                               
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Reussite Page -->
        <div id="reussite" class="page-content">
            <div class="content">
                <h2>Candidats Ayant Validé la Pratique</h2>
                <p>Liste des candidats ayant réussi l'examen pratique.</p>
                
                <div class="table-container">
                    <div class="table-title">Candidats validés récemment</div>
                    <table>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nom</th>
                                <th>Type Permis</th>
                                <th>Date Examen</th>
                                <th>Moniteur</th>
                                <th>Score</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>001</td>
                                <td>Sophie channel</td>
                                <td>Permis B</td>
                                <td>03/08/2003</td>
                                <td>stella</td>
                                <td>28/31</td>
                              
                            </tr>
                            <tr>
                                <td>002</td>
                                <td> yann</td>
                                <td>Permis A</td>
                                <td>02/08/2003</td>
                                <td>styve</td>
                                <td>30/31</td>
                               
                            </tr>
                            <tr>
                                <td>003</td>
                                <td>Laura ateba</td>
                                <td>Permis B</td>
                                <td>01/08/2000</td>
                                <td>Marie </td>
                                <td>27/31</td>
                              
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Depenses Page -->
        <div id="depenses" class="page-content">
            <div class="content">
                <h2>Gestion des Dépenses</h2>
                <p>Validez et consultez les dépenses de l'auto-école.</p>
                
                <div class="table-container">
                    <div class="table-title">Dépenses en attente de validation</div>
                    <table>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Description</th>
                                <th>Montant</th>
                                <th>Date</th>
                                <th>Type</th>
                                <th>Statut</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>D201</td>
                                <td>Achat de caburant</td>
                                <td>45000fcfa</td>
                                <td>04/08/2023</td>
                                <td>Véhicule</td>
                               
                            </tr>
                            <tr>
                                <td>D202</td>
                                <td>Matériel pédagogique</td>
                                <td>32000FCFA </td>
                                <td>03/08/2023</td>
                                <td>Éducation</td>
                                <td><span class="status-badge status-pending">En attente</span></td>
                               
                            </tr>
                            <tr>
                                <td>D203</td>
                                <td>Entretien véhicule </td>
                                <td>18000FCFA</td>
                                <td>02/08/2023</td>
                                <td>Véhicule</td>
                                <td><span class="status-badge status-pending">En attente</span></td>
                                
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/secretaire.js') }}"></script>
</body>
</html>