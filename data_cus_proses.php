<?php 
include'database.php';
$db = new database();


if (isset($_GET['aksi'])){
	$aksi = $_GET['aksi'];
	if ($aksi == "input") {
		$db->input_cus($_POST['nama'],
					$_POST['gender'],
					$_POST['alamat']);
		echo "<script language = 'Javascript'>
			document.location='data_cus.php';
			</script>
			";
	}
}if(isset($_GET['aksi'])){
	$aksi = $_GET['aksi'];
	if ($aksi == "edit") {
		$db->update_cus($_POST['id'],
					$_POST['nama'],
					$_POST['gender'],
					$_POST['alamat']);
		echo "<script language = 'Javascript'>
			document.location='data_cus.php';
			</script>
			"; 
	}
}if(isset($_GET['aksi'])){
	$aksi = $_GET['aksi'];
 	if ($aksi == "delet") {
	$db->delet_cus($_GET['id']);
		echo "<script>
			document.location='data_cus.php'
			</script>
			"; 
		
	}
}

 ?>