<?php 
session_start();
require "../functions.php";


// mengembalikan user ke halaman index jika ingin masuk halaman login
if(!isset($_SESSION["login"])){
    header('Location: ../auth/login.php');
    exit;
  }

// membuat logika agar setelah submit data masuk
if( isset($_POST["submit"])){
  
    // menegecek apakah data berhasil di tambahkan ke database
     if ( tambah_user($_POST) > 0 ) {
        echo "
          <script>
            alert('Data Berhasil Masuk!');
            document.location.href = 'profil_user.php';
  
          </script>
        ";
     } else {
        echo "
        <script>
            alert('Data gagal!');
            document.location.href = 'profil_user.php';
  
          </script>
          ";
      }
  
  }

  $profil_user = query("SELECT * FROM tb_users")

?>



<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Profil_User</title>
    <link rel="stylesheet" href="../bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/dashboard.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  </head>
  <body>



  <!-- Navbar--> 

  <nav class="navbar bg-body-tertiary shadow py-3">
  <div class="container-fluid">
    <a class="navbar-brand ms-3" href="../index.php" style="color: #db881a;">
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
                <a class="nav-link ms-3" href="../dashboard_user/profil_user.php"><p style="text-indent: 0;"><i class="bi bi-person-fill me-2"></i>Profile User</p></a>
            </div>

            <div class="row">
                <a class="nav-link ms-3" href="../dashboard_user/form_pendaftaran.php"><p style="text-indent: 0;"><i class="bi bi-ui-checks me-2"></i>Form Pendaftaran</p></a>
            </div>

            <div class="row">
                <a class="nav-link ms-3" href="../dashboard_user/daftar_cabang.php"><p style="text-indent: 0;"><i class="bi bi-buildings me-2"></i>Daftar Cabang</p></a>
            </div>

        </div>

        <div class="col-md-10 bg-body-tertiary py-3">

            <!-- data profile -->
            <div class="container mt-3 rounded-4 shadow" style="background-color: white;">

                <div class="row">
                        <h2 class="pt-3">Profile</h2>
                </div>
            
                <form class="row g-3 mt-3" action="" method="POST">
                <div class="col-md-4">
                    <label for="inputUsername" class="form-label">Username</label>
                    <input type="text" name="username" class="form-control" id="inputUsername">
                </div>

                <div class="col-md-4">
                    <label for="inputNama" class="form-label">Nama Lengkap</label>
                    <input type="text" name="namaLengkap" class="form-control" id="inputNama">
                </div>

                <div class="col-md-4">
                    <label for="inputTanggal" class="form-label">Tempat & Tanggal Lahir</label>
                    <input type="date" name="ttl" class="form-control" id="inputTanggal">
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
                
                <div class="col-4">
                    <label for="inputAddress" class="form-label">Alamat</label>
                    <input type="text" name="alamat" class="form-control" id="inputAddress" placeholder="example: Jakarta">
                </div>

                <div class="col-md-4">
                        <label for="exampleInputEmail" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp">
                    </div>

                <div class="col-4">
                    <label for="inputNIK" class="form-label">NIK</label>
                    <input type="text" name="nik" class="form-control" id="inputNIK" placeholder="1471xxxxxxxxxx">
                </div>
                <div class="col-md-6">
                    <label for="inputBPJS" class="form-label">BPJS Kesehatan</label>
                    <input type="Number" name="bpjs" class="form-control" id="inputBPJS">
                </div>
                <div class="col-md-4">
                    <label for="inputNPWP" class="form-label">NPWP</label>
                    <input type="Number" name="npwp" class="form-control" id="inputNPWP">
                </div>
                <div class="col-md-2">
                <label for="inputJeniskelamin" class="form-label">Status</label>
                <select class="form-select" name="status" aria-label="Default select example" id="inputJeniskelamin">
                    <option selected>Select</option>
                    <option value="Sudah Menikah">Sudah Menikah</option>
                    <option value="Belum Menikah">Belum Menikah</option>
                </select>
                </div>
               
                <div class="col-12 pt-3">
                    <button type="submit" name="submit" class="btn btn-dark mb-5"><i class="bi bi-pencil-square me-2"></i>Submit</button>
                </div>
            </div>
            
        <div class="container rounded-4 shadow py-3 px-3 my-5 table-responsive" style="background-color: white;">
            </form>
            <h2>Data Profile</h2>
            <table class="table table-hover table-bordered my-5 ">
            <thead>
                <tr>
                <th scope="col">No</th>
                <th scope="col">Username</th>
                <th scope="col">Nama Lengkap</th>
                <th scope="col">Tempat & Tanggal Lahir</th>
                <th scope="col">Agama</th>
                <th scope="col">No Handphone</th>
                <th scope="col">Jenis Kelamin</th>
                <th scope="col">Alamat</th>
                <th scope="col">Email</th>
                <th scope="col">NIK</th>
                <th scope="col">BPJS Kesehatan</th>
                <th scope="col">NPWP</th>
                <th scope="col">Status</th>
                </tr>
            </thead>
            <tbody>
            <?php $i = 1 ?>
            <?php foreach($profil_user  as $pu) : ?>
                <tr>
                <th scope="row"><?= $i ?></th>
                <td><?= $pu["username"] ?></td>
                <td><?= $pu["nama_lengkap"] ?></td>
                <td><?= $pu["ttl"] ?></td>
                <td><?= $pu["agama"] ?></td>
                <td><?= $pu["no_handphone"] ?></td>
                <td><?= $pu["gender"] ?></td>
                <td><?= $pu["alamat"] ?></td>
                <td><?= $pu["email"] ?></td>
                <td><?= $pu["nik"] ?></td>
                <td><?= $pu["bpjs"] ?></td>
                <td><?= $pu["npwp"] ?></td>
                <td><?= $pu["status"] ?></td>
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

