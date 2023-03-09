<?php
include'database.php';
$db = new database();
$id = $_GET['id'];
$cus = $db->tampil_cus($id);

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>data Customer</title>
</head>
<body>
<form method="POST" action="data_cus_proses.php?aksi=edit">
	<h1>Form Edit Data Customer</h1>
	<label>id:</label><br>
	<input type="text" name="id" value="<?php echo "$cus[id]" ?>"><p></p>
	<label>Nama:</label><br>
	<input type="text" name="nama" value="<?php echo "$cus[nama]" ?>"><p></p>
	<label>Gender:</label><br>
	<input type="text" name="gender" value="<?php echo "$cus[gender]" ?>"><p></p>
	<label>alamat:</label><br>
	<input type="text" name="alamat" value="<?php echo "$cus[alamat]" ?>"><p></p>
	<input type="submit" name="submit" value="Updatee Data Customer">

</form>
</body>
</html>