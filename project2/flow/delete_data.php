<?php
require_once '../koneksi/connection.php';

$id = $_POST['id'];

try{
    $sql="DELETE FROM `data_pembaca` WHERE `id` = ?";
    $connect = $database_connection->prepare($sql);
    $connect->execute([$id]);

    echo "Data berhasil dihapus!";

}catch (PDOException $e){
    die("Eror deleteing data" . $e->getMessage());
}

?>