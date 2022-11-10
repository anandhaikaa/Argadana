<div class="apps-content-item">
<?php

$aksi = $_GET['aksi'];
$hak = $_SESSION['hak'];
$aksi = $_GET['aksi'];
$hak = $_SESSION['hak'];
$query = "SELECT max(id_pelanggan) as maxKode FROM pelanggan";
$hasil = $mysqli->query($query);
$data  = mysqli_fetch_array($hasil);
$kodeTrans = $data['maxKode'];
$noUrut = (int) substr($kodeTrans, 2, 6);
$noUrut++;
$char = "pl";
$id_pl = $char . sprintf("%06s", $noUrut);

if ($aksi == 'detail') {
  ?>
  <table id="tbl">
    <?php
    foreach ($sqledit_pelanggan as $key) {
      extract($key);
      ?>
           <tr>
               <th width="19%">ID Pelanggan</th>
               <td width="5%">:</td>
               <td><?php echo $id_pelanggan; ?></td>
           </tr>

           <tr>
               <th width="19%">Nama Pelanggan</th>
               <td width="5%">:</td>
               <td><?php echo $nama_pelanggan; ?></td>
           </tr>

           <tr>
               <th width="19%">E-Mail Pelanggan</th>
               <td width="5%">:</td>
               <td><?php echo $email_pelanggan; ?></td>
           </tr>

           <tr>
               <th width="19%">Telepon Pelanggan</th>
               <td width="5%">:</td>
               <td><?php echo $telepon; ?></td>
           </tr>
           <?php
         }
          ?>
   </table>
   <a href="index.php?p=d_pelanggan" class="btn btn-default"><i class="fa fa-fw fa-arrow-circle-left" style="color:#000"></i>Kembali</a>
  <?php
}
elseif ($aksi == 'edit') {
  ?>
    <form action="konten/proses/d_pelanggan_edit_aksi.php" method="post">
      <input type="hidden" name="tipe_edit" value="edit">
      <table id="tbl">
        <?php
        foreach ($sqledit_pelanggan as $key) {
          extract($key);
          ?>
               <tr>
                   <th width="19%">ID Pelanggan</th>
                   <td width="5%">:</td>
                   <td><input type="hidden" name="id_pelanggan" value="<?php echo $id_pelanggan; ?>"><?php echo $id_pelanggan; ?></td>
               </tr>

               <tr>
                   <th width="19%">Nama Pelanggan</th>
                   <td width="5%">:</td>
                   <td><input type="text" name="nama_pelanggan" value="<?php echo $nama_pelanggan; ?>"></td>
               </tr>

               <tr>
                   <th width="19%">E-Mail Pelanggan</th>
                   <td width="5%">:</td>
                   <td><input type="text" name="email_pelanggan" value="<?php echo $email_pelanggan; ?>"></td>
               </tr>

               <tr>
                   <th width="19%">Telepon Pelanggan</th>
                   <td width="5%">:</td>
                   <td><input type="number" name="telepon" value="<?php echo $telepon; ?>"></td>
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
    <form action="konten/proses/d_pelanggan_edit_aksi.php" method="post">
      <input type="hidden" name="tipe_edit" value="tambah">
      <table id="tbl">

               <tr>
                   <th width="19%">ID Pelanggan</th>
                   <td width="5%">:</td>
                   <td><input type="text" name="id_pelanggan" value="<?php echo $id_pl ?>" readonly></td>
               </tr>

               <tr>
                   <th width="19%">Nama Pelanggan</th>
                   <td width="5%">:</td>
                   <td><input type="text" name="nama_pelanggan" value=""></td>
               </tr>

               <tr>
                   <th width="19%">E-Mail Pelanggan</th>
                   <td width="5%">:</td>
                   <td><input type="text" name="email_pelanggan" value=""></td>
               </tr>

                <tr>
                   <th width="19%">Telepon Pelanggan</th>
                   <td width="5%">:</td>
                   <td><input type="number" name="telepon" value=""></td>
               </tr>


       </table>
       <div class="label">
         <button class="btn-login" type="submit">SIMPAN</button>
       </div>
    </form>
  <?php
}
elseif ($aksi == 'hapus') {
  $sqlhapus = "DELETE FROM pelanggan WHERE id_pelanggan='$id'";
  if ($mysqli->query($sqlhapus)) {
    ?>
      <script>
      alert('Data Berhasil Dihapus!');
      window.location.href="index.php?p=d_pelanggan";
      </script>
    <?php
  }
  else {
    ?>
      <script>
      alert('Data TIDAK Berhasil Dihapus!');
      window.location.href="index.php?p=d_pelanggan";
      </script>
    <?php
  }
}



 ?>
</div>
