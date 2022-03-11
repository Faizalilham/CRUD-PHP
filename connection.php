<?php
session_start();
$host = 'ec2-34-230-110-100.compute-1.amazonaws.com';
$port = '5432';
$user = 'fyofzujukcvdeh'; 
$password = 'cce971decf7500cae633f5f5a8cab24677340cd75265c3546b42fc60a80cf3c1';
$db   = 'd8pemi3akc8258';

$connection = pg_connect("host=$host port =$port dbname=$db user=$user password=$password");
if($koneksi){
echo 'Koneksi Berhasil';
}
else{
echo 'Koneksi Gagal';
}
?>
