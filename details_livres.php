<?php 
include 'entete.html'; 
require_once('connexion_biblio.php');

if(isset($_GET['id'])) {
    $id = ($_GET['id']); 

    $stmt = $connexion->prepare("SELECT * FROM livre WHERE nolivre = ?");
    $stmt->execute([$id]);
    $livre = $stmt->fetch(PDO::FETCH_OBJ);

    if($livre) {
        echo '<div class="row">';
        
        echo '<div class="col-md-8">';
        echo '<h1>Nom du livre : ' . $livre->titre . '</h1>';
        echo '<h3>ISBN13 : ' . $livre->isbn13 . '</h3>';
        echo '<p><strong>Résumé du livre :</strong><br>' . $livre->detail . '</p>';
        echo '</div>';
        
        echo '<div class="col-md-4">';
        echo '<p><strong>Photo :</strong><br><img src="covers/' . $livre->photo . '" alt="Image du livre" class="img-fluid"></p>';
        echo '</div>';

        echo '</div>'; 

    } else {
        echo '<p>Livre non trouvé.</p>';
    }
} else {
    echo '<p>ID du livre non spécifié.</p>';
}
?>
</div>
