<?php
	include "koneksi.php";
	$kode_stok=$_POST['kode_stok'];
	$stok=$_POST['stok'];
	$harga=$_POST['harga'];
	$sql = "insert into stok(kode_stok,stok,harga)
	values('$kode_stok','$stok','$harga')";
	$query=mysqli_query($db_link,$sql);
	if($query)
	{
		header('location:datastok.php');
	}
	else
	{
	echo"Gagal Disimpan --> <a href='tambahstok.php'>Kembali Ke Input Data";
	}
?>