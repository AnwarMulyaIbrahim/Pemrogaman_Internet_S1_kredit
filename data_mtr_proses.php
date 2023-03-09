<?php 
include'database.php';
$db = new database();


$aksi = $_GET['aksi'];
if ($aksi == "input") {
	$db->input_motor($_POST['kd_motor'],
					$_POST['nm_motor'],
					$_POST['merk'],
					$_POST['harga'],
					$_POST['stok'],
					$_POST['ket']);
	echo "<script language = 'Javascript'>
			document.location='data_motor.php';
			</script>
			";
}else if ($aksi == "edit") {
	$db->update_motor($_POST['id_motor'],
					$_POST['kd_motor'],
					$_POST['nm_motor'],
					$_POST['merk'],
					$_POST['harga'],
					$_POST['stok'],
					$_POST['ket']);
	echo "<script language = 'Javascript'>
			document.location='data_motor.php';
			</script>
			"; 
}else if ($aksi == "delet") {
	$db->delet_data($_GET['id']);
	echo "<script>
			document.location='data_motor.php';
			</script>
			"; 
		}

else {
	echo "database ivalid!!";
}

 ?>