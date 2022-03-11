<?php
    
    include('connection.php');
    if(isset($_SESSION['login'])){
        header("location:index.php");
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    
    <?php include("head.php"); ?>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
</head>
<body>
    <?php include("nav.php");?>
    <div class= "container" style = "margin-top :100px; margin-bottom : 100px;">
        <div class="pt-5">
            <h3 class="text-center"><b>Tambah Mahasiswa</b></h3>
            <?php 
                if(!empty($_SESSION['message'])){
                    echo $_SESSION['message'];
                    $_SESSION['message'] = null;
                }
            
            ?>    
        </div>    
        <div class="card mt-5">
            <form method="POST" action= "tambah_proses.php">
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">NIM</label>
                        <input type="number" class="form-control" id ="nim" name ="nim" placeholder="Masukkan NIM..." required>
                    </div>
                     <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id ="nama" name ="nama" placeholder="Masukkan Nama..." required>
                    </div>
                    <div class="form-group">
                        <label for="prodi">Prodi</label>
                        <input type="prodi" class="form-control" id ="prodi" name ="prodi" placeholder="Masukkan Prodi..." required>
                    </div>

                    <div class="card-footer text-right">
                        <button type="button" class="btn btn-danger" onclick="history.back()">Batal</button>
                        <input type="submit" name="submit" class="btn btn-success" value="SIMPAN" onclick="return confirm('Apakah Anda yakin ?')">
                    </div>
                    
                </div>
            </form>    

        </div>
        
    </div>
    <?php include('js.php'); ?>
    
</body>
</html>