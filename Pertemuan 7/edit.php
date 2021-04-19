<?php
require_once("tampildataKHS.php");
$databaseku=new konek_database();
$databaseku->connect_database();
?>
<form action="prosesedit.php?aksi=update" method="post">
<?php
foreach($databaseku->edit($_GET['kode']) as $datane){
?>
<table>
    <tr>
        <th>Kode:</th>
        <td><input type="number" name="kode" value="<?php echo $datane['kode'] ?>"></td>
        
    </tr>
	<tr>
		<th>Nama Barang:</th>
		<td>
			<input type="text" name="nama_matkul" value="<?php echo $datane['nama_matkul'] ?>">
		</td>
	</tr>
	<tr>
		<th>SKS:</th>
		<td><input type="text" name="sks" value="<?php echo $datane['sks'] ?>"></td>
	</tr>
	<tr>
		<th>Nilai Angka:</th>
		<td><input type="number" name="nilai_angka" value="<?php echo $datane['nilai_angka'] ?>"></td>
	</tr>
	<tr>
		<th>Nilai Huruf:</th>
		<td><input type="text" name="nilai_huruf" value="<?php echo $datane['nilai_huruf'] ?>"></td>
	</tr>
	<tr>
		<th>Predikat:</th>
		<td><input type="Text" name="predikat" value="<?php echo $datane['predikat'] ?>"></td>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit" value="Simpan"></td>
	</tr>
</table>
<?php } ?>
</form>

