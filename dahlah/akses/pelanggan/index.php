<!DOCTYPE html>
<html lang="en">
<?php
session_start();
if (isset($_SESSION['ha'])) {
  $hak = $_SESSION['ha'];
  ?>
  <script>
  window.location.href=<?php echo $hak."/index.php"; ?>
  </script>
  <?php
}
else {

?>
  <head>
        <title>Halaman Pelanggan</title><meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link href="../fa/css/fontawesome-all.min.css" rel="stylesheet" />
        <link href="../booking.css" rel="stylesheet" />
  </head>
  <body>
    <?php
      include '../koneksi/koneksi.php';
      include '../controller.php';
    ?>
    <div class="apps">
      <div class="apps-head">
        <img src="img/WhatsApp Image 2022-01-21 at 15.08.51.jpeg">
      </div>

        <ul class="left-nav">
          <a href="?p=beranda"><li><i class="fa fa-fw fa-home"></i></li></a>
          <a href="?p=t_servis"><li>Macam Barang atau Layanan</li></a>
          <a href="?p=t_kami"><li>Tentang Kami</li></a>
          <a href="?p=reservasi"><li>Beli/Pesan</li></a>

          <a href="logout.php"><li class="right-nav"><i class="fa fa-fw fa-sign-out-alt"></i> Keluar</li></a>
        </ul>
      <div class="apps-content">

      <div class="apps-body">
        <?php
          if (!empty($_GET['p'])) {
            $p = $_GET['p'];
            if (file_exists("konten/$p.php")) {
              include 'konten/'.$p.'.php';
            }
            else {
              include 'not_found.php';
            }
          }
          elseif (empty($_GET['p'])) {
            include 'konten/beranda.php';
          }
         ?>

      </div>

      </div>
    </div>
  </body>
<?php } ?>
</html>
