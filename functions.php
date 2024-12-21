<?php

$conn = mysqli_connect("localhost", "root", "", "db_oprec");

function query($query){
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result) ){
        $rows[] = $row;
    }

    return $rows;

}

function bantuan($tambah){
    // ambil data dari form sesuai name di label
    global $conn;
    $email = htmlspecialchars($tambah["email"]);
    $pesan = htmlspecialchars($tambah["pesan"]);
    

    //tambah kan data ke database menggunakan query
    $query =  "INSERT INTO tb_bantuan VALUES 
              ('', '$email', '$pesan')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);

}

function registrasi($data){
    global $conn;

    // mengambil data dari inputan form
    // strtolower mengubah string menjadi huruf kecil
    // stripslashes agar simbolslashes tidak diinputkan
    $username = strtolower(stripslashes($data["username"]));
    $namaLengkap = strtolower($data["namaLengkap"]);
    $ttl = strtolower($data["ttl"]);
    $agama = strtolower($data["agama"]);
    $no_handphone = strtolower($data["no_handphone"]);
    $gender = strtolower($data["gender"]);
    $alamat = strtolower($data["alamat"]);
    $email = strtolower($data["email"]);
    $nik = strtolower($data["nik"]);
    $bpjs = strtolower($data["bpjs"]);
    $npwp = strtolower($data["npwp"]);
    $status = strtolower($data["status"]);
  
    // agar password di tb_users ada petik dua pemisah password
    $password = mysqli_real_escape_string($conn, $data["password1"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);


    // cek apakah username sudah ada sebelumnya apa belum 
    $result = mysqli_query($conn, "SELECT username FROM tb_users WHERE username = '$username'");

    if(mysqli_fetch_assoc($result)){
        echo "
        <script>
            alert('username sudah ada');

        </script>
        ";

        return false;
    }


    // cek apakah password dan konfirmasi password sesuai 
    if($password !== $password2){
        echo "
        <script>
            alert('konfirmasi password tidak sesuai!');
        </script>";
        return false;
    }

    // enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    // tambahkan user baru ke database

    mysqli_query($conn, "INSERT INTO tb_users VALUES('', '$username', '$namaLengkap', '$ttl', '$agama', '$no_handphone', '$gender', '$alamat', '$email', '$nik', '$bpjs', '$npwp', '$status', '$password')");

    return mysqli_affected_rows($conn);

}


function form_pendaftaran($data_form){
    // ambil data dari form sesuai name di label
    global $conn;   
    $nama_lengkap = htmlspecialchars($data_form["nama_lengkap"]);
    $alamat_email = htmlspecialchars($data_form["alamat_email"]);   
    $tempat_tanggallahir = htmlspecialchars($data_form["tempat_tanggallahir"]);
    $tinggi_badan = htmlspecialchars($data_form["tinggi_badan"]);
    $berat_badan = htmlspecialchars($data_form["berat_badan"]);
    $jenis_kelamin = htmlspecialchars($data_form["jenis_kelamin"]);
    $usia = htmlspecialchars($data_form["usia"]);
    $golongan_darah = htmlspecialchars($data_form["golongan_darah"]);
    $no_hp = htmlspecialchars($data_form["no_hp"]);
    $status_pekerjaan = htmlspecialchars($data_form["status_pekerjaan"]);
    $posisi_dilamar = htmlspecialchars($data_form["posisi_dilamar"]);
    $alamat = htmlspecialchars($data_form["alamat"]);
    $nik = htmlspecialchars($data_form["nik"]);
    $tamatan = htmlspecialchars($data_form["tamatan"]);
    $universitas_sekolah = htmlspecialchars($data_form["universitas_sekolah"]);
    $jurusan = htmlspecialchars($data_form["jurusan"]);
    $bpjs = htmlspecialchars($data_form["bpjs"]);
    $npwp = htmlspecialchars($data_form["npwp"]);
    $status = htmlspecialchars($data_form["status"]);


    $surat_lamaran = lamaran(); 
    if(!$surat_lamaran){
        return false;

    }
    $cv = cv(); 
    if(!$cv){
        return false;

    }

    $ijazah = ijazah(); 
    if(!$ijazah){
        return false;

    }

    $transkrip_nilai = transkrip(); 
    if(!$transkrip_nilai){
        return false;

    }

    $pas_foto = pas_photo(); 
    if(!$pas_foto){
        return false;

    }

    $sertifikat_keahlian = sertifikat_keahlian(); 
    if(!$sertifikat_keahlian){
        return false;

    }

    $ktp = ktp(); 
    if(!$ktp){
        return false;

    }


    //tambah kan data ke database menggunakan query
    $query =  "INSERT INTO tb_form_pendaftaran VALUES 
              ('', '$nama_lengkap', '$alamat_email', '$tempat_tanggallahir', '$tinggi_badan', '$berat_badan', '$jenis_kelamin', '$usia', '$golongan_darah', '$no_hp', '$status_pekerjaan', '$posisi_dilamar', '$alamat', '$nik', '$tamatan', '$universitas_sekolah', '$jurusan', ' $bpjs', '$npwp', '$status', '$surat_lamaran', '$cv', '$ijazah', '$transkrip_nilai', '$pas_foto', '$sertifikat_keahlian', '$ktp')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);

}


function lamaran(){
    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];

    // apakah tidak ada file yang diupload
    if($error === 4){
        echo "
            <script>
                alert('pilih file terlebih dahulu!');
            </script>
        ";
        return false;
    }

    // cek apakah file yang diupload adalah gambar

    // format gambar
    $ekstensiFileValid = ['pdf'];

    // explode mengubah string menjadi array
    $ekstensiFile = explode('.', $namaFile);

    // end() mengambil array dari nilai yang paling akhir strtolower() mengambil format nilai dengan huruf kecil
    $ekstensiFile = strtolower(end($ekstensiFile));

    // in_array() mengecek apakah ada string di dalam array
    if( !in_array($ekstensiFile, $ekstensiFileValid)){
       echo "
            <script>
                alert('file yang anda pilih tidak PDF');
            </script>
        ";
        return false;
    }


    // cek jika ukuran gambar melebihi kapasitas
    if($ukuranFile > 1000000){
        echo "
            <script>
                alert('Ukuran File Terlalu Besar');
            </script>
        ";
        return false;
    }

    // masukkan gambar yang diupload ke dalam folder gambar
    // membuat random nama gambar agar tidak ketimpa dengan gambar dengan nama file yg sama
    
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiFile;
    move_uploaded_file($tmpName, '../file/' . $namaFileBaru);

    return $namaFileBaru;

}


function cv(){
    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];

    // apakah tidak ada file yang diupload
    if($error === 4){
        echo "
            <script>
                alert('pilih file terlebih dahulu!');
            </script>
        ";
        return false;
    }

    // cek apakah file yang diupload adalah gambar

    // format gambar
    $ekstensiFileValid = ['pdf'];

    // explode mengubah string menjadi array
    $ekstensiFile = explode('.', $namaFile);

    // end() mengambil array dari nilai yang paling akhir strtolower() mengambil format nilai dengan huruf kecil
    $ekstensiFile = strtolower(end($ekstensiFile));

    // in_array() mengecek apakah ada string di dalam array
    if( !in_array($ekstensiFile, $ekstensiFileValid)){
       echo "
            <script>
                alert('file yang anda pilih tidak PDF');
            </script>
        ";
        return false;
    }


    // cek jika ukuran gambar melebihi kapasitas
    if($ukuranFile > 1000000){
        echo "
            <script>
                alert('Ukuran File Terlalu Besar');
            </script>
        ";
        return false;
    }

    // masukkan gambar yang diupload ke dalam folder gambar
    // membuat random nama gambar agar tidak ketimpa dengan gambar dengan nama file yg sama
    
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiFile;
    move_uploaded_file($tmpName, '../file/' . $namaFileBaru);

    return $namaFileBaru;

}

function ijazah(){
    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];

    // apakah tidak ada file yang diupload
    if($error === 4){
        echo "
            <script>
                alert('pilih file terlebih dahulu!');
            </script>
        ";
        return false;
    }

    // cek apakah file yang diupload adalah gambar

    // format gambar
    $ekstensiFileValid = ['pdf'];

    // explode mengubah string menjadi array
    $ekstensiFile = explode('.', $namaFile);

    // end() mengambil array dari nilai yang paling akhir strtolower() mengambil format nilai dengan huruf kecil
    $ekstensiFile = strtolower(end($ekstensiFile));

    // in_array() mengecek apakah ada string di dalam array
    if( !in_array($ekstensiFile, $ekstensiFileValid)){
       echo "
            <script>
                alert('file yang anda pilih tidak PDF');
            </script>
        ";
        return false;
    }


    // cek jika ukuran gambar melebihi kapasitas
    if($ukuranFile > 1000000){
        echo "
            <script>
                alert('Ukuran File Terlalu Besar');
            </script>
        ";
        return false;
    }

    // masukkan gambar yang diupload ke dalam folder gambar
    // membuat random nama gambar agar tidak ketimpa dengan gambar dengan nama file yg sama
    
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiFile;
    move_uploaded_file($tmpName, '../file/' . $namaFileBaru);

    return $namaFileBaru;

}


function transkrip(){
    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];

    // apakah tidak ada file yang diupload
    if($error === 4){
        echo "
            <script>
                alert('pilih file terlebih dahulu!');
            </script>
        ";
        return false;
    }

    // cek apakah file yang diupload adalah gambar

    // format gambar
    $ekstensiFileValid = ['pdf'];

    // explode mengubah string menjadi array
    $ekstensiFile = explode('.', $namaFile);

    // end() mengambil array dari nilai yang paling akhir strtolower() mengambil format nilai dengan huruf kecil
    $ekstensiFile = strtolower(end($ekstensiFile));

    // in_array() mengecek apakah ada string di dalam array
    if( !in_array($ekstensiFile, $ekstensiFileValid)){
       echo "
            <script>
                alert('file yang anda pilih tidak PDF');
            </script>
        ";
        return false;
    }


    // cek jika ukuran gambar melebihi kapasitas
    if($ukuranFile > 1000000){
        echo "
            <script>
                alert('Ukuran File Terlalu Besar');
            </script>
        ";
        return false;
    }

    // masukkan gambar yang diupload ke dalam folder gambar
    // membuat random nama gambar agar tidak ketimpa dengan gambar dengan nama file yg sama
    
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiFile;
    move_uploaded_file($tmpName, '../file/' . $namaFileBaru);

    return $namaFileBaru;

}

function pas_photo(){
    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];

    // apakah tidak ada file yang diupload
    if($error === 4){
        echo "
            <script>
                alert('pilih file terlebih dahulu!');
            </script>
        ";
        return false;
    }

    // cek apakah file yang diupload adalah gambar

    // format gambar
    $ekstensiFileValid = ['pdf'];

    // explode mengubah string menjadi array
    $ekstensiFile = explode('.', $namaFile);

    // end() mengambil array dari nilai yang paling akhir strtolower() mengambil format nilai dengan huruf kecil
    $ekstensiFile = strtolower(end($ekstensiFile));

    // in_array() mengecek apakah ada string di dalam array
    if( !in_array($ekstensiFile, $ekstensiFileValid)){
       echo "
            <script>
                alert('file yang anda pilih tidak PDF');
            </script>
        ";
        return false;
    }


    // cek jika ukuran gambar melebihi kapasitas
    if($ukuranFile > 1000000){
        echo "
            <script>
                alert('Ukuran File Terlalu Besar');
            </script>
        ";
        return false;
    }

    // masukkan gambar yang diupload ke dalam folder gambar
    // membuat random nama gambar agar tidak ketimpa dengan gambar dengan nama file yg sama
    
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiFile;
    move_uploaded_file($tmpName, '../file/' . $namaFileBaru);

    return $namaFileBaru;

}


function sertifikat_keahlian(){
    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];

    // apakah tidak ada file yang diupload
    if($error === 4){
        echo "
            <script>
                alert('pilih file terlebih dahulu!');
            </script>
        ";
        return false;
    }

    // cek apakah file yang diupload adalah gambar

    // format gambar
    $ekstensiFileValid = ['pdf'];

    // explode mengubah string menjadi array
    $ekstensiFile = explode('.', $namaFile);

    // end() mengambil array dari nilai yang paling akhir strtolower() mengambil format nilai dengan huruf kecil
    $ekstensiFile = strtolower(end($ekstensiFile));

    // in_array() mengecek apakah ada string di dalam array
    if( !in_array($ekstensiFile, $ekstensiFileValid)){
       echo "
            <script>
                alert('file yang anda pilih tidak PDF');
            </script>
        ";
        return false;
    }


    // cek jika ukuran gambar melebihi kapasitas
    if($ukuranFile > 1000000){
        echo "
            <script>
                alert('Ukuran File Terlalu Besar');
            </script>
        ";
        return false;
    }

    // masukkan gambar yang diupload ke dalam folder gambar
    // membuat random nama gambar agar tidak ketimpa dengan gambar dengan nama file yg sama
    
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiFile;
    move_uploaded_file($tmpName, '../file/' . $namaFileBaru);

    return $namaFileBaru;

}


function ktp(){
    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];

    // apakah tidak ada file yang diupload
    if($error === 4){
        echo "
            <script>
                alert('pilih file terlebih dahulu!');
            </script>
        ";
        return false;
    }

    // cek apakah file yang diupload adalah gambar

    // format gambar
    $ekstensiFileValid = ['pdf'];

    // explode mengubah string menjadi array
    $ekstensiFile = explode('.', $namaFile);

    // end() mengambil array dari nilai yang paling akhir strtolower() mengambil format nilai dengan huruf kecil
    $ekstensiFile = strtolower(end($ekstensiFile));

    // in_array() mengecek apakah ada string di dalam array
    if( !in_array($ekstensiFile, $ekstensiFileValid)){
       echo "
            <script>
                alert('file yang anda pilih tidak PDF');
            </script>
        ";
        return false;
    }


    // cek jika ukuran gambar melebihi kapasitas
    if($ukuranFile > 1000000){
        echo "
            <script>
                alert('Ukuran File Terlalu Besar');
            </script>
        ";
        return false;
    }

    // masukkan gambar yang diupload ke dalam folder gambar
    // membuat random nama gambar agar tidak ketimpa dengan gambar dengan nama file yg sama
    
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiFile;
    move_uploaded_file($tmpName, '../file/' . $namaFileBaru);

    return $namaFileBaru;

}



?>

