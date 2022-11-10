<?php
include '../../../koneksi/koneksi.php';

$id_pimpinan = $_POST['id_pimpinan'];
$nama_pimpinan = $_POST['nama_pimpinan'];
$email_pimpinan = $_POST['email_pimpinan'];
$password_pimpinan = $_POST['password_pimpinan'];
$konfirmasi_password_pimpinan = $_POST['konfirmasi_password_pimpinan'];

if (
  !empty($id_pimpinan) AND
  !empty($nama_pimpinan) AND
  !empty($email_pimpinan)
) {
    if ($password_pimpinan == $konfirmasi_password_pimpinan) {

      $queryupdate_pimpinan = "UPDATE pimpinan SET
        nama_pimpinan = '$nama_pimpinan',
        email_pimpinan = '$email_pimpinan',
        password_pimpinan = '$password_pimpinan' WHERE id_pimpinan = '$id_pimpinan'";
      $sqlupdate_pimpinan = $mysqli->query($queryupdate_pimpinan);
      ?>
        <script>
          alert('Data Berhasil Disimpan!');
          window.location.href="../../index.php?p=beranda";
        </script>
      <?php
    }
    else{
      ?>
        <script>
          alert('Mohon masukkan password dengan benar!');
          window.location.href="../../index.php?p=d_administrasi&k=a_ubah_profil";
        </script>
      <?php
    }

}
else {
  ?>
  <script>
  alert('Data TIDAK Berhasil Disimpan!');
  window.location.href="../../index.php?p=d_administrasi&k=a_ubah_profil";
  </script>
  <?php
}

?>
