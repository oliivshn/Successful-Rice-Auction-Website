<?php

include '../function.php';
session_start();
// Mengambil data dari id dengan fungsi get

$id_padi = $_GET['id_padi'];
// Mengambil data dari table siswa dari id yang tidak sama dengan 0
$padi = query("SELECT * FROM padi WHERE id_padi = $id_padi")[0];
// Jika fungsi ubah lebih dari 0/data terubah, maka munculkan alert dibawah
if (isset($_POST['edit'])) {
    if (edit($_POST) > 0) {
        echo "<script>
                alert('produk padi berhasil diubah!');
                document.location.href = 'view_produk.php';
            </script>";
    } else {
        // Jika fungsi ubah dibawah dari 0/data tidak terubah, maka munculkan alert dibawah
        echo "<script>
                alert('produk padi gagal diubah!');
            </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
    <!-- Data Tables -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    <!-- Font Google -->
    <link rel="preconnect" href="https://fonts.gstatic.com">

    <title>Ubah Produk Padi</title>
</head>
<body>
    <!-- Navbar -->

    <div class="container">
        <div class="row my-2">
            <div class="col-md">
                <h3 class="fw-bold text-uppercase"><i class="bi bi-pencil-square"></i>&nbsp;Ubah Data Jadwal Kerja</h3>
            </div>
            <hr>
        </div>
        <div class="row my-2">
            <div class="col-md">
                <form action="" method="post" enctype="multipart/form-data">
                <input type="hidden" name="gambar" value="<?= $padi['gambar']; ?>">
                <div class="mb-3">
                        <label class="form-label">Nama Padi</label>
                        <input type="text" class="form-control w-50" value="<?= $padi['nama_padi']; ?>" name="nama_padi" required>
                </div>      
                <div class="mb-3">
                        <label class="form-label">Deskripsi</label>
                        <input type="text" class="form-control w-50" value="<?= $padi['detail']; ?>" name="detail" required>
                </div>  
                <div class="mb-3">
                        <label class="form-label">Berat Padi</label>
                        <input type="text" class="form-control w-50" value="<?= $padi['berat_padi']; ?>" name="berat_padi" required>
                </div>  
                <div class="mb-3">
                        <label class="form-label">Harga Lelang</label>
                        <input type="text" class="form-control w-50" value="<?= $padi['harga_padi']; ?>" name="harga_padi" required>
                </div>  
                <div class="mb-3">
                        <label class="form-label">Tanggal Buka</label>
                        <input type="date" class="form-control w-50" value="<?= $padi['open_padi']; ?>" name="open_padi" required>
                </div>  
                <div class="mb-3">
                        <label class="form-label">Tanggal Tutup</label>
                        <input type="date" class="form-control w-50" value="<?= $padi['close_padi']; ?>" name="close_padi" required>
                </div>  
                <div class="mb-3">
                        <label for="gambar" class="form-label">Gambar <i>(Gambar saat ini)</i></label> <br>
                        <img src="../image/<?= $padi['gambar']; ?>" width="30%" style="margin-bottom: 10px;">
                        <input class="form-control form-control-sm w-50" id="gambar" name="gambar" type="file" required>
                    </div>
                <hr>
                    <a href="view_produk.php" class="btn btn-secondary">Kembali</a>
                    <button type="submit" class="btn btn-warning" name="edit">Ubah</button>
                </form>
            </div>
            </div>
    </div>  