<html>
	<head><title>data mining</title></head>
<?php
$koneksi=mysqli_connect('localhost','id7833148_l200160014','l200160014','id7833148_informatika');

?>
		<body>
		<center><h3>MASUKAN DATA MAHASISWA!<h3>
		<table border='0' width='30%'>
		<form method='POST' action='index.php'>
			<tr>
				<td width='25%'>nim</td>
				<td width='5%'>:</td>
				<td width='65%'><input type='text' name='nim'></td>
			</tr>
			<tr>
				<td width='25%'>nama</td>
				<td width='5%'>:</td>
				<td width='65%'><input type='text' name='nama'></td>
			</tr>
			<tr>
				<td width='25%'>kelas</td>
				<td width='5%'>:</td>
				<td width='65%'><input type='radio' name='kelas' value='a' checked>a
								<input type='radio' name='kelas' value='b' >b
								<input type='radio' name='kelas' value='c' >c</td>
			</tr>
			<tr>
				<td width='25%'>alamat</td>
				<td width='5%'>:</td>
				<td width='65%'><input type='text' name='alamat' size='40'></td>
			</tr>
		</table>
		<input type='submit' name='sb' value='masukan'>
		</form>
<?php
error_reporting(E_ALL^E_NOTICE);
if($_POST['sb']){
	$nim=$_POST['nim'];
	$nama=$_POST['nama'];
	$kelas=$_POST['kelas'];
	$alamat=$_POST['alamat'];
	$inputt="insert into mahasiswa(nim,nama,kelas,alamat )values('$nim','$nama','$kelas','$alamat')";
	if		($nim==''){echo"<br> ojo kosong nime";}
	elseif 	($nama==''){echo"<br> ojo kosong namane";}
	elseif 	($alamat==''){echo"<br> ojo kosong alamate";}
	else{mysqli_query($koneksi,$inputt);echo'<br> data telah masuk';}
}
?>
		<hr><h3>data mahasiswa<h3>
		<table border='1' width='50%'>
			<tr>
				<td align='center' width='20%'>nama</td>
				<td align='center' width='30%'>nim</td>
				<td align='center' width='10%'>alamat</td>
				<td align='center' width='20%'>kelas</td>
				<td align='center' width='10%'>keterangan</td>
			</tr>
<?php
$cari="select*from mahasiswa order by nim";
$hasil=mysqli_query($koneksi,$cari);
while($data=mysqli_fetch_row($hasil)){echo"
<tr>
	<td width='20%'>$data[0]</td>
	<td width='30%'>$data[1]</td>
	<td width='10%'>$data[2]</td>
	<td width='20%'>$data[3]</td>
	<td width='10%'><a href='index.php?varid=$data[1]'>ubah</a></td>
</tr>";}
		
?>
<?php
$id=$_GET['varid'];
$ubah="select * from mahasiswa where nim='$id'";
$hasill=mysqli_query($koneksi,$ubah);
$pp=mysqli_fetch_row($hasill);

?>

		</table>
		<br><hr><h1>tempat mengubah</h1>
		
		<form method='POST' action='index.php'>
		<table border='0' width='30%'>
			<tr>
				<td width='25%'>nim</td>
				<td width='5%'>:</td>
				<td width='65%'><input type='text' name='nim' 
				<?php
					echo"value='$pp[1]'";
				?>></td>
			</tr>
			<tr>
				<td width='25%'>nama</td>
				<td width='5%'>:</td>
				<td width='65%'><input type='text' name='nama'
				<?php
					echo"value='$pp[0]'";
				?>></td>
			</tr>
			<tr>
				<td width='25%'>kelas</td>
				<td width='5%'>:</td>
				<td width='65%'><input type='radio' name='kelas' value='a' 
				<?php
					if ($pp[3]=='a'){
						echo"checked";
					}
				?>>a
								<input type='radio' name='kelas' value='b'  <?php
					if ($pp[3]=='b'){echo"checked";}
				?>>b
								<input type='radio' name='kelas' value='c'  <?php
					if ($pp[3]=='c'){echo"checked";}
				?>>c</td>
			</tr>
			<tr>
				<td width='25%'>alamat</td>
				<td width='5%'>:</td>
				<td width='65%'><input type='text' name='alamat' size='40'
				<?php
					echo"value='$pp[2]'";
				?>></td>
			</tr>
		</table>
		<input type='submit' name='sb1' value='update'>

		</form>
<?php
error_reporting(E_ALL^E_NOTICE);



if($_POST['sb1']){
	$nim=$_POST['nim'];
	$nama=$_POST['nama'];
	$kelas=$_POST['kelas'];
	$alamat=$_POST['alamat'];
	$update="
	update mahasiswa
	set nim='$nim', nama='$nama', kelas='$kelas', alamat='$alamat'
	where nim='$nim'";
	$run = mysqli_query($koneksi,$update);
	if($run){
		echo'<br> data telah diedit';
	}
	
}
?>
		</center>
		</body>
</html>
