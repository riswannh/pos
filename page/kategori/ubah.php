
<?php 

$kkategori =  $_GET['id'];

$tampil_edit = new pos();
$tampil_edit_proses = $tampil_edit->tampil_kategori_ubah($kkategori);

$tampil = mysqli_fetch_assoc($tampil_edit_proses);

?>


<div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <br>
                    <h2>
                    <center>
                        UBAH KATEGORI
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


                    <label for="">Nama Kategori :</label>

                    <div class="form-group">
                                <div class="form-line">
                                    <input type="text" name="kategori" value="<?php echo $tampil['kategori_brg']; ?>" class="form-control"  />
                                </div>
                    </div>

                    <label for="">Deskripsi :</label>
                            <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="deskripsi" class="form-control" placeholder="Ini Untuk Pakaian" value="<?php echo $tampil['deskripsi']; ?>" />
                                        </div>
                            </div>

                    <input type="submit" name="simpan" value="simpan" class="btn btn-primary">

                </form>

<?php

    if (isset($_POST['simpan']))	{
        $kategori = $_POST['kategori'];
        $deskripsi = $_POST['deskripsi'];
        
       $edit = new pos();
       $edit_proses = $edit->ubah_kategori($kategori, $kkategori, $deskripsi);

       

    }

?>