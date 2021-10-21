<?php
include'../koneksi.php';

$id_bus=$_POST['id_bus'];
$nama_bus=$_POST['nama_bus'];
$jenis_bus=$_POST['jenis_bus'];
$kapasitas=$_POST['kapasitas'];
$tahun=$_POST['tahun'];
$harga_bus=$_POST['harga_bus'];

If(isset($_POST['simpan'])){
	mysqli_query($db,
		"UPDATE bus
		SET nama_bus='$nama_bus',jenis_bus='$jenis_bus',kapasitas='$kapasitas',tahun='$tahun', harga_bus='$harga_bus'
		WHERE id_bus='$id_bus'"
	);
	header("location:../index.php?p=bus");
}
?>

