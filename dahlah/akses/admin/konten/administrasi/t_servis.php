<div class="apps-content-item">
<form action="konten/proses/aksi_reservasi.php" method="post">
  <h3>Pilih Barang atau Layanan yang Anda Inginkan!</h3>

  <table id="tbl">
    <tr>
      <th colspan="2">ID Pelanggan</th>
      <th colspan="5"><input type="text" class="form-control" value="" name="id_pelanggan"></th>
    </tr>
    <tr>
      <th width="5%">Pilih</th>
      <th width="5%">No.</th>
      <th width="10%"></th>
      <th width="15%">Nama Barang atau Layanan</th>
      <th width="55%">Keterangan</th>
      <th>Harga</th>
    </tr>
    <?php
      $no = 0;
      foreach ($sql_kategori as $key) {
        extract($key);
    ?>
    <tr>
      <th colspan="6" style="text-transform: uppercase; background-color:#ddd;"><?php echo $nama_kategori; ?></th>
    </tr>
    <?php
      $query_tipe = "SELECT * FROM macam_kategori WHERE id_kategori = '$id_kategori'";
      $sql_tipe = mysqli_query($mysqli,$query_tipe);
      foreach ($sql_tipe as $key) {
        extract($key);
      $no++;
    ?>
    <tr>
      <td> <input type="checkbox" name="kode_barang_atau_layanan[]" value="<?php echo $kode_barang_atau_layanan; ?>"> </td>
      <td><?php echo $no; ?></td>
      <td><img src="../foto_produk/<?php echo $gambar; ?>" width="50px"></td>
      <td><?php echo $nama_barang_atau_layanan; ?></td>
      <td><?php echo $keterangan; ?></td>
      <td><?php echo "Rp ".$harga; ?></td>
    </tr>
    <?php }} ?>
  </table>
  <input type="submit" class="btn-login" value="Proses->">
</form>


</div>
