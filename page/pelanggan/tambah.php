<div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                        	<br>
                        	<h2>
                        	TAMBAH PELANGGAN
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
                            <label for="">Diskon</label>

							<div class="row clearfix">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="text" name="rupiah" class="form-control">
                                                <label class="form-label">Rp</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="text" name="nilai"  class="form-control">
                                                <label class="form-label">%</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <label for="">Status Anggota</label>

							<div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="status_anggota" class="form-control"  />
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
                $nama = $_POST['nama'];
                $alamat = $_POST['alamat'];
                $kota = $_POST['kota'];
                $telp = $_POST['telp'];
                $email = $_POST['email'];
                $nilai = $_POST['nilai'];
                $rupiah = $_POST['rupiah'];
                $status_anggota = $_POST['status_anggota'];
                $catatan = $_POST['catatan'];



                $tambah = new pos();
                $tambah_proses = $tambah->tambah_pelanggan($nama, $alamat, $kota, $telp, $email,$nilai, $rupiah, $status_anggota, $catatan);


			}

	?>