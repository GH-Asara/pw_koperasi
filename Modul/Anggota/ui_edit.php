<?php
include '../../koneksi.php';
$noanggota = $_GET['noanggota'];
$tampilkan = "SELECT * FROM anggota WHERE noanggota='$noanggota';";
$qTampilkan = mysqli_query($koneksi,$tampilkan);
$hasil = mysqli_fetch_array($qTampilkan);
echo "
<form action='prosesedit.php' method='post'>
<table width=60% align='center'>
    <tr>
        <td colspan=2><a href='viewanggota.php'>BATAL</a></td>
    </tr>
    <tr>
        <td colspan=2 align='center'><h2>TAMBAH JENIS SIMPANAN</h2><hr></td>
    </tr>
    <tr>
        <td>NO ANGGOTA</td>
        <td><input type='text' name='noAnggota' value='$hasil[noanggota]'></td>
    </tr>
    <tr>
        <td>NAMA ANGGOTA</td>
        <td><input type='text' name='namaAnggota' value='$hasil[namaanggota]'></td>
    </tr>
    <tr>
        <td>JENIS KELAMIN</td>
        <td><input type='text' name='jenisKelamin' value='$hasil[jk]'></td>
    </tr>
    <tr>
        <td>TEMPAT LAHIR</td>
        <td><input type='text' name='tmpLahir' value='$hasil[tempat_lahir]'></td>
    </tr>
    <tr>
        <td>TANGGAL LAHIR</td>
        <td><input type='date' name='tglLahir' value='$hasil[tgl_lahir]'></td>
    </tr>
    <tr>
        <td>ALAMAT</td>
        <td><input type='text' name='alamat' value='$hasil[alamat]'></td>
    </tr>
    <tr>
        <td>NOMOR HP</td>
        <td><input type='number' name='nomorHP' value='$hasil[hp]'></td>
    </tr>
    <tr>
        <td>NO IDENTITAS</td>
        <td><input type='number' name='noIdentitas' value='$hasil[noidentitas]'></td>
    </tr>
    <tr>
        <td>PASSWORD</td>
        <td><input type='text' name='password' value='$hasil[pwd]'></td>
    </tr>
    <tr>
        <td></td>
        <td><input type='submit' name='submit' value='Simpan'></td>
    </tr>
</table>
</form>
";
?>