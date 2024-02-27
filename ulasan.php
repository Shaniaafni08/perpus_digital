<h1 class="mt-4">Ulasan Buku</h1>
<div class="card">
    <div class="card-body">
    <div class="row">
    <div class="col-md-12">
        <a href="?page=ulasan_tambah" class="btn btn-primary">Tambah Data</a>
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <tr>
                <th>No</th>
                <th>User</th>
                <th>Buku</th>
                <th>Ulasan</th>
                <th>rating</th>
                <th>Aksi</th>
            </tr>
            <?php
            $i = 1;
            $query= mysqli_query($koneksi, "SELECT*FROM ulasan_buku left join user on user.id_user = ulasan_buku.id_user left join buku on buku.id_buku = ulasan_buku.id_buku ");
            while($data = mysqli_fetch_array($query)){
                ?>
                <tr>
                    <td><?php echo $i++; ?></td>
                    <td><?php echo $data['username']; ?></td>
                    <td><?php echo $data['judul']; ?></td>
                    <td><?php echo $data['ulasan']; ?></td>
                    <td><?php echo $data['rating']; ?></td>
                    <td>
                        <?php
                        $user = null;
                        if (isset($_SESSION['user']['id_user'])) {
                            $user = $_SESSION['user']['id_user'];
                        }
                        if ($data['id_user'] == $user) {
                            ?>
                        <a href="?page=ulasan_ubah&id=<?php echo $data['id_ulasan']; ?>" class="btn btn-info">Ubah</a>
                        <a href="?page=ulasan_hapus&id=<?php echo $data['id_ulasan']; ?>" class="btn btn-danger">Hapus</a>
                    <?php
                        }
                        ?>
                </tr>
                <?php
            }
            ?>
        </table>
    </div>
</div>
    </div>
</div>