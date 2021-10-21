<?php
include'../koneksi.php';
$id_pelanggan=$_GET['id'];

mysqli_query($db,
	"DELETE FROM pelanggan
	WHERE id_pelanggan='$id_pelanggan'"
);
header("location:../index.php?p=anggota");
?>