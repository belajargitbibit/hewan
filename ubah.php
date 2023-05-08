<?php 
// koneksi
require "functions.php";

$id = $_GET ["id"];

$hewan = query("SELECT * FROM hewan WHERE id = $id");

// cek apakah tombol submit sudah ditekan atau belum?
if (isset($_POST["submit"])) {
       // cek apakah data berhasil ditambahkan atau tidak?
       if (ubah($_POST) > 0){
        echo "
        <script>
        alert('Data Berhasil Diubah');
        document.location.href = 'index.php';
        </script>
        ";
       } else {
        echo "<script>
        alert('Data Gagal Diubah');
        document.location.href = 'index.php';
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
    <title>Halaman Untuk Ubah Data</title>
</head>
<body>
    <h1>Ubah Data Hewan</h1>
    <form action="" method="POST">
     <input type="hidden" name="id" value = "<?= $hewan ["id"]; ?>">
        <ul>
            <li>
                <label for="nama">Nama :</label>
                <input type="text" name="nama" id="nama" required value="<?= $hewan ["nama"]; ?>">
            </li>
            <li>
                <label for="kelompok">Kelompok :</label>
                <input type="text" name="kelompok" id="kelompok" value="<?= $hewan ["kelompok"]; ?>">>
            </li>
            <li>
                <label for="jenis">Jenis :</label>
                <input type="text" name="jenis" id="jenis" value="<?= $hewan ["jenis"]; ?>">>
            </li>
            <li>
                <label for="gambar">Gambar :</label>
                <input type="text" name="gambar" id="gambar" value="<?= $hewan ["gambar"]; ?>">>
            </li>
            <br>
            <br>
            <li>
                <button type="submit" name="submit">Ubah Data</button>
            </li>

        </ul>

    </form>
    
</body>
</html>