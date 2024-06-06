<?php
    require_once 'header_template.php';

    $query_select = 'select * from produk where id_produk = "'.$_GET['id'].'" ';
    $run_query_select = mysqli_query($conn, $query_select);
    $d = mysqli_fetch_object($run_query_select);
?>

<div class="content">
    <div class="container">
        <h3 class="page-title">Edit Produk</h3>
       <div class="card">
       <form action="" method="post" enctype="multipart/form-data">
       <div class="input-group">
            <label>Nama Produk</label>
            <input type="text" name="nama" placeholder="Nama produk" class="input-control" value="<?= $d->nama_produk ?>" required>
        </div>
        <div class="input-group">
            <label>Harga</label>
            <input type="text" name="harga" placeholder="Harga" class="input-control" value="<?= $d->harga_produk ?>" required>
        </div>
        <div class="input-group">
            <label>Deskripsi</label>
            <textarea class="input-control" name="deskripsi" placeholder="Deskripsi"><?= $d->deskripsi ?>"</textarea>
        </div>
        <div class="input-group">
            <label>Kategori</label>
            <select class="input-control" name="kategori">
                <option value="">Pilih</option>
                <option value="Makanan" <?= ($d->kategori == 'Makanan') ? 'selected':''; ?>>Makanan</option>
                <option value="Minuman" <?= ($d->kategori == 'Minuman') ? 'selected':''; ?>>Minuman</option>
            </select>

        </div>
        <div class="input-group">
            <label>Foto</label>
            <input type="hidden" name="foto_lama" value="<?= $d->foto ?>"></input>
            <div>
                <img src="../upload/produk/<?= $d->foto ?>" width="200">
            </div>
            <input type="file" name="foto">
        </div>
        <h3>Extra Menu</h3>
        <table class="table">
            <thead>
                <tr>
                    <th>NAMA</th>
                    <th>HARGA</th>
                    <th width="100">HAPUS</th>
                </tr>
            </thead>
            <tbody id="extraMenuList">
                <?php
                $query_select_extra_menu = 'select * from extra_menu where id_produk = "'.$_GET['id'].'"';
                $run_query_select_extra_menu = mysqli_query($conn, $query_select_extra_menu);

                while($row = mysqli_fetch_array($run_query_select_extra_menu)){
                ?>
             <tr>
             <td><input type="text" name="extraname[]" class="input-control" value="<?= $row['nama'] ?>" required></td>
             <td><input type="text" name="extraharga[]" class="input-control" value="<?= $row['harga'] ?>"  required></td>
             <td align="center"><button type="button" class="btn" onclick="removeRow(this)"><i class="fa fa-times"></i></button></td>
            </tr>
                <?php } ?>
            </tbody>
        </table>
        <div style="text-align:right;margin-top:10px;">
            <button type="button" class="btn-submit" id="btnAdd">Tambah extra Menu</button>
        </div>
        <div class="input-group">
            <button type="button" onclick="window.location.href = 'produk.php'" class="btn-back">Kembali</button>
            <button type="submit" name="submit" class="btn-submit">Simpan</button>
        </div>
       </form>

       <?php

       if(isset($_POST['submit'])){
            // cek user upload file atau tidak
                if($_FILES['foto']['error'] <> 4){
                    //Jika upload file
                    // tampung data file yang akan di upload 
                    $name = $_FILES['foto']['name'];
                    $tmp_name = $_FILES['foto']['tmp_name'];
                    // proses upload file
                    move_uploaded_file($tmp_name, '../upload/produk/' . $name);

                    // hapus file lama
                    if(file_exists('../upload/produk/' .$_POST['foto_lama'])){
                        unlink('../upload/produk/' .$_POST['foto_lama']);
                    }

             }else{
                //Jika tidak upload file
                $name = $_POST['foto_lama'];
             }
            // proses update data produk
            $id = $_GET['id'];
            $nama = $_POST['nama'];
            $harga = $_POST['harga'];
            $deskripsi = $_POST['deskripsi'];
            $kategori = $_POST['kategori'];
            $query_update = "update produk set
            nama_produk = '$nama',
            harga_produk = '$harga',
            deskripsi = '$deskripsi',
            kategori = '$kategori',
            foto = '$name'
            where id_produk = $id";
    
            $run_query_update = mysqli_query($conn, $query_update);

            if(!$run_query_update){
                echo 'Data gagal diedit' .mysqli_error($conn);
                exit();
            }
            // proses delete data extra menu berdasarkan idproduk
            $query_delete_extra = 'delete from extra_menu where id_produk = "'.$_GET['id'].'"';
            $run_query_delete_extra = mysqli_query($conn, $query_delete_extra);
            // proses insert data extra menu
            $sql = [];
            if(isset($_POST['extraname'])){

                for($i=0; $i < count($_POST['extraname']); $i++){
                    $sql[] = '("'.$_GET['id'].'", "'.$_POST['extraname'][$i].'", "'.$_POST['extraharga'][$i].'")';

                }
            } 

            $query_insert_extra_menu = 'insert into extra_menu
            (id_produk, nama, harga) values ' . implode(",", $sql);
            var_dump($sql);
            $run_query_insert_extra_menu = mysqli_query($conn, $query_insert_extra_menu);
            if(!$run_query_insert_extra_menu){
                echo 'Data gagal diedit' .mysqli_error($conn);
                exit();
            }
            echo "<script>alert('Data berhasil di edit')</script>";
            echo "<script>window.location = 'produk.php'</script>";
        }
       
       ?>
      
       </div>
       
    </div>
</div>
<script type="text/javascript">

    var btnAdd = document.getElementById("btnAdd")
    var extraMenuList = document.getElementById("extraMenuList")

    btnAdd.addEventListener("click", function(e){
        e.preventDefault()

        var listItem = document.createElement('tr');
        listItem.innerHTML = `
         <tr>
             <td><input type="text" name="extraname[]" class="input-control" required></td>
             <td><input type="text" name="extraharga[]" class="input-control" required></td>
             <td align="center"><button type="button" class="btn" onclick="removeRow(this)"><i class="fa fa-times"></i></button></td>
        </tr>
    `;

    extraMenuList.appendChild(listItem)
    })

    function removeRow(e){
        e.closest('tr').remove()
    }
</script>

