<?php
if(isset($_POST['simpan'])) {
    $kode = $_POST['kode'];
    $matadiklat = $_POST['matadiklat'];
    $sks = $_POST['sks'];

    include_once "setting.php";
    $sql = "INSERT INTO matadiklat SET kode='$kode', matadiklat='$matadiklat', sks='$sks'";
    $result = mysqli_query($koneksi, $sql);
    if($result) {
        header('location: ?m=matadiklat&s=tampil');
    } else {
        echo "Error: " . $sql . "<br>" . $koneksi->error;
    }
} else {
    echo "Jangan Akses Langsung ke file simpan.php";
}