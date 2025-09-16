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
  <title>Super Admin - Auto-école</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Bootstrap Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
  <style>
    :root {
            --main-color: #002f6c;
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
    
    body {
      font-family: 'Segoe UI', sans-serif;
      background-color: #f4f6f9;
      color: #333;
      overflow-x: hidden;
    }
    /* Sidebar */
    .sidebar {
      height: 100vh;
      background: linear-gradient(180deg, var(--main-color), #004080);
      color: #fff;
      position: fixed;
      top: 0; left: 0;
      width: 240px;
      padding-top: 1rem;
      transition: all 0.3s ease;
      z-index: 1000;
    }
    .sidebar .nav-link {
      color: #d1d1d1;
      font-size: 15px;
      margin: 6px 0;
      padding: 10px 15px;
      border-radius: 8px;
      transition: all 0.3s ease;
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
      transition: margin-left 0.3s ease;
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
      box-shadow: 0 6px 16px rgba(0,0,0,0.12);
    }
    .card-icon {
      font-size: 32px;
      padding: 14px;
      border-radius: 15px;
      color: #fff;
      display: inline-flex;
      align-items: center;
      justify-content: center;
      background-color: var(--main-color);
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
    }
    .btn-main:hover { background-color: #004080; }
    .dropdown-menu {
      border-radius: 12px;
      box-shadow: 0 6px 20px rgba(0,0,0,0.12);
    }
    @media (max-width: 768px) {
      .sidebar { position: absolute; left: -240px; }
      .sidebar.active { left: 0; }
      .content { margin-left: 0 !important; }
    }
  </style>
</head>
<body>
  <!-- Sidebar -->
  <div class="sidebar d-flex flex-column p-3" id="sidebar">
    <h4 class="text-center mb-4">Super Admin</h4>
    <ul class="nav nav-pills flex-column">
      <li><a href="#" class="nav-link active"><i class="bi bi-speedometer2 me-2"></i><span>Dashboard</span></a></li>
      <li><a href="{{ route('liste_agence') }}" class="nav-link"><i class="bi bi-building me-2"></i><span>Agences</span></a></li>
      <li><a href="{{ route('liste_admin') }}" class="nav-link"><i class="bi bi-person-gear me-2"></i><span>Administrateurs</span></a></li>
      <li><a href="#" class="nav-link"><i class="bi bi-gear me-2"></i><span>Paramètres</span></a></li>
    </ul>
  </div>

  <!-- Content -->
  <div class="content" id="content">
    <!-- Topbar -->
    <div class="topbar">
      <button class="menu-toggle" id="menu-toggle"><i class="bi bi-list"></i></button>
      <h5>👋 Bienvenue, <?= $adminName ?></h5>
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
          <h5 class="fw-bold" style="color: var(--main-color);"><i class="bi bi-person-circle me-2"></i> Mon Profil</h5>
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
          <h5 class="fw-bold" style="color: #28a745;"><i class="bi bi-gear me-2"></i> Paramètres</h5>
          <form class="mt-3">
            <div class="mb-3">
              <label class="form-label fw-semibold">Langue</label>
              <select class="form-select">
                <option>Français</option>
                <option>Anglais</option>
              </select>
            </div>
            <div class="mb-3">
              <label class="form-label fw-semibold">Thème</label>
              <select class="form-select">
                <option>Clair</option>
                <option>Sombre</option>
              </select>
            </div>
            <button class="btn btn-success btn-sm"><i class="bi bi-check-circle me-1"></i> Sauvegarder</button>
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
  </script>
</body>
</html>
