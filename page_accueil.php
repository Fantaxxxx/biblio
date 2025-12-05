<?php 
include 'entete.html'; 
?>

<div class="container-fluid mt-3">
  <p><h3 align="center"><font color="green">Dernières acquisitions</font></h3></p>
</div>

<!-- Carousel -->
<div id="demo" class="carousel slide" data-bs-ride="carousel">

  <!-- Indicators/dots -->
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
  </div>
<?php
require_once('connexion_biblio.php');
$stmt = $connexion->prepare("SELECT * FROM livre ORDER BY dateajout DESC");
$stmt->setFetchMode(PDO::FETCH_OBJ);
$stmt->execute();
$enregistrement = $stmt->fetch();
$image1 = $stmt->fetch();
$image2 = $stmt->fetch();
$image3 = $stmt->fetch();
echo '
  <!-- The slideshow/carousel -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="covers/'.$image1->photo.'" alt="Los Angeles" class="mx-auto d-block" style="width:20%">
    </div>
  
    <div class="carousel-item">
      <img src="covers/'.$image2->photo.'" alt="Chicago" class="mx-auto d-block" style="width:20%">
    </div>
    <div class="carousel-item">
      <img src="covers/'.$image3->photo.'" alt="New York" class="mx-auto d-block" style="width:20%">
    </div>
  </div>'
  ?>
  <!-- Left and right controls/icons -->
  <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev" style="width:82%">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next" style="width:82%"> 
    <span class="carousel-control-next-icon"></span>
  </button>
</div>

