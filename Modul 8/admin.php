<php
session_start();
error_reporting(E_ALL ^ E_NOTICE ^ E_DEPRECATED);
?>
<center>
<H1><font color='red'> Selamat Anda Masuk ke Halaman Admin</font></H1>
<br>
Silahkan Log Out dengan Klik <a href='logout1.php'> DI SINI</a>
</center>

<?php
if(!isset($_SESSION['nama'])){
			header('location:login.php');
		}
?>