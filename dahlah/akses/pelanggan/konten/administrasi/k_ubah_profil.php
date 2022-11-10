<form action="konten/proses/a_ubah_profil_aksi.php" method="post">
  <input type="hidden" name="tipe_edit" value="edit">
  <table id="tbl">
    <?php
    foreach ($sqledit_karyawan as $key) {
      extract($key);
      ?>
           <tr>
               <th width="19%">ID Karyawan</th>
               <td width="5%">:</td>
               <td><input type="hidden" name="id_karyawan" value="<?php echo $id_karyawan; ?>"><?php echo $id_karyawan; ?></td>
           </tr>

           <tr>
               <th width="19%">Nama Karyawan</th>
               <td width="5%">:</td>
               <td><input type="text" name="nama_karyawan" value="<?php echo $nama_karyawan; ?>"></td>
           </tr>

           <tr>
               <th width="19%">E-Mail Karyawan</th>
               <td width="5%">:</td>
               <td><input type="text" name="email_karyawan" value="<?php echo $email_karyawan; ?>"></td>
           </tr>

           <tr>
               <th width="19%">Password</th>
               <td width="5%">:</td>
               <td><input type="text" name="password_karyawan" value=""></td>
           </tr>
           <tr>
               <th width="19%">Konfirmasi Password</th>
               <td width="5%">:</td>
               <td><input type="text" name="konfirmasi_password_karyawan" value=""></td>
           </tr>

           <?php
         }
          ?>
   </table>
   <div class="label">
     <button class="btn-login" type="submit">SIMPAN</button>
   </div>
</form>
