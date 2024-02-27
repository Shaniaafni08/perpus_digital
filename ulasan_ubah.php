<h1 class="mt-4">Ulasan Buku</h1>
<div class="card">
    <div class="card-body">
    <div class="row">
    <div class="col-md-12">
       <form method="post">
        <?php
        $id = $_GET['id'];
        if(isset($_POST['submit'])) {
            $user = $_SESSION['user']['id_user'];
            $judul = $_POST['id_buku'];
            $ulasan = $_POST['ulasan'];
            $rating = $_POST['rating'];
            $query = mysqli_query($koneksi, "UPDATE ulasan_buku set id_user='$user', id_buku='$judul', ulasan='$ulasan', rating='$rating' where id_ulasan=$id");

            if($query) {
                echo '<script>alert("Ubah Data Berhasil")</script>';
            }else{
                echo '<script>alert("Ubah Data Gagal")</script>';
            }
        }
        $query = mysqli_query($koneksi, "SELECT*FROM ulasan_buku LEFT JOIN user ON  ulasan_buku.id_user = user.id_user LEFT JOIN buku ON  ulasan_buku.id_buku = buku.id_buku");
        $data = mysqli_fetch_array($query);
        ?>
        <div class="row mb-3">
            <div class="col-md-2">Buku</div>
            <div class="col-md-8">
                <select name="id_buku" class="form-control">
                    <?php
                    $buk = mysqli_query($koneksi, "SELECT*FROM buku");
                    while($buku = mysqli_fetch_array($buk)) {
                        ?>
                        <option value="<?php echo $buku['id_buku']; ?>" <?php if($buku['id_buku'] == $data['id_buku']) echo 'selected'?>><?php echo $buku['judul'];?></option>
                        <?php
                    }
                    ?>
                </select>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-2">Ulasan</div>
            <div class="col-md-8"><input type="text" value="<?php echo $data['ulasan']; ?>" class="form-control" name="ulasan"></div>
    </div>
    <div class="row mb-3">
        <div class="col-md-2">Rating</div>
        <div class="col-md-8">
            <select name="rating" class="form-control">
                <?php
                for ($i=1; $i <= 5 ; $i++) { 
                    ?>
                    <option value="<?php echo $i; ?>" <?php if($i == $data['rating']) echo 'selected'?>><?php echo $i;?></option>
                    <?php
                }
                ?>
            </select>
        </div>
    </div>
        <div class="row">
            <div class="col-md-2"></div>
                <div class="col-md-8">
                    <button type="submit" class="btn btn-primary" name="submit" value="submit">Simpan</button>
                    <button type="reset" class="btn btn-secondary">Reset</button>
                    <a href="?page=ulasan" class="btn btn-danger">Kembali</a>
            </div>
        </div>
       </form>
    </div>
</div>
    </div>
</div>