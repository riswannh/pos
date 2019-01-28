
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2><center>
                                DATA PELANGGAN
                            </h2></center>
                    	</div>

                        <div class="body">
                           <table class="table table-striped table-bordered small">
                                    
                                    <thead>
                                        <tr>
                                        	<th><center>No</center></th>
                                            <th><center>Nama</center></th>
                                            <th><center>No. Telpon</center></th>
                                            <th><center>Kota</center></th>
                                            <th><center>Aksi</center></th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                    
                                    	<?php 

                                    			$no = 1;
                                                $pelanggan = new pos();
                                                $tampil = $pelanggan->tampil_di_pelanggan();

                                    			while ($data = mysqli_fetch_assoc($tampil)) {

                                    	?> 	

                                      <tr>
                                            <td><?php echo $no++; ?>.</td>
                                            <td><?php echo $data['nama'] ?></td>
                                            <td><?php echo $data['no_telp'] ?></td>
                                            <td><?php echo $data['kota'] ?></td>
                                            
                                           
                                            <td>
												<center>
												<a href="?page=pelanggan&aksi=ubah&id=<?php echo $data['kode_pelanggan'] ?>" class="btn btn-primary">Ubah</a>

                                            	<a onclick="return confirm('Apakah Anda yakin ingin menghapus data ini ?')" href="?page=pelanggan&aksi=hapus&id=<?php echo $data['kode_pelanggan'] ?>" class="btn btn-danger">Hapus</a>
                                            	
                                                <a href="?page=pelanggan&aksi=detail&id=<?php echo $data['kode_pelanggan'] ?>" class="btn btn-primary">Detail</a>
                                                
                                                </center>
                                            </td>
                                      </tr>

                                      <?php } ?>

                                 </tbody>

                            
                            </table>
                        

                            <a href="?page=pelanggan&aksi=tambah" class="btn btn-primary">Tambah Pelanggan</a> -
                            
