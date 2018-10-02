<html>
	<head><title> variable</title></head>
		<body>
			<h1>BUKU TAMU</h1>
			<form method='post' action='var.php'>
			<p>Nama		:<input type='text' name='nama' size='20'></p>
			<p>Email	:<input type='text' name='emal' size='30'></p>
			<p>Komentar	:<textarea name='komentar' cols='30' rows='3'></textarea></p>
			<p><input type='submit' value='kirim' name='sb'></p>
			</form>
			<?php
			error_reporting (E_ALL ^ E_NOTICE);
			$nama =$_POST['nama'];
			$email=$_post['emal'];
			$komentar=$_POST['komentar'];
			$submit=$_POST['sb'];
			if ($submit){
				echo"</br>Nama:$nama";
				echo"</br>Email:$email";
				echo"</br>Komentar:$Komentar";
				}
			?>
		</body>
</html>