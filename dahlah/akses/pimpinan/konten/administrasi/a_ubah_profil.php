<form action="konten/proses/a_ubah_profil_aksi.php" method="post">
  <input type="hidden" name="tipe_edit" value="edit">
  <table id="tbl">
    <?php
    foreach ($sql_pimpinan as $key) {
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
           
           <tr>
               <th width="19%">Password</th>
               <td width="5%">:</td>
               <td><input type="password" name="password_pimpinan" value=""></td>
           </tr>
           <tr>
               <th width="19%">Konfirmasi Password</th>
               <td width="5%">:</td>
               <td><input type="password" name="konfirmasi_password_pimpinan" value=""></td>
           </tr>

           <?php
         }
          ?>
   </table>
   <div class="label">
     <button class="btn-login" type="submit">SIMPAN</button>
   </div>
</form>
