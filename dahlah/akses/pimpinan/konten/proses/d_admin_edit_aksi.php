<?php
include '../../../koneksi/koneksi.php';
$tipe_edit = $_POST['tipe_edit'];
$id_admin = $_POST['id_admin'];
$nama_admin = $_POST['nama_admin'];
$email_admin = $_POST['email_admin'];
$status_kerja = $_POST['status_kerja'];

if (
  !empty($id_admin) AND
  !empty($nama_admin) AND
  !empty($email_admin) AND
  !empty($tempat_lahir_admin) AND
  !empty($status_kerja)
) {
    if ($tipe_edit == 'edit') {

      $queryupdate_admin = "UPDATE admin SET
        nama_admin = '$nama_admin',
        email_admin = '$email_admin',
        status_kerja = '$status_kerja' WHERE id_admin = '$id_admin'";
      $sqlupdate_admin = $mysqli->query($queryupdate_admin);
      ?>
        <script>
          alert('Data Berhasil Disimpan!');
          window.location.href="../../index.php?p=d_admin";
        </script>
      <?php
    }
    elseif ($tipe_edit == 'tambah') {
      $queryinsert_admin = "INSERT INTO karyawan
      (
        id_admin,
        nama_admin,
        email_admin,
        password_admin,
        status_kerja
      )
      VALUES
      (
        '$id_admin',
        '$nama_admin',
        '$email_admin',
        '$status_kerja'
      )
      ";
      $sqlinsert_admin = mysqli_query($mysqli,$queryinsert_admin);
      ?>
        <script>
          alert('Data Berhasil Disimpan!');
          window.location.href="../../index.php?p=d_admin";
        </script>
      <?php
    }

}
else {
  ?>
  <script>
  alert('Data TIDAK Berhasil Disimpan!');
  window.location.href="../../index.php?p=d_admin";
  </script>
  <?php
}

?>
