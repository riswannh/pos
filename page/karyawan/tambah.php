<div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                        	<br>
                        	<h2>
                        	TAMBAH KARYAWAN
                        	</h2>
                            <br>
                            <br>
                        	
                            <div class="body">

						<form method="POST"> 

                            <label for="">Nama Lengkap</label>

							<div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="nama" class="form-control"  />
                                        </div>
                            </div>
                            <label for="">Alamat</label>

							<div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="alamat" class="form-control"  />
                                        </div>
                            </div>
                            <label for="">Kota</label>

							<div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="kota" class="form-control"  />
                                        </div>
                            </div>
                            <label for="">No. Telp</label>

							<div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="telp" class="form-control"  />
                                        </div>
                            </div>
                            <label for="">E-Mail</label>

							<div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="email" class="form-control"  />
                                        </div>
                            </div>
                            <label for="">Jabatan</label>

							<div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="jabatan" class="form-control"  />
                                        </div>
                            </div>
                            <label for="">Catatan</label>

							<div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="catatan" class="form-control"  />
                                        </div>
                            </div>
                            

                        <input type="submit" name="simpan" value="Simpan" class="btn btn-primary">

                        </form>


	<?php

			if (isset($_POST['simpan']))	{

				// $kbarang = $_POST['kbarang'];
                $nama = $_POST['nama'];
                $alamat = $_POST['alamat'];
                $kota = $_POST['kota'];
                $telp = $_POST['telp'];
                $email = $_POST['email'];
                $jabatan = $_POST['jabatan'];
                $catatan = $_POST['catatan'];



                $tambah_karyawan = new pos();
                $tambah_karyawan_proses = $tambah_karyawan->tambah_karyawan($nama, $alamat, $kota, $telp, $email, $jabatan, $catatan);


			}

	?>