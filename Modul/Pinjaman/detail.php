<?php
$gtotal = 0; $jumlah = 0;
include '../../koneksi.php';
$cari = $_GET['id_pinjaman'];
$where = "WHERE id_pinjam = '$cari'";
$athallah1 = "SELECT a.*, b.namaanggota, b.jk, b.noidentitas, b.tempat_lahir, b.tgl_lahir, b.alamat 
            FROM pinjaman_header as a JOIN anggota as b 
            ON a.noanggota=b.noanggota 
            ORDER BY a.id_pinjam DESC";
$queryAnggota = mysqli_query($koneksi, $athallah1);
$rowsA = mysqli_fetch_array($queryAnggota); 
echo"
<center><h2>DATA DETAIL PINJAMAN</h2></center><hr>
<a href='viewpinjaman.php'>Kembali</a><br><br>
<table width=80% border=0>
    <tr>
        <td colspan=2><b>DATA PINJAMAN</b><hr></td>
        <td></td>
        <td colspan=2><b>DATA ANGGOTA</b><hr></td>
    </tr>
    <tr>
        <td>Nomor Pinjaman</td><td>: <b>$cari</b></td>
        <td width=30%></td>
        <td>Nomor KTP</td><td>: $rowsA[9]</td>
    </tr>
    <tr>
        <td>Nomor Anggota</td><td>: <b>$rowsA[2]</b></td>
        <td></td>
        <td>Nama Anggota</td><td>: $rowsA[7]</td>
    </tr>
    <tr>
        <td>Tanggal Pinjaman</td><td>: <b>$rowsA[1]</b></td>
        <td></td>
        <td>Jenis Kelamin</td><td>: $rowsA[8]</td>
    </tr>
    <tr>
        <td>Lama Pinjaman</td><td>: <b>$rowsA[4]</b></td>
        <td></td>
        <td>Tempat, Tanggal Lahir</td><td>: $rowsA[10], $rowsA[11]</td>
    </tr>
    <tr>
        <td>Bunga</td><td>: <b>$rowsA[5]</b></td>
        <td></td>
        <td>Alamat</td><td>: $rowsA[12]</td>
    </tr>
    <tr>
        <td>Jumlah</td><td colspan=4>: $rowsA[3]</td>
    </tr>
</table>
<hr><h3>Detail Pinjaman</h3>";
echo "
<table id='table' width='100%'>
    <tr>
        <th width='5%'>No</th>
        <th>Cicilan Ke</th>
        <th>Angsuran</th>
        <th>Bunga</th>
        <th>Total</th>
        <th>Tanggal Bayar</th>
        <th>Jumlah Bayar</th>
    </tr>";
$athallah2 = "SELECT * FROM pinjaman_detail $where ORDER BY id_pinjam, cicilan";
$query = mysqli_query($koneksi, $athallah2);
$no = 1;
while($rows=mysqli_fetch_array($query)){
    $tanggal = $rows['tgl_bayar'];
    $jml = $rows['jumlah_bayar'];
    $total = $rows['angsuran'] + $rows['bunga'];
    echo "
    <tr>
        <td align='center'>$no</td>
        <td align='center'>$rows[cicilan]</td>
        <td align='right'>".number_format($rows['angsuran'])."</td>
        <td align='right'>".number_format($rows['bunga'])."</td>
        <td align='right'>".number_format($total)."</td>
        <td align='center'>$rows[tgl_bayar]</td>
        <td align='center'>$rows[jumlah_bayar]</td>
    </tr>";
    $no++; $gtotal = $gtotal + $total;
}
    echo "
    <tr>
        <td colspan='4' align='center'>Total</td>
        <td align='right'><b>".number_format($gtotal)."</b></td>
    </tr>        
</table>";
?>