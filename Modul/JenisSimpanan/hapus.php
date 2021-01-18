<?php
include '../../koneksi.php';
$id_jenis       = $_GET['id_jenis'];
$delete = "DELETE FROM jenis_simpan WHERE id_jenis = '$id_jenis';";
$qDelete = mysqli_query($koneksi, $delete);
if($qDelete){
    header("location:viewsimpanan.php");
}
else{
    echo"Data Gagal Dihapus <a href='viewsimpanan.php'>KEMBALI</a>";
}
?>