<?php
	include'koneksi.php';
?>
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
.btn-edit {
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
.btn-delete {
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
	<h2><center><marquee direction="left">DATA OBAT</marquee></h2>
	<hr>
	<center><input type="button" value="Tambah Data" onClick="location.href='tambahobat.php'"></center>
	<br>
	<table border='1' cellspacing="0" cellpadding='5' align="center">
	<tr align="center">
		<td>KODE OBAT</td>
		<td>NAMA</td>
		<td>JENIS</td>
		<td>KELUHAN</td>
		<td>AKSI</td>
	</tr>
	<?php
		$no=1;
		$sql="SELECT * FROM obat";
		$query=mysqli_query($db_link,$sql);
		while($data = mysqli_fetch_array($query))
		{
		?>
		<tr>
		<td><?php echo "$data[kode_obat]"; ?></td>
		<td><?php echo "$data[nama]"; ?></td>
		<td><?php echo "$data[jenis]"; ?></td>
		<td><?php echo "$data[keluhan]"; ?></td>
		<td>
			<a class="btn-edit" href="editobat.php?id=<?php echo "$data[kode_obat]"; ?>">EDIT</a>
			<a class="btn-delete" href="hapusobat.php?id=<?php echo "$data[kode_obat]"; ?>" onClick="return confirm('Anda yakin?')">HAPUS</a>
		</td>
		</tr>
		<?php
		$no++;
		}
	?>
	</table><br>
<center>
<a href="../naya/halaman1.html">
	<input type='button' value='kembali'>
</body>
</html>