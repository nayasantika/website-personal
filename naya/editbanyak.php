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
		$no_nota=$_GET['id'];
		$sql= "SELECT * FROM banyak WHERE no_nota='$no_nota'";
		$query=mysqli_query($db_link,$sql);
		$data=mysqli_fetch_array($query);
	?>
	<center><form action='aksi_edit_banyak.php?id=<?php echo "no_nota"; ?>' method='POST'>
		<table border="0">
		<tr>
			<td>NO NOTA</td>
			<td><input name='no_nota' type='text' id="no_nota" value="<?php echo $data['no_nota'] ?>" /></td>
		</tr>
		<tr>
			<td>KODE OBAT</td>
			<td><input name='kode_obat' type='text' id="kode_obat" value="<?php echo $data['kode_obat'] ?>" /></td>
		</tr>
		<tr>
			<td>BANYAK</td>
			<td><input name='banyak' type='text' id="banyak" value="<?php echo $data['banyak'] ?>" /></td>
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
