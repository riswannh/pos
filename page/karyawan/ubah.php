
<?php 

		$kkaryawan =  $_GET['id'];

        $tampil_edit = new pos();
        $tampil_edit_proses = $tampil_edit->tampil_karyawan_ubah($kkaryawan);
        
		$tampil = mysqli_fetch_assoc($tampil_edit_proses);

 ?>


<div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                        	<br>
                        	<h2>
                        	<center>
                        		UBAH DATA KARYAWAN
                        	</center>
                            </h2>
                            <br>
                        	
                            <div class="body">

						<form method="POST"> 
							
                           <label for="">Nama Lengkap</label>

							<div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="nama" class="form-control"  value="<?php echo $tampil['nama']; ?>"/>
                                        </div>
                            </div>
                            <label for="">Alamat</label>

							<div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="alamat" class="form-control"  value="<?php echo $tampil['alamat']; ?>"/>
                                        </div>
                            </div>
                            <label for="">Kota</label>

							<div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="kota" class="form-control"  value="<?php echo $tampil['kota']; ?>"/>
                                        </div>
                            </div>
                            <label for="">No. Telp</label>

							<div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="telp" class="form-control"  value="<?php echo $tampil['no_telp']; ?>"/>
                                        </div>
                            </div>
                            <label for="">E-Mail</label>

							<div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="email" class="form-control"  value="<?php echo $tampil['email']; ?>"/>
                                        </div>
                            </div>
                            <label for="">Jabatan</label>

							<div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="jabatan" class="form-control"  value="<?php echo $tampil['jabatan']; ?>"/>
                                        </div>
                            </div>
                            <label for="">Catatan</label>

							<div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="catatan" class="form-control"  value="<?php echo $tampil['catatan']; ?>"/>
                                        </div>
                            </div>		

                            <input type="submit" name="simpan" value="simpan" class="btn btn-primary">

                        </form>

	<?php

			if (isset($_POST['simpan']))	{
                $nama = $_POST['nama'];
                $alamat = $_POST['alamat'];
                $kota = $_POST['kota'];
                $telp = $_POST['telp'];
                $email = $_POST['email'];
                $jabatan = $_POST['jabatan'];
                $catatan = $_POST['catatan'];
				
               $edit = new pos();
               $edit_proses = $edit->ubah_karyawan($nama, $alamat, $kota, $telp, $email, $jabatan, $catatan, $kkaryawan);

               

			}

	?>