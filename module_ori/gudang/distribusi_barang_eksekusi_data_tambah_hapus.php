<?php
include "../../config/config.php";

$aset=$_GET['id'];

$dataArr = $DELETE->delete_distribusi_barang($aset);


echo "<script>alert('Data Berhasil Dihapus'); document.location='distribusi_barang_daftar.php';</script>";



?>
