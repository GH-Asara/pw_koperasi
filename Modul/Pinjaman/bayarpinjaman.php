<?php
include '../../koneksi.php';

$no = $_GET['no'];
$cicilan = $_GET['cicilan'];
$sql = mysqli_query($koneksi, "SELECT * FROM pinjaman_detail WHERE id_pinjam='$no' AND cicilan = '$cicilan' ORDER BY id_pinjam,cicilan");
$row = mysqli_num_rows($sql);
$rows = mysqli_fetch_array($sql);

$athallah1 = date("Y/m/d");
$athallah2 = $rows['angsuran'] + $rows['bunga'];

if($row>0){
    $input = "UPDATE pinjaman_detail SET tgl_bayar='$athallah1', jumlah_bayar='$athallah2' WHERE id_pinjam='$no' AND cicilan='$cicilan'";
    mysqli_query($koneksi, $input);
    header("location:detail.php?id_pinjaman=$no");
}
?>