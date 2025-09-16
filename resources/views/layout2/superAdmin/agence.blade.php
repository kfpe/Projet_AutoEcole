<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nom       = htmlspecialchars($_POST["nom"]);
    $quartier     = htmlspecialchars($_POST["quartier"]);
    $numero = htmlspecialchars($_POST["numero"]);
    $ville     = htmlspecialchars($_POST["ville"]);


     $pdo->prepare("INSERT INTO agences (nom,quartier,numero,ville) VALUES (?,?,?,?)")
        ->execute([$nom,$quartier,$numero,$ville]);

    $message = "✅ Agence '$nom' de la ville '$ville' ajoutée avec succès !";
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter une Agence</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f4f6fa;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        header {
            background-color: #002f6c;
            color: #fff;
            padding: 20px;
            text-align: center;
            border-bottom-left-radius: 20px;
            border-bottom-right-radius: 20px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.2);
        }
        header h1 {
            margin: 0;
            font-size: 1.8rem;
            font-weight: bold;
        }
        .form-card {
            max-width: 650px;
            margin: 40px auto;
            background: #fff;
            border-radius: 20px;
            box-shadow: 0 6px 25px rgba(0,0,0,0.1);
            padding: 35px;
            transition: 0.3s;
        }
        .form-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(0,0,0,0.15);
        }
        .form-card h2 {
            color: #002f6c;
            font-weight: bold;
            margin-bottom: 25px;
            text-align: center;
        }
        .btn-custom {
            background-color: #002f6c;
            color: #fff;
            font-weight: bold;
            border-radius: 10px;
            transition: 0.3s;
        }
        .btn-custom:hover {
            background-color: #014080;
            color: #fff;
            transform: scale(1.05);
        }
        .form-control:focus {
            border-color: #002f6c;
            box-shadow: 0 0 8px rgba(0,47,108,0.3);
        }
    </style>
</head>
<body>



<div class="container">
    <div class="form-card">
        <h2>➕ Ajouter une Agence</h2>

        <!-- Affichage message succès -->
        <?php if (!empty($message)): ?>
            <div class="alert alert-success text-center fw-bold">
                <?= $message ?>
            </div>
        <?php endif; ?>

        <form action="" method="POST">
            <div class="mb-3">
                <label for="nom" class="form-label">Nom de l'agence</label>
                <input type="text" class="form-control" id="nom" name="nom" placeholder="Ex: Auto-École Excellence" required>
            </div>

            <div class="mb-3">
                <label for="quartier" class="form-label">Quartier</label>
                <input type="text" class="form-control" id="quartier" name="quartier" placeholder="Ex: nkoabang" required>
            </div>

            <div class="mb-3">
                <label for="numero" class="form-label">Numéro</label>
                <input type="text" class="form-control" id="numero" name="numero" placeholder="+237 6XX XXX XXX" required>
            </div>

            <div class="mb-3">
                <label for="ville" class="form-label">Ville</label>
                <input type="text" class="form-control" id="ville" name="ville" placeholder="Entrez la ville" required>
            </div>

            <div class="text-center mt-4">
                <button type="submit" class="btn btn-custom px-4 me-2">Enregistrer</button>
                <a href="liste_agences.php" class="btn btn-secondary px-4">Annuler</a>
            </div>
        </form>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
