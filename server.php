<?php
$koneksi = oci_connect("system","123","LOCALHOST/XE");

$kursor = ocicommit($koneksi);
?>