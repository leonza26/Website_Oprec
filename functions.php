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


?>

