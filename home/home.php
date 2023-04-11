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
  <title>HOME | PlayStation</title>
  <link rel="stylesheet" href="style.css" />
</head>

<body>
  <div class="container">
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

    <div class="bg-img"></div>

    <div class="content">
      <div class="container-content">
        <h2>Selamat Datang :
          <span class="typed">
            <?php echo $_SESSION['username']; ?>
          </span>
        </h2>
      </div>
    </div>

    <footer>
      <p>&copy; Copyright 2023. Rizky Anugrah.</p>
    </footer>
  </div>
</body>
<script src="https://unpkg.com/typed.js@2.0.132/dist/typed.umd.js"></script>

<!-- Add jquery cdn -->
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"> -->
</script>
<script src="home.js"></script>

</html>