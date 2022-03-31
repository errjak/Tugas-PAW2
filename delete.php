<?php
$konek = mysqli_connect("localhost", "root", "", "dio");
$id = $_GET["id"];
$dio = mysqli_query($konek,"DELETE FROM dio_066 where id = $id");
$hasil = mysqli_affected_rows($konek);
if ($hasil > 0) {
    echo "<script>
                alert('sukses');
        </script>";
} else {
    echo "<script>
                alert('gagal');
        </script>";
}
?>