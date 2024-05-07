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
</style>
</head>
<body background="bg1.jpg">
	<h2><center>EDIT DATA STOK</center></h2>
		<hr />
	<?php
		$kode_stok=$_GET['id'];
		$sql= "SELECT * FROM stok WHERE kode_stok='$kode_stok'";
		$query=mysqli_query($db_link,$sql);
		$data=mysqli_fetch_array($query);
	?>
	<center><form action='aksi_edit_stok.php?id=<?php echo "kode_stok"; ?>' method='POST'>
		<table border="0">
		<tr>
			<td>KODE STOK</td>
			<td><input name='kode_stok' type='text' id="kode_stok" value="<?php echo $data['kode_stok'] ?>" /></td>
		</tr>
		<tr>
			<td>STOK</td>
			<td><input name='stok' type='text' id="stok" value="<?php echo $data['stok'] ?>" /></td>
		</tr>
		<tr>
			<td>HARGA</td>
			<td><input name='harga' type='text' id="harga" value="<?php echo $data['harga'] ?>" /></td>
		</tr>
			<tr>
			<td></td>
			<td><input type="submit" value="simpan" />
			<a href="../obat/datastok.php"><input type="button" value="batal" /></a></td>
			</tr>
		</table>
	</form>
</body>
</html>
