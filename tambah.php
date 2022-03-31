<?php
$konek = mysqli_connect("localhost", "root", "", "dio");
if (isset($_POST["submit"])) {
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $posisi = $_POST["posisi"];
    $club = $_POST["club"];
    $gaji = $_POST["gaji"];
    $insert = mysqli_query($konek, "INSERT INTO dio_066 values('', '$nama', '$email', '$posisi', '$club', '$gaji')");
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
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="form">
        <div>
            <h1>Tambahkan Data Baru</h1>
            <form method="post" action="">
                <p><input type="text" name="nama" placeholder="Masukkan Nama" required /></p>
                <p><input type="text" name="email" placeholder="Masukkan Email" required /></p>
                <p><input type="text" name="posisi" placeholder="Masukkan Posisi" required /></p>
                <p><input type="text" name="club" placeholder="Masukkan Club" required /></p>
                <p><input type="text" name="gaji" placeholder="Masukkan Gaji" required /></p>
                <p><button type="submit" name="submit">submit</button></p>
            </form>
        </div>
    </div>
</body>
</html>