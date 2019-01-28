
<?php

   $kkategori  = $_GET['id'];
    
   $detail = new pos();
   $detail_proses = $detail->detail_kategori($kkategori);

   $tampil = mysqli_fetch_assoc($detail_proses);

?>

        <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                DETAIL KATEGORI
                            </h2>
             
             <div class="form-group">
             <table class="table">
                <tr>
                    <td>Nama Kategori : <?php echo $tampil['kategori_brg']; ?></td>
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
