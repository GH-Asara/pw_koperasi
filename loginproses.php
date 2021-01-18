<?php
include "koneksi.php";
$athallah1 = $_POST['username'];
$athallah2 = $_POST['password'];
$athallah3 = mysqli_query($koneksi, "SELECT * FROM users WHERE user_id='$athallah1' AND password='$athallah2'");
$athallah4 = mysqli_num_rows($athallah3);
$athallah5 = mysqli_fetch_array($athallah3);

if($athallah1=="" || $athallah2==""){
    echo"Username atau Password belum dimasukkan !";
    echo"<br><a href='login.php'>Kembali<a/>";
}
else if($athallah4 > 0){
    session_start();
    $_SESSION['username'] = $athallah1;
    $_SESSION['status'] = "aktif";
    header("location:index.php");
}
else{
    echo"Gagal Login";
    echo"<br><a href='login.php'>Ulangi<a/>";
}
?>