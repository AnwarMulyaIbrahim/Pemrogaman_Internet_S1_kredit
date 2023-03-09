<?php
include'database.php';
$db = new database();
$id_motor = $_GET['id'];
$motor = $db->tampil_data($id_motor);

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>data motor</title>
</head>
<body>
<form method="POST" action="data_mtr_proses.php?aksi=edit">
	<h1>Form Input Data Motor</h1>
	<label>Kode Motor:</label><br>
	<input type="text" name="id_motor" value="<?php echo "$motor[id_motor]" ?>"><p></p>
	<input type="text" name="kd_motor" value="<?php echo "$motor[kd_motor]" ?>"><p></p>
	<label>Nama Motor:</label><br>
	<input type="text" name="nm_motor" value="<?php echo "$motor[nm_motor]" ?>"><p></p>
	<label>merek Motor:</label><br>
	<input type="text" name="merk" value="<?php echo "$motor[merk]" ?>"><p></p>
	<label>harga Motor:</label><br>
	<input type="text" name="harga" value="<?php echo "$motor[harga]" ?>"><p></p>
	<label>stok Motor:</label><br>
	<input type="text" name="stok" value="<?php echo "$motor[stok]" ?>"><p></p>
	<label> Keterangan: </label><br>
	<textarea type="text" name="ket"><?php echo "$motor[ket]" ?></textarea> <p></p>
	<input type="submit" name="submit" value="Updatee Data Motor">

</form>
</body>
</html>