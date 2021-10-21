<?php
include'../koneksi.php';
// $id_anggota=$_POST['id_pelanggan'];
$nama_lengkap=$_POST['nama_lengkap'];
$no_ktp=$_POST['no_ktp'];
$no_hp=$_POST['no_hp'];
$alamat=$_POST['alamat'];
$status="Tidak Rental";



if(isset($_POST['simpan'])){

	$sql = 
	"INSERT INTO pelanggan
		VALUES( NULL,'$nama_lengkap','$no_ktp','$no_hp','$alamat','$status')";
	$query = mysqli_query($db, $sql);

	header("location:../index.php?p=anggota");
}
?>