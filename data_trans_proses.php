<?php 
include'database.php';
$db = new database();


$aksi = $_GET['aksi'];
if ($aksi == "input") {

	$tot = $_POST['harga'] * $_POST['jml_kredit'];
	$bunga = $tot *0.1 ;
	$total = $tot + $bunga;
	$angsuran = $total / $_POST['lama_kredit'];


	$db->input_trans($_POST['tgl_trans'],
					$_POST['no_trans'],
					$_POST['id_motor'],
					$_POST['id_cus'],
					$_POST['jml_kredit'],
					$_POST['lama_kredit'],
					$bunga,
					$total,
					$angsuran);
	echo "<script language = 'Javascript'>
			document.location='data_trans.php';
			</script>
			";
}
else if ($aksi == "edit") {
	$tot = $_POST['harga'] * $_POST['jml_kredit'];
	$bunga = $tot *0.1 ;
	$total = $tot + $bunga;
	$kredit_bulan = $total / $_POST['lama_kredit'];
	$db->update_trans($_POST['id_trans'],
					$_POST['tgl_trans'],
					$_POST['no_trans'],
					$_POST['id_motor'],
					$_POST['id_cus'],
					$_POST['jml_kredit'],
					$_POST['lama_kredit'],
					$bunga,
					$total,
					$kredit_bulan);
	echo "<script language = 'Javascript'>
			document.location='data_trans.php';
			</script>
			"; 
}else if ($aksi == "delet") {
	$db->delet_trans($_GET['id']);
	echo "<script>
			document.location='data_trans.php';
			</script>
			"; 
}else {
	echo "database ivalid!!";
}

 ?>