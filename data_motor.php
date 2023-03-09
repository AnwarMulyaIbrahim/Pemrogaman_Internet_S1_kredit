<?php 
include'database.php';
$db = new database();
$data_motor = $db->data_motor();


 ?>
 <a href="data_mtr_add.php">Tambah Data</a>
 &nbsp;
 <a href="report_motor.php">Cetak Data</a><p></p>	
 <form action="data_motor.php" method="POST">
 			<input type="text" name="kei" placeholder="kd_motor">
 			<input type="submit" name="temukan" value="Cari Data">
 		</form>
 <?php 
 		if(isset($_POST['temukan'])){
 			$kei = $_POST['kei'];
 			echo "<label>pencarian berdasarkan kata kunci:<b>$kei<b></label>";
 		}else{
 			echo "<label>Tidak Ada Kata kunci!</label>";
 		}
  ?>

<table width="100%" border="1">
	<thead>
		<th>no</th>
		<th>Kode Motor</th>
		<th>Nama Motor</th>
		<th>Merk</th>
		<th>Harga</th>
		<th>Stok</th>
		<th>Action</th>
		
	</thead>
	<tbody>
		<?php 
		$no = 1;
		foreach ($data_motor as $row) {
			# code...
		

		 ?>
		<tr>
			<td><?php echo"$no"; ?></td>
			<td><?php echo "$row[kd_motor]"; ?></td>
			<td><?php echo "$row[nm_motor]"; ?></td>
			<td><?php echo "$row[merk]"; ?></td>
			<td><?php echo "$row[harga]"; ?></td>
			<td><?php echo "$row[stok]"; ?></td>
			<td><a href="<?php echo "data_mtr_edit.php?id=$row[id_motor]";?>">Edit</a> | <a href="<?php echo "data_mtr_proses.php?aksi=delet&id=$row[id_motor]";?>">Delet</a></td>
		</tr>
		<?php 
		}
		 ?>
	</tbody>
</table>
