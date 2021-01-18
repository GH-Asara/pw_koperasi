<?php
include'../../koneksi.php';
$athallah1 = "SELECT * FROM anggota";
$athallah2 = mysqli_query($koneksi, $athallah1);
echo "
    <table width=80% align='center'>
        <tr>
            <td colspan=10><a href='../../index.php'>HOME</a></td>
        </tr>
        <tr>
            <td colspan=10 align='center'><h2>DATA ANGGOTA</h2><hr></td>
        </tr>
        <tr align=center>
            <td>NO ANGGOTA</td>
            <td>NAMA ANGGOTA</td>
            <td>JENIS KELAMIN</td>
            <td>TEMPAT LAHIR</td>
            <td>TANGGAL LAHIR</td>
            <td>ALAMAT</td>
            <td>NOMOR HP</td>
            <td>NO IDENTITAS</td>
            <td>PASSWORD</td>
            <td><a href='tambah.php'>TAMBAH</a></td>
        </tr>";
while($athallah3=mysqli_fetch_array($athallah2)){
    echo"
        <tr>
            <td align='center'>$athallah3[noanggota]</td>
            <td align='center'>$athallah3[namaanggota]</td>
            <td align='center'>$athallah3[jk]</td>
            <td align='center'>$athallah3[tempat_lahir]</td>
            <td align='center'>$athallah3[tgl_lahir]</td>
            <td align='center'>$athallah3[alamat]</td>
            <td align='center'>$athallah3[hp]</td>
            <td align='center'>$athallah3[noidentitas]</td>
            <td align='center'>$athallah3[pwd]</td>
            <td align='center'>
                <a href='ui_edit.php?noanggota=$athallah3[noanggota]'>EDIT</a> |
                <a href='hapus.php?noanggota=$athallah3[noanggota]'>HAPUS</a>
            </td>
        </tr>";
}
echo "</table>";
?>