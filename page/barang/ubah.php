
<?php 

		$kbarang =  $_GET['id'];

        $tampil_edit = new pos();
        $tampil_edit_proses = $tampil_edit->tampil_barang_ubah($kbarang);
        
		$tampil = mysqli_fetch_assoc($tampil_edit_proses);

 ?>


<div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                        	<br>
                        	<h2>
                        	<center>
                        		UBAH DATA PRODUK BARANG & JASA
                        	</center>
                            </h2>
                            <br>
                        	
                            <div class="body">

						<form method="POST"> 
							
                            <!-- karena kode barang tidak harusnya diubah -->
							<!-- <label for="">Kode Barang :</label>

							<div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="kbarang" value="<?php echo $tampil['kode_brg']; ?>" class="form-control"  />
                                        </div>
                            </div> -->


                            <label for="">Nama Barang & Jasa :</label>

							<div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="nbarang" value="<?php echo $tampil['nama_brg']; ?>" class="form-control"  />
                                        </div>
                            </div>

                            <label for="">Merk Barang & Jasa :</label>

							<div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="mbarang" value="<?php echo $tampil['merk_brg']; ?>" class="form-control"  />
                                        </div>
                            </div>

                            <label for="">Kategori Barang & Jasa :</label>

							<div class="form-group">
                                <div class="form-line">
                                    <select name="katbarang" class="form-control show-tick">
                                    	<option value="<?php echo $tampil['kode_kategori']; ?>" selected><?php echo $tampil['kategori_brg']; ?></option>
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
                                            <input type="text" name="supply" value="<?php echo $tampil['supplier']; ?>" class="form-control"  />
                                        </div>
                            </div>

                            <label for="">Stok Awal :</label>

							<div class="form-group">
                                        <div class="form-line">
                                            <input type="number" name="stokawal" value="<?php echo $tampil['jml_stok']; ?>" class="form-control"  />
                                        </div>
                            </div>

                            <label for="">Satuan :</label>

                            <div class="form-group">
                                <div class="form-line">
                                    <select name="satuanprdk" class="form-control show-tick">
                                        <option value="Kg" <?php if ($tampil['satuan']=='Kg'){ echo "selected"; }  ?>>Kg</option>
                                        <option value="Gram" <?php if ($tampil['satuan']=='Gram'){ echo "selected"; }  ?>>Gram</option>
                                        <option value="Mtr" <?php if ($tampil['satuan']=='Mtr'){ echo "selected"; }  ?>>Mtr</option>
                                        <option value="Cm" <?php if ($tampil['satuan']=='Cm'){ echo "selected"; }  ?>>Cm</option>
                                        <option value="Pcs" <?php if ($tampil['satuan']=='Pcs'){ echo "selected"; }  ?>>Pcs</option>
                                        <option value="Unit" <?php if ($tampil['satuan']=='Unit'){ echo "selected"; }  ?>>Unit</option>
                                        <option value="Ltr" <?php if ($tampil['satuan']=='Ltr'){ echo "selected"; }  ?>>Ltr</option>
                                        <option value="Koli" <?php if ($tampil['satuan']=='Koli'){ echo "selected"; }  ?>>Koli</option>
                                        <option value="Oz" <?php if ($tampil['satuan']=='Oz'){ echo "selected"; }  ?>>Oz</option>
                                    </select>
                            </div>
                            <br>
                            <br>

                            <label for="">Harga Modal Produk & Jasa :</label>

							<div class="form-group">
                                        <div class="form-line">
                                            <input type="number" name="hbeli" value="<?php echo $tampil['harga_beli']; ?>" class="form-control"  />
                                        </div>
                            </div>	

                            <label for="">Hpp Produk & Jasa :</label>

							<div class="form-group">
                                        <div class="form-line">
                                            <input type="number" name="hjual" value="<?php echo $tampil['harga_jual']; ?>" class="form-control"  />
                                        </div>
                            </div>

                            <label for="">Ukuran / Size :</label>

							<div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="size" value="<?php echo $tampil['ukuran']; ?>" class="form-control"  />
                                        </div>
                            </div>	

                            <label for="">Warna Produk :</label>

							<div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="warnaprdk" value="<?php echo $tampil['warna']; ?>" class="form-control" class="form-control"  />
                                        </div>
                            </div>

                            <label for="">Catatan :</label>

                            <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="catat" value="<?php echo $tampil['catatan']; ?>" class="form-control" class="form-control"  />
                                        </div>
                            </div>		

                            <input type="submit" name="simpan" value="simpan" class="btn btn-primary">

                        </form>

	<?php

			if (isset($_POST['simpan']))	{
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
				
               $edit = new pos();
               $edit_proses = $edit->ubah_barang($nbarang, $mbarang, $katbarang, $supply, $stokawal, $satuanprdk, $hbeli, $hjual, $size, $warnaprdk, $catat, $kbarang);

               

			}

	?>