<div id="label-page"><h3>Tabel Pelanggan</h3></div>
<div id="content">
	<p id="tombol-tambah-container"><a href="index.php?p=anggota-input" class="tombol">Tambah Anggota</a></p>
	<table id="tabel-tampil">
		<tr>
			<th id="label-tampil-no">No</td>
			<th>ID Pelanggan</th>
			<th>Nama Lengkap</th>
			<th>No KTP</th>
			<th>No HP</th>
			<th>Alamat</th>
			<th>Status</th>
			<th id="label-opsi">Opsi</th>
		</tr>
		

		
		<?php
		$sql="SELECT * FROM pelanggan ORDER BY id_pelanggan DESC";
		$q_tampil_anggota = mysqli_query($db, $sql);
		$nomor=1;
		while($r_tampil_anggota=mysqli_fetch_array($q_tampil_anggota)){
			
		?>
		<tr>
		<td><?php echo $nomor++; ?></td>
			<td><?php echo $r_tampil_anggota['id_pelanggan']; ?></td>
			<td><?php echo $r_tampil_anggota['nama_lengkap']; ?></td>
			<td><?php echo $r_tampil_anggota['no_ktp']; ?></td>
			<td><?php echo $r_tampil_anggota['no_hp']; ?></td>
			<td><?php echo $r_tampil_anggota['alamat']; ?></td>
			<td><?php echo $r_tampil_anggota['status']; ?></td>
			<td>

				<div class="tombol-opsi-container"><a id="edit" href="index.php?p=anggota-edit&id=<?php echo $r_tampil_anggota['id_pelanggan'];?>" class="tombol">Edit</a></div>
				<div class="tombol-opsi-container"><a id="hapus" href="proses/anggota-hapus.php?id=<?php echo $r_tampil_anggota['id_pelanggan']; ?>" class="tombol">Hapus</a></div>
			</td>
		</tr>
		<?php } ?>
	</table>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
    $(document).on("click","a#hapus" , function() {
		if (confirm('Are you sure ?')) ;
    });</script>