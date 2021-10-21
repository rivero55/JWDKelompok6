<?php
include'../koneksi.php';
$nama_bus=$_POST['nama_bus'];
$jenis_bus=$_POST['jenis_bus'];
$kapasitas=$_POST['kapasitas'];
$tahun=$_POST['tahun'];
$harga_bus=$_POST['harga_bus'];
$status="Tersedia";
	
if(isset($_POST['simpan'])){
	mysqli_query($db,
		"INSERT INTO bus
		VALUES(NULL,'$nama_bus','$jenis_bus','$kapasitas','$tahun','$harga_bus','$status')"
	);
	header("location:../index.php?p=bus");
}
?>

