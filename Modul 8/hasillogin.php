<php
session_start();
echo " anda berhasil login sebagai ".$_SESSION['username']." dan anda 
terdaftar sebagai ".$_SESSION['status'];
?>
<br>
Silahkan log out dengan klik link<a href='logout.php'> DI SINI</a>