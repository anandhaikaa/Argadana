<div class="apps-content-item">
<form action="proses/aksi_reservasi.php" method="post">
<table id="table-hover">
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
  foreach ($sql_servis as $key) {
    extract($key);
  $no++;
  ?>
  <tr>
    <td> <input type="checkbox" name="kode_barang_atau_layanan" value="<?php echo $kode_barang_atau_layanan; ?>"> </td>
    <td><?php echo $no; ?></td>
    <td><img src="foto_produk/<?php echo $gambar; ?>" width="50px"></td>
    <td><?php echo $nama; ?></td>
    <td><?php echo $keterangan; ?></td>
    <td><?php echo "Rp ".$harga; ?></td>
  </tr>
<?php } ?>
</table>
</form>


</div>
