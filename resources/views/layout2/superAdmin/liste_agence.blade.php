<?php
// connexion à la base de données
$host = "localhost";
$user = "root";
$pass = "";
$db   = "gest_autoecole";

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Connexion échouée : " . $conn->connect_error);
}

// Supprimer une agence
$message = "";
if (isset($_GET['delete'])) {
    $id = intval($_GET['delete']);
    $conn->query("DELETE FROM agences WHERE id = $id");
    $message = "<div class='alert alert-success text-center fw-bold shadow-sm'>✅ Agence supprimée avec succès</div>";
}

// Récupérer toutes les agences
$result = $conn->query("SELECT id, nom, numero, ville,quartier, created_at
                        FROM agences
                        ORDER BY created_at DESC");
?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Gestion des Agences</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background: #f8f9fa;
      font-family: 'Segoe UI', sans-serif;
    }
    .navbar {
      background-color: #002f6c !important;
    }
    .card {
      border-radius: 15px;
    }
    .btn-primary {
      background: #002f6c;
      border: none;
    }
    .btn-primary:hover {
      background: #00408a;
    }
    .btn-danger {
      border-radius: 8px;
    }
    .table th {
      background-color: #002f6c;
      color: #fff;
    }
  </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark">
  <div class="container-fluid">
    <a class="navbar-brand fw-bold" href="#">⚙️ Gestion Auto-école</a>
  </div>
</nav>

<div class="container mt-5">
  <div class="card shadow-lg">
    <div class="card-header bg-white">
      <h4 class="mb-0 text-center text-dark">🏢 Liste des Agences</h4>
    </div>
    <div class="card-body">
      <?= $message; ?>

      <div class="mb-3 text-end">
        <a href="{{ route('welcome²') }}" class="btn btn-primary">Retour</a>
        <a href="{{ route('agence') }}" class="btn btn-primary">➕ Ajouter une Agence</a>
      </div>

      <div class="table-responsive">
        <table class="table table-bordered table-hover text-center align-middle">
          <thead>
            <tr>
              <th>ID</th>
              <th>Nom</th>
              <th>Numero</th>
              <th>Ville</th>
              <th>Quartier</th>
              <th>Date Création</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            <?php if ($result->num_rows > 0): ?>
              <?php while ($row = $result->fetch_assoc()): ?>
                <tr>
                  <td><?= $row['id']; ?></td>
                  <td><?= htmlspecialchars($row['nom']); ?></td>
                  <td><?= htmlspecialchars($row['numero']); ?></td>
                  <td><?= htmlspecialchars($row['ville']); ?></td>
                  <td><?= htmlspecialchars($row['quartier']); ?></td>
                  <td><?= date("d/m/Y H:i", strtotime($row['created_at'])); ?></td>
                  <td>
                    <a href="modifier_agence.php?id=<?= $row['id']; ?>" class="btn btn-sm btn-warning">✏️ Modifier</a>
                    <a href="gestion_agences.php?delete=<?= $row['id']; ?>"
                       onclick="return confirm('Voulez-vous vraiment supprimer cette agence ?');"
                       class="btn btn-sm btn-danger">🗑️ Supprimer</a>
                  </td>
                </tr>
              <?php endwhile; ?>
            <?php else: ?>
              <tr>
                <td colspan="7" class="text-center text-muted">Aucune agence trouvée.</td>
              </tr>
            <?php endif; ?>
          </tbody>
        </table>
      </div>

    </div>
  </div>
</div>

</body>
</html>
