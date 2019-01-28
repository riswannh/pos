<div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                        	<br>
                        	<h2>
                        	TAMBAH PRODUK BARANG & JASA
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

                            <label for="">Nama Barang & Jasa :</label>

							<div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="nbarang" class="form-control" placeholder="Contoh : Vitamin Rambut atau Potong Rambut" />
                                        </div>
                            </div>

                            <label for="">Merk Barang & Jasa :</label>

							<div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="mbarang" class="form-control" placeholder="Contoh : Makarozo Advisor" />
                                        </div>
                            </div>

                            
                            <label for="">Kategori Barang & Jasa :</label>

							<div class="form-group">
                                <div class="form-line">
                                    <select name="katbarang" class="form-control show-tick">
                                    <?php 
                                    $kategori = new pos();
                                    $hasil = $kategori->tampil_kategori();
                                    while ($data = mysqli_fetch_assoc($hasil)) {
                                    ?>
                                    	<option value="<?php echo $data['kode_kategori'] ?>"><?php echo $data['kategori_brg'] ?></option>
                                    <?php } ?>
                                    </select>

                            </div>
                            <br>
                            <br>

                            <label for="">Supplier :</label>

							<div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="supply" class="form-control" placeholder="Contoh : PT. Aplikasi Sukses Bersama" />
                                        </div>
                            </div>

							<label for="">Stok Awal :</label>

							<div class="form-group">
                                        <div class="form-line">
                                            <input type="number" name="stokawal" class="form-control" placeholder="Contoh : 12" />
                                        </div>
                            </div>

                            <label for="">Satuan :</label>

                            <div class="form-group">
                                <div class="form-line">
                                    <select name="satuanprdk" class="form-control show-tick">
                                        <option value="Kg">Kg</option>
                                        <option value="Gram">Gram</option>
                                        <option value="Mtr">Mtr</option>
                                        <option value="Cm">Cm</option>
                                        <option value="Pcs">Pcs</option>
                                        <option value="Unit">Unit</option>
                                        <option value="Ltr">Ltr</option>
                                        <option value="koli">Koli</option>
                                        <option value="Oz">Oz</option>
                                    </select>
                            </div>
                            <br>
                            <br>

                            <label for="">Harga Modal Produk & Jasa :</label>

							<div class="form-group">
                                        <div class="form-line">
                                            <input type="number" name="hbeli" class="form-control" placeholder="Rp" />
                                        </div>
                            </div>	

                            <label for="">Hpp Produk & Jasa :</label>

							<div class="form-group">
                                        <div class="form-line">
                                            <input type="number" name="hjual" class="form-control" placeholder="Rp" />
                                        </div>
                            </div>

                            <label for="">Ukuran / Size :</label>

							<div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="size" class="form-control" placeholder="Contoh : Lingkar Dada 22 Cm atau Medium" />
                                        </div>
                            </div>	

                            <label for="">Warna Produk :</label>

							<div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="warnaprdk" class="form-control" placeholder="Optional" />
                                        </div>
                            </div>

                            <label for="">Catatan :</label>

                            <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="catat" class="form-control" placeholder="Optional" />
                                        </div>
                            </div>		


                        <input type="submit" name="simpan" value="Simpan" class="btn btn-primary">

                        </form>


	<?php

			if (isset($_POST['simpan']))	{

				// $kbarang = $_POST['kbarang'];
				$nbarang = $_POST['nbarang'];
				$mbarang = $_POST['mbarang'];
				$katbarang = $_POST['katbarang'];
				$supply = $_POST['supply'];
				$stokawal = $_POST['stokawal'];
				$satuanprdk = $_POST['satuanprdk'];
				$hbeli = $_POST['hbeli'];
				$hjual = $_POST['hjual'];
				$size = $_POST['size'];
				$warnaprdk = $_POST['warnaprdk'];
                $catat = $_POST['catat'];


                $tambah_barang = new pos();
                $tambah_barang_proses = $tambah_barang->tambah_barang($kbarang, $nbarang, $mbarang, $katbarang, $supply, $stokawal, $satuanprdk, $hbeli, $hjual, $size, $warnaprdk, $catat);


			}

	?>