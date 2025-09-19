<?php
// Ici tu pourrais charger les infos de l’admin depuis ta base de données
$adminName  = "Super Admin";
$adminEmail = "superadmin@autoecole.com";
$profileImg = "https://www.shutterstock.com/image-photo/photo-screaming-smiling-man-riding-600nw-2083521196.jpg";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Paramètres - <?= $adminName ?></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
  <style>
    body { font-family: 'Segoe UI', sans-serif; transition: background 0.3s, color 0.3s; }
    body.dark-mode { background:#1e1e1e; color:#fff; }
    .card { border-radius:16px; box-shadow:0 4px 12px rgba(0,0,0,0.1); }
    .btn-main { background:#002f6c; color:#fff; }
    .btn-main:hover { background:#004080; }
  </style>
</head>
<body>
<div class="container py-5">
  <div class="card p-4 mx-auto" style="max-width: 600px;">
    <div class="d-flex align-items-center mb-4">
      <img src="<?= $profileImg ?>" class="rounded-circle me-3" width="70" height="70" alt="profil">
      <div>
        <h5 class="mb-0"><?= $adminName ?></h5>
        <small class="text-muted"><?= $adminEmail ?></small>
      </div>
    </div>

    <h5 class="fw-bold mb-3"><i class="bi bi-gear me-2"></i> Paramètres</h5>
    <form id="settings-form">
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
      <button type="submit" class="btn btn-success"><i class="bi bi-check-circle me-1"></i> Sauvegarder</button>
      <a href="{{ route('welcome') }}" class="btn btn-main ms-2"><i class="bi bi-arrow-left me-1"></i> Retour</a>
    </form>
  </div>
</div>

<script>
  const langSelect = document.getElementById("lang-select");
  const themeSelect = document.getElementById("theme-select");
  const settingsForm = document.getElementById("settings-form");

  // Charger les préférences
  document.addEventListener("DOMContentLoaded", () => {
    const savedLang = localStorage.getItem("lang") || "fr";
    const savedTheme = localStorage.getItem("theme") || "light";

    langSelect.value = savedLang;
    themeSelect.value = savedTheme;

    if (savedTheme === "dark") {
      document.body.classList.add("dark-mode");
    }
  });

  // Sauvegarder
  settingsForm.addEventListener("submit", (e) => {
    e.preventDefault();
    const lang = langSelect.value;
    const theme = themeSelect.value;

    localStorage.setItem("lang", lang);
    localStorage.setItem("theme", theme);

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
