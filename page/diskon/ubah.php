
<?php 

$kdiskon =  $_GET['id'];

$tampil_edit = new pos();
$tampil_edit_proses = $tampil_edit->tampil_diskon_ubah($kdiskon);

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
							
							<!-- <label for="">Kode Barang :</label>

							<div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="kbarang" class="form-control"  />
                                        </div>
                            </div> -->

                            <label for="">Nama Diskon :</label>

							<div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="ndiskon" class="form-control" value="<?php echo $tampil['nama_diskon']; ?>"/>
                                        </div>
                            </div>

                            <label for="">Nilai :</label>
                            <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="nilai" class="form-control" value="<?php echo $tampil['nilai']; ?>" />
                                        </div>
                            </div>
                            <label for="">Rupiah :</label>
                            <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="rupiah" class="form-control" value="<?php echo $tampil['rupiah']; ?>"/>
                                        </div>
                            </div>
                            <label for="">Deskripsi :</label>
                            <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="deskripsi" class="form-control" value="<?php echo $tampil['deskripsi']; ?>"/>
                                        </div>
                            </div>


                        <input type="submit" name="simpan" value="Simpan" class="btn btn-primary">

                        </form>

<?php

        if (isset($_POST['simpan']))	{
            $ndiskon = $_POST['ndiskon'];
            $nilai = $_POST['nilai'];
            $rupiah = $_POST['rupiah'];
            $deskripsi = $_POST['deskripsi'];

            $tambah_kategori = new pos();
            $tambah_kategori_proses = $tambah_kategori->ubah_diskon($kdiskon, $ndiskon, $nilai, $rupiah, $deskripsi);


}
?>