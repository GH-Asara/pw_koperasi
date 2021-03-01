<?php
include'../../koneksi.php';
$athallah1 = "  SELECT a.noanggota,a.namaanggota,a.jk,
                (SELECT sum(jumlah) FROM simpanan WHERE noanggota=a.noanggota) 
                as total FROM anggota a ORDER BY noanggota";
$athallah2 = mysqli_query($koneksi, $athallah1);
echo "
    <table width=60% align='center'>
        <tr>
            <td colspan=6><a href='../../index.php'>HOME</a></td>
        </tr>
        <tr>
            <th colspan=6 align='center'><h2>DAFTAR SIMPANAN ANGGOTA</h2><hr></td>
        </tr>
        <tr align=center>
            <th>No</td>
            <th>Nomor</td>
            <th>Nama</td>
            <th>L/P</td>
            <th>Jumlah Total Simpanan</td>
            <th>Aksi</td>
        </tr>";
$i = 1;
while($athallah3=mysqli_fetch_array($athallah2)){
    echo"
        <tr>
            <td align='center'>$i</td>
            <td align='center'>$athallah3[noanggota]</td>
            <td align='center'>$athallah3[namaanggota]</td>
            <td align='center'>$athallah3[jk]</td>
            <td align='center'>$athallah3[total]</td>
            <td align='center'><a href='tambah.php'>Detail</a></td>
        </tr>";
        $i++;
}
echo "</table>";
?>