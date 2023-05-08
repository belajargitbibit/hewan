<?php
require 'functions.php';
$hewan = query("SELECT * FROM data_hewan");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>
<body>
    <h1>Daftar Hewan</h1>
    <a href="tambah.php">Tambah Data Hewan</a>
    <br></br>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Gambar</th>
            <th>Nama</th>
            <th>Kelompok</th>
            <th>Jenis</th>
            <th>Gambar</th>
        </tr>


<?php $i =1; ?>
        <?php foreach ($hewan as $row) : ?>
        <tr>
            <td><?= $i ?></td>
            <td>
                <a href="ubah.php?id=<?= $row['nama']; ?>">ubah</a>
                <a href="hapus.php?id=<?= $row['nama']; ?>">hapus</a>
            </td>
            <td>
                <img src="img/<?= $row['gambar']  ?>" width="50">
            </td>
            <td><?= $row['nama']  ?></td>
            <td><?= $row['kelompok']  ?></td>
            <td><?= $row['jenis']  ?></td>
            <td><?= $row['gambar']  ?></td>
        </tr>
        <?php $i++; ?>
        <?php endforeach; ?>
    </table>

</body>
</html>
