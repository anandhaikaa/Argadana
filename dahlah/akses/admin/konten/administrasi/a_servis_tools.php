<div class="apps-content-item">
<?php

$aksi = $_GET['aksi'];
$hak = $_SESSION['hak'];
$query = "SELECT max(kode_barang_atau_layanan) as maxKode FROM macam_kategori";
$hasil = $mysqli->query($query);
$data  = mysqli_fetch_array($hasil);
$kodeTrans = $data['maxKode'];
$noUrut = (int) substr($kodeTrans, 3, 4);
$noUrut++;
$char = "PRD, SVR";
$id_sv = $char . sprintf("%04s", $noUrut);

if ($aksi == 'detail') {
  ?>
  <table id="tbl">
    <?php
    foreach ($sqledit_servis as $key) {
      extract($key);
      ?>
           <tr>
               <th width="19%">Kode Barang atau Layanan</th>
               <td width="5%">:</td>
               <td><?php echo $kode_barang_atau_layanan; ?></td>
           </tr>

           <tr>
               <th width="19%">Nama Barang atau Layanan</th>
               <td width="5%">:</td>
               <td><?php echo $nama_barang_atau_layanan; ?></td>
           </tr>

           <tr>
               <th width="19%">Keterangan</th>
               <td width="5%">:</td>
               <td><?php echo $keterangan; ?></td>
           </tr>

           <tr>
               <th width="19%">Gambar</th>
               <td width="10%">:</td>
               <td><img src="../foto_produk/<?php echo $gambar; ?>" width=50%></td>
           </tr>

           <tr>
               <th width="19%">Harga</th>
               <td width="5%">:</td>
               <td><?php echo $harga; ?></td>
           </tr>

           <tr>
               <th width="19%">Kategori</th>
               <td width="5%">:</td>
               <td><?php echo $id_kategori; ?></td>
           </tr>

           <?php
         }
          ?>
   </table>
   <a href="index.php?p=d_administrasi&k=a_servis" class="btn btn-default"><i class="fa fa-fw fa-arrow-circle-left" style="color:#000"></i>Kembali</a>
  <?php
}
elseif ($aksi == 'edit') {
  ?>
    <form action="konten/proses/a_servis_edit_aksi.php" method="post" enctype="multipart/form-data">
      <input type="hidden" name="tipe_edit" value="edit">
      <a href="index.php?p=d_administrasi&k=a_servis" class="btn btn-default"><i class="fa fa-fw fa-arrow-circle-left" style="color:#000"></i>Kembali</a><hr>
      <table id="tbl">
        <?php
        foreach ($sqledit_servis as $key) {
          extract($key);
          ?>
               <tr>
                   <th width="19%">Kode Barang atau Layanan</th>
                   <td width="5%">:</td>
                   <td><input type="hidden" name="kode_barang_atau_layanan" value="<?php echo $kode_barang_atau_layanan; ?>"><?php echo $kode_barang_atau_layanan; ?></td>
               </tr>

               <tr>
                   <th width="19%">Nama Barang atau Layanan</th>
                   <td width="5%">:</td>
                   <td><input type="text" name="nama_barang_atau_layanan" value="<?php echo $nama_barang_atau_layanan; ?>"></td>
               </tr>

               <tr>
                   <th width="19%">Keterangan</th>
                   <td width="5%">:</td>
                   <td><input type="text" name="keterangan" value="<?php echo $keterangan; ?>"></td>
               </tr>

               <tr>
                   <th width="19%">Gambar</th>
                   <td width="10%">:</td>
                   <td><input type="file" name="file_gambar"></td>
               </tr>

               <tr>
                   <th width="19%">Harga</th>
                   <td width="5%">:</td>
                   <td>Rp <input type="text" name="harga" value="<?php echo $harga; ?>"></td>
               </tr>

               <tr>
                   <th width="19%">Kategori</th>
                   <td width="5%">:</td>
                   <td><input type="text" name="id_kategori" value="<?php echo $id_kategori; ?>"></td>
               </tr>

               <?php
             }
              ?>
       </table>
       <div class="label">
         <button class="btn-login" type="submit">SIMPAN</button>
       </div>
    </form>
  <?php
}
elseif ($aksi == 'tambah') {
  ?>
    <form action="konten/proses/a_servis_edit_aksi.php" method="post" enctype="multipart/form-data">
      <input type="hidden" name="tipe_edit" value="tambah">
      <table id="tbl">

        <tr>
            <th width="19%">Kode Barang atau Layanan</th>
            <td width="5%">:</td>
            <td><input type="text" name="kode_barang_atau_layanan" value="<?php echo $id_sv; ?>" readonly></td>
        </tr>

        <tr>
            <th width="19%">Nama Barang atau Layanan</th>
            <td width="5%">:</td>
            <td><input type="text" name="nama_barang_atau_layanan" value=""></td>
        </tr>

        <tr>
            <th width="19%">Keterangan</th>
            <td width="5%">:</td>
            <td><input type="text" name="keterangan" value=""></td>
        </tr>

        <tr>
            <th width="19%">Gambar</th>
            <td width="10%">:</td>
            <td><input type="file" name="file_gambar"></td>
        </tr>

        <tr>
            <th width="19%">Harga</th>
            <td width="5%">:</td>
            <td><input type="text" name="harga" value=""></td>
        </tr>

        <tr>
            <th width="19%">Kategori</th>
            <td width="5%">:</td>
            <td><input type="text" name="id_kategori" value=""></td>
        </tr>


       </table>
       <div class="label">
         <button class="btn-login" type="submit">SIMPAN</button>
       </div>
    </form>
  <?php
}
elseif ($aksi == 'hapus') {
  $sqlhapus = "DELETE FROM macam_kategori WHERE kode_barang_atau_layanan='$ids'";
  if ($mysqli->query($sqlhapus)) {
    ?>
      <script>
      alert('Data Berhasil Dihapus!');
      window.location.href="index.php?p=d_administrasi&k=a_servis";
      </script>
    <?php
  }
  else {
    ?>
      <script>
      alert('Data TIDAK Berhasil Dihapus!');
      window.location.href="index.php?p=d_administrasi&k=a_servis";
      </script>
    <?php
  }
}



 ?>
</div>
