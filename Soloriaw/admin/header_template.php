<?php
    session_start();
    if(!isset($_SESSION['uid'])){
        header('location:../login.php');
        //jika sudah login maka jangan akses login
    }

    include '../database.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Food & Culinary</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css" integrity="sha512-q3eWabyZPc1XTCmF+8/LuE1ozpg5xxn7iO89yfSOd5/oKvyqLngoNGsx8jq92Y8eXJ/IRxQbEC+FGSYxtk2oiw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   
   <style type="text/css">
    @import url('https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&display=swap');

        * {
            padding:0;
            margin:0; 
        }
        body {
            font-family: "Nunito Sans", sans-serif;
            background-color: #D9CED6;
        }
        a{
            color: inherit;
            text-decoration: none;
        }
  /* content */
  .content{
            padding: 60px 0;
        }
       .container{
        width: 960px;
        margin-left: auto;
        margin-right: auto;
       }
       .page-title{
        margin-bottom: 10px;
       }
       .card{
        border:1px solid #ccc;
        background-color: #fff;
        padding: 15px;
        border-radius: 5px;
       }
       .table{
        width: 100%;
        border-collapse: collapse;
        margin-top: 8px;
       }
       .table thead th,
       .table tbody td{
        border: 1px solid;
        padding: 3px;
       }
       .btn{
        border: 1px solid;
        padding: 3px 8px;
        display: inline-block;
        background-color: #67595E;
        color: #fff;
        border-radius: 3px;
       }
       .input-group{
        margin-bottom: 8px;
       }
       .input-group label{
        display: block;
        margin-bottom: 5px;
       }
       .input-control{
        width: 100%;
        box-sizing: border-box;
        padding: 0.5rem;
        font-size: 1rem;
       }
       .btn-submit{
        border: 1px solid #67595E;
        padding: 8px 20px;
        display: inline-block;
        background-color: #67595E;
        color: #fff;
        border-radius: 3px;
        font-size: 1rem;
        cursor: pointer;
       }
       .btn-back{
        border: 1px solid;
        padding: 8px 20px;
        display: inline-block;
        border-radius: 3px;
        font-size: 1rem;
        cursor: pointer;
       } 
        /* admin */
        .summary-kategori{
            background-color: #613659;
            border-radius: 15px;
        }
        .summary-produk{
            background-color: #A06204;
            border-radius: 15px;
        }
        .no-decoration{
            text-decoration: none;
        }

    </style>
</head>
<body>
    <!-- navbar -->
    <div class="navbar">
        <a href=" " id="btnBars">
            <i class="fa fa-bars"></i>
        </a>
        <h1>Toko Web Makanan</h1>

    </div>
    <!-- sidebar -->
    <!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <title>RamenInAja</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="../asset/img/logo.png" alt="" width="50" height="50" class="d-inline-block">Solo<strong>riaw
                    </strong>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <div class="container"></div>
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="user.php">User</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="produk.php">Produk</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../index.php"><i class="fa-solid fa-right-from-bracket"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>


</body>

</html>
  
   