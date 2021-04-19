<!DOCTYPE html>
<html>
    <head>
        <title>KHS Mahasiswa</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width initial-scale=1,shrink-to-fit=no">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap'">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link href="style1.css" rel="stylesheet" type='text/css'>
    </head>
<?php
require_once("tampildataKHS.php");
$databaseku=new konek_database();
$databaseku->connect_database();
$dt=$databaseku->tampil_dataKHS();
$nomor=1;
?>
<body>
    <h1> KHS MAHASISWA</h1>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
    Input Data
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Silahkan Tambahkan Data KHS</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form action="prosesinput.php?aksi=tambah" method="post">
                <div class="form-group">
                    <label>Kode</label>
                    <input type="text" class="form-control" name="kode"  placeholder="Masukan Kode">
                </div>
                <div class="form-group">
                    <label>Nama Mata Kuliah</label>
                    <input type="text" class="form-control" name="nama_matkul" placeholder="Masukan Mata Kuliah">
                </div>
                <div class="form-group">
                    <label>SKS</label>
                    <input type="text" class="form-control" name="sks" placeholder="Masukan Jumlah SKS">
                </div>
                <div class="form-group">
                    <label>Nilai Angka</label>
                    <input type="number" class="form-control" name="nilai_angka" placeholder="Masukan Nilai Angka">
                </div>
                <div class="form-group">
                    <label>Nilai Huruf</label>
                    <input type="text" class="form-control" name="nilai_huruf" placeholder="Masukan Nilai Huruf">
                </div>
                <div class="form-group">
                    <label>Predikat</label>
                    <input type="text" class="form-control" name="predikat" placeholder="Masukan Predikat">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
        </div>
        </div>
    </div>
    </div><br><br>

    <div class="tabel" id='tabel'>
        <table border="8">
        <tr>
            <th>NO</th>
            <th>KODE</th>
            <th>Nama Matkul</th>
            <th>SKS</th>
            <th>Nilai Angka</th>
            <th>Nilai Huruf</th>
            <th>Predikat</th>
            <th>Action</th>
        </tr>
        <?php
        foreach($dt as $datane){
        ?>
            <tr>
            <td><?php echo $nomor++;?></td>
            <td><?php echo $datane['kode'];?></td>
            <td><?php echo $datane['nama_matkul'];?></td>
            <td><?php echo $datane['sks'];?></td>
            <td><?php echo $datane['nilai_angka'];?></td>
            <td><?php echo $datane['nilai_huruf'];?></td>
            <td><?php echo $datane['predikat'];?></td>
            <td>
    </div>
                <!--  -->
                <a class="btn btn-primary" href="edit.php?kode=<?php echo $datane['kode']; ?>&aksi=edit">Edit</a>
                <a class="btn btn-secondary"  href="hapus.php?kode=<?php echo $datane['kode']; ?>&aksi=hapus">Hapus</a>
                <!--  -->
            </td>
        <?php
        }
        ?>
        </table>
        
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</html>