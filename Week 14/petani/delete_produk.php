<?php
// Memanggil atau membutuhkan file function.php
require '../function.php';

// Mengambil data dari lapor dengan fungsi get
$id_padi = $_GET['id_padi'];

// Jika fungsi hapus lebih dari 0/data terhapus, maka munculkan alert dibawah
if (delete($id_padi) > 0) {
    echo "<script>
                alert('produk padi berhasil dihapus!');
                document.location.href = 'view_produk.php';
            </script>";
} else {
    // Jika fungsi hapus dibawah dari 0/data tidak terhapus, maka munculkan alert dibawah
    echo "<script>
            alert('produk padi gagal dihapus!');
        </script>";
}