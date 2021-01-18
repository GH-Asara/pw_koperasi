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
        <td>ID JENIS</td>
        <td><input type='text' name='idJenis'></td>
    </tr>
    <tr>
        <td>JENIS SIMPANAN</td>
        <td><input type='text' name='jenisSimpanan'></td>
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