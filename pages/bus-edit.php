<?php
	$id_bus=$_GET['id'];
	$q_tampil_bus=mysqli_query($db,"SELECT * FROM bus WHERE id_bus='$id_bus'");
	$r_tampil_bus=mysqli_fetch_array($q_tampil_bus);

?>
<div id="label-page"><h3>Edit Data Bus</h3></div>
<div id="content">
	<form action="proses/bus-edit-proses.php" method="post">
	<table id="tabel-input">
		<tr>
			<td class="label-formulir">ID Bus</td>
			<td class="isian-formulir"><input type="text" name="id_bus" value="<?php echo $r_tampil_bus['id_bus']; ?>" readonly="readonly" class="isian-formulir isian-formulir-border warna-formulir-disabled"></td>
		</tr>
		<tr>
			<td class="label-formulir">Nama Bus</td>
			<td class="isian-formulir"><input type="text" name="nama_bus" value="<?php echo $r_tampil_bus['nama_bus']; ?>" class="isian-formulir isian-formulir-border" required></td>
		</tr>
		<tr>
			<td class="label-formulir">Jenis Bus</td>
			<td class="isian-formulir"><input type="text" name="jenis_bus" value="<?php echo $r_tampil_bus['jenis_bus']; ?>" class="isian-formulir isian-formulir-border" required></td>
		</tr>
		<tr>
			<td class="label-formulir">Kapasitas</td>
			<td class="isian-formulir"><input type="text" name="kapasitas" value="<?php echo $r_tampil_bus['kapasitas']; ?>" class="isian-formulir isian-formulir-border" required></td>
		</tr>
		<tr>
			<td class="label-formulir">Tahun Keluaran</td>
			<td class="isian-formulir"><input type="text" name="tahun" value="<?php echo $r_tampil_bus['tahun']; ?>" class="isian-formulir isian-formulir-border" required></td>
		</tr>
		<tr>
			<td class="label-formulir">Harga Rental</td>
			<td class="isian-formulir"><input type="number" name="harga_bus" value="<?php echo $r_tampil_bus['harga_bus']; ?>" class="isian-formulir isian-formulir-border" required></td>
		</tr>
		<tr>
			<td class="label-formulir"></td>
			<td class="isian-formulir"><input type="submit" name="simpan" value="Simpan" id="tombol-simpan"></td>
		</tr>
	</table>
	</form>
</div>