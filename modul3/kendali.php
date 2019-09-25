<!DOCTYPE html>
<html>
<head>
	<title>variable</title>
</head>
<body>
	<H1>Nilai</H1>
	<form method="POST" action="kendali.php">
		<p>Masukan nilai angka (0-100) : <input type="text" name="nilai" size="3"></p>
		<p><input type="submit" name="submit" value="Proses"></p>
	</form>
	<?php
	error_reporting(E_ALL ^ E_NOTICE);
	$nilai = $_POST['nilai'];
	$submit = $_POST['submit'];
	if($submit){
		if($nilai==""){
			$huruf = '"nilai kosong/belum diisi"';
		}elseif($nilai<=20){
			$huruf="E";
		}elseif($nilai<=40){
			$huruf="D";
		}elseif($nilai<=60){
			$huruf="C";
		}elseif($nilai<=80){
			$huruf="B";
		}elseif($nilai<=100){
			$huruf="A";
		}else{
			$huruf='"Nilai yang dimasukkan salah!"';
		}
		echo "nilai angka adalah $nilai</br>";
		echo "maka nilai huruf adalah $huruf";
	}
	?>
</body>
</html>