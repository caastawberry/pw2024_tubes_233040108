<?php
include 'database.php';

$where= '';

if(isset($_GET['kategori'])){
    $where = ' where kategori = "'.$_GET['kategori'].'" ';
}

$query_select = 'select * from produk ';
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
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Home-Soloriaw</title>
  </head>

  <body>
  <?php require 'navbar.php' ;?>
    <!-- banner -->
    <div class="container-fluid banner d-flex align-items-center" >
      <div class="container text-center text-white">
        <h1>Laper? pesan disini aja</h1>
        <h3>Mau makan apa?</h3>
        <div class="col-md-8 offset-md-2">
        <form method="get" action="#menu">
        </form>
        </div>
        </div>
      </div>
    </div>
    <!-- tentang -->
    <div class="container-fluid warna2 py-5" id="about">
      <div class="container text-white ">
        <div class="row">
          <div class="col-sm-12 col-md-6">
            <h3 class="text-center">About Me</h3>
            <p class="fs-5 mt-5 text-start">Solaria adalah jaringan restoran hidangan Asia yang berbasis di Jakarta, Indonesia. Hingga kini, Solaria memiliki lebih dari 200 gerai di 55 kota di 31 provinsi di Indonesia. Solaria menyediakan hidangan seperti bihun, kwetiau, mi ayam, mi goreng, I Fu Mie, bakso, nasi goreng, spageti, lauk dan minuman.
              Solaria terkenal dengan nama restoran keluarga yang menawarkan berbagai macam makanan dan minuman seperti chicken cordon bleu, nasi goreng teri medan, kwetiau siram ayam, nasi ayam goreng mentega dan masih banyak menu lainnya.
            </p>
          </div>
              <div class="col-sm-12 col-md-6">
                  <img src="upload/produk/logo.png"  width="100%" height="450" style="border:0;">
              </div>
        </div>  
      </div>  
    </div>  
       <!-- kategori -->
       <div class="container-fluid py-5" id="menu">
      <div class="container text-center">
        <h3>Kategori Makanan</h3>

        <div class="row mt-4">
          
          <div class="col-md-4 mb-3">
            <div class="highlighted-kategori kategori-burger d-flex justify-content-center align-items-center">
              <h4 class="text-white"><a class="no-decoration" href="makanan.php">Makanan</a></h4>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="highlighted-kategori kategori-jus d-flex justify-content-center align-items-center">
              <h4 class="text-white"><a class="no-decoration" href="minuman.php">Minuman</a></h4>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="highlighted-kategori kategori-jus d-flex justify-content-center align-items-center">
              <h4 class="text-white"><a class="no-decoration" href="seblak.php">Seblak</a></h4>
            </div>
          </div>
          
        </div>
      </div>
    </div>
    <!-- lokasi -->
    <?php require 'lokasi.php' ?>
    <!-- contact us -->
    <?php require 'contact.php'?>

    <!-- footer -->
    <?php require 'footer.php' ?>

 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


  </body>
</html>