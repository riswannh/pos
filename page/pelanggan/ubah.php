
<?php 

		$kpelanggan =  $_GET['id'];

        $tampil_edit = new pos();
        $tampil_edit_proses = $tampil_edit->tampil_pelanggan_ubah($kpelanggan);
        
		$tampil = mysqli_fetch_assoc($tampil_edit_proses);

 ?>


<div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                        	<br>
                        	<h2>
                        	<center>
                        		UBAH DATA PELANGGAN
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

                            <label for="">Diskon</label>

							<div class="row clearfix">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="text" name="rupiah" class="form-control" value="<?php echo $tampil['diskon_rupiah']; ?>">
                                                <label class="form-label">Rp</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="text" name="nilai"  class="form-control" value="<?php echo $tampil['diskon_nilai']; ?>">
                                                <label class="form-label">%</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <label for="">Status Anggota</label>

							<div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="status_anggota" class="form-control"  value="<?php echo $tampil['status_anggota']; ?>"/>
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
                $nilai = $_POST['nilai'];
                $rupiah = $_POST['rupiah'];
                $status_anggota = $_POST['status_anggota'];
                $catatan = $_POST['catatan'];
				
               $edit = new pos();
               $edit_proses = $edit->ubah_pelanggan($nama, $alamat, $kota, $telp, $email,$nilai, $rupiah, $status_anggota, $catatan, $kpelanggan);

               

			}

	?>