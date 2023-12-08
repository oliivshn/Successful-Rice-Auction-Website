<?php
session_start();

include '../connect.php';
require_once("../function.php");

$nama = $_SESSION['name'];

// Menampilkan semua data dari table siswa berdasarkan nis secara Descending
$padi = query("SELECT * FROM padi ORDER BY id_padi DESC");

?>
<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta charset="UTF-8">
	<title>Website &mdash; Lelang Padi</title>
  
  <link rel="stylesheet" type="text/css" href="/media/css/site-examples.css?_=a7d11b28965fb75481ba6c0bd11d544f1">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.0/css/dataTables.bootstrap5.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
  	<meta name='viewport' content='width=device-width, initial-scale=1'>
	<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
  	<link href="css/jquery.mb.YTPlayer.min.css" media="all" rel="stylesheet" type="text/css">
	<!-- Css -->
	<link rel="stylesheet" href="css/owl.theme.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">

	<!-- jS -->
	<script src="js/jquery.min.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
	<script src="js/main.js" type="text/javascript"></script>


	<style>

.container{
  border-color:black;
}
.header {
  background-color: #F9F3D3;
  padding:20px;
}
footer{
  overflow: hidden;
  background-color: #F9F3D3;
  padding: 20px;
}

.header .a {
  color: black;
  text-align: center;
  padding: 9px;
  padding-left:30px;
  padding-right:30px;
  text-decoration: none;
  font-size: 14px; 
  line-height: 25px;
  border-radius: 20px;
  background-color: #ddd;
  margin-left:20px;
  margin-right:20px;
}
.header .a:hover {
  background-color: #FCB346;
  color: white;
}

.header a.active {
  background-color: #FCB346;
  color: white;
}

.header-center {
  display: flex;
   justify-content: center;
       
}
.header-right {
float:right;    
}
.header a.logo {
  float:left;
}

@media screen and (max-width: 500px) {
  .header a {
    float: none;
    display: block;
    text-align: left;
  }
  
  .header-center {
    float: none;
  }
}
  </style>	

</head>
<body>


<!-- TOP HEADER Start
    ================================================== -->
	
<!-- TOP HEADER Start
    ================================================== -->
    <div class="container">
      <div class="header"><br>
        <a class="logo"href="index.php"> <img src="../image/logo.png" alt="Image"  style="width:30%;"> </a> </img>
          <div class="header-right">
            <div class="btn-group">
              <button type="button" class="btn btn-warning dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Profil
                <i class="fas fa-user-circle" style="font-size:15px;"></i>
                  <span class="caret"></span></button>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="edit_profile.php">Edit Profil</a></li>
                    <li><a class="dropdown-item" href="#">Logout</a></li>
              </div>
          </div>
        <div class="header-center">
          <a class="a" href="home.php">Home</a>
          <a class="a active" href="view_produk.php">Daftar Produk Lelang</a>
          <a class="a" href="add_lelang.php">Produk Lelang</a>
          <a class="a" href="look_review.php">Review</a>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container">

<br>
	<!-- End Of /.Container -->
<br>

	<!-- End Of /.Container -->

<div class="container">
<a href="add_lelang.php"><button type="button" class="btn btn-outline-primary" style="margin-bottom: 25px">Tambah Padi</button></a>

<div class="row justify-content-around">
    <table id="example" class="table table-striped" style="width:100%">
    
    <thead align="center">
        <tr>
          <th style="text-align: left">Nama Padi</th>
          <th style="text-align: left">Deskripsi</th>
          <th style="text-align: left">Berat Padi</th>
          <th style="text-align: left">Harga Lelang</th>
          <th style="text-align: left">Masa Lelang</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
      <?php $no = 1; ?>
      <?php foreach ($padi as $row) : ?>
        <tr>
          <td><?= $row['nama_padi']; ?></td>
          <td><?= $row['detail']; ?></td>
          <td><?= $row['berat_padi']; ?></td>
          <td>Rp.<?= $row['harga_padi']; ?></td>
          <td><?= $row['open_padi'];?> s/d <?= $row['close_padi']; ?></td>
          <td align="center">
          <a href="delete_produk.php?id_padi=<?= $row['id_padi']; ?>"><button type="button" class="btn btn-outline-danger" onclick="return confirm('Apakah anda yakin ingin menghapus padi?');">Hapus</button></a>
          <a href="edit_produk.php?id_padi=<?= $row['id_padi']; ?>"><button type="button" class="btn btn-outline-warning">Edit</button></a>
          </td>
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>




   

        <!-- <div class="row">
        <br>
    <div class="col order-5">
    <div class="card" style="width: 20rem;">
      <img src="image/yoas.jpeg" class="card-img-top" alt="..." style="max-width: 20rem;">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">An item</li>
          <li class="list-group-item">A second item</li>
          <li class="list-group-item">A third item</li>
        </ul>
      </div>
    </div>
    <div class="col order-1">
    </div>
  </div>
</div>
  </div>  
  <br>
</div> -->
</div>
</div>


<br>
<br>
<!-- Footer End -->

<footer> 
<div class="container">
  <div class="row">
    <div class="col"><br><br>
    <p style="margin-top:20px;text-align:center;">Copyright © startend 2022 | All right Deserve </p>
    </div>
    <div class="col col-lg-2">
    <a class="social-media-icon" href="https://link_social_mendia_anda"><span class="fab fa-facebook"> Facebook</span></a><br><br>
    <a class="social-media-icon" href="https://link_social_mendia_anda"><span class="fab fa-instagram"> Instagram</span></a><br><br>
    <a class="social-media-icon" href="https://link_social_mendia_anda"><span class="fab fa-facebook"> Facebook</span></a><br><br>
    </div>
  </div>
</div>
</footer>

<script src="https://cdn.datatables.net/1.12.0/js/jquery.dataTables.min.js" ></script>
<script src="https://cdn.datatables.net/1.12.0/js/dataTables.bootstrap5.min.js" ></script>
</body>
</html>