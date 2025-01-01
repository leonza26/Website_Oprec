<?php

session_start();

require "../functions.php";

// mengembalikan user ke halaman index jika ingin masuk halaman login
if(!isset($_SESSION["login"])){
    header('Location: ../auth/login.php');
    exit;
  }

$profil_admin = query("SELECT * FROM tb_admin");

// membuat logika agar setelah submit data masuk
if( isset($_POST["submit"])){
  
    // menegecek apakah data berhasil di tambahkan ke database
     if ( admin($_POST) > 0 ) {
        echo "
          <script>
            alert('Data Berhasil Masuk!');
            document.location.href = 'profil_admin.php';
  
          </script>
        ";
     } else {
        echo "
        <script>
            alert('Data gagal!');
            document.location.href = 'profil_admin.php';
  
          </script>
          ";
      }
  
  }

?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Profil_Admin</title>
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
        <li>
            <a class="dropdown-item no-link-style" href="../auth/logout.php">
                <button class="dropdown-item" type="button"><i class="bi bi-box-arrow-left me-2"></i>Logout
                </button>
                </a>
            </li>
    
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

            <div class="container mt-3 rounded-4 shadow py-3" style="background-color: white;">
                <h2>Profile Admin</h2>

                    <form class="row g-3 mt-3" action="" method="POST">
                    <div class="col-md-6">
                        <label for="inputNama" class="form-label">Nama Lengkap</label>
                        <input type="text" name="namaLengkap" class="form-control" id="inputNama">
                    </div>
                    <div class="col-md-6">
                        <label for="inputUsername" class="form-label">Tempat & Tanggal Lahir</label>
                        <input type="date" name="ttl" class="form-control" id="inputUsername">
                    </div>

                    <div class="col-md-4">
                        <label for="inputAgama" class="form-label">Agama</label>
                        <input type="text" name="agama" class="form-control" id="inputAgama">
                    </div>
                    <div class="col-md-4">
                        <label for="inputNumber" class="form-label">No Handphone</label>
                        <input type="number" name="no_handphone" class="form-control" id="inputNumber">
                    </div>
                    <div class="col-md-4">
                    <label for="inputJeniskelamin" class="form-label">Jenis Kelamin</label>
                    <select class="form-select" name="gender" aria-label="Default select example" id="inputJeniskelamin">
                        <option selected>Open this select menu</option>
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                    </div>
                    
                    <div class="col-12">
                        <label for="inputAddress" class="form-label">Alamat</label>
                        <textarea class="form-control" name="alamat" id="inputAddress" rows="3"></textarea>
                    </div>
                
                    <div class="col-12">
                        <button type="submit" name="submit" class="btn btn-dark mt-3 mb-5"><i class="bi bi-pencil-square me-2"></i>Submit</button>
                    </div>
                </form>
            </div>
            
            <div class="container rounded-4 shadow py-3 my-5" style="background-color: white;">
                <h2>Data Admin</h2>
                <table class="table table-hover table-bordered my-5 ">
                <thead>
                    <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Lengkap</th>
                    <th scope="col">Tempat & Tanggal Lahir</th>
                    <th scope="col">Agama</th>
                    <th scope="col">No Handphone</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">Alamat</th>
                    </tr>
                </thead>
                <tbody>
                <?php $i = 1 ?>
                <?php foreach($profil_admin  as $pa) : ?>
                    <tr>
                    <th scope="row"><?= $i ?></th>
                    <td><?= $pa["nama_lengkap"] ?></td>
                    <td><?= $pa["ttl"] ?></td>
                    <td><?= $pa["agama"] ?></td>
                    <td><?= $pa["no_handphone"] ?></td>
                    <td><?= $pa["gender"] ?></td>
                    <td><?= $pa["alamat"] ?></td>
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

