<?php
require_once("tampildataKHS.php");
$databaseku=new konek_database();
$databaseku->connect_database();
$aksi = $_GET['aksi'];
 if($aksi == "tambah"){
   $databaseku->input($_POST['kode'],$_POST['nama_matkul'],$_POST['sks'],$_POST['nilai_angka'],$_POST['nilai_huruf'],$_POST['predikat']);
 	header("location:KHS.php");
 }
?>