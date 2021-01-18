<?php
include'../../koneksi.php';
$athallah1 = "SELECT * FROM users";
$athallah2 = mysqli_query($koneksi, $athallah1);
echo "
    <table width=50% align='center'>
        <tr>
            <td colspan=4><a href='../../index.php'>HOME</a></td>
        </tr>
        <tr>
            <td colspan=4 align='center'><h2>DATA USER</h2><hr></td>
        </tr>
        <tr align=center>
            <td>ID USER</td>
            <td>PASSWORD</td>
            <td><a href='tambah.php'>TAMBAH</a></td>
        </tr>";
while($athallah3=mysqli_fetch_array($athallah2)){
    echo"
        <tr>
            <td align='center'>$athallah3[user_id]</td>
            <td align='center'>$athallah3[password]</td>
            <td align='center'>
                <a href='ui_edit.php?user_id=$athallah3[user_id]'>EDIT</a> |
                <a href='hapus.php?user_id=$athallah3[user_id]'>HAPUS</a>
            </td>
        </tr>";
}
echo "</table>";
?>