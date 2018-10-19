<BUTTON><a href="form.php">INPUT DATA</a></BUTTON>
<form method="POST">
	<input type="text" name="cari"><button type="submit">Cari</button>

</form>

<?php  
include "koneksi.php";
if (isset($_GET['nim'])) {
	$nim = $_GET['nim'];
	$del = mysqli_query($con, "DELETE FROM mahasiswa WHERE nim = '$nim' ");
	if ($del) {
		header("Location:data.php");
	}

}

if (isset($_POST['cari'])) {
	$cari = $_POST['cari'];
	$query=mysqli_query($con, "SELECT * FROM mahasiswa WHERE nim LIKE '%$cari%'");
}else{
	$query = mysqli_query($con, "SELECT * FROM mahasiswa");
}



echo "<table border =3>";
echo "<th>Nama</th><th>Nim</th><th>Tanggal Lahir</th><th>Jenis Kelamin</th><th>Prodi</th><th>Fakultas</th><th>Asal</th><th>Moto hidup</th><th>Aksi</th>  ";


while ($row = mysqli_fetch_array($query)) {
	echo "<tr>";
	echo "<td>".$row['nama']."</td>";
	echo "<td>".$row['nim']."</td>";
	echo "<td>".$row['tgllahir']."</td>";
	echo "<td>".$row['jk']."</td>";
	echo "<td>".$row['prodi']."</td>";
	echo "<td>".$row['fakultas']."</td>";
	echo "<td>".$row['asal']."</td>";
	echo "<td>".$row['motohidup']."</td>";

	echo "<td><a href=data.php?nim=".$row['nim'].">Hapus</a></td>";
	echo "</tr>";
}
echo "</table>";



?>

