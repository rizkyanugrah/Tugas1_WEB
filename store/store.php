<?php
include '../functions.php';
session_start();
if ($_SESSION['status'] != 'login') {
  header('location: ../index.php?pesan=belum_login');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>STORE | PlayStation</title>
  <link rel="stylesheet" href="style.css" />
</head>

<body>
  <nav>
    <div class="nama">
      <img src="../assets/img/ps1.png" class="icon" width="35px" height="35px" />
      <h1 class="nama-web">Anugrah PlayStation</h1>
    </div>
    <div class="nav-container">
      <ul>
        <li><a href="../home/home.php">Home</a></li>
        <li><a href="../store/store.php">Store</a></li>
        <li><a href="../contact/contact.php">Contact</a></li>
        <li><a href="../logout.php">Logout</a></li>
      </ul>
    </div>
  </nav>
  <div class="container">
    <section class="row">
      <div class="bg-img"></div>
      <div class="nine columns">
        <div class="coverflow top10 bot10">
          <a class="prev-arrow"></a>
          <a href="" id="tag-a"><img src="../assets/img/ps1_store.jpg" class="coverflow__image" /></a>
          <a href="" id="tag-a"><img src="../assets/img/ps2_store.jpg" class="coverflow__image" /></a>
          <a href="" id="tag-a"><img src="../assets/img/ps3_store.jpg" class="coverflow__image" /></a>
          <a href="" id="tag-a"><img src="../assets/img/ps4_store.jpg" class="coverflow__image" /></a>
          <a href="" id="tag-a"><img src="../assets/img/ps5_store.jpg" class="coverflow__image" /></a>
          <a class="next-arrow"></a>
        </div>
      </div>
    </section>

    <footer>
      <p>&copy; Copyright 2023. Rizky Anugrah.</p>
    </footer>
  </div>
</body>
<script src="script.js"></script>

</html>