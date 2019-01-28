<?php 
class pos 
{
    public function __construct() 
    {
        $this->koneksi = mysqli_connect("localhost", "root", "", "db_pos");

        if (mysqli_connect_error()){
            die( "fail kamisama  "
                .mysqli_connect_error())
                .mysqli_connect_errno ();
        }
    }

    //page barang
    public function tampil_barang()
    {
        $perintah = "SELECT kode_brg, nama_brg, merk_brg, tb_kategori.kategori_brg, supplier, jml_stok, satuan, harga_beli, harga_jual, ukuran, warna, catatan FROM tb_barang INNER JOIN tb_kategori ON tb_barang.kode_kategori=tb_kategori.kode_kategori";
        $res = mysqli_query($this->koneksi, $perintah);

        return $res;
    }

    public function tampil_kategori()
    {
        $perintah = "SELECT * FROM tb_kategori";
        $res = mysqli_query($this->koneksi, $perintah);
        return $res;
    }

    public function tambah_barang($kbarang, $nbarang, $mbarang, $katbarang, $supply, $stokawal, $satuanprdk, $hbeli, $hjual, $size, $warnaprdk, $catat)
    {
        $perintah = "INSERT INTO tb_barang values(null, '$nbarang', '$mbarang', '$katbarang', '$supply', '$stokawal', '$satuanprdk', '$hbeli', '$hjual', '$size', '$warnaprdk', '$catat')";
        // null karena msh auto increment
        $res = mysqli_query($this->koneksi, $perintah);
        if ($res) {
                    echo "<script>
							alert('Data Berhasil Disimpan');
							window.location.href='?page=barang';
						</script>"; 
        }
    }


     public function tampil_barang_ubah($kbarang)
     {
         $perintah = "SELECT kode_brg, nama_brg, merk_brg,tb_kategori.kode_kategori, tb_kategori.kategori_brg, supplier, jml_stok, satuan, harga_beli, harga_jual, ukuran, warna, catatan FROM tb_barang INNER JOIN tb_kategori ON tb_barang.kode_kategori=tb_kategori.kode_kategori WHERE kode_brg = '$kbarang'";
         $res = mysqli_query($this->koneksi, $perintah);
        return $res;
     }

    public function ubah_barang($nbarang, $mbarang, $katbarang, $supply, $stokawal, $satuanprdk, $hbeli, $hjual, $size, $warnaprdk, $catat, $kbarang)
    {
        $perintah = "UPDATE tb_barang SET nama_brg='$nbarang', merk_brg='$mbarang', kode_kategori='$katbarang', supplier='$supply', jml_stok='$stokawal', satuan='$satuanprdk', harga_beli='$hbeli', harga_jual='$hjual', ukuran='$size',warna='$warnaprdk', catatan='$catat' WHERE kode_brg='$kbarang'";

        $res = mysqli_query($this->koneksi, $perintah);

        if ($res) {
            echo "<script>
                    alert('Data Berhasil Diubah');
                    window.location.href='?page=barang';
                </script>"; 
        }
    }

    public function hapus_barang($kbarang)
    {
        $perintah = "DELETE FROM tb_barang WHERE kode_brg ='$kbarang'";
        $res = mysqli_query($this->koneksi, $perintah);

        if ($res) {
            echo "<script>
                    alert('Data Berhasil Dihapus');
                    window.location.href='?page=barang';
                </script>"; 
        }
    }


    public function detail_barang($kbarang)
    {
        $perintah = "SELECT kode_brg, nama_brg, merk_brg,tb_kategori.kode_kategori, tb_kategori.kategori_brg, supplier, jml_stok, satuan, harga_beli, harga_jual, ukuran, warna, catatan FROM tb_barang INNER JOIN tb_kategori ON tb_barang.kode_kategori=tb_kategori.kode_kategori WHERE kode_brg = '$kbarang'";
        $res = mysqli_query($this->koneksi, $perintah);

        return $res;    
    }

    // page kategori
    public function tampil_di_kategori()
    {
        $perintah = "SELECT * FROM tb_kategori";
        $res = mysqli_query($this->koneksi, $perintah);

        return $res;
    }

    public function tambah_kategori($kategori, $deskripsi)
    {
        $perintah = "INSERT INTO tb_kategori values(null, '$kategori', '$deskripsi')";
        // null karena msh auto increment
        $res = mysqli_query($this->koneksi, $perintah);
        if ($res) {
                    echo "<script>
							alert('Data Berhasil Disimpan');
							window.location.href='?page=kategori';
						</script>"; 
        }
    }

    public function tampil_kategori_ubah($kkategori)
    {
        $perintah = "SELECT * FROM tb_kategori WHERE kode_kategori ='$kkategori'";
        $res = mysqli_query($this->koneksi, $perintah);
        return $res;
    }

    public function ubah_kategori($kategori,$kkategori,$deskripsi)
    {
        $perintah = "UPDATE tb_kategori SET kategori_brg='$kategori', deskripsi='$deskripsi' WHERE kode_kategori='$kkategori'";
        $res = mysqli_query($this->koneksi, $perintah);
        if ($res) {
                    echo "<script>
							alert('Data Berhasil Diubah');
							window.location.href='?page=kategori';
						</script>"; 
        }
    }

    public function hapus_kategori($kkategori)
    {
        $perintah = "DELETE FROM tb_kategori WHERE kode_kategori = '$kkategori'";
        $res = mysqli_query($this->koneksi, $perintah);

        if ($res) {
            echo "<script>
                    alert('Data Berhasil Dihapus');
                    window.location.href='?page=kategori';
                </script>"; 
        }
    }

    public function detail_kategori($kkategori)
    {
        $perintah = "SELECT * FROM tb_kategori WHERE kode_kategori ='$kkategori'";
        $res = mysqli_query($this->koneksi, $perintah);

        return $res;    
    }


    // page diskon
    public function tampil_di_diskon()
    {
        $perintah = "SELECT * FROM tb_diskon";
        $res = mysqli_query($this->koneksi, $perintah);

        return $res;
    }

    public function tambah_diskon($ndiskon, $nilai, $rupiah, $deskripsi)
    {
        $perintah = "INSERT INTO tb_diskon values(null, '$ndiskon', '$nilai', '$rupiah', '$deskripsi')";
        // null karena msh auto increment
        $res = mysqli_query($this->koneksi, $perintah);
        if ($res) {
                    echo "<script>
							alert('Data Berhasil Disimpan');
							window.location.href='?page=diskon ';
						</script>"; 
        }
    }

    public function tampil_diskon_ubah($kdiskon)
    {
        $perintah = "SELECT * FROM tb_diskon WHERE kode_diskon = '$kdiskon'";
        $res = mysqli_query($this->koneksi, $perintah);
        return $res;
    }

    public function ubah_diskon($kdiskon, $ndiskon, $nilai, $rupiah, $deskripsi)
    {
        $perintah = "UPDATE tb_diskon SET nama_diskon='$ndiskon', nilai='$nilai', rupiah='$rupiah', deskripsi='$deskripsi' WHERE kode_diskon='$kdiskon'";
        $res = mysqli_query($this->koneksi, $perintah);
        if ($res) {
                    echo "<script>
							alert('Data Berhasil Diubah');
							window.location.href='?page=diskon ';
						</script>"; 
        }
    }

    public function hapus_diskon($kdiskon)
    {
        $perintah = "DELETE FROM tb_diskon WHERE kode_diskon ='$kdiskon'";
        $res = mysqli_query($this->koneksi, $perintah);

        if ($res) {
            echo "<script>
                    alert('Data Berhasil Dihapus');
                    window.location.href='?page=diskon ';
                </script>"; 
        }
    }

    public function detail_diskon($kdiskon)
    {
        $perintah = "SELECT * FROM tb_diskon WHERE kode_diskon ='$kdiskon'";
        $res = mysqli_query($this->koneksi, $perintah);

        return $res;    
    }

    // page pajak
    public function tampil_di_pajak()
    {
        $perintah = "SELECT * FROM tb_pajak";
        $res = mysqli_query($this->koneksi, $perintah);

        return $res;
    }

    public function tambah_pajak($npajak, $nilai)
    {
        $perintah = "INSERT INTO tb_pajak values(null, '$npajak', '$nilai')";
        // null karena msh auto increment
        $res = mysqli_query($this->koneksi, $perintah);
        if ($res) {
                    echo "<script>
							alert('Data Berhasil Disimpan');
							window.location.href='?page=pajak ';
						</script>"; 
        }
    }

    public function tampil_pajak_ubah($kpajak)
    {
        $perintah = "SELECT * FROM tb_pajak WHERE kode_pajak = '$kpajak'";
        $res = mysqli_query($this->koneksi, $perintah);
        return $res;
    }

    public function ubah_pajak($kpajak, $npajak, $nilai)
    {
        $perintah = "UPDATE tb_pajak SET nama_pajak='$npajak', nilai='$nilai' WHERE kode_pajak='$kpajak'";
        $res = mysqli_query($this->koneksi, $perintah);
        if ($res) {
                    echo "<script>
							alert('Data Berhasil Diubah');
							window.location.href='?page=pajak ';
						</script>"; 
        }
    }

    public function hapus_pajak($kpajak)
    {
        $perintah = "DELETE FROM tb_pajak WHERE kode_pajak ='$kpajak'";
        $res = mysqli_query($this->koneksi, $perintah);

        if ($res) {
            echo "<script>
                    alert('Data Berhasil Dihapus');
                    window.location.href='?page=pajak ';
                </script>"; 
        }
    }

    // page karyawan
    public function tampil_di_karyawan()
    {
        $perintah = "SELECT * FROM tb_karyawan";
        $res = mysqli_query($this->koneksi, $perintah);

        return $res;
    }

    public function tambah_karyawan($nama, $alamat, $kota, $telp, $email, $jabatan, $catatan)
    {
        $perintah = "INSERT INTO tb_karyawan values(null, '$nama', '$alamat', '$kota', '$telp', '$email', '$jabatan', '$catatan')";
        // null karena msh auto increment
        $res = mysqli_query($this->koneksi, $perintah);
        if ($res) {
                    echo "<script>
							alert('Data Berhasil Disimpan');
							window.location.href='?page=karyawan ';
						</script>"; 
        }
    }

    public function tampil_karyawan_ubah($kkaryawan)
    {
        $perintah = "SELECT * FROM tb_karyawan WHERE kode_karyawan = '$kkaryawan'";
        $res = mysqli_query($this->koneksi, $perintah);
        return $res;
    }


    public function ubah_karyawan($nama, $alamat, $kota, $telp, $email, $jabatan, $catatan, $kkaryawan)
    {
        $perintah = "UPDATE tb_karyawan SET nama='$nama', alamat='$alamat', kota='$kota', no_telp='$telp', email='$email', jabatan='$jabatan',catatan='$catatan' WHERE kode_karyawan='$kkaryawan'";
        $res = mysqli_query($this->koneksi, $perintah);
        if ($res) {
                    echo "<script>
							alert('Data Berhasil Disimpan');
							window.location.href='?page=karyawan ';
						</script>";  
        }
    }

    public function hapus_karyawan($kkaryawan)
    {
        $perintah = "DELETE FROM tb_karyawan WHERE kode_karyawan ='$kkaryawan'";
        $res = mysqli_query($this->koneksi, $perintah);

        if ($res) {
            echo "<script>
                    alert('Data Berhasil Dihapus');
                    window.location.href='?page=karyawan ';
                </script>"; 
        }
    }

    public function detail_karyawan($kkaryawan)
    {
        $perintah = "SELECT * FROM tb_karyawan WHERE kode_karyawan='$kkaryawan'";
        $res = mysqli_query($this->koneksi, $perintah);

        return $res;    
    }

    // page pelanggan
    public function tampil_di_pelanggan()
    {
        $perintah = "SELECT * FROM tb_pelanggan";
        $res = mysqli_query($this->koneksi, $perintah);

        return $res;
    }

    public function tambah_pelanggan($nama, $alamat, $kota, $telp, $email,$nilai, $rupiah, $status_anggota, $catatan)
    {
        $perintah = "INSERT INTO tb_pelanggan values(null, '$nama', '$alamat', '$kota', '$telp', '$email', '$nilai', '$rupiah', '$status_anggota', '$catatan')";
        // null karena msh auto increment
        $res = mysqli_query($this->koneksi, $perintah);
        if ($res) {
                    echo "<script>
							alert('Data Berhasil Disimpan');
							window.location.href='?page=pelanggan ';
						</script>"; 
        }
    }

    public function tampil_pelanggan_ubah($kpelanggan)
    {
        $perintah = "SELECT * FROM tb_pelanggan WHERE kode_pelanggan = '$kpelanggan'";
        $res = mysqli_query($this->koneksi, $perintah);
        return $res;
    }

    public function ubah_pelanggan($nama, $alamat, $kota, $telp, $email,$nilai, $rupiah, $status_anggota, $catatan, $kpelanggan)
    {
        $perintah = "UPDATE tb_pelanggan SET nama='$nama', alamat='$alamat', kota='$kota', no_telp='$telp', email='$email', diskon_nilai='$nilai', diskon_rupiah='$rupiah', status_anggota='$status_anggota', catatan='$catatan' WHERE kode_pelanggan='$kpelanggan'";
        $res = mysqli_query($this->koneksi, $perintah);
        if ($res) {
                    echo "<script>
							alert('Data Berhasil Disimpan');
							window.location.href='?page=pelanggan ';
						</script>";  
        }
    }

    public function hapus_pelanggan($kpelanggan)
    {
        $perintah = "DELETE FROM tb_pelanggan WHERE kode_pelanggan ='$kpelanggan'";
        $res = mysqli_query($this->koneksi, $perintah);

        if ($res) {
            echo "<script>
                    alert('Data Berhasil Dihapus');
                    window.location.href='?page=pelanggan ';
                </script>"; 
        }
    }

    public function detail_pelanggan($kpelanggan)
    {
        $perintah = "SELECT * FROM tb_pelanggan WHERE kode_pelanggan='$kpelanggan'";
        $res = mysqli_query($this->koneksi, $perintah);

        return $res;    
    }

}

    

?>