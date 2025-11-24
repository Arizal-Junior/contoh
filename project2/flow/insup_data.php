<?php
require_once '../koneksi/connection.php';

$nama_depan = $_POST['ndepan'];
$nama_belakang = $_POST['nbelakang'];
$email = $_POST['mail'];
$username = $_POST['usr'];
$password = $_POST['pwd'];

if (!empty($_POST["id"])){
// untuk update

$sql = "UPDATE `data_pembaca` 
SET `nama_depan` = ?, 
`nama_belakang` = ?, 
`email` = ?,
`username` = ?,
`password` = ?
WHERE `data_pembaca`.`id` = ?;";

$connect = $database_connection->prepare($sql);
$connect->execute([
    $nama_depan,
    $nama_belakang,
    $email,
    $username,
    sha1($password),
    $_POST["id"]
]);

echo "Update data berhasil!";
}else{
// untuk insert

$sql = "INSERT INTO `data_pembaca` 
(`nama_depan`, `nama_belakang`, `email`, `username`, `password`) 
VALUES (?, ?, ?, ?, ?);";

$connect = $database_connection->prepare($sql);
$connect->execute([
    $nama_depan,
    $nama_belakang,
    $email,
    $username,
    sha1($password),
]);

echo "Insert data berhasil!";
}

?>
