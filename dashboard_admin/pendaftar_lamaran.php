<?php
session_start();
require "../functions.php";


// mengembalikan user ke halaman index jika ingin masuk halaman login
if(!isset($_SESSION["login"])){
    header('Location: ../auth/login.php');
    exit;
  }

$pendaftar_lamaran = query("SELECT * FROM tb_form_pendaftaran");


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

        <div class="col-md-2 pt-5" style="background-color: #db881a; color: white;">
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
                        <h2>Data Pelamar PT. Adidaya Group TBK</h2>
                    </div>
                    <div class="col-6">
                        <form class="d-flex justify-content-end" role="search" action="" method="POST">
                        <input class="form-control " name="keyword" id="keyword" type="search" placeholder="Search" aria-label="Search" style="max-width: 40%;">
                        <img src="../img/loader.gif" class="loader">
                        </form>
                     
                    </div>
                </div>
                <div class="table-responsive" id="container">
                    <table class="table table-hover table-bordered my-5 " style="text-align: center; vertical-align: top; height: 50px;">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama Lengkap</th>
                            <th scope="col">Alamat Email</th>
                            <th scope="col">Tempat & Tanggal Lahir</th>
                            <th scope="col">Tinggi Badan</th>
                            <th scope="col">Berat Badan</th>
                            <th scope="col">Jenis Kelamin</th>
                            <th scope="col">Usia</th>
                            <th scope="col">Golongan Darah</th>
                            <th scope="col">No HP</th>
                            <th scope="col">Status Pekerjaan</th>
                            <th scope="col">Posisi Dilamar</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">NIK</th>
                            <th scope="col">Tamatan</th>
                            <th scope="col">Universitas/Sekolah</th>
                            <th scope="col">Jurusan</th>
                            <th scope="col">BPJS</th>
                            <th scope="col">Npwp</th>
                            <th scope="col">Status</th>
                            <th scope="col">Surat Lamaran</th>
                            <th scope="col">CV</th>
                            <th scope="col">Ijazah</th>
                            <th scope="col">Transkrip Nilai</th>
                            <th scope="col">Pas Photo</th>
                            <th scope="col">Sertifikat Keahlian</th>
                            <th scope="col">KTP</th>
                            <th scope="col">Hapus</th>

                        </tr>
                    </thead>
                    <tbody>
                    <?php $i = 1 ?>
                    <?php foreach($pendaftar_lamaran  as $pl) : ?>
                        <tr>
                        <th scope="row"><?= $i ?></th>
                        <td><?= $pl["nama_lengkap"]?></td>
                        <td><?= $pl["alamat_email"]?></td>
                        <td><?= $pl["tempat_tanggallahir"] ?></td>
                        <td><?= $pl["tinggi_badan"]?></td>
                        <td><?= $pl["berat_badan"]?></td>
                        <td><?= $pl["jenis_kelamin"]?></td>
                        <td><?= $pl["usia"]?></td>
                        <td><?= $pl["golongan_darah"]?></td>
                        <td><?= $pl["no_hp"]?></td>
                        <td><?= $pl["status_pekerjaan"]?></td>
                        <td><?= $pl["posisi_dilamar"]?></td>
                        <td><?= $pl["alamat"]?></td>
                        <td><?= $pl["nik"]?></td>
                        <td><?= $pl["tamatan"]?></td>
                        <td><?= $pl["universitas_sekolah"]?></td>
                        <td><?= $pl["jurusan"]?></td>
                        <td><?= $pl["bpjs"]?></td>
                        <td><?= $pl["npwp"]?></td>
                        <td><?= $pl["status"]?></td>
                        <td><?= $pl["surat_lamaran"]?></td>
                        <td><?= $pl["cv"]?></td>
                        <td><?= $pl["ijazah"]?></td>
                        <td><?= $pl["transkrip_nilai"]?></td>
                        <td><?= $pl["pas_foto"]?></td>
                        <td><?= $pl["sertifikat_keahlian"]?></td>
                        <td><?= $pl["ktp"]?></td>
                        <td><a href="../hapus.php?id= <?= $pl["id"] ?>" onclick=" return confirm('Apakah Ingin Menghapus Data?');"><i class="bi bi-trash2-fill" style="color: #db881a;"></i>
                        </a>
                        </td>
                        </tr>
                    <?php $i++ ?>
                    <?php endforeach; ?>
                    </tbody>
                    </table>
                </div>
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


<script src="../bootstrap/dist/js/bootstrap.min.js"></script>
<script src="../js/jquery-3.7.1.js"></script>
<script src="../js/script.js"></script>
  </body>
</html>

