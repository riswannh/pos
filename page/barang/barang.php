
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2><center>
                                DATA BARANG & JASA
                            </h2></center>
                    	</div>

                        <div class="body">
                           <table class="table table-striped table-bordered small">
                                    
                                    <thead>
                                        <tr>
                                        	<th><center>No</center></th>
                                            <th><center>Nama </center></th>
                                            <th><center>Merk</center></th>
                                            <th><center>Jumlah</center></th>
                                            <th><center>Satuan</center></th>
                                            <th><center>Hpp</center></th>
                                            <th><center>Aksi</center></th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                    
                                    	<?php 

                                    			$no = 1;
                                                // $sql = $koneksi->query("select * from tb_barang");
                                                $barang = new pos();
                                                $tampil = $barang->tampil_barang();

                                    			while ($data = mysqli_fetch_assoc($tampil)) {

                                    	?> 	

                                      <tr>
                                            <td><?php echo $no++; ?>.</td>
                                            <td><?php echo $data['nama_brg'] ?></td>
                                            <td><?php echo $data['merk_brg'] ?></td>
                                            <td><?php echo $data['jml_stok'] ?></td>
                                            <td><?php echo $data['satuan'] ?></td>
                                            <td><?php echo $data['harga_jual'] ?></td>
                                            
                                           
                                            <td>
												<center>
												<a href="?page=barang&aksi=ubah&id=<?php echo $data['kode_brg'] ?>" class="btn btn-primary">Ubah</a>

                                            	<a onclick="return confirm('Apakah Anda yakin ingin menghapus data ini ?')" href="?page=barang&aksi=hapus&id=<?php echo $data['kode_brg'] ?>" class="btn btn-danger">Hapus</a>
                                            	
                                                <a href="?page=barang&aksi=detail&id=<?php echo $data['kode_brg'] ?>" class="btn btn-primary">Detail</a>
                                                
                                                </center>
                                            </td>
                                      </tr>

                                      <?php } ?>

                                 </tbody>

                            
                            </table>
                        

                            <a href="?page=barang&aksi=tambah" class="btn btn-primary">Tambah Produk</a> -
                            
