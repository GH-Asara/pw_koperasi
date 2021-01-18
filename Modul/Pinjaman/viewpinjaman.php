<?php
include'../../koneksi.php';

function jmlBayar($no){
    include'../../koneksi.php';
    $sql = "SELECT sum(jumlah_bayar) as total FROM pinjaman_detail WHERE id_pinjam='$no'";
    $data = mysqli_fetch_array(mysqli_query($koneksi, $sql));
    $row = mysqli_num_rows(mysqli_query($koneksi, $sql));
    if($row > 0){
        $hasil = $data['total'];
    }
    else{
        $hasil = 0;
    }
    return $hasil;
}

function sisa($no){
    include'../../koneksi.php';
    $sql = "SELECT sum(angsuran+bunga) as total FROM pinjaman_detail WHERE id_pinjam='$no'";
    $data = mysqli_fetch_array(mysqli_query($koneksi, $sql));
    $row = mysqli_num_rows(mysqli_query($koneksi, $sql));
    if($row > 0){
        $hasil = $data['total'];
    }
    else{
        $hasil = 0;
    }
    return $hasil;
}

function jin_date_sql($date){
    $exp = explode('-',$date);
    if(count($exp) == 3){
        $date = $exp[2].'-'.$exp[1].'-'.$exp[0];
    }
    return $date;
}

function jin_date_str($date){
    $exp = explode('-',$date);
    if(count($exp) == 3){
        $date = $exp[2].'-'.$exp[1].'-'.$exp[0];
    }
    return $date;
}

$gtotal = 0;
if(isset($_POST['tgl1'])){
    $tgl1=$_POST['tgl1'];
}
if(isset($_POST['tgl2'])){
    $tgl2=$_POST['tgl2'];
}

if(!empty($tgl1)){
    $where="WHERE tgl BETWEEN '$tgl1' AND '$tgl2'";
}
else{
    $where="";
}
echo"
    <table width=80% align='center'>
        <tr>
            <td colspan=13><a href='../../index.php'>HOME</a></td>
        </tr>
        <tr>
            <td colspan=13 align='center'><h2>DATA PINJAMAN</h2><hr></td>
        </tr>
        <th width=5%>No</th>
        <th>Nomor Pinjaman</th>
        <th>Tanggal</th>
        <th>No Anggota</th>
        <th>Nama</th>
        <th>L/P</th>
        <th>Lama</th>
        <th>Jumlah</th>
        <th>Bunga(%)</th>
        <th>Jumlah <br>Bayar</th>
        <th>Jumlah <br>Cicilan</th>
        <th>Sisa</th>
        <th>Hapus</th>
        <tr>";
    $sql = "SELECT a.*, b.namaanggota, b.jk 
            FROM pinjaman_header as a 
            JOIN anggota as b 
            ON a.noanggota=b.noanggota 
            ORDER BY a.id_pinjam DESC";
    $query = mysqli_query($koneksi, $sql);

    $no = 1;
    while($brows=mysqli_fetch_array($query)){
        $jml_bayar = jmlBayar($brows['id_pinjam']);
        $jml_cicilan = sisa($brows['id_pinjam']);
        $sisa = $jml_bayar - $jml_cicilan;
        echo"
            <tr>
                <td align=center>$no</td>
                <td>$brows[id_pinjam]</td>
                <td align=center>".jin_date_str($brows['tgl'])."</td>
                <td align=center>$brows[noanggota]</td>
                <td>$brows[namaanggota]</td>
                <td align=center>$brows[jk]</td>
                <td align=center>$brows[lama]</td>
                <td align=right>".number_format($brows['jumlah'])."</td>
                <td align=center>$brows[bunga]</td>
                <td align=center>".number_format($jml_bayar)."</td>
                <td align=center>".number_format($jml_cicilan)."</td>
                <td align=center>".number_format($sisa)."</td>
                <td align=center>
                <a href='javascript:deleteRow(\"{$brows['id_pinjam']}\")'>Hapus</a>
                </td>
            </tr>";
        $no++;
        $gtotal = $gtotal+$brows['jumlah'];        
    }
    echo"
        </tr>
            <td colspan=7 align=center>Total</td>
            <td align=right><b>".number_format($gtotal)."</b></td>
    </table>";
?>