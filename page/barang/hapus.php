<?php 

		$kbarang =  $_GET['id'];
		$hapus = new pos();
		$hapus_proses = $hapus->hapus_barang($kbarang);

 ?>