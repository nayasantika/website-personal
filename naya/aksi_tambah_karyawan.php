<?php
	include "koneksi.php";
	$nik=$_POST['nik'];
	$nama=$_POST['nama'];
	$alamat=$_POST['alamat'];
	$bagian=$_POST['bagian'];
	$sql = "insert into karyawan(nik,nama,alamat,bagian)
	values('$nik','$nama','$alamat','$bagian')";
	$query=mysqli_query($db_link,$sql);
	if($query)
	{
		header('location:datakaryawan.php');
	}
	else
	{
	echo"Gagal Disimpan --> <a href='tambahkaryawan.php'>Kembali Ke Input Data";
	}
?>
