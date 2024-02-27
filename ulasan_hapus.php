<?php
$id = $_GET['id'];
$query = mysqli_query($koneksi, "DELETE FROM ulasan_buku WHERE id_ulasan=$id");
?>
<script>
    alert('Hapus Data Berhasil');
    location.href = "index.php?page=ulasan";
</script>