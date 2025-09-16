<?php
// connexion à la base de données
$host = "localhost";
$user = "root";
$pass = "";
$db   = "autoecole"; // ⚠️ remplace par le nom de ta base

$conn = new mysqli($host, $user, $pass, $db);

// Vérifier la connexion
if ($conn->connect_error) {
    die("Connexion échouée : " . $conn->connect_error);
}

// Traitement du formulaire
$message = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom        = $_POST['nom'];
    $prenom     = $_POST['prenom'];
    $sexe       = $_POST['sexe'];
    $adresse    = $_POST['adresse'];
    $email      = $_POST['email'];
    $telephone  = $_POST['telephone'];
    $mot_de_passe = password_hash($_POST['mot_de_passe'], PASSWORD_DEFAULT);
    $role       = $_POST['role'];
    $agence_id  = $_POST['agence_id'];

    $sql = "INSERT INTO utilisateurs (nom, prenom, sexe, adresse, email, telephone, mot_de_passe, role, agence_id, created_at, updated_at)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, NOW(), NOW())";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssssssi", $nom, $prenom, $sexe, $adresse, $email, $telephone, $mot_de_passe, $role, $agence_id);

    if ($stmt->execute()) {
        $message = "<div class='alert alert-success text-center fw-bold shadow-sm'>✅ Utilisateur ajouté avec succès</div>";
    } else {
        $message = "<div class='alert alert-danger text-center fw-bold shadow-sm'>❌ Erreur : " . $stmt->error . "</div>";
    }
    $stmt->close();
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Ajouter un Utilisateur</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background: linear-gradient(135deg, #002f6c, #1e4d8f);
      min-height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      font-family: 'Segoe UI', sans-serif;
    }
    .card {
      border-radius: 20px;
      overflow: hidden;
    }
    .card-header {
      background: #002f6c;
      font-size: 1.4rem;
      font-weight: bold;
      letter-spacing: 1px;
    }
    .form-control, .form-select {
      border-radius: 10px;
      padding: 12px;
      border: 1.5px solid #002f6c40;
    }
    .form-control:focus, .form-select:focus {
      border-color: #002f6c;
      box-shadow: 0 0 6px #002f6c80;
    }
    .form-label {
      font-weight: 600;
      color: #002f6c;
    }
    .btn-primary {
      background: #002f6c;
      border: none;
      border-radius: 12px;
      padding: 10px 25px;
      font-weight: bold;
      transition: 0.3s;
    }
    .btn-primary:hover {
      background: #00408a;
      transform: scale(1.05);
    }
    .btn-secondary {
      border-radius: 12px;
      padding: 10px 25px;
      font-weight: bold;
      transition: 0.3s;
    }
    .btn-secondary:hover {
      background: #6c757d;
      transform: scale(1.05);
    }
  </style>
</head>
<body>

<div class="container">
  <div class="card shadow-lg col-md-8 mx-auto">
    <div class="card-header text-white text-center py-3">
      ➕ Ajouter un Administrateur
    </div>
    <div class="card-body p-4">
      <?= $message; ?>
      <form method="POST" action="">
        <div class="row mb-3">
          <div class="col">
            <label class="form-label">Nom</label>
            <input type="text" name="nom" class="form-control" required>
          </div>
          <div class="col">
            <label class="form-label">Prénom</label>
            <input type="text" name="prenom" class="form-control" required>
          </div>
        </div>

        <div class="mb-3">
          <label class="form-label">Sexe</label>
          <select name="sexe" class="form-select" required>
            <option value="">-- Sélectionner --</option>
            <option value="Homme">👨 Homme</option>
            <option value="Femme">👩 Femme</option>
          </select>
        </div>

        <div class="mb-3">
          <label class="form-label">Adresse</label>
          <input type="text" name="adresse" class="form-control">
        </div>

        <div class="mb-3">
          <label class="form-label">Email</label>
          <input type="email" name="email" class="form-control" required>
        </div>

        <div class="mb-3">
          <label class="form-label">Téléphone</label>
          <input type="text" name="telephone" class="form-control" required>
        </div>

        <div class="mb-3">
          <label class="form-label">Mot de passe</label>
          <input type="password" name="mot_de_passe" class="form-control" required>
        </div>

        <div class="mb-3">
          <label class="form-label">Rôle</label>
          <select name="role" class="form-select" required>
            <option value="">-- Choisir un rôle --</option>
            <option value="Admin">⭐ Admin</option>
            <option value="Moniteur">🚗 Moniteur</option>
            <option value="Secrétaire">📋 Secrétaire</option>
            <option value="Élève">🎓 Élève</option>
          </select>
        </div>

        <div class="mb-3">
          <label class="form-label">Agence ID</label>
          <input type="number" name="agence_id" class="form-control">
        </div>

        <div class="text-center mt-4">
          <button type="submit" class="btn btn-primary me-3">✅ Enregistrer</button>
          <button type="reset" class="btn btn-secondary">❌ Annuler</button>
        </div>
      </form>
    </div>
  </div>
</div>

</body>
</html>
