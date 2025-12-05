<?php 
include 'entete.html'; 
require_once('connexion_biblio.php');

$stmt = $connexion->prepare("SELECT * FROM livre");
$stmt->setFetchMode(PDO::FETCH_OBJ);
$stmt->execute();

while($enregistrement = $stmt->fetch()) {
    // Génère un lien vers la page details_livres.php avec l'ID du livre
    echo '<p><a href="details_livres.php?id=' . $enregistrement->nolivre . '">'
         . htmlspecialchars($enregistrement->titre) . '</a></p>';
}
?>

