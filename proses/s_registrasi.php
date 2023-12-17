<?php

	include"koneksi.php";
	
	$Nik = $_POST['Nik'];
	$Nama = $_POST['Nama'];
	$User = $_POST['User'];
	$Pass1 = $_POST['Pass1'];
	$Telp = $_POST['Hp'];

	$sql="insert into masyarakat values ('$Nik','$Nama', '$User', '$Pass1', '$Telp')";
	mysqli_query($kon, $sql);
	
	header ("location:../index.php");
	
?>
	
	