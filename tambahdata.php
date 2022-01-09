<?php
require 'koneksi.php';
if (isset($_POST["submit"])) {

    if (tambah($_POST) > 0) {
        echo "berhasil";
    } else {
        echo "gagal!";
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="tambahdata.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menambah data Karyawan</title>
</head>

<body>
    <div class="container">
        <h1>Tambah Data</h1>
        <form action="" method="post">
            <ul>
                <li>
                    <label for="name">Nama Karyawan</label>
                    <input type="text" name="name">
                </li>
                <li>
                    <label for="email">Email Karyawan</label>
                    <input type="text" name="email">
                </li>
                <li>
                    <label for="address">Alamat Karyawan</label>
                    <input type="text" name="address">
                </li>
                <li>
                    <label for="gender">Gender</label>
                    <select name="gender" size="1">
                        <option>Pria</option>
                        <option>Wanita</option>
                    </select>
                </li>
                <li>
                    <label for="position">Posisi Karyawan : </label>
                    <input type="text" name="position">
                </li>
                <li>
                    <label for="status">Status Karyawan</label>
                    <select name="status" size="1">
                        <option>Part Time</option>
                        <option>Full Time</option>
                    </select>
                </li>
                <button type="submit" name="submit">
                    Tambah Data
                </button>
            </ul>
        </form>
    </div>
</body>

</html>