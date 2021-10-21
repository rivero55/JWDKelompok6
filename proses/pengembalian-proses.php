<?php
include'../koneksi.php';


$tgl_kembali=date('Y-m-d');
$id_transaksi=$_GET['id'];
$q_transaksi=mysqli_query($db,
	"SELECT * FROM transaksi WHERE id_transaksi='$id_transaksi'"
);
$r_transaksi=mysqli_fetch_array($q_transaksi);
$id_pelanggan=$r_transaksi['id_pelanggan'];
$status_anggota="tidak merental";
$id_bus=$r_transaksi['id_bus'];
$status_buku="Tersedia";
	
if(isset($_GET['id'])){
	mysqli_query($db,
		"UPDATE transaksi
		SET tgl_kembali='$tgl_kembali'
		WHERE id_transaksi='$id_transaksi'"
	);
	mysqli_query($db,
		"UPDATE pelanggan
		SET status='$status_anggota'
		WHERE id_pelanggan='$id_pelanggan'"
	);
	mysqli_query($db,
		"UPDATE bus
		SET status='$status_buku'
		WHERE id_bus='$id_bus'"
	);
	header("location:../index.php?p=transaksi-peminjaman");
}
?>