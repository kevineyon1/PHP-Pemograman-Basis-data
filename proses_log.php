<?php @session_start();
 //koneksi database
include ("server.php");
$username = $_POST['USER_NAME'];
$password = $_POST['PASSWORD'];
$query = "SELECT * FROM LOGIN_ADMIN WHERE USER_NAME='$username' and PASSWORD='$password' ";
$hasil = oci_parse($koneksi,$query);
$data  = oci_execute($hasil,OCI_DEFAULT);

//Validasi Data dari form dengan database
if ($data >= 1)
 {
  $_SESSION['USER_NAME']=$username;
  header("location:index.php");
 }
else
 {
   echo "<script type='text/javascript'>alert('Maaf! Data yang anda masukan tidak benar');document.location='login.php'</script>";
  }
?>