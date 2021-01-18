<?php
include'../../koneksi.php';
$athallah1 = "SELECT * FROM jenis_simpan";
$athallah2 = mysqli_query($koneksi, $athallah1);
echo "
    <table width=60% align='center'>
        <tr>
            <td colspan=4><a href='../../index.php'>HOME</a></td>
        </tr>
        <tr>
            <td colspan=4 align='center'><h2>DATA JENIS SIMPANAN</h2><hr></td>
        </tr>
        <tr align=center>
            <td>ID JENIS</td>
            <td>JENIS SIMPANAN</td>
            <td>JUMLAH</td>
            <td>AKSI <br> <a href='tambah.php'>TAMBAH DATA</a></td>
        </tr>";
while($athallah3=mysqli_fetch_array($athallah2)){
    echo"
        <tr>
            <td align='center'>$athallah3[id_jenis]</td>
            <td>$athallah3[jenis_simpanan]</td>
            <td>$athallah3[jumlah]</td>
            <td align='center'>
                <a href='ui_edit.php?id_jenis=$athallah3[id_jenis]'>EDIT</a> |
                <a href='hapus.php?id_jenis=$athallah3[id_jenis]'>HAPUS</a>
            </td>
        </tr>";
}
echo "</table>";
?>