
<!-- saved from url=(0061)http://student.nusamandiri.ac.id/cetak_khs.aspx?id=1502098062 -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
  <?php
  session_start();
  include ('../../../koneksi/koneksi.php');

  if (!empty($_GET['data'])) {
    $data = $_GET['data'];
    if ($data == "transaksi") {
      if (!empty($_GET['periode-bl'])) {
        $periode = $_GET['periode-bl'];
      }
      else {
        $periode = "-";
      }
      $sqltrans = "SELECT * FROM transaksi WHERE tanggal_transaksi like '%$periode%'";
      $querytrans = $mysqli->query($sqltrans);
      $judul = 'Data Laporan Transaksi Periode Bulan '.$periode.' Tahun '.date("Y");
      //              $th = array('No','Kode Transaksi','Tanggal','ID Pel.','ID Pel.');
    }
    elseif ($data == "pelanggan") {
      $sqldetail = "SELECT * FROM pelanggan";
      $querydetail = $mysqli->query($sqldetail);
      $judul = 'Data Laporan Pelanggan';
      $th = array('No','ID Pelanggan','Nama Pelanggan','E-Mail','Telepon');
    }
    elseif ($data == "karyawan") {
      $sqldetail = "SELECT * FROM admin";
      $querydetail = $mysqli->query($sqldetail);
      $judul = 'Data Laporan Karyawan';
      $th = array('No','ID Karyawan','Nama Karyawan','E-Mail','Status Kerja');
    }
  }

  //"UPDATE guru set nama_guru = ";
  ?>
<title>CETAK LAPORAN</title>
</head>
<body>

  <link rel="stylesheet" href="style.css" type="text/css"><p>
</p><div>
 <!-- Memulai Aplikasi Dari Sini -->
<div>
<div id="aplikasicetak">
  <div >
  <table  border="0">
    <tbody style="text-align:right">
      <tr>
        <td rowspan="3" width="10%">
          <img src="../../img/WhatsApp Image 2022-01-21 at 15.08.51.jpeg" width="100%" style="border-radius:50%">
        </td>
        <td>
          <p>Jalan K.H. Ahmad Dahlan Ruko No.6</p>
        </td>
      </tr>
      <tr>
        <td><p>Kepanjen, Kec. Kepanjen, Kab. Malang</p>
        </td>
      </tr>
      <tr>
        <td><p>Telp. 087701533900</p>
        </td>
      </tr>
    </tbody>
  </table>

  </div>
		<div class="ahead"><hr><?php echo $judul; ?></hr></div>
    <hr>
    <?php
    if ($data == "transaksi") {
      foreach ($querytrans as $key) {
        extract($key);
        ?>
    <table cellspacing="0" cellpadding="0" width=100% id="tbl">
      <thead>
      <tr>
        <td width=25%>Kode Transaksi</td>
        <td width=25%>:<?php echo $kode_transaksi; ?></td>
        <td width=25%>Tanggal Transaksi</td>
        <td width=25%>:<?php echo $tanggal_transaksi; ?></td>
      </tr>
      <tr>
        <td>ID Pelanggan</td>
        <td>:<?php echo $id_pelanggan; ?></td>
        <td>Waktu</td>
        <td>:<?php echo $waktu_input_transaksi; ?></td>
      </tr>
      <tr>
        <td>Status</td>
        <td>:<?php echo $status; ?></td>
      </tr>
      </thead>
    </table>
    <table cellspacing="0" cellpadding="0" width=100% id="tbl">
        <tr>
          <th width=25%>Kode Barang atau Layanan</th>
          <th width=25%>Tanggal Pesan</th>
          <th width=25%>Hari</th>
          <th width=25%>Waktu</th>
        </tr>
        <?php
          $sqldetail = "SELECT * FROM transaksi_detail WHERE kode_transaksi = '$kode_transaksi' ";
          $querydetail = $mysqli->query($sqldetail);
          foreach ($querydetail as $td) {


         ?>
        <tr>
          <td><?php echo $td['kode_barang_atau_layanan'];?></td>
          <td><?php echo $td['tanggal_pemesanan'];?></td>
          <td><?php echo $td['hari_pemesanan'];?></td>
          <td><?php echo $td['waktu_pemesanan'];?></td>
        </tr>
        <?php } ?>

    </table>
    <hr>
    <?php } ?>
      <table width=100% style="margin-left:5%;">
        <tr>
          <td width=70%></td>
          <td width=30%>Mengetahui</td>
        </tr>
        <tr>
          <td><br><br><br></td>
          <td><br></td>
        </tr>
        <tr>
          <td></td>
          <td>Direktur</td>
        </tr>
      </table>
<?php }
elseif ($data == "pelanggan") { ?>
<table cellspacing="0" cellpadding="0" width=100% id="tbl">
    <tr>
      <?php foreach ($th as $value) {
        echo "<th>".$value."</th>";
      } ?>
    </tr>
  <?php
  $no = 0;
    foreach ($querydetail as $key) {
      extract($key);
      $no++;
     ?>
    <tr>
      <td><?php echo $no;?></td>
      <td><?php echo $id_pelanggan;?></td>
      <td><?php echo $nama_pelanggan;?></td>
      <td><?php echo $email_pelanggan;?></td>
      <td><?php echo $telepon;?></td>
    </tr>
    <?php } ?>

</table>
<hr>
  <table width=100% style="margin-left:5%;">
    <tr>
      <td width=70%></td>
      <td width=30%>Mengetahui</td>
    </tr>
    <tr>
      <td><br><br><br></td>
      <td><br></td>
    </tr>
    <tr>
      <td></td>
      <td>Direktur</td>
    </tr>
  </table>
<?php
}
elseif ($data == "karyawan") { ?>
<table cellspacing="0" cellpadding="0" width=100% id="tbl">
    <tr>
      <?php foreach ($th as $value) {
        echo "<th>".$value."</th>";
      } ?>
    </tr>
  <?php
  $no = 0;
    foreach ($querydetail as $key) {
      extract($key);
      $no++;
     ?>
    <tr>
      <td><?php echo $no;?></td>
      <td><?php echo $id_admin;?></td>
      <td><?php echo $nama_admin;?></td>
      <td><?php echo $email_admin;?></td>
      <td><?php echo $status_kerja;?></td>
    </tr>
    <?php } ?>

</table>
<hr>
  <table width=100% style="margin-left:5%;">
    <tr>
      <td width=70%></td>
      <td width=30%>Mengetahui</td>
    </tr>
    <tr>
      <td><br><br><br></td>
      <td><br></td>
    </tr>
    <tr>
      <td></td>
      <td>Direktur</td>
    </tr>
  </table>
<?php
}
?>
</td>
</tr>
</tbody></table>


</body></html>
