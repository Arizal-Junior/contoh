<?php
$database_hostname = "localhost";
$databasem_username = "root";
$database_password = "";
$database_name = "booklovers";
$database_port = "3306";

try{
    $database_connection = new PDO("mysql:host=$database_hostname;post=$database_port;dbname=$database_name",
    $databasem_username,$database_password
);
// echo "Koneksi Berhasil";
}catch (PDOException $e){
    echo $e->getMessage();
}
?>