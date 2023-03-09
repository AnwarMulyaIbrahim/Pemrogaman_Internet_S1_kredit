<?php 
include'database.php';
$db = new database();
$data_cus = $db->data_cus();


 ?>
 <a href="data_cus_add.php">+Tambah Data</a>
  &nbsp;
 <a href="report_cus.php">Cetak Data</a><p></p>	
 <form action="data_cus.php" method="POST">
 			<input type="text" name="kew" placeholder="nama/gender">
 			<input type="submit" name="find" value="Cari Data">
 		</form>
 <?php 
 		if(isset($_POST['find'])){
 			$kew = $_POST['kew'];
 			echo "<label>pencarian berdasarkan kata kunci:<b>$kew<b></label>";
 		}else{
 			echo "<label>Tidak Ada Kata kunci!</label>";
 		}
  ?>

<table width="100%" border="1">
	<thead>
		<th>no</th>
		<th>Nama</th>
		<th>Gender</th>
		<th>Alamat</th>
		<th>Action</th>
	</thead>
	<tbody>
		<?php 
		$no = 1;
		foreach ($data_cus as $row) {
			# code...
		

		 ?>
		<tr>
			<td><?php echo $no++; ?></td>
			<td><?php echo "$row[nama]"; ?></td>
			<td><?php echo "$row[gender]"; ?></td>
			<td><?php echo "$row[alamat]"; ?></td>
			<td><a href="<?php echo "data_cus_edit.php?id=$row[id]";?>">Edit</a> | <a href="<?php echo "data_cus_proses.php?aksi=delet&id=$row[id]";?>">Delet</a></td>
		</tr>
		<?php 
		}
		 ?>
	</tbody>
</table>
