<div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                        	<br>
                        	<h2>
                        	TAMBAH KATEGORI
                        	</h2>
                            <br>
                            <br>
                        	
                            <div class="body">

						<form method="POST"> 
							
							<!-- <label for="">Kode Barang :</label>

							<div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="kbarang" class="form-control"  />
                                        </div>
                            </div> -->

                            <label for="">Nama Kategori :</label>

							<div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="kategori" class="form-control" placeholder="Contoh : Sandang" />
                                        </div>
                            </div>
                            <label for="">Deskripsi :</label>
                            <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="deskripsi" class="form-control" placeholder="Ini Untuk Pakaian" />
                                        </div>
                            </div>

                        <input type="submit" name="simpan" value="Simpan" class="btn btn-primary">

                        </form>


	<?php

			if (isset($_POST['simpan']))	{

				// $kbarang = $_POST['kbarang'];
                $katagori = $_POST['kategori'];
                $deskripsi = $_POST['deskripsi'];

                $tambah_kategori = new pos();
                $tambah_kategori_proses = $tambah_kategori->tambah_kategori($katagori, $deskripsi);


			}

	?>