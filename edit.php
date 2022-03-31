<?php
$konek = mysqli_connect("localhost", "root", "", "dio");

$id = $_GET["id"];
$dio = mysqli_query($konek, "SELECT * FROM dio_066 where id=$id");
$result = mysqli_fetch_assoc($dio);
$data = $result;

if (isset($_POST["submit"])) {
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $posisi = $_POST["posisi"];
    $club = $_POST["club"];
    $gaji = $_POST["gaji"];
    $insert = mysqli_query($konek, "UPDATE dio_066 SET nama='$nama', email='$email', posisi='$posisi', club='$club', gaji='$gaji' where id=$id");
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
            <h1>Edit Data Baru</h1>
            <form method="post" action="">
                <input type="hidden" value="<?php echo $data['id']; ?>">
                <p><input type="text" name="nama" placeholder="Masukkan Nama" value="<?php echo $data['nama']; ?>" required /></p>
                <p><input type="text" name="email" placeholder="Masukkan Email" value="<?php echo $data['email']; ?>" required /></p>
                <p><input type="text" name="posisi" placeholder="Masukkan Posisi" value="<?php echo $data['posisi']; ?>" required /></p>
                <p><input type="text" name="club" placeholder="Masukkan Club" value="<?php echo $data['club']; ?>" required /></p>
                <p><input type="text" name="gaji" placeholder="Masukkan Gaji" value="<?php echo $data['gaji']; ?>" required /></p>
                <p><button type="submit" name="submit">submit</button></p>
            </form>
        </div>
    </div>
</body>

</html>