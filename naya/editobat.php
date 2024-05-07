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
	<h2><center>EDIT DATA OBAT</center></h2>
		<hr />
	<?php
		$kode_obat=$_GET['id'];
		$sql= "SELECT * FROM obat WHERE kode_obat='$kode_obat'";
		$query=mysqli_query($db_link,$sql);
		$data=mysqli_fetch_array($query);
	?>
	<center><form action='aksi_edit_obat.php?id=<?php echo "kode_obat"; ?>' method='POST'>
		<table border="0">
		<tr>
			<td>KODE OBAT</td>
			<td><input name='kode_obat' type='text' id="kode_obat" value="<?php echo $data['kode_obat'] ?>" /></td>
		</tr>
		<tr>
			<td>NAMA</td>
			<td><input name='nama' type='text' id="nama" value="<?php echo $data['nama'] ?>" /></td>
		</tr>
		<tr>
			<td>JENIS</td>
			<td><input name='jenis' type='text' id="jenis" value="<?php echo $data['jenis'] ?>" /></td>
		</tr>
		<tr>
			<td>KELUHAN</td>
			<td><input name='keluhan' type='text' id="keluhan" value="<?php echo $data['keluhan'] ?>" /></td>
		</tr>
			<tr>
			<td></td>
			<td><input type="submit" value="simpan" />
			<a href="../obat/dataobat.php"><input type="button" value="batal" /></a></td>
			</tr>
		</table>
	</form>
</body>
</html>
