<div id="label-page"><h3>Tampil Data Bus</h3></div>
<div id="content">
	<p id="tombol-tambah-container"><a href="index.php?p=bus-input" class="tombol">Tambah Data Bus</a></p>
	<table id="tabel-tampil">
		<tr>
			<th id="label-tampil-no">No</td>
			<th>ID Bus</th>
			<th>Nama Bus</th>
			<th>Jenis Bus</th>
			<th>Kapasitas</th>
			<th>Tahun Keluaran</th>
			<th>Harga Rental</th>
			<th id="label-opsi2">Opsi</th>
		</tr>
		<?php

		$sql="SELECT * FROM bus ORDER BY id_bus DESC";
		$q_tampil_bus = mysqli_query($db, $sql);

		$nomor=1;
		while($r_tampil_bus=mysqli_fetch_array($q_tampil_bus)){
		?>
		<tr>
			<td><?php echo $nomor++; ?></td>
			<td><?php echo $r_tampil_bus['id_bus']; ?></td>
			<td><?php echo $r_tampil_bus['nama_bus']; ?></td>
			<td><?php echo $r_tampil_bus['jenis_bus']; ?></td>
			<td><?php echo $r_tampil_bus['kapasitas']; ?></td>
			<td><?php echo $r_tampil_bus['tahun']; ?></td>
			<td><?php echo $r_tampil_bus['harga_bus']; ?></td>
			<td>
				<div class="tombol-opsi-container"><a href="index.php?p=bus-edit&id=<?php echo $r_tampil_bus['id_bus'];?>" class="tombol">Edit</a></div>
				<div class="tombol-opsi-container"><a id="hapus" href="proses/bus-hapus.php?id=<?php echo $r_tampil_bus['id_bus']; ?>" class="tombol">Hapus</a></div>
			</td>
		</tr>
		<?php } ?>
	</table>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
    $(document).on("click","#hapus" , function() {
		if (confirm('Are you sure ?')) ;
    });</script>