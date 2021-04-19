<?php
class konek_database{
    var $username='root';
    var $database_name="khsmahasiswa";
    var $hostname='localhost';
    var $password='';
    var $konn;
    function connect_database(){
        $this->konn=mysqli_connect($this->hostname,$this->username,$this->password,$this->database_name);
    }
    function tampil_dataKHS(){
        $hasil=mysqli_query($this->konn,"select * from khs");
        while($row=mysqli_fetch_array($hasil)){
            $data[]=$row;
        }
        return $data;
    }
    function hapus($kode){
		mysqli_query($this->konn,"delete from khs where kode='$kode'");
    }

    function edit($kode){
        $hasil=mysqli_query($this->konn,"select * from khs where kode='$kode'");
        while($datane=mysqli_fetch_array($hasil)){
            $data[]=$datane;
        }
        return $data;
    }
    function update($kode,$nama,$sks,$angka,$huruf,$predikat){
        mysqli_query($this->konn,"UPDATE khs SET kode='$kode',nama_matkul='$nama',sks='$sks',nilai_angka='$angka',nilai_huruf='$huruf',predikat='$predikat' where kode='$kode'");
    }
    function input($kode,$nama_matkul,$sks,$nilai_angka,$nilai_huruf,$predikat){
        mysqli_query($this->konn,"insert into khs(kode,nama_matkul,sks,nilai_angka,nilai_huruf,predikat) values('$kode','$nama_matkul','$sks','$nilai_angka','$nilai_huruf','$predikat')");

    }
}
// $databaseku=new konek_database();
// $databaseku->connect_database();
// $databaseku->tampil_barang();

?>
