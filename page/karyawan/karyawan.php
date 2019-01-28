
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2><center>
                                DATA KARYAWAN
                            </h2></center>
                    	</div>

                        <div class="body">
                           <table class="table table-striped table-bordered small">
                                    
                                    <thead>
                                        <tr>
                                        	<th><center>No</center></th>
                                            <th><center>Nama</center></th>
                                            <th><center>No. Telpon</center></th>
                                            <th><center>Jabatan</center></th>
                                            <th><center>Aksi</center></th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                    
                                    	<?php 

                                    			$no = 1;
                                                $karyawan = new pos();
                                                $tampil = $karyawan->tampil_di_karyawan();

                                    			while ($data = mysqli_fetch_assoc($tampil)) {

                                    	?> 	

                                      <tr>
                                            <td><?php echo $no++; ?>.</td>
                                            <td><?php echo $data['nama'] ?></td>
                                            <td><?php echo $data['no_telp'] ?></td>
                                            <td><?php echo $data['jabatan'] ?></td>
                                            
                                           
                                            <td>
												<center>
												<a href="?page=karyawan&aksi=ubah&id=<?php echo $data['kode_karyawan'] ?>" class="btn btn-primary">Ubah</a>

                                            	<a onclick="return confirm('Apakah Anda yakin ingin menghapus data ini ?')" href="?page=karyawan&aksi=hapus&id=<?php echo $data['kode_karyawan'] ?>" class="btn btn-danger">Hapus</a>
                                            	
                                                <a href="?page=karyawan&aksi=detail&id=<?php echo $data['kode_karyawan'] ?>" class="btn btn-primary">Detail</a>
                                                
                                                </center>
                                            </td>
                                      </tr>

                                      <?php } ?>

                                 </tbody>

                            
                            </table>
                        

                            <a href="?page=karyawan&aksi=tambah" class="btn btn-primary">Tambah Karyawan</a> -
                            
