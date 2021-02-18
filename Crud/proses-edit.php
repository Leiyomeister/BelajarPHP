<?php

include "config.php";
if (isset($_POST['simpan'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
    $asal_sekolah = $_POST['asal_sekolah'];

    $sql = "UPDATE calon_siswa SET 
        nama ='$nama',
        alamat = '$alamat',
        jenis_kelamin = '$jenis_kelamin',
        agama = '$agama',
        asal_sekolah = '$asal_sekolah'
    WHERE id=$id";

    $query = mysqli_query($db, $sql);

    if ($query) {
        header('Location: list-siswa.php');
    } else {
        die("gagal menyimpan perubahan");
    }
} else {
    die("akses dilarang");
}

?>
