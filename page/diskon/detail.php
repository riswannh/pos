
<?php

   $kdiskon = $_GET['id'];
    
   $detail = new pos();
   $detail_proses = $detail->detail_diskon($kdiskon);

   $tampil = mysqli_fetch_assoc($detail_proses);

?>

        <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                DETAIL DISKON
                            </h2>
             
             <div class="form-group">
             <table class="table">
                <tr>
                    <td>Kode Diskon : <?php echo $tampil['kode_diskon']; ?></td>
                </tr>
                <tr>
                    <td>Nama Diskon : <?php echo $tampil['nama_diskon']; ?></td>
                </tr>
                <tr>
                    <td>Nilai : <?php echo $tampil['nilai']; ?> %</td>
                </tr>
                <tr>
                    <td>Rupiah : Rp <?php echo $tampil['nilai']; ?></td>
                </tr>
                <tr>
                    <td>Deskripsi : <?php echo $tampil['deskripsi']; ?></td>
                </tr>
            </table>

        </div>
                </div>
                    </div>
                        </div>                            
            </form>
