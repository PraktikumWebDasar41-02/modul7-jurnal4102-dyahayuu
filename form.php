<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="POST">
		<tr>
			<td>INPUT DATA</td>
		</tr><br><br>
		<tr>
			<td>Nama</td>
			<td><input type="text" name="nama"></td><br><br>
		</tr>
		<tr>
			<td>Nim</td>
			<td><input type="number" name="nim"></td><br><br>
		</tr>
		<tr>
			<td>Tanggal Lahir</td>
			<td><input type="date" name="tgllahir"></td><br><br>
		</tr>
		<tr>
			<td>Jenis Kelamin</td>
			<td><select name="jk">
				<option value="laki">Laki-laki</option>
				<option value="perempuan">Perempuan</option>
			</select></td><br><br>
		</tr>
		<tr>
			<td>Program Studi</td>
			<td><select name="prodi">
				<option value="Teknik Informatika">Teknik Informatika</option>
				<option value="Sistem Informasi">Sistem Informasi</option>
				<option value="Teknik Telekomunikasi">Teknik Telekomunikasi</option>
				<option value="Teknik Komputer">Teknik Komputer</option>
			</select></td><br><br>
		</tr>
		<tr>
			<td>Fakultas</td>
			<td><input type="radio" name="fakultas" value="FIT">FIT
			<input type="radio" name="fakultas" value="FTE">FTE </td><br><br>
		</tr>
		<tr>
			<td>Asal</td>
			<td><input type="text" name="asal"></td><br><br>
		</tr>
		<tr>
			<td>Moto Hidup</td>
			<td><input type="text" name="motohidup" maxlength="50"></td><br><br>
		</tr>
		<tr>
			<td><input type="submit" name="submit" value="submit"><a href="data.php">View</td>
		</tr>

	</form>


</body>
</html>

<?php  
include "koneksi.php";
if (isset($_POST['submit'])) {
	$nama = $_POST['nama'];
	if (is_numeric($_POST['nim'])) {
	}
	$nim = $_POST['nim'];
	$tgllahir = $_POST['tgllahir'];
	$jk = $_POST['jk'];
	$prodi = $_POST ['prodi'];
	$fakultas = $_POST ['fakultas'];
	$asal = $_POST ['asal'];
	$motohidup = $_POST ['motohidup'];

	if (isset($nim)) {
	
	$query=mysqli_query($con,"INSERT INTO `mahasiswa`(`nama`, `nim`, `tgllahir`, `jk`, `prodi`, `fakultas`, `asal`, `motohidup`) VALUES ('$nama','$nim','$tgllahir','$jk','$prodi','$fakultas','$asal','$motohidup')");

	if ($query) {
		echo "berhasil";
	}
	else{
		echo "gagal";
	}

}

}




?>