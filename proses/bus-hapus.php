<?php
include'../koneksi.php';
$id_bus=$_GET['id'];

mysqli_query($db,
	"DELETE FROM bus
	WHERE id_bus='$id_bus'"
);
header("location:../index.php?p=bus");
?>