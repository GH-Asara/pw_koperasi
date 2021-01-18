<?php
include '../../koneksi.php';
$id_jenis       = $_POST['idJenis'];
$jenis_simpanan = $_POST['jenisSimpanan'];
$jumlah         = $_POST['jumlah'];
$insert = "INSERT INTO jenis_simpan(id_jenis, jenis_simpanan, jumlah) 
        values ('$id_jenis', '$jenis_simpanan', '$jumlah');";
$qInsert = mysqli_query($koneksi, $insert);
if($qInsert){
    header("location:viewsimpanan.php");
}
else{
    echo"Data Gagal Disimpan <a href='tambah.php'>KEMBALI</a>";
}
?>