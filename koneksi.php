<?php
$koneksi = mysqli_connect("localhost", "root", "", "praktikum_9");
function query($query)
{
    global $koneksi;
    $data = mysqli_query($koneksi, $query);
    $datakaryawan = [];
    while ($karyawan = mysqli_fetch_assoc($data)) {
        $datakaryawan[] = $karyawan;
    }
    return $datakaryawan;
}
function tambah($data)
{
    global $koneksi;

    $name = $data["name"];
    $email = $data["email"];
    $address = $data["address"];
    $gender = $data["gender"];
    $position = $data["position"];
    $status = $data["status"];

    $query = "INSERT INTO karyawan VALUES ('', '$name', '$email', '$address', '$gender', '$position', '$status' )";
    mysqli_query($koneksi, $query);
    return mysqli_affected_rows($koneksi);
}
function hapus($id)
{
    global $koneksi;
    mysqli_query($koneksi, "DELETE FROM karyawan WHERE id = $id");
    return mysqli_affected_rows($koneksi);
}