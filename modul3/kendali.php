<html>
	<head><title>KENDALI</title></head>
		<body>
		<h1>NILAI</h1>
		<form method='post' action='kendali.php'>
		<p>MASUKAN NILAI ANGKA(0-100):<input type='text' name='nilaii' size'3'></p>
		<p><input type='submit' value='proses' name='sb'></p>
		</form>
		<?php
		error_reporting (E_ALL ^ E_NOTICE);
		$nilai=$_POST['nilaii'];
		$submit=$_POST['sb'];
		if ($submit){
		if ($nilai==''){$huruf='nilai kosong/belum diisi';}
		elseif($nilai<=20){$huruf='e';}
		elseif($nilai<=40){$huruf='d';}
		elseif($nilai<=60){$huruf='c';}
		elseif($nilai<=80){$huruf='b';}
		elseif($nilai<=100){$huruf='a';}
		else{$huruf='nilai yg dimasukan salah woii';}
		echo"nilai angka adalah:$nilai</br>";
		echo"nilai huruf adalah:$huruf";
		}
		?>
		</body>
</html>