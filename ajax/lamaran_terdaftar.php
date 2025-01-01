<?php
sleep(1);
require '../functions.php';

// mengambil metode Get keyword
$keyword = $_GET["keyword"];

$query = "SELECT * FROM tb_form_pendaftaran 
                WHERE 
                nama_lengkap LIKE '%$keyword%' OR
                alamat_email LIKE '%$keyword%' OR
                tempat_tanggallahir LIKE '%$keyword%' OR
                tinggi_badan LIKE '%$keyword%' OR
                berat_badan LIKE '%$keyword%' OR
                jenis_kelamin LIKE '%$keyword%' OR
                usia LIKE '%$keyword%' OR
                golongan_darah LIKE '%$keyword%' OR
                no_hp LIKE '%$keyword%' OR
                status_pekerjaan LIKE '%$keyword%' OR
                posisi_dilamar LIKE '%$keyword%' OR
                alamat LIKE '%$keyword%' OR
                nik LIKE '%$keyword%' OR
                tamatan LIKE '%$keyword%' OR
                universitas_sekolah LIKE '%$keyword%' OR
                jurusan LIKE '%$keyword%' OR
                bpjs LIKE '%$keyword%' OR
                npwp LIKE '%$keyword%' OR
                status LIKE '%$keyword%' OR
                surat_lamaran LIKE '%$keyword%' OR
                cv LIKE '%$keyword%' OR
                ijazah LIKE '%$keyword%' OR
                transkrip_nilai LIKE '%$keyword%' OR
                pas_foto LIKE '%$keyword%' OR
                sertifikat_keahlian LIKE '%$keyword%' OR
                ktp LIKE '%$keyword%'";

$pendaftar_lamaran = query($query);

?>

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
        <th scope="col">Universitas_Sekolah</th>
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

