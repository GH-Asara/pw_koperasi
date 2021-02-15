<hr>
<h1 align="center">APLIKASI SISTEM INFORMASI KOPERASI SEDERHANA</h1>
<hr>
<?php
session_start();
if(!isset($_SESSION['status'])){
    header("location:login.php");
}
echo"
    <table border=0 width=80% align=center>
        <tr>
            <td><a href='index.php'>HOME</a></td>
            <td align=right>HALAMAN UTAMA</td>
        </tr>
        <tr>
            <td colspan=2>
                <ol>Master
                    <ol><a href='Modul/Anggota/viewanggota.php'>Anggota</a></ol>
                    <ol><a href='Modul/JenisSimpanan/viewsimpanan.php'>Jenis Simpanan</a></ol>
                    <ol><a href='Modul/User/viewuser.php'>User</a></ol>
                </ol>
                <ol>Transaksi
                    <ol><a href='Modul/Pinjaman/viewpinjaman.php'>Pinjaman</a></ol>
                    <ol><a href='Modul/Pinjaman/caridatapinjam.php'>Bayar Pinjaman</a></ol>
                    <ol>Simpanan</ol>
                    <ol>Pengembalian Simpanan</ol>
                </ol>
                <ol>Laporan
                    <ol>Pinjaman</ol>
                    <ol>Anggota</ol>
                    <ol>Simpanan</ol>
                </ol>
                <ol>Logout</ol>
            </td>
        </tr>
        <tr>
            <td colspan=2 align=center><hr>Copyright@2020</td>
        </tr>
    </table>
";
?>