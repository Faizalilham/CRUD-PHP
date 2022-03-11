<?php
session_start();
$host = '127.0.0.1';
$port = '5432';
$user = 'postgres'; 
$password = 'Pendo1107';
$db   = 'mahasiswa';

$connection = pg_connect("host=$host port =$port dbname=$db user=$user password=$password");
if($koneksi){
echo 'Koneksi Berhasil';
}
else{
echo 'Koneksi Gagal';
}
?>