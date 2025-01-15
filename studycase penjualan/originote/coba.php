<?php
session_start();
if (!isset($_SESSION['login'])) {
    header('location:index.php');
    exit;
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daisa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  </head>
  <body class="bg-secondary-subtle">
    <nav class="navbar navbar-expand-lg bg-body-tertiary shadow-sm">
        <div class="container">
          <img src="images/logo.png" width="50" height="50">
            <a class="navbar-brand" href="#">Daisa Beauty</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto">
                    <a class="nav-link active" aria-current="page" href="modul=home">Home</a>
                   <a class="nav-link active" aria-current="page"  href="modul=barang/index.php?modul=tambah">Barang</a>
                   <a class="nav-link active" aria-current="page" ></a>
                    <div> <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-person-circle"></i>
                        <?= $_SESSION['user']; ?>
                      </a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="?modul=profile">Profile</a></li>
                        <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                      </ul>
                    </li>
</div>
               </div>
           </div>
      </div>
  </nav>
  <img src="images/bundle.webp" justify-content-center>
<main class="bg-white py-4 shadow-sm">
  <div class="container">
    <?php
    $modul = isset($_GET['modul']) ? $_GET['modul'] : 'home';    
    if ($modul == "home") {
        include "home.php";
    } elseif ($modul == "barang") {
        include "modul/barang/index.php";
    } elseif ($modul == "pengguna") {
        include "modul/pengguna/index.php";
    } elseif ($modul == "profile") {
        include "modul/profile/index.php";
    }elseif ($modul == "tambah"){
      include "modul/barang/tambah.php";
    } else {
        include "home.php"; 
    }
    ?>
  </div>
</main>
<div class="container py-3 text-center">
    <span>Copyright &copy;2024 | Daisa Beauty</span>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>