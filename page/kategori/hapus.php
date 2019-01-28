<?php 

		$kkategori =  $_GET['id'];
		$hapus = new pos();
		$hapus_proses = $hapus->hapus_kategori($kkategori);

 ?>