<?php
$nom = $_POST['nom'] ?? $_GET['nom'] ?? '';
?>
<!DOCTYPE html>
<html lang="fr">
<head><meta charset="UTF-8"><title>Test HTTP</title></head>
<body>
  <h1>Bonjour <?= htmlspecialchars($nom) ?></h1>

  <form method="GET">
    <input name="nom" placeholder="Votre nom">
    <button>Envoyer en GET</button>
  </form>

  <form method="post">
    <input name="nom" placeholder="Votre nom">
    <button>Envoyer en POST</button>
  </form>
</body>
</html>
