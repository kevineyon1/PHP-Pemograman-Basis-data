<?php
require_once 'koneksi.php';
if (isset($_POST['submit'])) {
   $KODEPEL = $_POST['KODEPEL']; 
  // name di tambah data setalah post
  $NAMA = $_POST['NAMA'];
  $ALAMAT_PEL= $_POST['ALAMAT_PEL'];
  $KOTA_PEL = $_POST['KOTA_PEL'];
  $PROV_PEL = $_POST['PROV_PEL'];
  $ALAMAT_KIRIM = $_POST['ALAMAT_KIRIM'];
  $KOTA_KIRIM = $_POST['KOTA_KIRIM'];
  $PROV_KIRIM = $_POST['PROV_KIRIM'];
  $NO_HP = $_POST['NO_HP'];
  $NO_WA = $_POST['NO_WA'];
  $NAMA_PENERIMA = $_POST['NAMA_PENERIMA'];
 
  
  // update data berdasarkan id_produk yg dikirimkan
  
	$query = "UPDATE  PELANGGAN  SET NAMA ='".$NAMA."', ALAMAT_PEL ='".$ALAMAT_PEL."', KOTA_PEL ='".$KOTA_PEL."', PROV_PEL ='".$PROV_PEL."', ALAMAT_KIRIM ='".$ALAMAT_KIRIM."', KOTA_KIRIM ='".$KOTA_KIRIM."', PROV_KIRIM ='".$PROV_KIRIM."', NO_HP ='".$NO_HP."', NO_WA ='".$NO_WA."', NAMA_PENERIMA ='".$NAMA_PENERIMA."' WHERE KODEPEL = '".$KODEPEL."' ";
	$statement = oci_parse($koneksi,$query);
	$r = oci_execute($statement,OCI_DEFAULT);
	 $res = oci_commit($koneksi);
  if ($res) {
    // pesan jika data berubah
    echo "<script>alert('Data Stok Obat berhasil diubah'); window.location.href='datapelanggan.php'</script>";
  } else {
    // pesan jika data gagal diubah
    echo "<script>alert('Data Stok Obat gagal diubah'); window.location.href='datapelanggan.php'</script>";
  }
} else {
  // jika coba akses langsung halaman ini akan diredirect ke halaman index
  header('Location: datapelanggan.php'); 
}