<?php
require'../database.php';

if(isset($_GET['keyword'])){
    $produk = cari($_GET['keyword']);
}
// var_dump(count($produk)); die();
?>
<table class="table">
            <thead>
                <tr>
                    <th width="50">NO</th>
                    <th>GAMBAR</th>
                    <th>NAMA</th>
                    <th>HARGA</th>
                    <th>KATEGORI</th>
                    <th>DESKRIPSI</th>
                    <th width="100">AKSI</th>
                </tr>
            </thead>
            <tbody>
                <?php if(count($produk) > 0){ ?>
                <?php $nomor = 1; ?>
                <?php foreach($produk as $row) { ?>

                <tr>
                    <td align="center"><?= $nomor++ ?></td>
                    <td><img src="../asset/img/<?= $row['foto']?>" width="80"></td>
                    <td><?= $row['nama_produk']?></td>
                    <td><?= $row['harga_produk']?></td>
                    <td><?= $row['kategori']?></td>
                    <td><?= $row['deskripsi']?></td>
                    <td align="center">
                        <a href="produk_edit.php?id=<?= $row['id_produk'] ?>" class="btn" title="Edit Data"><i class="fa fa-edit"></i></a>
                        <a href="?delete=<?= $row['id_produk'] ?>" class="btn" onclick="return confirm('Yakin anda akan menghapus data ini?')"  title="Hapus Data"><i class="fa fa-times"></i></a>
                    </td>
                </tr>
                <?php }}else{?>
                    <tr>
                        <td colspan="8">Tidak ada data</td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>