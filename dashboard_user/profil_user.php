<?php 

require "../functions.php";


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
            <a class="dropdown-item no-link-style" href="../auth/login.php">
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
            
                <form class="row g-3 mt-3">
                <div class="col-md-4">
                    <label for="inputNama" class="form-label">Nama Lengkap</label>
                    <input type="text" class="form-control" id="inputNama">
                </div>

                <div class="col-md-4">
                    <label for="inputUsername" class="form-label">Username</label>
                    <input type="text" class="form-control" id="inputUsername">
                </div>

                <div class="col-md-4">
                    <label for="inputTanggal" class="form-label">Tempat & Tanggal Lahir</label>
                    <input type="date" class="form-control" id="inputTanggal">
                </div>

                <div class="col-md-4">
                    <label for="inputAgama" class="form-label">Agama</label>
                    <input type="text" class="form-control" id="inputAgama">
                </div>
                <div class="col-md-4">
                    <label for="inputNumber" class="form-label">No Handphone</label>
                    <input type="number" class="form-control" id="inputNumber">
                </div>
                <div class="col-md-4">
                <label for="inputJeniskelamin" class="form-label">Jenis Kelamin</label>
                <select class="form-select" aria-label="Default select example" id="inputJeniskelamin">
                    <option selected>Open this select menu</option>
                    <option value="1">Laki-laki</option>
                    <option value="2">Perempuan</option>
                </select>
                </div>
                
                <div class="col-4">
                    <label for="inputAddress" class="form-label">Alamat</label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="example: Jakarta">
                </div>

                <div class="col-md-4">
                        <label for="exampleInputEmail" class="form-label">Email</label>
                        <input type="email" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp">
                    </div>

                <div class="col-4">
                    <label for="inputNIK" class="form-label">NIK</label>
                    <input type="text" class="form-control" id="inputNIK" placeholder="1471xxxxxxxxxx">
                </div>
                <div class="col-md-6">
                    <label for="inputBPJS" class="form-label">BPJS Kesehatan</label>
                    <input type="Number" class="form-control" id="inputBPJS">
                </div>
                <div class="col-md-4">
                    <label for="inputNPWP" class="form-label">NPWP</label>
                    <input type="Number" class="form-control" id="inputNPWP">
                </div>
                <div class="col-md-2">
                <label for="inputJeniskelamin" class="form-label">Status</label>
                <select class="form-select" aria-label="Default select example" id="inputJeniskelamin">
                    <option selected>Select</option>
                    <option value="1">Sudah Menikah</option>
                    <option value="2">Belum Menikah</option>
                </select>
                </div>
               
                <div class="col-12 pt-3">
                    <button type="submit" class="btn btn-dark mb-5"><i class="bi bi-pencil-square me-2"></i>Ubah</button>
                </div>
            </div>
            
        <div class="container rounded-4 shadow py-3 my-5" style="background-color: white;">
            </form>
            <h2>Data Profile</h2>
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
                <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                <td>@mdo</td>
                </tr>
                <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
                <td>@mdo</td>
                </tr>
                <tr>
                <th scope="row">3</th>
                <td>Larry the Bird</td>
                <td>@twitter</td>
                <td>@twitter</td>
                <td>@mdo</td>
                </tr>
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

