<?php

    include('connection.php');
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        
        $statement = pg_query($connection,"DELETE FROM siswa WHERE id = '$id'");


        if($statement){
            $_SESSION['message'] = '<div class ="alert alert-success" role="alert">Berhasil Menghapus Data</div>' ;
            header("location:index.php");
        }else{
            $_SESSION['message'] = '<div class ="alert alert-danger" role="alert">Gagal Menghapus Data</div>' ;
            header("location:index.php");
        }



    }   



   
?>