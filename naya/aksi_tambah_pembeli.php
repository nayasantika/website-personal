<?php
	include "koneksi.php";
	$no_pembeli=$_POST['no_pembeli'];
	$nama=$_POST['nama'];
	$total=$_POST['total'];
	$sql = "insert into pembeli(no_pembeli,nama,total)
	values('$no_pembeli','$nama','$total')";
	$query=mysqli_query($db_link,$sql);
	if($query)
	{
		header('location:datapembeli.php');
	}
	else
	{
	echo"Gagal Disimpan --> <a href='tambahpembeli.php'>Kembali Ke Input Data";
	}
?>