<?php
include '../koneksi.php';
$id_transaksi=$_POST['id_transaksi'];
$id_pelanggan=$_POST['id_pelanggan'];
$id_bus=$_POST['id_bus'];
$tgl_pinjam=$_POST['tgl_pinjam'];
$status_pelanggan="sedang merental";
$status_bus="Dirental";


if(isset($_POST['simpan'])){
	$transaksi_test=mysqli_query($db,
		"INSERT INTO transaksi
		VALUES(NULL,'$id_pelanggan','$id_bus','$tgl_pinjam','')"
		
	);
	mysqli_query($db,
		"UPDATE pelanggan
		SET status='$status_pelanggan'
		WHERE id_pelanggan='$id_pelanggan'"
	);
	mysqli_query($db,
		"UPDATE bus
		SET status='$status_bus'
		WHERE id_bus='$id_bus'"
	);
	header("location:../index.php?p=transaksi-peminjaman");
	echo($transaksi_test);
}
?>