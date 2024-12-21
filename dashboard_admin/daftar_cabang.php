<?php

require "../functions.php";

$daftar_cabang = query("SELECT * FROM tb_daftar_cabang");



?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lamaran Terdaftar</title>
    <link rel="stylesheet" href="../bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/dashboard.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  </head>
  <body>



  <!-- Navbar--> 

  <nav class="navbar bg-body-tertiary shadow py-3">
  <div class="container-fluid">
    <a class="navbar-brand ms-3" href="index.php" style="color: #db881a;">
      <img class="me-2" src="../img/logo.png" alt="Logo" width="40" height="34" class="d-inline-block align-text-top" style="background-color: #db881a;">
      Adidaya Group
    </a>

    <div class="btn-group">
    <button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false" style="background-color: #db881a; color:white;">
    <i class="bi bi-person-fill" style="font-size: 1.2rem;"></i>
    </button>
    <ul class="dropdown-menu dropdown-menu-lg-end">
        <li><button class="dropdown-item" type="button"><i class="bi bi-box-arrow-left me-2"></i>Logout</button></li>
    </ul>
    </div>

  </div>
</nav>

<!-- content -->

<div class="container-fluid">
    <div class="row">

        <div class="col-md-2 pt-5" style="background-color: #db881a; color: white">
            <div class="row">
                <h4 class="ms-2"><i class="bi bi-speedometer me-2"></i>Dashboard</h4>
            </div>

            <div class="row mt-3">
                <a class="nav-link ms-3" href="../dashboard_admin/profil_admin.php"><p style="text-indent: 0;"><i class="bi bi-person-fill me-2"></i>Profile Admin</p></a>
            </div>

            <div class="row">
                <a class="nav-link ms-3" href="../dashboard_admin/pendaftar_lamaran.php"><p style="text-indent: 0;"><i class="bi bi-ui-checks me-2"></i>Lamaran Terdaftar</p></a>
            </div>

            <div class="row">
                <a class="nav-link ms-3" href="../dashboard_admin/daftar_cabang.php"><p style="text-indent: 0;"><i class="bi bi-buildings me-2"></i>Daftar Cabang</p></a>
            </div>

            <div class="row">
                <a class="nav-link ms-3" href="../dashboard_admin/help.php"><p style="text-indent: 0;"><i class="bi bi-question-diamond-fill me-2"></i>Help</p></a>
            </div>

        </div>

        <div class="col-md-10 bg-body-tertiary py-3">
            <div class="container mt-3 rounded-4 shadow py-3 mb-5" style="background-color: white;">
                <div class="row">
                    <div class="col-6">
                        <h2>Daftar Cabang PT. Adidaya Group TBK</h2>
                    </div>
                    <div class="col-6">
                        <form class="d-flex justify-content-end input-group" role="search">
                            <input class="form-control " type="search" placeholder="Search" aria-label="Search" style="max-width: 40%;">
                            <button class="btn" type="submit" style="background-color: #db881a;"><i class="bi bi-search"></i></button>
                        </form>
                    </div>
                </div>
                <table class="table table-hover table-bordered my-5 ">
                <thead>
                    <tr>
                    <th scope="col">No</th>
                    <th scope="col">Cabang</th>
                    <th scope="col">Kota</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Contact Person</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1 ?>
                    <?php foreach($daftar_cabang  as $dc) : ?>
                        <tr>
                        <th scope="row"><?= $i ?></th>
                        <td><?= $dc["cabang"] ?></td>
                        <td><?= $dc["kota"] ?></td>
                        <td><?= $dc["alamat"] ?></td>
                        <td><?= $dc["contact_person"] ?></td>
                        </tr>
                    <?php $i++ ?>
                    <?php endforeach; ?>
                </tbody>
                </table>

            </div>

             <!-- footer -->

         <footer class="footer shadow">
                    <!-- lisense -->
                    <div class="row pt-3">
                        <div class="col"><p style="text-indent: 0;" class="ms-5 text-center">© Copyright Adidaya Group. All Rights Reserved</p></div>
                    </div>   
            </footer>
        </div>

    </div>
</div>

    


<script src="../bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>

