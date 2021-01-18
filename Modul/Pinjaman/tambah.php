<?php
include'../../koneksi.php';
$athallah1 = "SELECT * FROM anggota";
$athallah2 = mysqli_query($koneksi, $athallah1);
echo"
    <form action='prosesinput.php' method='post'>
    <table width=60% align='center'>
        <tr>
            <td colspan=2><a href='viewpinjaman.php'>BATAL</a></td>
        </tr>
        <tr>
            <td colspan=2 align='center'><h2>TAMBAH PINJAMAN</h2><hr></td>
        </tr>
        <tr>
            <td>NOMOR PINJAMAN</td>
            <td><input type='text' name='noPinjaman'></td>
        </tr>
        <tr>
            <td>NOMOR ANGGOTA</td>
            <td>
            <select id='anggota'>";
            while($athallah3=mysqli_fetch_array($athallah2)){
                echo"
                <option value='$athallah3[noanggota]'>$athallah3[namaanggota]</option>";
            }
            echo"
            </select>
            </td>
        </tr>
        <tr>
            <td>TANGGAL</td>
            <td><input type='date' name='tanggal'></td>
        </tr>
        <tr>
            <td>LAMA PINJAMAN</td>
            <td>
                <select id='lama'>
                    <option value='6'>6</option>
                    <option value='12'>12</option>
                    <option value='24'>24</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>BUNGA</td>
            <td>
                <select id='lama'>
                    <option value='1'>1</option>
                    <option value='2'>2</option>
                    <option value='3'>3</option>
                    <option value='4'>4</option>
                    <option value='5'>5</option>
                    <option value='6'>6</option>
                    <option value='7'>7</option>
                    <option value='8'>8</option>
                </select>
                %
            </td>
        </tr>
        <tr>
            <td>JUMLAH</td>
            <td><input type='number' name='jumlah'></td>
        </tr>
        <tr>
            <td></td>
            <td><input type='submit' name='submit' value='Simpan'></td>
        </tr>
    </table>
    </form>
    ";
?>