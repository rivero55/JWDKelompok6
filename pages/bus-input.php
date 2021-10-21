<div id="label-page"><h3>Input Data Bus</h3></div>
<div id="content">
	<form action="proses/bus-input-proses.php" method="post">
	<table id="tabel-input">
	<?php
		$kode = "BUS";
		$sql_get_latest = "SELECT MAX(id_bus)
		FROM bus";
		$latest_id = mysqli_fetch_array(mysqli_query($db, $sql_get_latest))[0];
		$latest_id = (substr($latest_id, 2));
		$id_bus =$kode.str_pad($latest_id +1, 3, "0", STR_PAD_LEFT) ;
		
	?>
		<tr>
			<td class="label-formulir">ID Bus</td>
			<td class="isian-formulir"><input type="text" value="<?php echo $id_bus ?>" name="id_bus" class="isian-formulir isian-formulir-border" readonly></td>
		</tr>
		<tr>
			<td class="label-formulir">Nama Bus</td>
			<td class="isian-formulir"><input type="text" name="nama_bus" class="isian-formulir isian-formulir-border" required></td>
		</tr>
		<tr>
			<td class="label-formulir">Jenis Bus</td>
			<td class="isian-formulir">
				<select name="jenis_bus" class="isian-formulir isian-formulir-border" required>
					<option value="" select="selected">~ Pilih Jenis Bus ~</option>
					<option value="Bus Non HD / Bus Normal Deck">Bus Non HD / Bus Normal Deck</option>
					<option value="Bus High Deck (HD)">Bus High Deck (HD)</option>
					<option value="Bus Super High Deck (SHD)">Bus Super High Deck (SHD)</option>
					<option value="Bus High Deck (HDD) dengan Double Glass (DG)">Bus High Deck (HDD) dengan Double Glass (DG)</option>
					<option value="Bus Double Decker (DD) / Bus Tingkat">Bus Double Decker (DD) / Bus Tingkat</option>
				</select>
			</td>
		</tr>
		<tr>
			<td class="label-formulir">Kapasitas</td>
			<td class="isian-formulir"><input type="number" name="kapasitas" class="isian-formulir isian-formulir-border" required></td>
		</tr>
		<tr>
			<td class="label-formulir">Tahun Keluaran</td>
			<td class="isian-formulir"><input type="number" name="tahun" class="isian-formulir isian-formulir-border" required></td>
		</tr>
		<tr>
			<td class="label-formulir">Harga Rental</td>
			<td class="isian-formulir"><input type="number" name="harga_bus" class="isian-formulir isian-formulir-border" required></td>
		</tr>
		<tr>
			<td class="label-formulir"></td>
			<td class="isian-formulir"><input type="submit" name="simpan" value="Simpan" class="tombol"></td>
		</tr>
	</table>
	</form>
</div>