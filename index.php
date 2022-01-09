<?php
require 'koneksi.php';
$karyawan = query("SELECT * FROM karyawan");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum 9</title>
</head>

<body>
    <div class="container">
        <h1>Data Karyawan</h1>
        <br>
        <div class="tombol">
            <a href="tambahdata.php">Add data</a>
        </div>
        <table class="tabel" border="1" cellpadding="10" cellspacing="10">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Gender</th>
                    <th>Position</th>
                    <th>Status</th>
                    <th>Action</th>

                </tr>
            </thead>
            <?php foreach ($karyawan as $item) : ?>
            <tbody>
                <tr>
                    <td><?= $item["id"] ?></td>
                    <td><?= $item["name"] ?></td>
                    <td><?= $item["email"] ?></td>
                    <td><?= $item["address"] ?></td>
                    <td><?= $item["gender"] ?></td>
                    <td><?= $item["position"] ?></td>
                    <td><?= $item["status"] ?></td>
                    <td><a href="hapusdata.php?id=<?= $item["id"]; ?>"
                            onclick="return confirm('Are you sure?')">Delete</a>
                    </td>
                </tr>
            </tbody>
            <?php endforeach ?>
        </table>
        <div>
</body>

</html>