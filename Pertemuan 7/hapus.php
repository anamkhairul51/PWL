<?php
require_once("tampildataKHS.php");
$databaseku=new konek_database();
$databaseku->connect_database();
$aksi=$_GET['aksi'];
if($aksi == "hapus"){ 	
    $databaseku->hapus($_GET['kode']);
    header("location:KHS.php");
}
?>
