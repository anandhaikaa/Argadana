<?php
    include"../koneksi/koneksi.php";
    if (!isset($_SESSION)) {
        session_start();
    }
    if ($_POST['password']==$_POST['password-1'] )
    {
      $id = $_POST['id'];
      $nama = $_POST['nama'];
      $email = $_POST['email'];
      $password = $_POST['password'];
      $telepon = $_POST['telepon'];
      //$alamat = $_POST['alamat'];
      
        if (!empty($id) && !empty($nama) && !empty($email) && !empty($password) && !empty($telepon))
        {
          $sqlupdate = "INSERT INTO pelanggan (id_pelanggan, nama_pelanggan, email_pelanggan, password_pelanggan, telepon) VALUES ('$id','$nama','$email','$password','$telepon')";

          while ($mysqli->query($sqlupdate))
          {
            ?>
            <script>
            alert('Sign Up Success');
            window.location.href="../index.php";
            </script><?php
          }
        }
        else
        {
          ?>
          <script>
          alert('Data is not Valid');
          window.location.href="../index.php";
          </script><?php
        }
    }

    else
    {
      ?><script>alert('Password yang Anda Masukan Tidak Sama');history.go(-1)</script>";
<?php  header('location:../index.php');
    }
?>
