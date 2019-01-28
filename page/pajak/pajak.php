<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="card">
        <div class="header">
            <h2>
                <center>
                    DATA PAJAK
            </h2>
            </center>
        </div>

        <div class="body">
        <?php 
            $tampil = new pos();
            $tampil_proses = $tampil->tampil_di_pajak();
            
            $hasil = mysqli_fetch_assoc($tampil_proses);
        ?>

            <label for="">Pajak</label>
            <form action="" method="post">
            <div class="row clearfix">
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                    <div class="form-group form-float">
                        <div class="form-line">
                            <input type="text" name="rupiah" class="form-control" value="<?php echo $hasil['pajak_rupiah'] ?>">
                            <label class="form-label">Rp</label>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                    <div class="form-group form-float">
                        <div class="form-line">
                            <input type="text" name="nilai" class="form-control" value="<?php echo $hasil['pajak_nilai'] ?>">
                            <label class="form-label">%</label>
                        </div>
                    </div>
                </div>
            </div>

            <button type="submit" class="btn btn-primary" name="ubah" value="ubah">Ubah</button>
            <!-- <button type="submit" class="btn btn-primary" name="simpan" value="simpan">Simpan</button> -->
            </form>

            <?php 
            if (isset($_POST['ubah'])) {
                $kpajak = $hasil['kode_pajak'];
                $rupiah = $_POST['rupiah'];
                $nilai = $_POST['nilai'];

                $ubah = new pos();
                $ubah_proses = $ubah->ubah_pajak($kpajak, $rupiah, $nilai);
            }
            ?>