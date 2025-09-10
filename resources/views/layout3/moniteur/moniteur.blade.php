<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau de Bord Moniteur - Auto-École</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/moniteur.css') }}"> 

</head>
<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <div class="logo-container">
            <div class="logo">
                <i class="fas fa-car"></i>
                <span class="logo-text">AutoDrive Moniteur</span>
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
                <a href="#" class="menu-link" data-page="cours">
                    <i class="fas fa-calendar-alt"></i>
                    <span class="menu-text">Gestion des Cours</span>
                </a>
            </li>
            <li class="menu-item">
                <a href="#" class="menu-link" data-page="quiz">
                    <i class="fas fa-question-circle"></i>
                    <span class="menu-text">Gestion des Quiz</span>
                </a>
            </li>
            <li class="menu-item">
                <a href="#" class="menu-link" data-page="candidats">
                    <i class="fas fa-users"></i>
                    <span class="menu-text">Mes Candidats</span>
                </a>
            </li>
            <li class="menu-item">
                <a href="#" class="menu-link" data-page="progressions">
                    <i class="fas fa-chart-line"></i>
                    <span class="menu-text">Suivi Progression</span>
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
                    <span class="notification-badge">2</span>
                </div>
                <div class="user-profile">
                    <div class="user-img">JD</div>
                    <div class="user-name">sandeu yane</div>
                </div>
            </div>
        </div>

        <!-- Dashboard Content -->
        <div id="dashboard" class="page-content active-page">
            <div class="content">
                <div class="welcome-banner">
                    <div class="welcome-text">
                        <h2>Bonjour, sandeu yane</h2>
                        <p>Bienvenue sur votre tableau de bord moniteur. Vous avez 4 cours prévus aujourd'hui et 2 quiz à corriger.</p>
                    </div>
                    <div class="welcome-icon">
                        <i class="fas fa-chalkboard-teacher"></i>
                    </div>
                </div>
                
                <div class="dashboard-stats">
                    <div class="stat-card">
                        <div class="stat-icon">
                            <i class="fas fa-calendar-alt"></i>
                        </div>
                        <div class="stat-info">
                            <div class="stat-title">Cours aujourd'hui</div>
                            <div class="stat-value">4</div>
                            <div class="stat-change">Prochain cours à 10:30</div>
                        </div>
                    </div>
                    
                    <div class="stat-card">
                        <div class="stat-icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <div class="stat-info">
                            <div class="stat-title">Candidats actifs</div>
                            <div class="stat-value">12</div>
                            <div class="stat-change">Moyenne progression: 65%</div>
                        </div>
                    </div>
                    
                    <div class="stat-card">
                        <div class="stat-icon">
                            <i class="fas fa-question-circle"></i>
                        </div>
                        <div class="stat-info">
                            <div class="stat-title">Quiz à corriger</div>
                            <div class="stat-value">2</div>
                            <div class="stat-change">Dernière soumission: hier</div>
                        </div>
                    </div>
                    
                    <div class="stat-card">
                        <div class="stat-icon">
                            <i class="fas fa-check-circle"></i>
                        </div>
                        <div class="stat-info">
                            <div class="stat-title">Heures conduite</div>
                            <div class="stat-value">28h</div>
                            <div class="stat-change">Ce mois</div>
                        </div>
                    </div>
                </div>
                
                <div class="charts-row">
                    <div class="chart-container">
                        <div class="chart-header">
                            <div class="chart-title">Cours cette semaine</div>
                            <div class="chart-actions">
                                <button><i class="fas fa-sync-alt"></i></button>
                                <button><i class="fas fa-ellipsis-v"></i></button>
                            </div>
                        </div>
                        <div class="chart-placeholder">
                            <i class="fas fa-chart-bar" style="font-size: 40px; margin-bottom: 15px;"></i><br>
                            Calendrier des cours de la semaine
                        </div>
                    </div>
                    
                    <div class="chart-container">
                        <div class="chart-header">
                            <div class="chart-title">Progression candidats</div>
                            <div class="chart-actions">
                                <button><i class="fas fa-sync-alt"></i></button>
                                <button><i class="fas fa-ellipsis-v"></i></button>
                            </div>
                        </div>
                        <div class="chart-placeholder">
                            <i class="fas fa-chart-line" style="font-size: 40px; margin-bottom: 15px;"></i><br>
                            Graphique de progression des candidats
                        </div>
                    </div>
                </div>
                
                <div class="recent-activity">
                    <div class="chart-header">
                        <div class="chart-title">Cours à venir</div>
                        <div class="chart-actions">
                            <button>Voir tout</button>
                        </div>
                    </div>
                    
                    <div class="activity-list">
                        <div class="activity-item">
                            <div class="activity-icon">
                                <i class="fas fa-car"></i>
                            </div>
                            <div class="activity-info">
                                <div class="activity-title">Cours de conduite</div>
                                <div class="activity-desc">Thomas Martin - Permis B - Véhicule #3</div>
                                <div class="activity-time">Aujourd'hui à 10:30 (1h30)</div>
                            </div>
                        </div>
                        
                        <div class="activity-item">
                            <div class="activity-icon">
                                <i class="fas fa-chalkboard"></i>
                            </div>
                            <div class="activity-info">
                                <div class="activity-title">Cours théorique</div>
                                <div class="activity-desc">Groupe de 8 candidats - Salle B</div>
                                <div class="activity-time">Aujourd'hui à 14:00 (2h)</div>
                            </div>
                        </div>
                        
                        <div class="activity-item">
                            <div class="activity-icon">
                                <i class="fas fa-car"></i>
                            </div>
                            <div class="activity-info">
                                <div class="activity-title">Cours de conduite</div>
                                <div class="activity-desc">Sophie Leroy - Permis B - Véhicule #2</div>
                                <div class="activity-time">Demain à 09:00 (1h)</div>
                            </div>
                        </div>
                        
                        <div class="activity-item">
                            <div class="activity-icon">
                                <i class="fas fa-car"></i>
                            </div>
                            <div class="activity-info">
                                <div class="activity-title">Simulation examen</div>
                                <div class="activity-desc">Marc Bernard - Permis B - Véhicule #1</div>
                                <div class="activity-time">Demain à 11:30 (2h)</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Cours Page -->
        <div id="cours" class="page-content">
            <div class="content">
                <h2>Gestion des Cours</h2>
                <p>Planifiez et gérez vos cours de conduite et théoriques.</p>
                
                <div class="table-container">
                    <div class="table-title">Cours planifiés</div>
                    <table>
                        <thead>
                            <tr>
                                <th>Date</th>
                                <th>Heure</th>
                                <th>Candidat</th>
                                <th>Type</th>
                                <th>Durée</th>
                                <th>Véhicule</th>
                                <th>Statut</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>05/08/2023</td>
                                <td>10:30</td>
                                <td>Thomas Martin</td>
                                <td>Conduite</td>
                                <td>1h30</td>
                                <td>#3</td>
                                <td><span class="status-badge status-pending">Planifié</span></td>
                                <td>
                                    <button class="btn btn-primary btn-sm">Démarrer</button>
                                    <button class="btn btn-sm">Modifier</button>
                                </td>
                            </tr>
                            <tr>
                                <td>05/08/2023</td>
                                <td>14:00</td>
                                <td>Groupe B</td>
                                <td>Théorie</td>
                                <td>2h</td>
                                <td>-</td>
                                <td><span class="status-badge status-pending">Planifié</span></td>
                                <td>
                                    <button class="btn btn-primary btn-sm">Démarrer</button>
                                    <button class="btn btn-sm">Modifier</button>
                                </td>
                            </tr>
                            <tr>
                                <td>06/08/2023</td>
                                <td>09:00</td>
                                <td>Sophie Leroy</td>
                                <td>Conduite</td>
                                <td>1h</td>
                                <td>#2</td>
                                <td><span class="status-badge status-pending">Planifié</span></td>
                                <td>
                                    <button class="btn btn-sm">Modifier</button>
                                    <button class="btn btn-sm">Annuler</button>
                                </td>
                            </tr>
                            <tr>
                                <td>06/08/2023</td>
                                <td>11:30</td>
                                <td>Marc Bernard</td>
                                <td>Examen blanc</td>
                                <td>2h</td>
                                <td>#1</td>
                                <td><span class="status-badge status-pending">Planifié</span></td>
                                <td>
                                    <button class="btn btn-sm">Modifier</button>
                                    <button class="btn btn-sm">Annuler</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                
                <div class="table-container" style="margin-top: 30px;">
                    <div class="table-title">Ajouter un nouveau cours</div>
                    <div style="padding: 20px;">
                        <div class="form-group">
                            <label class="form-label">Date et heure</label>
                            <input type="datetime-local" class="form-control">
                        </div>
                        <div class="form-group">
                            <label class="form-label">Type de cours</label>
                            <select class="form-control">
                                <option>Cours de conduite</option>
                                <option>Cours théorique</option>
                                <option>Examen blanc</option>
                                <option>Evaluation</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Candidat(s)</label>
                            <select class="form-control">
                                <option>Thomas Martin</option>
                                <option>Sophie Leroy</option>
                                <option>Marc Bernard</option>
                                <option>Groupe B</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Durée</label>
                            <select class="form-control">
                                <option>1 heure</option>
                                <option>1 heure 30</option>
                                <option>2 heures</option>
                                <option>2 heures 30</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Véhicule (si applicable)</label>
                            <select class="form-control">
                                <option>Véhicule #1</option>
                                <option>Véhicule #2</option>
                                <option>Véhicule #3</option>
                                <option>Véhicule #4</option>
                            </select>
                        </div>
                        <button class="btn btn-primary">Planifier le cours</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Quiz Page -->
        <div id="quiz" class="page-content">
            <div class="content">
                <h2>Gestion des Quiz</h2>
                <p>Créez et gérez des quiz pour évaluer vos candidats.</p>
                
                <div class="table-container">
                    <div class="table-title">Mes quiz</div>
                    <table>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Titre</th>
                                <th>Type</th>
                                <th>Date création</th>
                                <th>Questions</th>
                                <th>Statut</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>#Q101</td>
                                <td>Signalisation routière</td>
                                <td>Théorie</td>
                                <td>01/08/2023</td>
                                <td>15</td>
                                <td><span class="status-badge status-completed">Actif</span></td>
                                <td>
                                    <button class="btn btn-primary btn-sm">Éditer</button>
                                    <button class="btn btn-sm">Résultats</button>
                                </td>
                            </tr>
                            <tr>
                                <td>#Q102</td>
                                <td>Conduite écologique</td>
                                <td>Théorie</td>
                                <td>28/07/2023</td>
                                <td>10</td>
                                <td><span class="status-badge status-completed">Actif</span></td>
                                <td>
                                    <button class="btn btn-primary btn-sm">Éditer</button>
                                    <button class="btn btn-sm">Résultats</button>
                                </td>
                            </tr>
                            <tr>
                                <td>#Q103</td>
                                <td>Priorités à droite</td>
                                <td>Théorie</td>
                                <td>25/07/2023</td>
                                <td>8</td>
                                <td><span class="status-badge status-completed">Actif</span></td>
                                <td>
                                    <button class="btn btn-primary btn-sm">Éditer</button>
                                    <button class="btn btn-sm">Résultats</button>
                                </td>
                            </tr>
                            <tr>
                                <td>#Q104</td>
                                <td>Examen blanc permis B</td>
                                <td>Examen</td>
                                <td>20/07/2023</td>
                                <td>40</td>
                                <td><span class="status-badge status-completed">Actif</span></td>
                                <td>
                                    <button class="btn btn-primary btn-sm">Éditer</button>
                                    <button class="btn btn-sm">Résultats</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                
                <div class="quiz-container" style="margin-top: 30px;">
                    <div class="table-title">Créer un nouveau quiz</div>
                    <div style="padding: 20px;">
                        <div class="form-group">
                            <label class="form-label">Titre du quiz</label>
                            <input type="text" class="form-control" placeholder="Ex: Signalisation routière">
                        </div>
                        <div class="form-group">
                            <label class="form-label">Type de quiz</label>
                            <select class="form-control">
                                <option>Théorie</option>
                                <option>Examen blanc</option>
                                <option>Évaluation pratique</option>
                                <option>Spécifique</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Description</label>
                            <textarea class="form-control" rows="3" placeholder="Description du quiz..."></textarea>
                        </div>
                        <button class="btn btn-primary">Créer le quiz</button>
                    </div>
                </div>
                
                <div class="quiz-container">
                    <div class="table-title">Exemple de quiz</div>
                    <div style="padding: 20px;">
                        <div class="quiz-question">
                            1. Que signifie ce panneau?
                            <div style="margin-top: 15px; text-align: center;">
                                <div style="display: inline-block; background: #f8f9fc; padding: 20px; border-radius: 12px; border: 2px solid #ddd;">
                                    <i class="fas fa-traffic-light" style="font-size: 48px; color: #dc3545;"></i>
                                </div>
                            </div>
                        </div>
                        
                        <div class="quiz-options">
                            <div class="quiz-option">
                                A. Feu tricolore
                            </div>
                            <div class="quiz-option correct">
                                B. Circulation interdite dans les deux sens
                            </div>
                            <div class="quiz-option">
                                C. Passage piéton
                            </div>
                            <div class="quiz-option">
                                D. Priorité à droite
                            </div>
                        </div>
                        
                        <div style="margin-top: 30px; text-align: right;">
                            <button class="btn btn-primary">Question suivante</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Candidats Page -->
        <div id="candidats" class="page-content">
            <div class="content">
                <h2>Mes Candidats</h2>
                <p>Liste des candidats que vous encadrez.</p>
                
                <div class="table-container">
                    <div class="table-title">Candidats actifs</div>
                    <table>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nom</th>
                                <th>Téléphone</th>
                                <th>Type Permis</th>
                                <th>Heures effectuées</th>
                                <th>Progression</th>
                                <th>Dernier cours</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>#101</td>
                                <td>Thomas Martin</td>
                                <td>06 12 34 56 78</td>
                                <td>Permis B</td>
                                <td>18h</td>
                                <td>75%</td>
                                <td>03/08/2023</td>
                                <td>
                                    <button class="btn btn-sm">Profil</button>
                                    <button class="btn btn-sm">Planning</button>
                                </td>
                            </tr>
                            <tr>
                                <td>#102</td>
                                <td>Julie Petit</td>
                                <td>06 98 76 54 32</td>
                                <td>Permis B</td>
                                <td>15h</td>
                                <td>60%</td>
                                <td>02/08/2023</td>
                                <td>
                                    <button class="btn btn-sm">Profil</button>
                                    <button class="btn btn-sm">Planning</button>
                                </td>
                            </tr>
                            <tr>
                                <td>#103</td>
                                <td>Marc Durand</td>
                                <td>07 65 43 21 09</td>
                                <td>Permis A</td>
                                <td>12h</td>
                                <td>45%</td>
                                <td>01/08/2023</td>
                                <td>
                                    <button class="btn btn-sm">Profil</button>
                                    <button class="btn btn-sm">Planning</button>
                                </td>
                            </tr>
                            <tr>
                                <td>#104</td>
                                <td>Sophie Leroy</td>
                                <td>06 55 44 33 22</td>
                                <td>Permis B</td>
                                <td>22h</td>
                                <td>85%</td>
                                <td>04/08/2023</td>
                                <td>
                                    <button class="btn btn-sm">Profil</button>
                                    <button class="btn btn-sm">Planning</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Progressions Page -->
        <div id="progressions" class="page-content">
            <div class="content">
                <h2>Suivi des Progressions</h2>
                <p>Suivez la progression de vos candidats.</p>
                
                <div class="chart-container">
                    <div class="chart-header">
                        <div class="chart-title">Progression des candidats</div>
                        <div class="chart-actions">
                            <select class="form-control" style="width: auto; display: inline-block;">
                                <option>Derniers 30 jours</option>
                                <option>Derniers 60 jours</option>
                                <option>Derniers 90 jours</option>
                            </select>
                        </div>
                    </div>
                    <div class="chart-placeholder">
                        <i class="fas fa-chart-line" style="font-size: 40px; margin-bottom: 15px;"></i><br>
                        Graphique de progression des candidats
                    </div>
                </div>
                
                <div class="table-container" style="margin-top: 30px;">
                    <div class="table-title">Détail des compétences par candidat</div>
                    <table>
                        <thead>
                            <tr>
                                <th>Candidat</th>
                                <th>Maîtrise véhicule</th>
                                <th>Signalisation</th>
                                <th>Circulation</th>
                                <th>Stationnement</th>
                                <th>Conduite éco</th>
                                <th>Moyenne</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Thomas Martin</td>
                                <td>85%</td>
                                <td>75%</td>
                                <td>80%</td>
                                <td>70%</td>
                                <td>65%</td>
                                <td><strong>75%</strong></td>
                            </tr>
                            <tr>
                                <td>Julie Petit</td>
                                <td>70%</td>
                                <td>65%</td>
                                <td>60%</td>
                                <td>55%</td>
                                <td>50%</td>
                                <td><strong>60%</strong></td>
                            </tr>
                            <tr>
                                <td>Marc Durand</td>
                                <td>50%</td>
                                <td>55%</td>
                                <td>45%</td>
                                <td>40%</td>
                                <td>35%</td>
                                <td><strong>45%</strong></td>
                            </tr>
                            <tr>
                                <td>Sophie Leroy</td>
                                <td>90%</td>
                                <td>85%</td>
                                <td>80%</td>
                                <td>85%</td>
                                <td>85%</td>
                                <td><strong>85%</strong></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
<script src="{{ asset('js/moniteur.js') }}"></script>
</body>
</html>