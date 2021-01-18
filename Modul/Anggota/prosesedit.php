<?php
include '../../koneksi.php';
$no_anggota    = $_POST['noAnggota'];
$nama_anggota  = $_POST['namaAnggota'];
$jenis_kelamin = $_POST['jenisKelamin'];
$tempat_lahir  = $_POST['tmpLahir'];
$tanggal_lahir = $_POST['tglLahir'];
$alamat        = $_POST['alamat'];
$nomor_hp      = $_POST['nomorHP'];
$no_identitas  = $_POST['noIdentitas'];
$password      = $_POST['password'];
$edit = "UPDATE anggota SET namaanggota='$nama_anggota','jk'='$jenis_kelamin',
        'tempat_lahir'='$tempat_lahir','tgl_lahir'='$tanggal_lahir','alamat'='$alamat', 'hp'='$nomor_hp',
        'noidentitas'='$no_identitas', pwd='$password' WHERE noanggota='$no_anggota';";
$qEdit = mysqli_query($koneksi, $edit);
if($qEdit){
    header("location:viewanggota.php");
}
else{
    echo"Data Gagal Disimpan <a href='ui_edit.php'>KEMBALI</a>";
}
?>