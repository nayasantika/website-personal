<?php
	include "koneksi.php";
	$no_nota=$_POST['no_nota'];
	$kode_obat=$_POST['kode_obat'];
	$banyak=$_POST['banyak'];
	$sql = "insert into banyak(no_nota,kode_obat,banyak)
	values('$no_nota','$kode_obat','$banyak')";
	$query=mysqli_query($db_link,$sql);
	if($query)
	{
		header('location:databanyak.php');
	}
	else
	{
	echo"Gagal Disimpan --> <a href='tambahbanyak.php'>Kembali Ke Input Data";
	}
?>
