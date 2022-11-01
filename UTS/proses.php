<?php
if (isset($_POST['tambah'])){
    $nama   = $_POST['nama'];
    $posisi = $_POST['posisi'];
    $alamat = $_POST['alamat'];
    $umur   = $_POST['umur'];
    $kontak = $_POST['kontak'];
    echo "Nama    : <b>$nama</b><br>";
    echo "Posisi  : <b>$posisi</b><br>";
    echo "Alamat  : <b>$alamat</b><br>";
    echo "Umur    : <b>$umur</b><br>";
    echo "Kontak  : <b>$kontak</b><br>";
}
?>