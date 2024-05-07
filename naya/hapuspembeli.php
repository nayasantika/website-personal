<?php
	include "koneksi.php";
	
	$no_pembeli = $_GET['id'];
	$sql = "DELETE FROM pembeli WHERE no_pembeli='$no_pembeli'";
	$query = mysqli_query($db_link,$sql);
	if($query)
	{
	header('location:datapembeli.php');
	}
	else
	{
	echo "Hapus Pembeli Gagal";
	}
?>