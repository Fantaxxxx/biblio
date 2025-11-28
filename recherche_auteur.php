<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Résultats de recherche</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<?php
include 'entete.html';
require_once('connexion_biblio.php');

if (!isset($_GET['auteur'])) {
    echo "<div class='container mt-3'><p>Veuillez entrer un nom d'auteur.</p></div>";
    exit;
}

$recherche = $_GET['auteur'];

/* Recherche des auteurs */
$stmt = $connexion->prepare("SELECT * FROM auteur WHERE nom LIKE :r OR prenom LIKE :r");
$stmt->bindValue(':r', "%".$recherche."%");
$stmt->setFetchMode(PDO::FETCH_OBJ);
$stmt->execute();
$auteurs = $stmt->fetchAll();
?>

<div class="container mt-4">
<h3>Résultats pour : <span class="text-primary"><?php echo $recherche; ?></h3>

<?php
if (count($auteurs) == 0) {
    echo "<p class='text-danger mt-3'>Aucun auteur trouvé.</p>";
} else {
    foreach ($auteurs as $auteur) {
        echo "<h4>{$auteur->prenom} {$auteur->nom} :</h4>";

        $stmt2 = $connexion->prepare("SELECT * FROM livre WHERE noauteur = :id");
        $stmt2->bindValue(':id', $auteur->noauteur, PDO::PARAM_INT);
        $stmt2->setFetchMode(PDO::FETCH_OBJ);
        $stmt2->execute();
        $livres = $stmt2->fetchAll();
        foreach ($livres as $livre) {
            echo "<li class='list-group-item'><a href='details_livres.php?id={$livre->nolivre}'>{$livre->titre}</a></li>";}
        }
    }
?>
</div>
</body>
</html>
