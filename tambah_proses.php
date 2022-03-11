<?php

    include('connection.php');

    if(isset($_POST['submit'])){
        $nim = $_POST['nim'];
        $nama = $_POST['nama'];
        $prodi = $_POST['prodi'];

        $statement = pg_query($connection,"INSERT INTO siswa (nim,nama,prodi)
            VALUES ('$nim','$nama','$prodi')");

        if($statement){
            $_SESSION['message'] = '<div class ="alert alert-success" role="alert">Berhasil menambahkan Data</div>' ;
            header("location:index.php");
        }else{
            $_SESSION['message'] = '<div class ="alert alert-danger" role="alert">Gagal Menambahkan Data</div>' ;
            header("location:tambah.php");
        }

    }
    

?>