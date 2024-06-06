<?php
    require_once 'header_template.php';
?>

<div class="content">
    <div class="container">
        <h3 class="page-title">Tambah Data</h3>
       <div class="card">

       <form action="" method="post">
        <div class="input-group">
            <label>Nama Lengkap</label>
            <input type="text" name="nama" placeholder="Nama lengkap" class="input-control" required>
        </div>
        <div class="input-group">
            <label>Username</label>
            <input type="text" name="user" placeholder="Username" class="input-control" required>
        </div>
        <div class="input-group">
            <label>Password</label>
            <input type="password" name="pass" placeholder="Password" class="input-control" required>
        </div>
        <div class="input-group">
            <button type="button" onclick="window.location.href = 'user.php'" class="btn-back">Kembali</button>
            <button type="submit" name="submit" class="btn-submit">Simpan</button>
        </div>
       </form>

       <?php
            if(isset($_POST['submit'])){
             //proses insert data
             $query_insert = 'insert into user(nama_user, username, password) value
             ("'.$_POST['nama'].'", "'.$_POST['user'].'", "'.md5($_POST['pass']).'")';

             $run_query_insert = mysqli_query($conn, $query_insert);
             if($run_query_insert){
                echo 'penyimpanan data berhasil';
             }else{
                echo 'penyimpanan data gagal';
             }
            }
       ?>
       </div>
       
    </div>
</div>
