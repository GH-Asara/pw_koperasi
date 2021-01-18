<?php
include '../../koneksi.php';
$id_jenis       = $_POST['idJenis'];
$jenis_simpanan = $_POST['jenisSimpanan'];
$jumlah         = $_POST['jumlah'];
$edit = "UPDATE jenis_simpan SET jenis_simpanan = '$jenis_simpanan', jumlah = '$jumlah'
            WHERE id_jenis = '$id_jenis';";
$qEdit = mysqli_query($koneksi, $edit);
if($qEdit){
    header("location:viewsimpanan.php");
}
else{
    echo"Data Gagal Disimpan <a href='ui_edit.php'>KEMBALI</a>";
}
?>