<section id="content">
  <div class="inside" style="padding:0;">
    <?php
    if(!empty($_GET['id'])){
          $kat=$_GET['id'];
          $sqlkat= "SELECT * FROM kategori WHERE id_kategori = '$kat'";
          $querykat= mysqli_query($mysqli,$sqlkat);
          //while (
          $datakat = $querykat->fetch_array();
        }
     ?>
    <h2>Result Of <?php echo $datakat['nama_kategori']; ?> </h2>
    <ul class="list" style="border-color:#000; text-align:center">
      <?php
      $sqlbook= "SELECT * FROM macam_kategori WHERE id_kategori = '$kat'";
      $querybook= mysqli_query($mysqli,$sqlbook);
      while ($databook = $querybook->fetch_array()) {
      ?>
      <li><span><img style="width:50%;height:100px" src="foto_produk/<?php echo $databook['gambar']; ?>"></span>
        <h4><a href="#" title="Klik" style="text-transform:uppercase"><?php echo $databook['nama_barang_atau_layanan']; ?></a></h4>
        <h5><?php echo "Rp ".number_format($databook['harga'], 0, ',', '.'); ?></h5>
      </li><?php } ?>
    </ul>
    <!--h2>Move Forward <span>With Your Education</span></h2>
    <p><span class="txt1">Eusus consequam</span> vitae habitur amet nullam vitae condis phasellus sed justo. Orcivel mollis intesque eu sempor ridictum a non laorem lacingilla wisi. </p>
    <div class="img-box"><img src="images/1page-img.jpg">Eusus consequam vitae habitur amet nullam vitae condis phasellus sed justo. Orcivel mollis intesque eu sempor ridictum a non laorem lacingilla wisi. Nuncrhoncus eros <a href="#">maurien ulla</a> facilis tor mauris tincidunt et vitae morbi. Velelit condimentes in laorem quis nullamcorper nam fauctor feugiat pellent sociis.</div>
    <p class="p0">Eusus consequam vitae habitur amet nullam vitae condis phasellus sed justo. Orcivel mollis intesque eu sempor ridictum a <a href="#">non laorem</a> lacingilla wisi.</p-->
  </div>
</section>
