<?php

     include('connection.php');

    if(isset($_POST['submit'])){
        $id= $_POST['id'];
        $nim = $_POST['nim'];
        $nama = $_POST['nama'];
        $prodi = $_POST['prodi'];


        $statement = pg_query($connection,"UPDATE siswa SET nim='$nim', nama='$nama', prodi='$prodi'
        WHERE id='$id' ");
        

        if($statement){
            $_SESSION['message'] = '<div class ="alert alert-success" role="alert"> Berhasil Mengubah Data </div>' ;
            header("location:index.php");
        }else{
            $_SESSION['message'] = '<div class ="alert alert-danger" role="alert"> Gagal Mengubah Data </div>' ;
            header("location:ubah.php?id=$id");
        }

    }
    
?>