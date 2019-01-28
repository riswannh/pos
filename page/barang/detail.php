
<?php

   $kbarang = $_GET['id'];
    
   $detail = new pos();
   $detail_proses = $detail->detail_barang($kbarang);

   $tampil = mysqli_fetch_assoc($detail_proses);

?>

        <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                DETAIL PRODUK BARANG & JASA
                            </h2>
             
             <div class="form-group">
             <table class="table">
                <tr>
                    <td>Kode Barang : <?php echo $tampil['kode_brg']; ?></td>
                </tr>
                <tr>
                    <td>Nama Barang : <?php echo $tampil['nama_brg']; ?></td>
                </tr>
                <tr>
                    <td>Merk Barang : <?php echo $tampil['merk_brg']; ?></td>
                </tr>
                <tr>
                    <td>Kategori : <?php echo $tampil['kategori_brg']; ?></td>
                </tr>
                <tr>
                    <td>Supplier : <?php echo $tampil['supplier']; ?></td>
                </tr>
                <tr>
                    <td>Jumlah Stock : <?php echo $tampil['jml_stok']; ?></td>
                </tr>
                <tr>
                    <td>Satuan : <?php echo $tampil['satuan']; ?></td>
                </tr>
                <tr>
                    <td>Harga Beli : <?php echo $tampil['harga_beli']; ?></td>
                </tr>
                <tr>
                    <td>Harga Jual : <?php echo $tampil['harga_jual']; ?></td>
                </tr>
                <tr>
                    <td>Ukuran : <?php echo $tampil['ukuran']; ?></td>
                </tr>
                <tr>
                    <td>Warna : <?php echo $tampil['warna']; ?></td>
                </tr>
                <tr>
                    <td>Catatan : <?php echo $tampil['catatan']; ?></td>
                </tr>
                
                
            </table>

        </div>
                </div>
                    </div>
                        </div>                            
            </form>
