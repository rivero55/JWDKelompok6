<div id="label-page"><h3>Input Transaksi Peminjaman</h3></div>
<div id="content">
	<form action="proses/transaksi-peminjaman-input-proses.php" method="post">
	<table id="tabel-input">

		<tr>
			<td class="label-formulir">ID Transaksi</td>
			<td class="isian-formulir"><input type="text" name="id_transaksi" class="isian-formulir isian-formulir-border" readonly></td>
		</tr>
		<tr>
			<td class="label-formulir">Anggota</td>
			<td class="isian-formulir">
				<select name="id_pelanggan" class="isian-formulir isian-formulir-border" required>
					<option value="" select="selected"> Pilih Data Anggota </option>
					<?php
						$q_tampil_anggota=mysqli_query($db,
							"SELECT * FROM pelanggan
							WHERE status='tidak merental'
							ORDER BY id_pelanggan"
						);
						while($r_tampil_anggota=mysqli_fetch_array($q_tampil_anggota)){
							echo"<option value=$r_tampil_anggota[id_pelanggan]>$r_tampil_anggota[id_pelanggan] | $r_tampil_anggota[nama_lengkap]</option>";
						}
					?>
				</select>
			</td>
		</tr>
		<tr>
			<td class="label-formulir">Buku</td>
			<td class="isian-formulir">
				<select name="id_bus" class="isian-formulir isian-formulir-border" required>
					<option value="" select="selected"> Pilih Data Buku </option>
					<?php
						$q_tampil_buku=mysqli_query($db,
							"SELECT * FROM bus
							WHERE status='Tersedia'
							ORDER BY id_bus"
						);
						while($r_tampil_buku=mysqli_fetch_array($q_tampil_buku)){
							echo"<option value=$r_tampil_buku[id_bus]>$r_tampil_buku[id_bus] | $r_tampil_buku[nama_bus]</option>";
						}
					?>
				</select>
			</td>
		</tr>
		<tr>
			<td class="label-formulir">Tanggal Pinjam</td>
			<td class="isian-formulir"><input type="date" name="tgl_pinjam"  class="isian-formulir isian-formulir-border warna-formulir-disabled" required></td>
		</tr>
		<tr>
			<td class="label-formulir"></td>
			<td class="isian-formulir"><input type="submit" name="simpan" value="Simpan" class="tombol"></td>
		</tr>
	</table>
	</form>
</div>