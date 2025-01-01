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
    $email = strtolower($data["email"]);
    // agar password di tb_users ada petik dua pemisah password
    $password = mysqli_real_escape_string($conn, $data["password1"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);


    // cek apakah username sudah ada sebelumnya apa belum 
    $result = mysqli_query($conn, "SELECT username FROM tb_register WHERE username = '$username'");

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

    mysqli_query($conn, "INSERT INTO tb_register VALUES('', '$username', '$email', '$password')");

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

// file
    $surat_lamaran = htmlspecialchars($data_form["surat_lamaran"]);
    $cv = htmlspecialchars($data_form["cv"]); 
    $ijazah = htmlspecialchars($data_form["ijazah"]); 
    $transkrip_nilai = htmlspecialchars($data_form["transkrip_nilai"]);
    $pas_foto = htmlspecialchars($data_form["pas_foto"]); 
    $sertifikat_keahlian = htmlspecialchars($data_form["sertifikat_keahlian"]);
    $ktp = htmlspecialchars($data_form["ktp"]);
   


    //tambah kan data ke database menggunakan query
    $query =  "INSERT INTO tb_form_pendaftaran VALUES 
              ('', '$nama_lengkap', '$alamat_email', '$tempat_tanggallahir', '$tinggi_badan', '$berat_badan', '$jenis_kelamin', '$usia', '$golongan_darah', '$no_hp', '$status_pekerjaan', '$posisi_dilamar', '$alamat', '$nik', '$tamatan', '$universitas_sekolah', '$jurusan', ' $bpjs', '$npwp', '$status', '$surat_lamaran', '$cv', '$ijazah', '$transkrip_nilai', '$pas_foto', '$sertifikat_keahlian', '$ktp')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);

}


function hapus($id){
    global $conn;
    
    $query =  "DELETE FROM tb_form_pendaftaran WHERE id = $id";

    mysqli_query($conn, $query);
    
    return mysqli_affected_rows($conn);

}

function tambah_user($data){
    global $conn;

    // mengambil data dari inputan form
    // strtolower mengubah string menjadi huruf kecil
    // stripslashes agar simbolslashes tidak diinputkan
    $username = htmlspecialchars($data["username"]);
    $namaLengkap = htmlspecialchars($data["namaLengkap"]);
    $ttl = htmlspecialchars($data["ttl"]);
    $agama = htmlspecialchars($data["agama"]);
    $no_handphone = htmlspecialchars($data["no_handphone"]);
    $gender = htmlspecialchars($data["gender"]);
    $alamat = htmlspecialchars($data["alamat"]);
    $email = htmlspecialchars($data["email"]);
    $nik = htmlspecialchars($data["nik"]);
    $bpjs = htmlspecialchars($data["bpjs"]);
    $npwp = htmlspecialchars($data["npwp"]);
    $status = htmlspecialchars($data["status"]);


    mysqli_query($conn, "INSERT INTO tb_users VALUES('', '$username', '$namaLengkap', '$ttl', '$agama', '$no_handphone', '$gender', '$alamat', '$email', '$nik', '$bpjs', '$npwp', '$status')");

    return mysqli_affected_rows($conn);

}

function admin($data){
    global $conn;

    $namaLengkap = htmlspecialchars($data["namaLengkap"]);
    $ttl = htmlspecialchars($data["ttl"]);
    $agama = htmlspecialchars($data["agama"]);
    $no_handphone = htmlspecialchars($data["no_handphone"]);
    $gender = htmlspecialchars($data["gender"]);
    $alamat = htmlspecialchars($data["alamat"]);

    mysqli_query($conn, "INSERT INTO tb_admin VALUES('', '$namaLengkap', '$ttl', '$agama', '$no_handphone', '$gender', '$alamat')");

    return mysqli_affected_rows($conn);
}

?>

