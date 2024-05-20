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
            <input type="text" name="nama" placeholder="Masukan Nama Anda" class="input-control">
        </div>
        <div class="input-group">
            <label>Username</label>
            <input type="text" name="user" placeholder="Masukan Username Anda" class="input-control">
        </div>
        <div class="input-group">
            <label>Password</label>
            <input type="text" name="pass" placeholder="Masukan Password Anda" class="input-control">
        </div>
        <div class="input-group">
            <button type="button" onclick="window.location.href = 'user.php'" class="btn-back">Kembali</button>
            <button type="submit" class="btn-submit">Simpan</button>
        </div>
       </form>
       </div>
       
    </div>
</div>

<?php require_once 'footer_template.php'; ?>