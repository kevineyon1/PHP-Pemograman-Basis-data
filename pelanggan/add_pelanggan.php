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






	$query = "INSERT INTO PELANGGAN (KODEPEL,NAMA,ALAMAT_PEL,KOTA_PEL,PROV_PEL,ALAMAT_KIRIM,KOTA_KIRIM,PROV_KIRIM,NO_HP,NO_WA,NAMA_PENERIMA) 
        VALUES ('".$KODEPEL."','".$NAMA."','".$ALAMAT_PEL."','".$KOTA_PEL."','".$PROV_PEL."','".$ALAMAT_KIRIM."','".$KOTA_KIRIM."','".$PROV_KIRIM."','".$NO_HP."','".$NO_WA."','".$NAMA_PENERIMA."')";
	$statement = oci_parse($koneksi,$query);
	$r = oci_execute($statement,OCI_DEFAULT);
	 $res = oci_commit($koneksi);
  if ($res) {
    // pesan jika data tersimpan
    echo "<script>alert('Data berhasil ditambahkan'); 
	window.location.href='datapelanggan.php'</script>";
  } else {
    // pesan jika data gagal disimpan
    echo "<script>alert('Data gagal ditambahkan');
	window.location.href='datapelanggan.php'</script>";
  }
} else {
  //jika coba akses langsung halaman ini akan diredirect ke halaman index
  header('Location: datapelanggan.php'); 
}