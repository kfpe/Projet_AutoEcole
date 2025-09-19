<?php
// Exemple de variables dynamiques (à remplacer par ta base de données)
$nbAgences = 12;
$nbAdmins  = 5;
$adminName = "Super Admin";
$adminEmail = "superadmin@autoecole.com";
$profileImg = "https://www.shutterstock.com/image-photo/photo-screaming-smiling-man-riding-600nw-2083521196.jpg";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $adminName ?> - Tableau de bord</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Bootstrap Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">

  <style>
    :root {
      --main-color: #002f6c;
      --primary: #002f6c;
      --secondary: #004080;
      --success: #1cc88a;
      --info: #36b9cc;
      --warning: #f6c23e;
      --danger: #e74a3b;
      --light: #f8f9fc;
      --dark: #5a5c69;
    }

    body {
      font-family: 'Segoe UI', sans-serif;
      background-color: #f4f6f9;
      color: #333;
      overflow-x: hidden;
      transition: background 0.3s, color 0.3s;
    }

    /* Mode sombre */
    body.dark-mode {
      background-color: #1e1e1e;
      color: #e4e4e4;
    }
    body.dark-mode .card { background: #2a2a2a; color: #fff; }
    body.dark-mode .topbar { background: #2d2d2d; }
    body.dark-mode .dropdown-menu { background: #2a2a2a; color: #fff; }

    /* Sidebar */
    .sidebar {
      height: 100vh;
      background: linear-gradient(180deg, var(--main-color), var(--secondary));
      color: #fff;
      position: fixed;
      top: 0; left: 0;
      width: 240px;
      padding-top: 1rem;
      transition: all 0.3s ease-in-out;
      z-index: 1000;
    }
    .sidebar .nav-link {
      color: #d1d1d1;
      font-size: 15px;
      margin: 6px 0;
      padding: 10px 15px;
      border-radius: 8px;
      transition: all 0.3s ease-in-out;
    }
    .sidebar .nav-link:hover,
    .sidebar .nav-link.active {
      background: #0056a6;
      color: #fff;
      font-weight: 500;
    }
    .sidebar.collapsed { width: 70px; }
    .sidebar.collapsed .nav-link span,
    .sidebar.collapsed h4 { display: none; }

    /* Content */
    .content {
      margin-left: 240px;
      padding: 20px;
      transition: margin-left 0.3s ease-in-out;
    }
    .content.expanded { margin-left: 70px; }

    /* Topbar */
    .topbar {
      background: #fff;
      border-radius: 12px;
      padding: 12px 20px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 25px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.08);
      animation: fadeInDown 0.5s ease;
    }
    .menu-toggle {
      border: none;
      background: transparent;
      font-size: 22px;
      cursor: pointer;
      color: var(--main-color);
    }

    /* Cards */
    .card {
      border: none;
      border-radius: 18px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.07);
      transition: transform 0.25s, box-shadow 0.25s;
    }
    .card:hover {
      transform: translateY(-6px);
      box-shadow: 0 6px 18px rgba(0,0,0,0.12);
    }
    .card-icon {
      font-size: 34px;
      padding: 16px;
      border-radius: 15px;
      color: #fff;
      display: inline-flex;
      align-items: center;
      justify-content: center;
      background: var(--main-color);
      animation: zoomIn 0.5s ease;
    }

    /* Profil */
    .profile-card img {
      width: 90px;
      height: 90px;
      object-fit: cover;
      border-radius: 50%;
      border: 4px solid var(--main-color);
      transition: transform 0.3s;
    }
    .profile-card img:hover { transform: scale(1.08); }

    .btn-main {
      background-color: var(--main-color);
      color: #fff;
      border: none;
      transition: all 0.3s;
    }
    .btn-main:hover { background-color: var(--secondary); }

    /* Dropdown */
    .dropdown-menu {
      border-radius: 12px;
      box-shadow: 0 6px 20px rgba(0,0,0,0.12);
      animation: fadeIn 0.3s ease;
    }

    /* Responsive */
    @media (max-width: 768px) {
      .sidebar { position: absolute; left: -240px; }
      .sidebar.active { left: 0; }
      .content { margin-left: 0 !important; }
    }

    /* Animations */
    @keyframes fadeIn { from {opacity: 0;} to {opacity: 1;} }
    @keyframes fadeInDown { from {opacity: 0; transform: translateY(-15px);} to {opacity: 1; transform: translateY(0);} }
    @keyframes zoomIn { from {transform: scale(0.8);} to {transform: scale(1);} }
  </style>
</head>
<body>
  <!-- Sidebar -->
  <div class="sidebar d-flex flex-column p-3" id="sidebar">
    <h4 class="text-center mb-4"><?= $adminName ?></h4>
    <ul class="nav nav-pills flex-column">
      <li><a href="#" class="nav-link active"><i class="bi bi-speedometer2 me-2"></i><span>Dashboard</span></a></li>
      <li><a href="{{ route('liste_agence') }}" class="nav-link"><i class="bi bi-building me-2"></i><span>Agences</span></a></li>
      <li><a href="{{ route('liste_admin') }}" class="nav-link"><i class="bi bi-person-gear me-2"></i><span>Administrateurs</span></a></li>
      <li><a href="{{ route('parametres') }}" class="nav-link"><i class="bi bi-gear me-2"></i><span>Paramètres</span></a></li>
    </ul>
  </div>

  <!-- Content -->
  <div class="content" id="content">
    <!-- Topbar -->
    <div class="topbar">
      <button class="menu-toggle" id="menu-toggle"><i class="bi bi-list"></i></button>
      <h5>👋 Bienvenue, <span class="fw-bold"><?= $adminName ?></span></h5>
      <div class="d-flex align-items-center gap-3">
        <i class="bi bi-bell fs-4 text-secondary"></i>
        <div class="dropdown">
          <a href="#" class="d-flex align-items-center text-dark text-decoration-none dropdown-toggle" data-bs-toggle="dropdown">
            <img src="<?= $profileImg ?>" alt="profil" width="40" height="40" class="rounded-circle me-2 border border-2" style="border-color: var(--main-color);">
            <strong><?= $adminName ?></strong>
          </a>
          <ul class="dropdown-menu dropdown-menu-end">
            <li><a class="dropdown-item" href="#"><i class="bi bi-person-circle me-2"></i> Profil</a></li>
            <li><a class="dropdown-item" href="#"><i class="bi bi-gear me-2"></i> Paramètres</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item text-danger" href="logout.php"><i class="bi bi-box-arrow-right me-2"></i> Déconnexion</a></li>
          </ul>
        </div>
      </div>
    </div>

    <!-- Dashboard Cards -->
    <div class="row g-4">
      <div class="col-md-4 col-sm-6">
        <div class="card p-3 text-center">
          <div class="card-icon mx-auto"><i class="bi bi-building"></i></div>
          <h5 class="mt-3">Agences</h5>
          <p class="fs-4 fw-bold text-dark"><?= $nbAgences ?></p>
        </div>
      </div>
      <div class="col-md-4 col-sm-6">
        <div class="card p-3 text-center">
          <div class="card-icon mx-auto"><i class="bi bi-person-gear"></i></div>
          <h5 class="mt-3">Administrateurs</h5>
          <p class="fs-4 fw-bold text-dark"><?= $nbAdmins ?></p>
        </div>
      </div>
    </div>

    <!-- Profil et Paramètres -->
    <div class="row mt-5 g-4">
      <div class="col-lg-6">
        <div class="card p-4 profile-card h-100">
          <h5 class="fw-bold text-primary"><i class="bi bi-person-circle me-2"></i> Mon Profil</h5>
          <div class="d-flex align-items-center mt-3">
            <img src="<?= $profileImg ?>" alt="profil">
            <div class="ms-3">
              <h6 class="mb-0 fw-semibold"><?= $adminName ?></h6>
              <small class="text-muted"><?= $adminEmail ?></small>
            </div>
          </div>
          <button class="btn btn-main btn-sm mt-3"><i class="bi bi-pencil me-1"></i> Modifier</button>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="card p-4 h-100">
          <h5 class="fw-bold text-success"><i class="bi bi-gear me-2"></i> Paramètres</h5>
          <form class="mt-3" id="settings-form">
            <div class="mb-3">
              <label class="form-label fw-semibold">Langue</label>
              <select class="form-select" id="lang-select">
                <option value="fr">Français</option>
                <option value="en">Anglais</option>
              </select>
            </div>
            <div class="mb-3">
              <label class="form-label fw-semibold">Thème</label>
              <select class="form-select" id="theme-select">
                <option value="light">Clair</option>
                <option value="dark">Sombre</option>
              </select>
            </div>
            <button type="submit" class="btn btn-success btn-sm"><i class="bi bi-check-circle me-1"></i> Sauvegarder</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    const sidebar = document.getElementById("sidebar");
    const content = document.getElementById("content");
    const toggleBtn = document.getElementById("menu-toggle");

    toggleBtn.addEventListener("click", () => {
      sidebar.classList.toggle("collapsed");
      content.classList.toggle("expanded");
    });

    // --- Gestion Langue et Thème ---
    const langSelect = document.getElementById("lang-select");
    const themeSelect = document.getElementById("theme-select");
    const settingsForm = document.getElementById("settings-form");

    // Charger les préférences sauvegardées
    document.addEventListener("DOMContentLoaded", () => {
      const savedLang = localStorage.getItem("lang") || "fr";
      const savedTheme = localStorage.getItem("theme") || "light";

      langSelect.value = savedLang;
      themeSelect.value = savedTheme;

      if (savedTheme === "dark") {
        document.body.classList.add("dark-mode");
      }
    });

    // Sauvegarder les préférences
    settingsForm.addEventListener("submit", (e) => {
      e.preventDefault();
      const lang = langSelect.value;
      const theme = themeSelect.value;

      // Sauvegarde locale
      localStorage.setItem("lang", lang);
      localStorage.setItem("theme", theme);

      // Appliquer thème
      if (theme === "dark") {
        document.body.classList.add("dark-mode");
      } else {
        document.body.classList.remove("dark-mode");
      }

      alert("✅ Paramètres sauvegardés !");
    });
  </script>
</body>
</html>
