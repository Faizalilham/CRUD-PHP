<?php
    include('connection.php');
    if(isset($_SESSION['login'])){
        header("location:index.php");
    }

    $statement = pg_query($connection, "SELECT * FROM siswa WHERE id=".$_GET['id']);
    while($row = pg_fetch_array($statement)){
        $nim = $row['nim'];
        $nama = $row['nama'];
        $prodi = $row['prodi'];

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
            <h3 class="text-center"><b>Daftar Mahasiswa</b></h3>
        </div>    
        <div class="card mt-5">
            <form>
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">NIM</label>
                        <input type="number" class="form-control" id ="nim" name ="nim" value= "<?php  echo $nim; ?>" disabled>
                    </div>
                     <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id ="nama" name ="nama" value= "<?php  echo $nama; ?>" disabled>
                    </div>
                    <div class="form-group">
                        <label for="prodi">Jenis Kelamin</label>
                         <input type="text" class="form-control" id ="prodi" name ="prodi" value= "<?php  echo $prodi; ?>" disabled>
                        
                    </div>
                </div>
            </form>    

        </div>
        
    </div>
    <?php include('js.php'); ?>
    
</body>
</html>