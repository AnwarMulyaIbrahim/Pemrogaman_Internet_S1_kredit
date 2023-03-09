<body onload="javascript:window.print()" style="margin: 0; width: 1000px;">
	<div style="margin-left: 20px; ">
	<img src="logo.png" style="width: 10%; float: left;">
		<table width="90%" cellspacing="0" cellpadding="0">
			<tr>
				<td><div align="center"><font size="7"><b>CV. DELER KUDA BESI</b></font></div></td>
			</tr>
			<tr>
				<td><div align="center"><font size="5">Jl. Ciremai Raya No. 04, Kecapi, Harjamukti, Cirebon, Jawa Barat</font></div></td>
			</tr>
			<tr>
				<td><div align="center"><font size="4" color="blue">N0. Telp : 0721(23456), Email : kuda@gmail.com</font></div></td>
			</tr>
		</table>
		<label><font size="6"><center><b>Laporan Data Transaksi Pembelian</b></center></font></label>
		<p>&nbsp;</p>
		<table style="border: 1px solid gray;" width="100%" cellpadding="0" cellspacing="0">
			<tr>
				<th style="border-right: 1px solid gray;">no</th>
				<th style="border-right: 1px solid gray;">Kode Motor</th>
				<th style="border-right: 1px solid gray;">Nama Motor</th>
				<th style="border-right: 1px solid gray;">Merk</th>
				<th style="border-right: 1px solid gray;">harga</th>
				<th style="border-right: 1px solid gray;">stok</th>
			<tr>
			<?php 

			include'database.php';
			$db = new database();
			$data_motor = $db->data_motor();



			$no = 1;
			foreach ($data_motor as $row) {
			# code...
		

		 	?>
			<tr>
			<td style="border-right: 1px solid gray; border-top: 1px solid gray; padding: 3px 5px;"><?php echo $no++; ?></td>
			<td style="border-right: 1px solid gray; border-top: 1px solid gray; padding: 3px 5px;"><?php echo "$row[kd_motor]"; ?></td>
			<td style="border-right: 1px solid gray; border-top: 1px solid gray; padding: 3px 5px;"><?php echo "$row[nm_motor]"; ?></td>
			<td style="border-right: 1px solid gray; border-top: 1px solid gray; padding: 3px 5px;"><?php echo "$row[merk]"; ?></td>
			<td style="border-right: 1px solid gray; border-top: 1px solid gray; padding: 3px 5px;"><?php echo "Rp".number_format($row['harga'],0,",",".").""; ?></td>
			<td style="border-right: 1px solid gray; border-top: 1px solid gray; padding: 3px 5px;"><?php echo "$row[stok]"; ?></td>
			</tr>
			<?php 
			}
		 	?>
		 	</tr>
		</table>
		<p>&nbsp;</p>
		<table align="right" width="90%" cellspacing="0" cellpadding="0">
			<tr>
				<td width="80%"></td>
				<td align="center">Cirebon, <?php echo date("d F Y"); ?></td>
			</tr>
			<tr>
				<td width="80%"></td>
				<td align="center">Direktur CV. Deler Kuda Besi</td>
			</tr>
			<tr>
				<td width="80%"></td>
				<td align="center">&nbsp;</td>
			</tr>
			<tr>
				<td width="80%"></td>
				<td align="center"><img src="dawi.png" width="30%"></td>
			</tr>
			<tr>
				<td width="80%"></td>
				<td align="center"><u>Cecep Parker, M.E</u></td>
			</tr>
		</table>
	</div>
	

</body>