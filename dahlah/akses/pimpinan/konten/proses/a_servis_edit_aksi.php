<?php
include '../../../koneksi/koneksi.php';
$tipe_edit = $_POST['tipe_edit'];
$kode_barang_atau_layanan = $_POST['kode_barang_atau_layanan'];
$nama_barang_atau_layanan = $_POST['nama_barang_atau_layanan'];
$keterangan = $_POST['keterangan'];
$harga = $_POST['harga'];
$id_kategori = $_POST['id_kategori'];



if (
  !empty($kode_barang_atau_layanan) AND
  (!empty($nama_barang_atau_layanan)) AND
  (!empty($keterangan)) AND
  (!empty($harga)) AND
  (!empty($id_kategori))
) {
  $ekstensi_diperbolehkan	= array('png','jpg');
  $nama = $_FILES['file_gambar']['name'];
  $x = explode('.', $nama);
  $ekstensi = strtolower(end($x));
  $ukuran	= $_FILES['file_gambar']['size'];
  $file_tmp = $_FILES['file_gambar']['tmp_name'];
  if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
    if($ukuran < 1044070){
      move_uploaded_file($file_tmp, '../../../foto_produk/'.$nama);
      if ($tipe_edit == 'edit') {

        $queryupdate_servis = "UPDATE macam_kategori SET
          kode_barang_atau_layanan = '$kode_barang_atau_layanan',
          nama_barang_atau_layanan = '$nama_barang_atau_layanan',
          gambar = '$nama',
          keterangan = '$keterangan',
          harga = '$harga',
          id_kategori = '$id_kategori' WHERE kode_barang_atau_layanan = '$kode_barang_atau_layanan'";
        $sqlupdate_servis = $mysqli->query($queryupdate_servis);
      }
      elseif ($tipe_edit == 'tambah') {
        $queryupdate_servis = "INSERT INTO macam_kategori
        (
          kode_barang_atau_layanan,
          nama_barang_atau_layanan,
          gambar,
          keterangan,
          harga,
          id_kategori
        )
        VALUES
        (
          '$kode_barang_atau_layanan',
          '$nama_barang_atau_layanan',
          '$nama',
          '$keterangan',
          '$harga',
          '$id_kategori'
        )
        ";
        $sqlupdate_servis = mysqli_query($mysqli,$queryupdate_servis);
      }


      if($sqlupdate_servis){
        ?>
          <script>
            alert('Data Berhasil Disimpan!');
            window.location.href="../../index.php?p=d_administrasi&k=a_servis";
          </script>
        <?php
      }else{
        echo 'GAGAL MENGUPLOAD GAMBAR';
      }
    }else{
      echo 'UKURAN FILE TERLALU BESAR';
    }
  }else{
    echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
  }




}
else {
  ?>
  <script>
  alert('Data TIDAK Berhasil Disimpan!');
  window.location.href="../../index.php?p=p=d_administrasi&k=a_servis";
  </script>
  <?php
}

?>
