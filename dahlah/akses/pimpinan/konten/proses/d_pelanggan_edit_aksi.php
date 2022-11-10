<?php
include '../../../koneksi/koneksi.php';
$tipe_edit = $_POST['tipe_edit'];
$id_pelanggan = $_POST['id_pelanggan'];
$nama_pelanggan = $_POST['nama_pelanggan'];
$email_pelanggan = $_POST['email_pelanggan'];


if (
  !empty($id_pelanggan) AND
  (!empty($nama_pelanggan)) AND
  (!empty($email_pelanggan))
) {
    if ($tipe_edit == 'edit') {

      $queryupdate_pelanggan = "UPDATE pelanggan SET
        nama_pelanggan = '$nama_pelanggan',
        email_pelanggan = '$email_pelanggan',
         WHERE id_pelanggan = '$id_pelanggan'";
      $sqlupdate_pelanggan = $mysqli->query($queryupdate_pelanggan);
      ?>
        <script>
          alert('Data Berhasil Disimpan!');
          window.location.href="../../index.php?p=d_pelanggan";
        </script>
      <?php
    }
    elseif ($tipe_edit == 'tambah') {
      $queryinsert_pelanggan = "INSERT INTO pelanggan
      (
        id_pelanggan,
        nama_pelanggan,
        email_pelanggan
      )
      VALUES
      (
        '$id_pelanggan',
        '$nama_pelanggan',
        '$email_pelanggan'
      )
      ";
      $sqlinsert_pelanggan = mysqli_query($mysqli,$queryinsert_pelanggan);
      ?>
        <script>
          alert('Data Berhasil Disimpan!');
          window.location.href="../../index.php?p=d_pelanggan";
        </script>
      <?php
    }

}
else {
  ?>
  <script>
  alert('Data TIDAK Berhasil Disimpan!');
  window.location.href="../../index.php?p=d_pelanggan";
  </script>
  <?php
}

?>
