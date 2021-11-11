<?php
require_once 'koneksi.php';
$query = "SELECT * FROM MBARANGMASUK";
$result_array =[];
$stid = oci_parse($koneksi,$query);
oci_execute($stid);


    while($r = oci_fetch_assoc($stid)) {
        $result_array[] = $r;
    }
    header('Content-type: application/json');
    echo json_encode($result_array);
