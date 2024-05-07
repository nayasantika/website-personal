<?php
	include 'koneksi.php';
?>
<!DOCTYPE html>
<html>
<head>
<style>
input[type="button"] {
padding: 10px 20px;
background-color: #CC99CC;
border: none;
color: white;
text-align: center;
text-decoretion: none;
display: inline-block;
font-size: 16px;
margin-bottom: 10px;
cursor: pointex;
border-radius: 50px;
}
input[type="submit"] {
padding: 10px 20px;
background-color: #CC99CC;
border: none;
color: white;
text-align: center;
text-decoretion: none;
display: inline-block;
font-size: 16px;
margin-bottom: 10px;
cursor: pointex;
border-radius: 50px;
}
</style>
</head>
<body background="bg1.jpg">
	<h2><center>EDIT DATA KARYAWAN</center></h2>
		<hr />
	<?php
		$nik=$_GET['id'];
		$sql= "SELECT * FROM karyawan WHERE nik='$nik'";
		$query=mysqli_query($db_link,$sql);
		$data=mysqli_fetch_array($query);
	?>
	<center><form action='aksi_edit_karyawan.php?id=<?php echo "nik"; ?>' method='POST'>
		<table border="0">
		<tr>
			<td>NIK</td>
			<td><input name='nik' type='text' id="nik" value="<?php echo $data['nik'] ?>" /></td>
		</tr>
		<tr>
			<td>NAMA</td>
			<td><input name='nama' type='text' id="nama" value="<?php echo $data['nama'] ?>" /></td>
		</tr>
		<tr>
			<td>ALAMAT</td>
			<td><input name='alamat' type='text' id="alamat" value="<?php echo $data['alamat'] ?>" /></td>
		</tr>
		<tr>
			<td>BAGIAN</td>
			<td><input name='bagian' type='text' id="bagian" value="<?php echo $data['bagian'] ?>" /></td>
		</tr>
			<tr>
			<td></td>
			<td><input type="submit" value="simpan" />
			<a href="../karyawan/datakaryawan.php"><input type="button" value="batal" /></a></td>
			</tr>
		</table>
	</form>
</body>
</html>
