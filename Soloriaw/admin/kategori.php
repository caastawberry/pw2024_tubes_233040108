<?php
    require_once 'header_template.php';
    include '../database.php';
    ?>
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
<div class="container mt-5">
<nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page"><a href="index.php" class="no-decoration text-muted"><i class="fa-solid fa-house"></i>Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Kategori</li>
                </ol>
             </nav>
             <div class="mt-3">
                <h2>List Kategori</h2>
                <div class="table-responsive mt-3">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Nama</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Icha Ap</td>
                                <td>Icha </td>
                            </tr>
                        </tbody>
                        
                    </table>
                </div>
             </div>
</div>



</body>
</html>