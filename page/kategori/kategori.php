
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2><center>
                                DATA KATEGORI
                            </h2></center>
                    	</div>

                        <div class="body">
                           <table class="table table-striped table-bordered small">
                                    
                                    <thead>
                                        <tr>
                                        	<th><center>No</center></th>
                                            <th><center>Nama Kategori</center></th>
                                            <th><center>Deskripsi</center></th>
                                            <th><center>Aksi</center></th>
                                            
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                    
                                    	<?php 

                                    			$no = 1;
                                                $kategori = new pos();
                                                $tampil = $kategori->tampil_di_kategori();

                                    			while ($data = mysqli_fetch_assoc($tampil)) {

                                    	?> 	

                                      <tr>
                                            <td><?php echo $no++; ?>.</td>
                                            <td><?php echo $data['kategori_brg'] ?></td>
                                            <td><?php echo $data['deskripsi'] ?></td>
                                            
                                           
                                            <td>
												<center>
												<a href="?page=kategori&aksi=ubah&id=<?php echo $data['kode_kategori'] ?>" class="btn btn-primary">Ubah</a>

                                            	<a onclick="return confirm('Apakah Anda yakin ingin menghapus data ini ?')" href="?page=kategori&aksi=hapus&id=<?php echo $data['kode_kategori'] ?>" class="btn btn-danger">Hapus</a>

                                                <a href="?page=kategori&aksi=detail&id=<?php echo $data['kode_kategori'] ?>" class="btn btn-primary">Detail</a>
                                                </center>
                                            </td>
                                      </tr>

                                      <?php } ?>

                                 </tbody>

                            
                            </table>
                        

                            <a href="?page=kategori&aksi=tambah" class="btn btn-primary">Tambah Kategori</a> -
                            
