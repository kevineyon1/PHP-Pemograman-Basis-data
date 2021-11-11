<?php
require_once 'koneksi.php';
 if(isset($_POST['checking_view']))
 {
    $idbrgmasuk = $_POST['idbrgmasuk'];
    $query = "SELECT idbrgmasuk, barangdagang.kodebrg , qty, nama FROM DBARANGMASUK,barangdagang where idbrgmasuk = '$idbrgmasuk' and DBARANGMASUK.kodebrg = barangdagang.kodebrg";
    $result_array = [];
    $stid = oci_parse($koneksi,$query);
    oci_execute($stid);
    while($r = oci_fetch_assoc($stid)) {
        $result_array[] = $r;
    }
    header('Content-type: application/json');
    echo json_encode($result_array);
    
 }
