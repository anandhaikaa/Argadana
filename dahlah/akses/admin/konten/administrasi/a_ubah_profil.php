<form action="konten/proses/a_ubah_profil_aksi.php" method="post">
  <input type="hidden" name="tipe_edit" value="edit">
  <table id="tbl">
    <?php
    foreach ($sql_admin as $key) {
      extract($key);
      ?>
           <tr>
               <th width="19%">ID Admin</th>
               <td width="5%">:</td>
               <td><input type="hidden" name="id_admin" value="<?php echo $id_admin; ?>"><?php echo $id_admin; ?></td>
           </tr>

           <tr>
               <th width="19%">Nama Admin</th>
               <td width="5%">:</td>
               <td><input type="text" name="nama_admin" value="<?php echo $nama_admin; ?>"></td>
           </tr>

           <tr>
               <th width="19%">E-Mail Admin</th>
               <td width="5%">:</td>
               <td><input type="text" name="email_admin" value="<?php echo $email_admin; ?>"></td>
           </tr>
           
           <tr>
               <th width="19%">Password</th>
               <td width="5%">:</td>
               <td><input type="password" name="password_admin" value=""></td>
           </tr>
           <tr>
               <th width="19%">Konfirmasi Password</th>
               <td width="5%">:</td>
               <td><input type="password" name="konfirmasi_password_admin" value=""></td>
           </tr>

           <?php
         }
          ?>
   </table>
   <div class="label">
     <button class="btn-login" type="submit">SIMPAN</button>
   </div>
</form>
