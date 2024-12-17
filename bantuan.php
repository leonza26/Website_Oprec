<?php 

require "functions.php";


// membuat logika agar setelah submit data masuk
if( isset($_POST["submit"])){
  
  // menegecek apakah data berhasil di tambahkan ke database
   if ( bantuan($_POST) > 0 ) {
      echo "
        <script>
          alert('Data Berhasil Ditambahkan!');
          document.location.href = 'bantuan.php';

        </script>
      ";
   } else {
      echo "
      <script>
          alert('Data gagal!');
          document.location.href = 'bantuan.php';

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
    <title>Bantuan</title>
    <link rel="stylesheet" href="bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  </head>
  <body>


 
  <!-- Navbar (fixed top) agar navbar tetap saat di scroll --> 
  <nav class="navbar navbar-expand-lg fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">
      <img class="me-2" src="img/logo.png" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
      Adidaya Group
    </a>

    <!-- navbar collapse togglar -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse me-3" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item me-3 py-2">
          <a class="nav-link" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item me-3 py-2">
          <a class="nav-link" href="about.php">About</a>
        </li>
        <li class="nav-item me-3 py-2">
          <a class="nav-link" href="tahap_seleksi.php">Tahap Seleksi</a>
        </li>
        <li class="nav-item me-3 py-2">
          <a class="nav-link" href="tata_cara_melamar.php">Tata Cara Melamar</a>
        </li>
        <li class="nav-item me-3 py-2">
          <a class="nav-link" href="formasi.php">Formasi</a>
        </li>
        <li class="nav-item me-5 py-2">
          <a class="nav-link" href="bantuan.php">Bantuan</a>
        </li>
        <li class="nav-item me-2 py-2">
            <a href="auth/login.php"><button type="button" class="btn btn-dark text-center rounded-pill"><i class="bi bi-box-arrow-in-right me-2"></i>Login</button></a>
        </li>
        <li class="nav-item py-2">
            <a href="auth/register.php"><button type="button" class="btn btn-dark text-center rounded-pill"><i class="bi bi-pencil-square me-2"></i>Register</button></a>
        </li>
      </ul>
    </div>
  </div>
</nav>


<!-- content -->

<div class="container-sm" style="margin-top: 120px;">
    <div class="row">

        <div class="col-sm-4 my-5">
            <h3 class="pt-5">Hubungi Kami</h3>
        </div>

        <div class="col-sm-8">
        <h4>Your Message</h4>

            <form action="" method="POST">
              <div class="mb-3 mt-3">
              <label for="exampleFormControlInput1" class="form-label">Email address</label>
              <input type="email" class="form-control" name="email" id="exampleFormControlInput1" placeholder="name@example.com">
              </div>
              <div class="mb-3">
              <label for="exampleFormControlTextarea1" class="form-label">Message :</label>
              <textarea class="form-control" name="pesan" id="exampleFormControlTextarea1" rows="3"></textarea>
              </div>
              <a href="#"><button type="submit" name="submit" class="btn btn-dark rounded-pill">Submit</button></a>
            </form>
        </div>
    </div>
</div>

<!-- footer -->

<footer class="footer">
    <div class="container mt-5 text-center">
        <div class="row pt-5">
            <div class="col-sm">
            <a class="navbar-brand" href="about.php"><p>About</p></a>
            <a class="navbar-brand" href="tahap_seleksi.php"><p>Tahap Seleksi</p></a>
            <a class="navbar-brand" href="tata_cara_melamar.php"><p>Tata Cara Melamar</p></a>
            <a class="navbar-brand" href="formasi.php"><p>Formasi</p></a>
            <a class="navbar-brand" href="bantuan.php"><p>Bantuan</p></a>
            </div>
            <div class="col-sm-6 my-5">
            <h2><a class="navbar-brand" href="#">
            <img class="me-2" src="img/logo.png" alt="Logo" width="60" height="48">
            Adidaya Group
            </a></h2>
            </div>
            <div class="col-sm">
                <h5 class="mb-5">Sosial Media</h5>
                <a href="https://www.instagram.com/muhammadleonza" target="_blank" class="navbar-brand"><p><i class="bi bi-instagram me-2"></i>Instagram</a></p>
                <a href="https://www.tiktok.com/@ban__leon?lang=id-ID" target="_blank" class="navbar-brand"><p><i class="bi bi-tiktok me-2"></i>Tiktok</a></p>
                <a href="#" class="navbar-brand"><p><i class="bi bi-facebook me-2"></i>Facebook</a></p>
            </div>
        </div>
        <!-- lisense -->
         <div class="row mt-5">
            <p class="text-center">© Copyright Adidaya Group. All Rights Reserved</p>
         </div>
    </div>    
</footer>
    
    


<script src="bootstrap/dist/js/bootstrap.min.js"></script>
  </body>
</html>

