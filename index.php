<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
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

<!-- heading -->

<div class="container text-center" style="margin-top: 80px;">
    <div class="row">
        <h1 class="mt-5">"Kejar Masa Depanmu, Mulai Dari Sekarang!"</h1>
    </div>
    <div class="row mt-2">
        <h3>
            Belajar dan Mulailah Karir Anda Bersama Kami
        </h3>
    </div>
</div>

<!-- content -->

<!-- content1 -->
<div class="container text center mt-5">
    <div class="row text-center">
        <div class="col-12">
            <img src="img/index.jpg" class="img-fluid " alt="content1">
            <p class="text-center mt-3" style="font-size: larger;">Source : PT. Adidaya Group TBK</p>
        </div>
        <div class="col-12 mt-5">
            <p>Apakah Anda seorang insinyur, arsitek, atau tenaga ahli konstruksi yang bersemangat? Adidaya Group menawarkan lingkungan kerja yang dinamis dan peluang pengembangan karier yang tak terbatas. Adidaya Group berkomitmen untuk membangun Indonesia yang lebih baik melalui proyek-proyek infrastruktur berkualitas. Kami percaya bahwa sumber daya manusia adalah aset terbesar kami. Jika Anda memiliki semangat yang sama, bergabunglah dengan kami dan jadilah bagian dari perubahan positif.</p>
        </div>
    </div>


    <!-- content 2 -->
     <div class="row mt-5 text-center">
        <h2>PT. Adidaya Group TBK.</h2>
     </div>
    <div class="row mt-5">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img src="img/crsl2.jpg" class="d-block w-100" alt="img1">
                </div>
                <div class="carousel-item">
                <img src="img/crsl3.jpg" class="d-block w-100" alt="img2">
                </div>
                <div class="carousel-item">
                <img src="img/crsl5.jpg" class="d-block w-100" alt="img3">
                </div>
        </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

    </div>
  

    <!-- content 3 -->
    <div class="row text-center" style="margin-top: 100px;">
        <h2>Bidang Pekerjaan PT. Adidaya Group</h2>
    </div>
    <div class="contenttree row mt-3 py-5">
        <div class="col-sm mx-3">
            <p style="color: white;">Adidaya Group merupakan perusahaan kontraktor terkemuka yang telah berpengalaman dalam berbagai proyek pembangunan. Keahlian inti kami mencakup konstruksi bangunan, pembangunan infrastruktur seperti jembatan dan jalan, serta pengembangan kawasan industri. Dengan komitmen terhadap kualitas dan ketepatan waktu, kami telah sukses menyelesaikan berbagai proyek berskala besar di seluruh Indonesia.</p>
            <p style="color: white;">Dengan pengalaman bertahun-tahun, Adidaya Group telah membangun reputasi yang solid sebagai mitra terpercaya dalam industri konstruksi. Kami memiliki rekam jejak yang kuat dalam menyelesaikan proyek-proyek kompleks, mulai dari pembangunan gedung perkantoran hingga infrastruktur publik seperti jembatan dan jalan raya. Tim ahli kami dilengkapi dengan teknologi terkini untuk memastikan setiap proyek yang kami kerjakan memenuhi standar kualitas tertinggi.</p>
        </div>
        <div class="col-sm text-center">
            <img src="img/crsl1.jpg" class="img-thumbnail" alt="pekerja">
        </div>
    </div>


    <!-- Last content -->
     
    <div class="row text-center mt-5">
        <div class="col">
            <h5>
                Nantikan Pekerjaan Idaman Mu, Kembangkan Dirimu Mulai Hari Ini
                <br> Daftar Sekarang
            </h5>
        </div>
    </div>

    <!-- button -->
    <div class="row">
        <div class="col-md-12 text-center">
            <a href="auth/register.php"><button type="button" class="btn btn-dark mt-2">Register</button></a>
            <a href="auth/login.php"><button type="button" class="btn btn-dark mt-2">Login</button></a>
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

