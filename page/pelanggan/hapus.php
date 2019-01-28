<?php 

		$kpelanggan=  $_GET['id'];
		$hapus = new pos();
		$hapus_proses = $hapus->hapus_pelanggan($kpelanggan);

 ?>