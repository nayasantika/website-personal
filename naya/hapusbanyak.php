<?php
	include "koneksi.php";
	
	$no_nota = $_GET['id'];
	$sql = "DELETE FROM banyak WHERE no_nota='$no_nota'";
	$query = mysqli_query($db_link,$sql);
	if($query)
	{
	header('location:databanyak.php');
	}
	else
	{
	echo "Hapus Banyak Gagal";
	}
?>