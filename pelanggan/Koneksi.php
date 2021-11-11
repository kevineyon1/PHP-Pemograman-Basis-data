<?php
//membangun koneksi
$username ="hr";
$password ="hr";
$database ="LOCALHOST/orcl";
$koneksi=oci_connect ($username,$password,$database);
if(!$koneksi) {
$err=oci_error();
echo "Gagal tersambung ke ORACLE", $err['text'];
} else {
echo "Koneksi Berhasil";
}
?>