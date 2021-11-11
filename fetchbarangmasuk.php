<?php
require_once 'koneksi.php';
if(isset($_POST['insert'])){
    $idbrgmasuk = $_POST['id'];
    $kodebrg = $_POST['kodebrg'];
    $qty = $_POST['qty'];


   $queries = " BEGIN
                    INSERT INTO dbarangmasuk (idbrgmasuk,kodebrg,qty) VALUES ('".$idbrgmasuk."','".$kodebrg."','".$qty."');
                    UPDATE barangdagang set stok = stok+'".$qty."' WHERE kodebrg = '".$kodebrg."';
                END;";
    
    $statement = oci_parse($koneksi,$queries);
    $r = oci_execute($statement);
    if($r){
        echo $return = "Data Berhasil Ditambahkan";
    }
    else{
        echo $return = "Ada Sesuatu Yang Salah";
    }
}
if(isset($_POST['checking_as'])){
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