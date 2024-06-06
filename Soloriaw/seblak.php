<?php
 include 'database.php';
$query_select = "select * from produk where kategori = 'Seblak'";
$run_query_select = mysqli_query($conn, $query_select);

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <title>Home-Soloriaw</title>
  </head>
  <body>
    <?php require 'navbar.php'; ?>

    <div class="container" style="margin-top: 99px">

    <h2 align="center">Seblak</h2>
            <hr>
        <div class="row">
            <?php if(mysqli_num_rows($run_query_select) > 0){ 
                while($row = mysqli_fetch_array($run_query_select)){
            ?>

            <div class="col-lg-3 col-md-3 col-sm-4 col-6">
                <div class="card text-center ">
                    <img src="upload/produk/<?= $row ['foto'] ?>">
                    <div class="card-body">
                        <h6 class="card-title"><?= $row ['nama_produk'] ?></h6>
                        <p class="card-text mt-2"><?= $row ['harga_produk'] ?></p>
                        <a href="detail.php?id=<?= $row['id_produk'] ?>" class="btn btn-dark d-grid">Detail</a>
                    </div>
                </div>
            </div>
            <?php }}else{ ?>
 <div>menu tidak ada</div>
                <?php }?>
        </div>
    </div>
    
</body>
</html>