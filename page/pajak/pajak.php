
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2><center>
                                DATA PAJAK
                            </h2></center>
                    	</div>

                        <div class="body">
                           <table class="table table-striped table-bordered small">
                                    
                                    <thead>
                                        <tr>
                                        	<th><center>No</center></th>
                                            <th><center>Nama Pajak</center></th>
                                            <th><center>Nilai</center></th>
                                            <th><center>Aksi</center></th>
                                            
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                    
                                    	<?php 

                                    			$no = 1;
                                                $kategori = new pos();
                                                $tampil = $kategori->tampil_di_pajak();

                                    			while ($data = mysqli_fetch_assoc($tampil)) {

                                    	?> 	

                                      <tr>
                                            <td><?php echo $no++; ?>.</td>
                                            <td><?php echo $data['nama_pajak'] ?></td>
                                            <td><?php echo $data['nilai'] ?></td>
                                            
                                           
                                            <td>
												<center>
												<a href="?page=pajak&aksi=ubah&id=<?php echo $data['kode_pajak'] ?>" class="btn btn-primary">Ubah</a>

                                            	<a onclick="return confirm('Apakah Anda yakin ingin menghapus data ini ?')" href="?page=pajak&aksi=hapus&id=<?php echo $data['kode_pajak'] ?>" class="btn btn-danger">Hapus</a>
                                                </center>
                                            </td>
                                      </tr>

                                      <?php } ?>

                                 </tbody>

                            
                            </table>
                        

                            <a href="?page=pajak&aksi=tambah" class="btn btn-primary">Tambah Pajak</a> -
                            
