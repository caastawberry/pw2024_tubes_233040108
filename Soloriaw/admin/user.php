<?php
    require_once 'header_template.php';

    $query_select = 'select * from user';
    $run_query_select = mysqli_query($conn, $query_select);

    // Cek jika ada parameter delete
    if(isset($_GET['delete'])){

        //proses delete data
        $query_delete = 'delete from user where id_user = "'.$_GET['delete'].'" ';
        $run_query_delete = mysqli_query($conn, $query_delete);

        if($run_query_delete){
            echo "<script>window.location = 'user.php'</script>";
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
    <div class="container">
        <h3 class="page-title">User</h3>
       <div class="card">
       <a href="user_add.php" class="btn"  title="Tambah Data"><i class="fa fa-plus"></i></a>

        <table class="table">
            <thead>
                <tr>
                    <th width="50">NO</th>
                    <th>NAMA</th>
                    <th>USERNAME</th>
                    <th width="100">AKSI</th>
                </tr>
            </thead>
            <tbody>
                <?php if(mysqli_num_rows($run_query_select) > 0){ ?>
                <?php $nomor = 1; ?>
                <?php while($row = mysqli_fetch_array($run_query_select)){ ?>

                <tr>
                    <td align="center"><?= $nomor++ ?></td>
                    <td><?= $row['nama_user']?></td>
                    <td><?= $row['username']?></td>
                    <td align="center">
                        <a href="user_edit.php?id=<?= $row['id_user'] ?>" class="btn"  title="Edit Data"><i class="fa fa-edit"></i></a>
                        <a href="?delete=<?= $row['id_user'] ?>" class="btn" onclick="return confirm('Yakin anda akan menghapus data ini?')"  title="Hapus Data"><i class="fa fa-times"></i></a>
                    </td>
                </tr>
                <?php }}else{?>
                    <tr>
                        <td colspan="4">Tidak ada data</td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
       </div>
       
    </div>
</div>

