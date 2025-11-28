<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

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
  
  <!-- The slideshow/carousel -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="covers/1984.jpg" alt="Los Angeles" class="mx-auto d-block" style="width:20%">
    </div>
  
    <div class="carousel-item">
      <img src="covers/Anna_Karenine.jpg" alt="Chicago" class="mx-auto d-block" style="width:20%">
    </div>
    <div class="carousel-item">
      <img src="covers/Bartleby_le_Scribe.jpg" alt="New York" class="mx-auto d-block" style="width:20%">
    </div>
  </div>
  
  <!-- Left and right controls/icons -->
  <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev" style="width:82%">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next" style="width:82%"> 
    <span class="carousel-control-next-icon"></span>
  </button>
</div>
</body>
</html>
