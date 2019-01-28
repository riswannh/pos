<div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                        	<br>
                        	<h2>
                        	TAMBAH PAJAK
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

                            <label for="">Nama pajak :</label>

							<div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="npajak" class="form-control"/>
                                        </div>
                            </div>

                            <label for="">Nilai :</label>
                            <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="nilai" class="form-control" />
                                        </div>
                            </div>


                        <input type="submit" name="simpan" value="Simpan" class="btn btn-primary">

                        </form>


	<?php

			if (isset($_POST['simpan']))	{
                $npajak = $_POST['npajak'];
                $nilai = $_POST['nilai'];

                $tambah_kategori = new pos();
                $tambah_kategori_proses = $tambah_kategori->tambah_pajak($npajak, $nilai);


			}

	?>