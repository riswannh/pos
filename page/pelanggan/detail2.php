                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                DATA BARANG & JASA
                            </h2>
                        </div>
                        <div class="body">
                           <table class="table table-striped table-bordered small">

                                    <thead>

                                        <tr>
                                            <th><center>Kode</center></th>
                                            <th><center>Nama </center></th>
                                            <th><center>Merk</center></th>
                                            <th><center>Kategori</center></th>
                                            <th><center>Supplier</center></th>
                                            <th><center>Stok</center></th>
                                            <th><center>Satuan</center></th>
                                            <th><center>Modal</center></th>
                                            <th><center>Hpp</center></th>
                                            <th><center>Ukuran</center></th>
                                            <th><center>Warna</center></th>
                                            <th><center>Catatan</center></th>
                                        </tr>

                                    </thead>
                                    
                                    <tbody>
                                    
                                        <?php 

                                                
                                                $sql = $koneksi->query("select * from tb_barang");

                                                while ($data = $sql->fetch_assoc()) {

                                        ?>  

                                      <tr>
                                           
                                            <td><center><?php echo $data['kode_brg'] ?></center></td>
                                            <td><center><?php echo $data['nama_brg'] ?></center></td>
                                            <td><center><?php echo $data['merk_brg'] ?></center></td>
                                            <td><center><?php echo $data['kategori_brg'] ?></center></td>
                                            <td><center><?php echo $data['supplier'] ?></center></td>
                                            <td><center><?php echo $data['jml_stok'] ?></center></td>
                                            <td><center><?php echo $data['satuan'] ?></center></td>
                                            <td><center><?php echo $data['harga_beli'] ?></center></td>
                                            <td><center><?php echo $data['harga_jual'] ?></center></td>
                                            <td><center><?php echo $data['ukuran'] ?></center></td>
                                            <td><center><?php echo $data['warna'] ?></center></td>
                                            <td><center><?php echo $data['catatan'] ?></center></td>

                                            

                                      </tr>

                                      <?php } ?>

                                
                                 </tbody>

                            </table>

                            <a href="?page=barang&aksi=tutup" class="btn btn-primary">Tutup</a>

                        