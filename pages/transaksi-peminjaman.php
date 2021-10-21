<div id="label-page"><h3>Transaksi Peminjaman</h3></div>
<div id="content">
	<p id="tombol-tambah-container"><a href="index.php?p=transaksi-peminjaman-input" class="tombol">Transaksi Baru</a></p>
	<table id="tabel-tampil">
		<tr>
			<th id="label-tampil-no">No</td>
			<th>ID Transaksi</th>
			<th>ID Pelanggan</th>
			<th>Nama Lengkap</th>
			<th>ID Bus</th>
			<th>Nama Bus</th>
			<th>Tanggal Pinjam</th>
			<th id="label-opsi3">Opsi</th>
		</tr>
		<?php

		$sql="SELECT transaksi.*,pelanggan.*,bus.*
		FROM transaksi,pelanggan,bus
		WHERE transaksi.id_pelanggan=pelanggan.id_pelanggan
		AND transaksi.id_bus=bus.id_bus
		AND transaksi.tgl_kembali='0000-00-00'
		ORDER BY transaksi.id_transaksi DESC";
		
		$q_transaksi = mysqli_query($db, $sql);

		$nomor=1;
		while($r_transaksi=mysqli_fetch_array($q_transaksi)){
		?>
		<tr>
			<td><?php echo $nomor++; ?></td>
			<td><?php echo $r_transaksi['id_transaksi']; ?></td>
			<td><?php echo $r_transaksi['id_pelanggan']; ?></td>
			<td><?php echo $r_transaksi['nama_lengkap']; ?></td>
			<td><?php echo $r_transaksi['id_bus']; ?></td>
			<td><?php echo $r_transaksi['nama_bus']; ?></td>
			<td><?php echo $r_transaksi['tgl_pinjam']; ?></td>
			<td>
				<div class="tombol-opsi-container"><a href="cetak/nota-peminjaman.php?&id=<?php echo $r_transaksi['id_transaksi'];?>" target="_blank" class="tombol">Cetak Nota</a></div>
				<div class="tombol-opsi-container"><a href="proses/pengembalian-proses.php?&id=<?php echo $r_transaksi['id_transaksi'];?>" class="tombol">Pengembalian</a></div>
			</td>
		</tr>
		<?php } ?>
	</table>
</div>