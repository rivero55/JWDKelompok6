<?php
include '../koneksi.php';

$id_pelanggan=$_POST['id_pelanggan'];
$nama=$_POST['nama_lengkap'];
$no_ktp=$_POST['no_ktp'];
$no_hp=$_POST['no_hp'];
$alamat=$_POST['alamat'];
$status="Tidak Rental";

if(isset($_POST['simpan'])){
	mysqli_query($db,
		"UPDATE pelanggan
		SET nama_lengkap='$nama',no_ktp='$no_ktp',no_hp='$no_hp',alamat='$alamat'
		WHERE id_pelanggan='$id_pelanggan'"
	);
	header("location:../index.php?p=anggota");
}
?>

<!-- SELECT a.idanggota, a.nama, b.tglpinjam, b.tglkembali FROM tbanggota a INNER JOIN tbtransaksi b on a.idanggota = b.idanggota


SELECT a.idanggota, a.nama, b.tglpinjam, b.tglkembali FROM tbanggota a 
INNER JOIN tbtransaksi b on a.idanggota = b.idanggota
INNER JOIN tbbuku c on c.idbuku = b.idbuku -->