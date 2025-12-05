<?php
include 'entete.html';
require_once('connexion_biblio.php');

$stmt = $connexion->prepare("
    SELECT * FROM livre
    INNER JOIN auteur ON (livre.noauteur = auteur.noauteur)
    WHERE auteur.nom LIKE :nom OR auteur.prenom LIKE :nom
");

$stmt->bindValue(":nom", "%" . $_GET['auteur'] . "%");
$stmt->setFetchMode(PDO::FETCH_OBJ);
$stmt->execute();
?>

<div class="container mt-4">
<h3>Résultats pour : <span class="text-primary"><?php echo $_GET['auteur']; ?></span></h3>

<ul class="list-group mt-3">

<?php
for ($x = 0; $x <= $stmt->rowCount()-1; $x++) {
    $enregistrement = $stmt->fetch();  
    $titre = $enregistrement->titre;    

    echo "<class='list-group-item'>
            <a href='details_livres.php?id={$enregistrement->nolivre}'>
                {$enregistrement->titre}
            </a>
            <br>";
}
?>
</ul>
</div>

