<?php
session_start();
include '../../koneksi.php';
$athallah1 = $_POST['nomorpinjaman'];
$athallah2 = $_POST['nomoranggota'];
$athallah3 = $_POST['tanggal'];
$athallah4 = $_POST['lama'];
$athallah5 = $_POST['jumlah'];
$athallah6 = $_POST['bunga'];
$athallah7 = $_SESSION['username'];

$input = "INSERT INTO pinjaman_header(id_pinjam, tgl, noanggota, jumlah, lama, bunga, user_id) 
            VALUES('$athallah1','$athallah3','$athallah2','$athallah5','$athallah4','$athallah6','$athallah7')";
mysqli_query($koneksi, $input);

for($i=1; $i<=$athallah4; $i++){
    $angsuran = $athallah5/$athallah4;
    $bunga = ($angsuran*$athallah6)/100;
    $angsuran = round($angsuran);
    $bunga = round($bunga);

    $masukan = "INSERT INTO pinjaman_detail(id_pinjam, cicilan, angsuran, bunga) 
                VALUES('$athallah1', '$i','$angsuran', '$bunga')";
    mysqli_query($koneksi, $masukan);
}
echo"DATA SAVED";
header("location:viewpinjaman.php");
?>