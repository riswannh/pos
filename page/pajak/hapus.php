<?php 

		$kpajak =  $_GET['id'];
		$hapus = new pos();
		$hapus_proses = $hapus->hapus_pajak($kpajak);

 ?>