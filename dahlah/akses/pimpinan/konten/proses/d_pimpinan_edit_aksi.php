<?php
include '../../../koneksi/koneksi.php';
$tipe_edit = $_POST['tipe_edit'];
$id_pimpinan = $_POST['id_pimpinan'];
$nama_pimpinan = $_POST['nama_pimpinan'];
$email_pimpinan = $_POST['email_pimpinan'];

if (
  !empty($id_pimpinan) AND
  !empty($nama_pimpinan) AND
  !empty($email_pimpinan)
) {
    if ($tipe_edit == 'edit') {

      $queryupdate_pimpinan = "UPDATE pimpinan SET
        nama_pimpinan = '$nama_pimpinan',
        email_pimpinan = '$email_pimpinan'
         WHERE id_pimpinan = '$id_pimpinan'";
      $sqlupdate_pimpinan = $mysqli->query($queryupdate_pimpinan);
      ?>
        <script>
          alert('Data Berhasil Disimpan!');
          window.location.href="../../index.php?p=d_pimpinan";
        </script>
      <?php
    }
    elseif ($tipe_edit == 'tambah') {
      $queryinsert_pimpinan = "INSERT INTO pimpinan
      (
        id_pimpinan,
        nama_pimpinan,
        email_pimpinan
      )
      VALUES
      (
        '$id_pimpinan',
        '$nama_pimpinan',
        '$email_pimpinan'
      )
      ";
      $sqlinsert_pimpinan = mysqli_query($mysqli,$queryinsert_pimpinan);
      ?>
        <script>
          alert('Data Berhasil Disimpan!');
          window.location.href="../../index.php?p=d_pimpinan";
        </script>
      <?php
    }

}
else {
  ?>
  <script>
  alert('Data TIDAK Berhasil Disimpan!');
  window.location.href="../../index.php?p=d_pimpinan";
  </script>
  <?php
}

?>
