<?php
    require_once 'header_template.php';

    $query_select = 'select * from produk';
    $run_query_select = mysqli_query($conn, $query_select);

    // Cek jika ada parameter delete
    if(isset($_GET['delete'])){

        //proses delete data
        $query_delete = 'delete from produk where id_produk = "'.$_GET['delete'].'" ';
        $run_query_delete = mysqli_query($conn, $query_delete);

        if($run_query_delete){
            echo "<script>window.location = 'produk.php'</script>";
        }else{
            echo "<script>alert('Data gagal di hapus')</script";
        }
    }
?>  
    <style>
        .btn{
            border:1px solid;
            width: 40px;
            display:inline-block;
            background-color: #613659;
            color:#fff;
            border-radius:3px;
        }
     
    </style>

<div class="content">
    
       <h3 class="page-title" style="margin-left: 10px">Produk</h3>
       <div class="card">
            <div class="input-group input-group-lg my-4" style="text-align: right;" >
                <form method="get" action="produk.php" >
                    <input type="text"  class="form-control keyword"  placeholder="Cari Menu Makanan" aria-label="Recipient's username" aria-describedby="basic-addon2" name="keyword">
                    <!-- <button type="submit" class="btn warna2 text-white" class="tombol-cari"></button> -->
                </form>
            </div>
        
       <a href="produk_add.php" class="btn" title="Tambah Data"><i class="fa fa-plus"></i></a>
        <div class="container2">
        <table class="table">
            <thead>
                <tr>
                    <th width="50">NO</th>
                    <th>FOTO</th>
                    <th>NAMA</th>
                    <th>HARGA</th>
                    <th>KATEGORI</th>
                    <th>DESKRIPSI</th>
                    <th width="100">AKSI</th>
                </tr>
            </thead>
            <tbody>
                <?php if(mysqli_num_rows($run_query_select) > 0){ ?>
                <?php $nomor = 1; ?>
                <?php while($row = mysqli_fetch_array($run_query_select)){ ?>

                <tr>
                    <td align="center"><?= $nomor++ ?></td>
                    <td><img src="../upload/produk/<?= $row['foto'] ?>" width="80"></td>
                    <td><?= $row['nama_produk']?></td>
                    <td><?= $row['harga_produk']?></td>
                    <td><?= $row['kategori']?></td>
                    <td><?= $row['deskripsi']?></td>
                    <td align="center">
                        <a href="produk_edit.php?id=<?= $row['id_produk'] ?>" class="btn"  title="Edit Data"><i class="fa fa-edit"></i></a>
                        <a href="?delete=<?= $row['id_produk'] ?>" class="btn" onclick="return confirm('Yakin anda akan menghapus data ini?')"  title="Hapus Data"><i class="fa fa-times"></i></a>
                    </td>
                </tr>
                <?php }}else{?>
                    <tr>
                        <td colspan="7">Tidak ada data</td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        </div>
    </div>
    
</div>

<script src="../js/script.js"></script>

