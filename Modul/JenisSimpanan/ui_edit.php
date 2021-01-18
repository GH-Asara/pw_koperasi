<?php
include '../../koneksi.php';
$id_jenis = $_GET['id_jenis'];
$tampilkan = "SELECT * FROM  jenis_simpan WHERE id_jenis='$id_jenis';";
$qTampilkan = mysqli_query($koneksi,$tampilkan);
$hasil = mysqli_fetch_array($qTampilkan);
echo "
<form action='prosesedit.php' method='post'>
<table width=60% align='center'>
    <tr>
        <td colspan=2><a href='viewsimpanan.php'>BATAL</a></td>
    </tr>
    <tr>
        <td colspan=2 align='center'><h2>TAMBAH JENIS SIMPANAN</h2><hr></td>
    </tr>
    <tr>
        <td>ID JENIS</td>
        <td><input type='text' name='idJenis' value='$hasil[id_jenis]'></td>
    </tr>
    <tr>
        <td>JENIS SIMPANAN</td>
        <td><input type='text' name='jenisSimpanan' value='$hasil[jenis_simpanan]'></td>
    </tr>
    <tr>
        <td>JUMLAH</td>
        <td><input type='number' name='jumlah' value='$hasil[jumlah]'></td>
    </tr>
    <tr>
        <td></td>
        <td><input type='submit' name='submit' value='Simpan'></td>
    </tr>
</table>
</form>
";
?>