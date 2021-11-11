<?php
require_once 'koneksi.php';
if (isset($_POST['submit'])) {
  $kode = $_POST['kodebrg']; 
  // name di tambah data setalah post
  $nama = $_POST['nama'];
  $jenis = $_POST['jenis'];
  $harga_beli = $_POST['harga_beli'];
  $harga_jual = $_POST['harga_jual'];
  $stok = $_POST['stok'];
 
  
  // update data berdasarkan id_produk yg dikirimkan
  
	$query = "UPDATE  BARANGDAGANG  SET NAMA ='".$nama."', JENIS ='".$jenis."', HARGA_BELI ='".$harga_beli."', HARGA_JUAL ='".$harga_jual."', STOK ='".$stok."' WHERE KODEBRG = '".$kode."' ";
	$statement = oci_parse($koneksi,$query);
	$r = oci_execute($statement,OCI_DEFAULT);
	 $res = oci_commit($koneksi);
  if ($res) {
    // pesan jika data berubah
    echo "<script>alert('Data Stok Obat berhasil diubah'); window.location.href='stokobat.php'</script>";
  } else {
    // pesan jika data gagal diubah
    echo "<script>alert('Data Stok Obat gagal diubah'); window.location.href='stokobat.php'</script>";
  }
} else {
  // jika coba akses langsung halaman ini akan diredirect ke halaman index
  header('Location: stokobat.php'); 
}