<div id="label-page"><h3>Input Data Bus</h3></div>
<div id="content">
	<form action="proses/bus-input-proses.php" method="post">
	<table id="tabel-input">
	
		<tr>
			<td class="label-formulir">ID Bus</td>
			<td class="isian-formulir"><input type="text"  name="id_bus" class="isian-formulir isian-formulir-border" readonly></td>
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