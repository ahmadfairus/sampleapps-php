<?php
include 'database.php';

if(isset($_POST['submit'])){
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	$pekerjaan = $_POST['pekerjaan'];

	$kuery = "insert into user (nama, alamat, pekerjaan) values ('$nama', '$alamat', '$pekerjaan')";
	$eksekusi = $koneksi->query($kuery);
}

$kuery = "select nama, alamat, pekerjaan from user order by id desc";
$data = $koneksi->query($kuery);

$koneksi->close();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Sample Apps</title>
</head>
<body>

<h1>Sample Apps Data</h1>
<form action="" method="post">
	<table>
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td><input type="text" name="nama"></td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td>:</td>
			<td><input type="text" name="alamat"></td>
		</tr>
		<tr>
			<td>Pekerjaan</td>
			<td>:</td>
			<td><input type="text" name="pekerjaan"></td>
		</tr>
		<tr>
			<td></td><td></td><td><input type="submit" name="submit"></td>
		</tr>
	</table>
</form>
<br><br>

<table border="1">
	<thead>
		<th>Nama</th>
		<th>Alamat</td>
		<th>Pekerjaan</th>
	</thead>
	<tbody>
	<?php 
	if($data->num_rows > 0){
		while($row = $data->fetch_assoc()){
			echo "<tr>
			<td>".$row['nama']."</td>
			<td>".$row['alamat']."</td>
			<td>".$row['pekerjaan']."</td>
			</tr>";
		}
	}
	?>
	</tbody>
</table>
</body>
</html>