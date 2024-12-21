<?php 

require "../functions.php";


// membuat logika agar setelah submit data masuk
if( isset($_POST["submit"])){
  
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Validasi tambahan di PHP (misalnya, menggunakan filter_var)
        if (!isset($_POST["bersedia_ditempatkan"]) || !isset($_POST["lampirkan_dokumen"]) || !isset($_POST["izinkan_kontak"])) {
          echo "<script>
                        alert('Anda Harus Mencentang Semua Opsi!');
                    </script>";
        } else {
                 // menegecek apakah data berhasil di tambahkan ke database
                if ( form_pendaftaran($_POST) > 0 ) {
                    echo "
                    <script>
                        alert('Lamaran Berhasil Terkirim!');
                        document.location.href = 'form_pendaftaran.php';

                    </script>
                    ";
                } else {
                    echo "
                    <script>
                        alert('Data Lamaran gagal!');
                        document.location.href = 'form_pendaftaran.php';

                    </script>
                    ";
                }

            }

            
        }
      }





?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form Pendaftaran</title>
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
                <a class="nav-link ms-3" href="../dashboard_user/profil_user.php"><p style="text-indent: 0;"><i class="bi bi-person-fill me-2"></i>Profile User</p></a>
            </div>

            <div class="row">
                <a class="nav-link ms-3" href="../dashboard_user/form_pendaftaran.php"><p style="text-indent: 0;"><i class="bi bi-ui-checks me-2"></i>Form Pendaftaran</p></a>
            </div>

            <div class="row">
                <a class="nav-link ms-3" href="../dashboard_user/daftar_cabang.php"><p style="text-indent: 0;"><i class="bi bi-buildings me-2"></i>Daftar Cabang</p></a>
            </div>

        </div>

        <!-- form -->

        <div class="col-md-10 bg-body-tertiary py-3">
            <div class="container mt-3 rounded-4 py-3 my-3 px-3 shadow" style="background-color: white;">
                <h2 class="text-center mb-3">Pendaftaran Calon Pegawai PT. Adidaya Group TBK</h2>
                    <form class="row g-3 mt-3" action="" method="POST">
                        <!-- row1 -->
                    <p class="text-capitalize fs-4" style="text-indent: 0;">Form : Data Diri</p> 
                     
                    <div class="col-md-6">
                        <label for="inputNama" class="form-label">Nama Lengkap</label>
                        <input type="text" name="nama_lengkap" class="form-control" id="inputNama" placeholder="Example : Asnawi Mangkualam" required>
                    </div>
                    <div class="col-md-6">
                        <label for="exampleInputEmail1" class="form-label">Alamat Email</label>
                        <input type="email" name="alamat_email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                    </div>

                    <!-- row2 -->

                    <div class="col-md-4">
                    <label for="inputJenisTTL" class="form-label">Tempat & Tanggal Lahir</label>
                    <input type="date" name="tempat_tanggallahir" class="form-control" id="inputTTL" required>
                    </div>

                    <div class="col-md-4">
                        <label for="inputTinggi" class="form-label">Tinggi Badan</label>
                        <input type="number"  name="tinggi_badan" class="form-control" id="inputTinggi" required>
                    </div>

                    <div class="col-md-4">
                        <label for="inputBerat" class="form-label">Berat Badan</label>
                        <input type="number" name="berat_badan" class="form-control" id="inputBerat" required>
                    </div>

                    <!-- row3 -->

                    <div class="col-md-4">
                    <label for="inputJenisKelamin" class="form-label">Jenis Kelamin</label>
                    <select class="form-select" name="jenis_kelamin" aria-label="Default select example" id="inputJeniskelamin" required>
                        <option selected>Open this select menu</option>
                        <option value="1">Laki-laki</option>
                        <option value="2">Perempuan</option>
                    </select>
                    </div>

                    <div class="col-md-4">
                        <label for="inputUsia" class="form-label">Usia</label>
                        <input type="number" name="usia" class="form-control" id="inputUsia" required>
                    </div>  

                    <div class="col-md-4">
                        <label for="inputGol" class="form-label">Golongan Darah</label>
                        <input type="text" name="golongan_darah" class="form-control" id="inputGol" required>
                    </div>

                    <!-- row4 -->

                    <div class="col-md-4">
                        <label for="inputNumber" class="form-label">No Handphone</label>
                        <input type="number" name="no_hp" class="form-control" id="inputNumber" required>
                    </div>

                    <div class="col-md-4">
                        <label for="inputStatusPekerjaan" class="form-label">Status Pekerjaan Saat Ini</label>
                        <select class="form-select" name="status_pekerjaan" aria-label="Default select example" id="inputStatusPekerjaan" required>
                        <option selected>Open this select menu</option>
                        <option value="1">Sudah Bekerja</option>
                        <option value="2">Belum Bekerja</option>
                    </select>
                    </div>

                    <div class="col-md-4">
                    <label for="inputJeniskelamin" class="form-label">Posisi Yang Dilamar</label>
                    <select class="form-select" name="posisi_dilamar" aria-label="Default select example" id="inputJeniskelamin" required>
                        <option selected>Open this select menu</option>
                        <option value="1">Staff Office</option>
                        <option value="2">MEP Elektrical</option>
                        <option value="3">IT Support</option>
                        <option value="4">Staff Programmer</option>
                        <option value="5">Admin Entry Data</option>
                    </select>
                    </div>
                    

                    <!-- row 5 -->
                    <div class="col-6">
                        <label for="inputAddress" class="form-label">Alamat</label>
                        <input type="text" name="alamat" class="form-control" id="inputAddress" placeholder="example: Jakarta" required>
                    </div>
                    <div class="col-6">
                        <label for="inputNIK" class="form-label">NIK</label>
                        <input type="text" name="nik" class="form-control" id="inputNIK" placeholder="1471xxxxxxxxxx" required>
                    </div>

                    <!-- row6 -->

                    <div class="col-md-4">
                        <label for="inputTamatan" class="form-label">Tamatan</label>
                        <select class="form-select" name="tamatan" aria-label="Default select example" id="inputTamatan" required>
                        <option value="1">SMA/SMK</option>
                        <option value="2">D3</option>
                        <option value="3">S1/D4</option>
                        <option value="4">S2</option>
                    </select>
                    </div>

                    <div class="col-md-4">
                        <label for="inputUniversitas" class="form-label">Universitas / Sekolah</label>
                        <input type="text" name="universitas_sekolah" class="form-control" id="inputUniversitas" required>
                    </div>

                    <div class="col-md-4">
                    <label for="inputJurusan" class="form-label">Jurusan</label>
                    <input type="text" name="jurusan" class="form-control" id="inputJurusan" required>
                    </div>

                    <!-- row7 -->
                    <div class="col-md-6">
                        <label for="inputBPJS" class="form-label">BPJS Kesehatan</label>
                        <input type="number" name="bpjs" class="form-control" id="inputBPJS" required>
                    </div>
                    <div class="col-md-4">
                        <label for="inputNPWP" class="form-label">NPWP</label>
                        <input type="number" name="npwp" class="form-control" id="inputNPWP" required>
                    </div>
                    <div class="col-md-2">
                    <label for="inputJeniskelamin" class="form-label">Status</label>
                    <select class="form-select" name="status" aria-label="Default select example" id="inputJeniskelamin" required>
                        <option selected>Select</option>
                        <option value="1">Sudah Menikah</option>
                        <option value="2">Belum Menikah</option>
                    </select>
                    </div>
               
                      <!-- row file -->

                    <!-- row1 -->
                    <p class="text-capitalize fs-4 mt-5" style="text-indent: 0;">Form : Berkas</p> 
                    <div class="col-md-6">
                        <label for="inputSuratLamaran" class="form-label">Surat Lamaran</label>
                        <input type="file" name="surat_lamaran" class="form-control" id="inputSuratLamaran" required>
                    </div>

                    <div class="col-md-6">
                        <label for="inputCV" class="form-label">CV</label>
                        <input type="file" name="cv" class="form-control" id="inputCV" required>
                    </div>
                    
                    <!-- row2 -->

                    <div class="col-md-4">
                        <label for="inputIjazah" class="form-label">Ijazah</label>
                        <input type="file" name="ijazah" class="form-control" id="inputIjazah" required>
                    </div>

                    <div class="col-md-4">
                        <label for="inputTranskrip" class="form-label">Transkrip Nilai</label>
                        <input type="file" name="transkrip_nilai" class="form-control" id="inputTranskrip" required>
                    </div>
                    <div class="col-md-4">
                        <label for="inputFoto" class="form-label">Pas Foto Terbaru</label>
                        <input type="file" name="pas_foto" class="form-control" id="inputFoto" required>
                    </div>

                    <!-- row3 -->
                    <div class="col-md-6">
                        <label for="inputSertifikat" class="form-label">Sertifikat Keahlian</label>
                        <input type="file" name="sertifikat_keahlian" class="form-control" id="inputSertifikat" required>
                    </div>

                    <div class="col-md-6">
                        <label for="inputKTP" class="form-label">KTP</label>
                        <input type="file" name="ktp" class="form-control" id="inputKTP" required>
                    </div>


                    <!-- checkbox -->
                    <div class="checkbox mt-5">
                        <div class="form-check">
                        <input class="form-check-input" name="bersedia_ditempatkan" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                        Saya bersedia untuk ditempatkan di seluruh wilayah kerja perusahaan.
                        </label>
                        </div>

                        <div class="form-check">
                        <input class="form-check-input" name="lampirkan_dokumen" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                        Saya telah melampirkan semua dokumen yang diperlukan.
                        </label>
                        </div>

                        <div class="form-check">
                        <input class="form-check-input" name="izinkan_kontak" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                        Saya mengizinkan perusahaan untuk menghubungi referensi yang saya berikan.
                        </label>
                        </div>
                    </div>

                    <p style="text-indent: 0; text-align: left; line-height:normal;">Dengan ini saya menyatakan bahwa semua data pribadi dan pengalaman kerja yang tertera dalam formulir ini adalah benar dan sesuai dengan dokumen asli. Saya memahami bahwa informasi yang tidak benar dapat menjadi alasan penolakan lamaran.</p>

                        <div class="col-12">
                            <button type="submit" name="submit" class="btn btn-dark mb-3 px-3">Submit</button>
                        </div>

                </form>
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

<!-- footer -->
    

<script src="../bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>

