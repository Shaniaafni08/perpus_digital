<h1 class="mt-4">Buku</h1>
<div class="card">
    <div class="card-body">
    <div class="row">
    <div class="col-md-12">
       <form method="post">
        <?php
        if(isset($_POST['submit'])) {
            $judul = $_POST['judul'];
            $penulis = $_POST['penulis'];
            $penerbit = $_POST['penerbit'];
            $tahun_terbit = $_POST['tahun_terbit'];
            $jumlah_buku = $_POST['jumlah_buku'];
            $query = mysqli_query($koneksi, "INSERT INTO buku(judul,penulis,penerbit,tahun_terbit,jumlah_buku) values('$judul','$penulis','$penerbit','$tahun_terbit','$jumlah_buku')");

            if($query) {
                echo '<script>alert("Tambah Data Berhasil")</script>';
            }else{
                echo '<script>alert("Tambah Data Gagal")</script>';
            }
        }
        ?>
        <div class="row mb-3">
            <div class="col-md-2">Judul</div>
            <div class="col-md-8"><input type="text" class="form-control" name="judul"></div>
        </div>
        <div class="row mb-3">
            <div class="col-md-2">Penulis</div>
            <div class="col-md-8"><input type="text" class="form-control" name="penulis"></div>
        </div>
        <div class="row mb-3">
            <div class="col-md-2">Penerbit</div>
            <div class="col-md-8"><input type="text" class="form-control" name="penerbit"></div>
        </div>
        <div class="row mb-3">
            <div class="col-md-2">Tahun Terbit</div>
            <div class="col-md-8"><input type="text" class="form-control" name="tahun_terbit"></div>
        </div>
        <div class="row mb-3">
            <div class="col-md-2">Jumlah Buku</div>
            <div class="col-md-8"><input type="text" class="form-control" name="jumlah_buku"></div>
        </div>
        <div class="row">
            <div class="col-md-2"></div>
                <div class="col-md-8">
                    <button type="submit" class="btn btn-primary" name="submit" value="submit">Simpan</button>
                    <button type="reset" class="btn btn-secondary">Reset</button>
                    <a href="?page=buku" class="btn btn-danger">Kembali</a>
            </div>
        </div>
       </form>
    </div>
</div>
    </div>
</div>