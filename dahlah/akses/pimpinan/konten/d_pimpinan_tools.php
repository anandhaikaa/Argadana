<div class="apps-content-item">
<?php

$aksi = $_GET['aksi'];
$hak = $_SESSION['hak'];


if ($aksi == 'detail') {
  ?>
  <table id="tbl">
    <?php
    foreach ($sqledit_pimpinan as $key) {
      extract($key);
      ?>
           <tr>
               <th width="19%">ID Pimpinan</th>
               <td width="5%">:</td>
               <td><?php echo $id_pimpinan; ?></td>
           </tr>

           <tr>
               <th width="19%">Nama Pimpinan</th>
               <td width="5%">:</td>
               <td><?php echo $nama_pimpinan; ?></td>
           </tr>

           <tr>
               <th width="19%">E-Mail Pimpinan</th>
               <td width="5%">:</td>
               <td><?php echo $email_pimpinan; ?></td>
           </tr>

           <?php
         }
          ?>
   </table>
   <a href="index.php?p=d_pimpinan" class="btn btn-default"><i class="fa fa-fw fa-arrow-circle-left" style="color:#000"></i>Kembali</a>
  <?php
}
elseif ($aksi == 'edit') {
  ?>
    <form action="konten/proses/d_pimpinan_edit_aksi.php" method="post">
      <input type="hidden" name="tipe_edit" value="edit">
      <table id="tbl">
        <?php
        foreach ($sqledit_pimpinan as $key) {
          extract($key);
          ?>
               <tr>
                   <th width="19%">ID Pimpinan</th>
                   <td width="5%">:</td>
                   <td><input type="hidden" name="id_pimpinan" value="<?php echo $id_pimpinan; ?>"><?php echo $id_pimpinan; ?></td>
               </tr>

               <tr>
                   <th width="19%">Nama Pimpinan</th>
                   <td width="5%">:</td>
                   <td><input type="text" name="nama_pimpinan" value="<?php echo $nama_pimpinan; ?>"></td>
               </tr>

               <tr>
                   <th width="19%">E-Mail Pimpinan</th>
                   <td width="5%">:</td>
                   <td><input type="text" name="email_pimpinan" value="<?php echo $email_pimpinan; ?>"></td>
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
    <form action="konten/proses/d_pimpinan_edit_aksi.php" method="post">
      <input type="hidden" name="tipe_edit" value="tambah">
      <table id="tbl">

               <tr>
                   <th width="19%">ID Pimpinan</th>
                   <td width="5%">:</td>
                   <td><input type="text" name="id_pimpinan" value=""></td>
               </tr>

               <tr>
                   <th width="19%">Nama Pimpinan</th>
                   <td width="5%">:</td>
                   <td><input type="text" name="nama_pimpinan" value=""></td>
               </tr>

               <tr>
                   <th width="19%">E-Mail Pimpinan</th>
                   <td width="5%">:</td>
                   <td><input type="text" name="email_pimpinan" value=""></td>
               </tr>

       </table>
       <div class="label">
         <button class="btn-login" type="submit">SIMPAN</button>
       </div>
    </form>
  <?php
}
elseif ($aksi == 'hapus') {
  $sqlhapus = "DELETE FROM pimpinan WHERE id_pimpinan='$id'";
  if ($mysqli->query($sqlhapus)) {
    ?>
      <script>
      alert('Data Berhasil Dihapus!');
      window.location.href="index.php?p=d_pimpinan";
      </script>
    <?php
  }
  else {
    ?>
      <script>
      alert('Data TIDAK Berhasil Dihapus!');
      window.location.href="index.php?p=d_pimpinan";
      </script>
    <?php
  }
}



 ?>
</div>
