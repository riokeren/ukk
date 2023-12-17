<?php

	include "../proses/koneksi.php";

	$Tanggal = $_POST['Tanggal'];
	$Nik = $_POST['Nik'];
	$Isi = $_POST['Isi'];

	$sql ="insert into pengaduan (tgl, nik, isi, status) values ('$Tanggal','$Nik','$Isi','0')";
	mysqli_query($kon, $sql);

	header ("location:index.php");

?>