<?php
$title = "Home";
session_start();
include 'partials/head.php';
include 'partials/navbar.php';
?>

<div class="jumbotron index rounded-0">
  <h1 class="display-4 font-weight-bold text-white">CARI TAU DARI MANA</h1>
  <h1 class="display-4 font-weight-bold text-white">ANDA MAU MEMULAI!</h1>  
  <hr class="my-4">
  <p class="text-white">Mari bergabung dan jadilah bagian dari tim kami!</p>
  <p class="lead">
    <a class="btn btn-light btn-lg" href="form.php" role="button">Daftar Sekarang!</a>
  </p>
</div>
<?php 
include 'partials/footer.php';
?>
