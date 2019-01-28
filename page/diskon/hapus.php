<?php 

		$kdiskon =  $_GET['id'];
		$hapus = new pos();
		$hapus_proses = $hapus->hapus_diskon($kdiskon);

 ?>