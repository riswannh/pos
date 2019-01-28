
<?php

   $kpelanggan = $_GET['id'];
    
   $detail = new pos();
   $detail_proses = $detail->detail_pelanggan($kpelanggan);

   $tampil = mysqli_fetch_assoc($detail_proses);

?>

        <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                DETAIL PELANGGAN
                            </h2>
             
             <div class="form-group">
             <table class="table">
                <tr>
                    <td>Kode Pelanggan : <?php echo $tampil['kode_pelanggan']; ?></td>
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
                    <td>Diskon <br> 
                    Rupiah : Rp <?php echo $tampil['diskon_rupiah']; ?><br>
                    Nilai : <?php echo $tampil['diskon_nilai']; ?>%</td>
                </tr>
                <tr>
                    <td>Status Anggota : <?php echo $tampil['status_anggota']; ?></td>
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
