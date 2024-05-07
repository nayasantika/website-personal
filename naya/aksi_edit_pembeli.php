<?php
	include "koneksi.php";
	$no_pembeli=$_POST['no_pembeli'];
	$nama=$_POST['nama'];
	$total=$_POST['total'];
	
	$sql2= "UPDATE pembeli SET no_pembeli='$no_pembeli', nama='$nama', total='$total' WHERE no_pembeli='$no_pembeli'";
	$query = mysqli_query($db_link,$sql2);
	if($query)
	{
	header('location:datapembeli.php');
	}
	else
	{
	echo "Edit PEMBELI gagal --> <a href='tambahpembeli.php'>KEMBALI";
	}
?>	