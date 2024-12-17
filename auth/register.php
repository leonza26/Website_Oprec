<?php


require "../functions.php";

// cek apakah data berhasil masuk setelah register di tekan
if ( isset($_POST["register"])){

  // menegecek apakah data berhasil di tambahkan ke database
 if ( registrasi($_POST) > 0 ) {
  echo "
    <script>
      alert('User Baru Berhasil Ditambahkan!');
    </script>
  ";
} else {
  echo "
    <script>
      alert('User Baru gagal Ditambahkan!');
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
    <title>Register</title>
    <link rel="stylesheet" href="../bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  </head>
  <body class="bg-body-tertiary">

<!-- content -->

<div class="container" style="margin-top: 50px;">
    <div class="row shadow-lg bg-white px-3 rounded-2">
        <div class="col-md" style="margin-top: 150px;">
        <img src="../img/crsl2.jpg" class="img-fluid shadow" alt="img_post">
        </div>

        <div class="col-md mb-5 ms-3">
            <h2 class="text-center mt-4">Selamat Datang<br>Recruitment Adidaya Group</h2>
            <p class="text-center" style="text-indent: 0;">Silakan lakukan pendaftaran akun untuk masuk</p>
            
            <form action="" method="POST"> 
                <label for="inputUsername" class="form-label">Username</label>
                <input type="text" name="username" id="inputUsername" placeholder="Masukkan Username Anda" class="form-control">

                <label for="exampleInputEmail1" class="form-label mt-3">Email address</label>
                <input type="email" name="email" class="form-control" placeholder="Masukkan Email" id="exampleInputEmail1" aria-describedby="emailHelp">

                <label for="inputPassword5" class="form-label mt-3">Password</label>
                <input type="password" id="inputPassword5" name="password1" class="form-control" aria-describedby="passwordHelpBlock" placeholder="Masukkan Kata Sandi Anda">

                <label for="inputPassword5" class="form-label mt-3">Konfirmasi Password</label>
                <input type="password" id="inputPassword5" name="password2" class="form-control" aria-describedby="passwordHelpBlock" placeholder="Masukkan Kata Sandi Anda">

                <div id="passwordHelpBlock" class="form-text mt-3">
                  Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.
                  <br>
                  <br>
                  Sudah Punya Akun? <a href="../auth/login.php">Login</a>
                </div>
                
                <button type="submit" name="register" class="container btn btn-dark mt-4">Daftar</button>
              </form>
              </div>
    </div>
</div>

<!-- footer -->

<footer class="footer">
    <div class="container mt-5 text-center">
        <div class="row pt-5">
            <div class="col-sm">
            <a class="navbar-brand" href="../about.php"><p>About</p></a>
            <a class="navbar-brand" href="../tahap_seleksi.php"><p>Tahap Seleksi</p></a>
            <a class="navbar-brand" href="../tata_cara_melamar.php"><p>Tata Cara Melamar</p></a>
            <a class="navbar-brand" href="../formasi.php"><p>Formasi</p></a>
            <a class="navbar-brand" href="../bantuan.php"><p>Bantuan</p></a>
            </div>
            <div class="col-sm-6 my-5">
            <h2><a class="navbar-brand" href="#">
            <img class="me-2" src="../img/logo.png" alt="Logo" width="60" height="48">
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
    


<script src="../bootstrap/dist/js/bootstrap.min.js"></script>
  </body>
</html>

