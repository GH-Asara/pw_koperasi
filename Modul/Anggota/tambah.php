<?php
echo "
<form action='prosesinput.php' method='post'>
<table width=60% align='center'>
    <tr>
        <td colspan=2><a href='viewsimpanan.php'>BATAL</a></td>
    </tr>
    <tr>
        <td colspan=2 align='center'><h2>TAMBAH JENIS SIMPANAN</h2><hr></td>
    </tr>
    <tr>
        <td>NO ANGGOTA</td>
        <td><input type='text' name='noAnggota'></td>
    </tr>
    <tr>
        <td>NAMA ANGGOTA</td>
        <td><input type='text' name='namaAnggota'></td>
    </tr>
    <tr>
        <td>JENIS KELAMIN</td>
        <td><input type='text' name='jenisKelamin'></td>
    </tr>
    <tr>
        <td>TEMPAT LAHIR</td>
        <td><input type='text' name='tmpLahir'></td>
    </tr>
    <tr>
        <td>TANGGAL LAHIR</td>
        <td><input type='date' name='tglLahir'></td>
    </tr>
    <tr>
        <td>ALAMAT</td>
        <td><input type='text' name='alamat'></td>
    </tr>
    <tr>
        <td>NOMOR HP</td>
        <td><input type='number' name='nomorHP'></td>
    </tr>
    <tr>
        <td>NO IDENTITAS</td>
        <td><input type='number' name='noIdentitas'></td>
    </tr>
    <tr>
        <td>PASSWORD</td>
        <td><input type='text' name='password'></td>
    </tr>
    <tr>
        <td></td>
        <td><input type='submit' name='submit' value='Simpan'></td>
    </tr>
</table>
</form>
";
?>