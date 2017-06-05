<html>
<head>
<title>Menghitung Volume dari P x L x T</title>
</head>
<body>
	<form id="form" name="form" method="post" action="Latihan1_MuhammadAinulMaruf.php">
	<p align="left"> Masukkan panjang <input type="text" name="pjg" id="nilai"/> 
	</p>
	<p align="left"> Masukkan lebar <input type="text" name="lbr" id="nilai"/>
	</p>
	<p align="left"> Masukkan tinggi <input type="text" name="tgi" id="nilai"/>
	</p>
	<p align="left"><input type="submit" name="hitung" id="button" value="hitung" />
	</p>
	</form>
<?php
		$panjang=$_POST['pjg'];
		$lebar=$_POST['lbr'];
		$tinggi=$_POST['tgi'];
		$volume;
		echo"<br> Volume bangun ruang adalah  $volume ";
?>
</p>
</body>
</html>
