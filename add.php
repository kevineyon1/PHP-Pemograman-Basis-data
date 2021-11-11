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

	$query = "INSERT INTO BARANGDAGANG (kodebrg,nama,jenis,harga_beli,harga_jual,stok) VALUES ('".$kode."','".$nama."','".$jenis."','".$harga_beli."','".$harga_jual."','".$stok."')";
	$statement = oci_parse($koneksi,$query);
	$r = oci_execute($statement,OCI_DEFAULT);
	 $res = oci_commit($koneksi);
  if ($res) {
    // pesan jika data tersimpan
    echo "<script>alert('Data berhasil ditambahkan'); 
	window.location.href='stokobat.php'</script>";
  } else {
    // pesan jika data gagal disimpan
    echo "<script>alert('Data gagal ditambahkan');
	window.location.href='stokobat.php'</script>";
  }
} else {
  //jika coba akses langsung halaman ini akan diredirect ke halaman index
  header('Location: stokobat.php'); 
}