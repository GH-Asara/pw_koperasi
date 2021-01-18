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
$insert = "INSERT INTO anggota(noanggota, namaanggota, jk, tempat_lahir, tgl_lahir, alamat, hp, noidentitas, pwd) 
        values ('$no_anggota', '$nama_anggota', '$jenis_kelamin', '$tempat_lahir', '$tanggal_lahir', '$alamat', '$nomor_hp', '$no_identitas', '$password');";
$qInsert = mysqli_query($koneksi, $insert);
if($qInsert){
    header("location:viewanggota.php");
}
else{
    echo"Data Gagal Disimpan <a href='tambah.php'>KEMBALI</a>";
}
?>