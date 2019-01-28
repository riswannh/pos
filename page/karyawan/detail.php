
<?php

   $kkaryawan = $_GET['id'];
    
   $detail = new pos();
   $detail_proses = $detail->detail_karyawan($kkaryawan);

   $tampil = mysqli_fetch_assoc($detail_proses);

?>

        <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                DETAIL KARYAWAN
                            </h2>
             
             <div class="form-group">
             <table class="table">
                <tr>
                    <td>Kode Karyawan : <?php echo $tampil['kode_karyawan']; ?></td>
                </tr>
                <tr>
                    <td>Nama : <?php echo $tampil['nama']; ?></td>
                </tr>
                <tr>
                    <td>Alamat : <?php echo $tampil['alamat']; ?></td>
                </tr>
                <tr>
                    <td>Kota : <?php echo $tampil['kota']; ?></td>
                </tr>
                <tr>
                    <td>No. Telp : <?php echo $tampil['no_telp']; ?></td>
                </tr>
                <tr>
                    <td>E-Mail : <?php echo $tampil['email']; ?></td>
                </tr>
                <tr>
                    <td>Jabatan : <?php echo $tampil['jabatan']; ?></td>
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
