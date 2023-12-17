<?php
	include"../proses/koneksi.php";

	$Id = $_POST['Id'];
	$Status = $_POST['Status'];
	$Tanggapan = $_POST['Tanggapan'];

	$sql="update pengaduan set status='$Status', tanggapan='$Tanggapan' where id='$Id'";
	mysqli_query($kon, $sql);
	header("Location:index.php");
?>