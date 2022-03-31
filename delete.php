<?php
$konek = mysqli_connect("localhost", "root", "", "dio");
$id = $_GET["id"];
$dio = mysqli_query($konek,"DELETE FROM dio_066 where id = $id");
$hasil = mysqli_affected_rows($konek);
if ($hasil > 0) {
    echo "<script>
                alert('Selamat data anda berhasil dihapus');
        </script>";
} else {
    echo "<script>
                alert('Mohon maaf, Data anda belum berhasil dihapus');
        </script>";
}
?>