<?php 
include'database.php';
$db = new database();
$data_trans = $db->data_trans();


 ?>
 <a href="data_trans_add.php">+Tambah Data</a>
 &nbsp;
 <a href="report_trans.php">Cetak Data</a>
 <p></p>
 		<form action="data_trans.php" method="POST">
 			<input type="text" name="key" placeholder="no_trans">
 			<input type="submit" name="cari" value="Cari Data">
 		</form>
 	<!-- <form action="data_trans.php" method="POST">
 		<label>	TAnggal Awal</label><br>	
 		<input type="date" name="awal" autofocus><p></p>	
 		<label>	TAnggal Ahir</label><br>
 		<input type="date" name="ahir" autofocus><p></p>
 		<input type="submit" name="cari" value="Cari Data">
 	</form> -->
 <?php 
 		// if(isset($_POST['cari'])){
 		// 	$awal = $_POST['awal'];
 		// 	$ahir = $_POST['ahir'];
 		// 	echo "<label>pencarian berdasarkan range waktu:Tanggal:<b>$awal<b>Sampai Tanggal:<b>$ahir<b></label>";
 		// }else{
 		// 	echo "<label>Tidak Ada Kata kunci!</label>";
 		// }
  ?>
   <?php 
 		if(isset($_POST['cari'])){
 			$key = $_POST['key'];
 			echo "<label>pencarian berdasarkan kata kunci:<b>$key<b></label>";
 		}else{
 			echo "<label>Tidak Ada Kata kunci!</label>";
 		}
  ?>
<table width="100%" border="1">
	<thead>
		<th>no</th>
		<th>tgl</th>
		<th>Nomr</th>
		<th>id mtr</th>
		<th>id cus</th>
		<th>jml kredit</th>
		<th>lama kredit</th>
		<th>bunga</th>
		<th>total</th>
		<th>angsuran</th>
		<th>action</th>
		
	</thead>
	<tbody>
		<?php 
		$no = 1;
		foreach ($data_trans as $row) {
			# code...
		

		 ?>
		<tr>
			<td><?php echo $no++; ?></td>
			<td><?php echo "$row[tgl_trans]"; ?></td>
			<td><?php echo "$row[no_trans]"; ?></td>
			<td><?php echo "$row[nm_motor]"; ?></td>
			<td><?php echo "$row[nama]"; ?></td>
			<td><?php echo "$row[jml_kredit]"; ?></td>
			<td><?php echo "$row[lama_kredit]"; ?></td>
			<td><?php echo "Rp".number_format($row['bunga'],0,",",".").""; ?></td>
			<td><?php echo "Rp".number_format($row['total'],0,",",".").""; ?></td>
			<td><?php echo "Rp".number_format($row['kredit_bulan'],0,",",".").""; ?></td>		
			<td><a href="<?php echo "data_trans_edit.php?id=$row[id_trans]";?>">Edit</a> | <a href="<?php echo "data_trans_proses.php?aksi=delet&id=$row[id_trans]";?>">Delet</a></td>
		</tr>
		<?php 
		}
		 ?>
	</tbody>
</table>
