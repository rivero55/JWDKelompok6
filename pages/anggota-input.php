<div id="label-page">
    <h3>Input Data Anggota</h3>
</div>
<div id="content">
    <form action="proses/anggota-input-proses.php" method="post">
        <table id="tabel-input">
            <tr>
                <td class="label-formulir">Nama Lengkap</td>
                <td class="isian-formulir"><input type="text" name="nama_lengkap" class="isian-formulir isian-formulir-border"
                        required></td>
            </tr>
            <tr>
                <td class="label-formulir">No KTP</td>
                
                <td class="isian-formulir"><input type="number" name="no_ktp" class="isian-formulir isian-formulir-border"
                        required></td>
                
            </tr>
            <tr>
                <td class="label-formulir">No HP</td>
                
                <td class="isian-formulir"><input type="number" name="no_hp" class="isian-formulir isian-formulir-border"
                        required></td>
                
            </tr>

            <tr>
                <td class="label-formulir">Alamat</td>
                <td class="isian-formulir"><textarea rows="2" cols="40" name="alamat"
                        class="isian-formulir isian-formulir-border" required></textarea></td>
            </tr>
            <tr>
                <td class="label-formulir"></td>
                <td class="isian-formulir"><input type="submit" name="simpan" value="Simpan" class="tombol"></td>
            </tr>
        </table>
    </form>



</div>