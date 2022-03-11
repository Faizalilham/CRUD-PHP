<?php
   include('connection.php');

    $statement = pg_query($connection,"SELECT * FROM siswa");
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
            <?php 
                if(!empty($_SESSION['message'])){
                    echo $_SESSION['message'];
                    $_SESSION['message'] = null;
                }
            
            ?>    
        </div>
            <div class="card-header">
                <a class = "btn btn-primary float-right" href="tambah.php"><i class="fas fa-plus"></i>Tambah</a>
            </div>
            <div class="card-body">
                <table class="table table-hover ">
                    <thead>
                        <tr>
                            <td>Nim</td>
                            <td>Nama</td>
                            <td>Prodi</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while($row = pg_fetch_array($statement,NULL,PGSQL_ASSOC)): ?>
                        <tr>
                            <td><?= $row['nim']; ?></td>
                            <td><?= $row['nama']; ?></td>
                            <td><?= $row['prodi']; ?></td>
                            <td>
                                <a href="ubah.php?id=<?= $row['id']; ?>" class="btn btn-primary btn-block">Ubah</a>
                                <a href="detail.php?id=<?= $row['id']; ?>" class="btn btn-secondary btn-block">Detail</a>
                                <a href="hapus.php?id=<?= $row['id']; ?>" class="btn btn-danger btn-block" onclick="return confirm('Apakah Anda yakin ?')">Hapus</a>
                            </td>      
                        </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>
            </div>
        <div>

        </div>
        
    </div>
    
</body>
</html>
