<?php
	$id_pelanggan=$_GET['id'];
	$q_tampil_anggota=mysqli_query($db,"SELECT * FROM pelanggan WHERE id_pelanggan='$id_pelanggan'");
	$r_tampil_anggota=mysqli_fetch_array($q_tampil_anggota);
?>
<div id="label-page"><h3>Edit Data Anggota</h3></div>
<div id="content">
	<form action="proses/anggota-edit-proses.php" method="POST">

	<table id="tabel-input">
		<tr>
			<td class="label-formulir">ID Anggota</td>
			<td class="isian-formulir"><input type="text" name="id_pelanggan" value="<?php echo $r_tampil_anggota['id_pelanggan']; ?>" readonly="readonly" class="isian-formulir isian-formulir-border warna-formulir-disabled"></td>
		</tr>
		<tr>
			<td class="label-formulir">Nama Lengkap</td>
			<td class="isian-formulir"><input type="text" name="nama_lengkap" value="<?php echo $r_tampil_anggota['nama_lengkap']; ?>" class="isian-formulir isian-formulir-border" ></td>
		</tr>
		<tr>
			<td class="label-formulir">No Ktp</td>
			<td class="isian-formulir"><input type="number" name="no_ktp" value="<?php echo $r_tampil_anggota['no_ktp']; ?>" class="isian-formulir isian-formulir-border" ></td>
		</tr>
		<tr>
			<td class="label-formulir">Nama Hp</td>
			<td class="isian-formulir"><input type="number" name="no_hp" value="<?php echo $r_tampil_anggota['no_hp']; ?>" class="isian-formulir isian-formulir-border" ></td>
		</tr>

		<tr>
			<td class="label-formulir">Alamat</td>
			<td class="isian-formulir"><textarea rows="2" cols="40" name="alamat" class="isian-formulir isian-formulir-border"><?php echo $r_tampil_anggota['alamat']; ?></textarea></td>
		</tr>
		<tr>
			<td class="label-formulir"></td>
			<td class="isian-formulir"><input type="submit" name="simpan" value="Simpan" id="tombol-simpan"></td>
		</tr>
	</table>
	</form>
</div>