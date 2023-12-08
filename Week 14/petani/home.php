<?php
session_start();

include '../connect.php';
require_once("../function.php");

$id = $_SESSION['id'];
$nama = $_SESSION['name'];

?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Website &mdash; Lelang Padi</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
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
          <a class="a active" href="home.php">Home</a>
          <a class="a" href="view_produk.php">Daftar Produk Lelang</a>
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
<!-- Username display start -->
<div class="container-fluid">
		<div class="alert alert-warning alert-dismissible fade show" role="alert">

    <?php echo "<h4>Selamat Datang, " . $_SESSION['name'] ."!". "</h4>"; ?> 
 			
  				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    				<span aria-hidden="true">&times;</span>
  				</button>
		</div>
	</div> <br>
<!-- Username display End -->

<!-- About website brief start -->
	<div class="container-fluid">
<h4 class="text-info">Sistem Informasi Lelang Padi Tobasa</h4><br>
<p> Sistem informasi ini bertujuan untuk mewujudkan keinginan masyarakat Petani di daerah Tobasa yang menginginkan adanya keterbukaan proses lelang padi hasil tani mereka.
	Dikarenakan selama ini proses cenderung dilakukan dan dikuasai tengkulak. Hal ini menurunkan pendapatan para petani secara signifikan.
	Maka dari itu website ini berfokus pada penyediaan layanan lelang online dengan padi objek lelang.
</div>
<!-- About website brief end -->

<br>

	<!-- SLIDER Start
    ================================================== -->
	<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="../image/bgindex.JPG" class="d-block w-100" alt="First slide">
    </div>
    <div class="carousel-item">
	<img src="../image/2.JPEG" class="d-block w-100" alt="Second slide">
    </div>
    <div class="carousel-item">
	<img src="../image/3.JPEG" class="d-block w-100" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
	<!-- SLIDER End
    ================================================== -->
<br>
<br>

<!-- Features brief -->
<p class="text-center text-success display-4"><b>&mdash; OUR FEATURES &mdash;</b></p>
<br>
<div class="container">
  <div class="row">
    <div class="col order-last">
	<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">Ulasan</h5>
    <img src="../image/4.JPG" class="card-img-top" alt="Card image cap">
    <p class="card-text"><b>Review</b> dipergunakan untuk melihat ulasan yang dimasukkan oleh pembeli terhadap produk yang sudah dibeli.</p>
    <a href="look_review.php" class="card-link">Click Here</a>
  </div>
</div>
    </div>
    <div class="col">
	<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">Mulai Lelang</h5>
    <img src="../image/6.JPG" class="card-img-top" alt="Card image cap ">
    <p class="card-text"><b>Produk Lelang</b> menampilkan padi yang kamu tawar dengan harga yang telah kamu masukkan, dan menunggu pemenang dari lelang tersebut.</p>
    <a href="penawaran.php" class="card-link">Click Here</a>
  </div>
</div>
    </div>
    <div class="col order-first">
	<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">Daftar Produk Lelang</h5>
    <img src="../image/5.JPG" class="card-img-top" alt="Card image cap">
    <p class="card-text"><b>Daftar Produk Lelang</b> menampilkan padi-padi yang terbaik di daerah TOBASA yang siap untuk kamu tawar dengan harga buka yang ditentukan.</p>
    <a href="penawaran.php" class="card-link">Click Here</a>
  </div>
</div>
    </div>
  </div>
</div>
<!-- Features brief end -->
<br>
<br>

<!-- About US Start -->
<p class="text-center text-primary display-4"><b>&mdash; ABOUT US &mdash;</b></p>
<br>
<div class="container">
  <div class="row">
    <div class="col-sm">
	<div class="card border-dark mb-3" style="max-width: 18rem;">
  	<div class="card-header">11321045 - Yoas S.M Hutapea</div>
  	<div class="card-body text-dark">
  	<img src="../image/yoas.jpeg" alt="..." class="img-thumbnail">
  	</div>
	</div>
</div>
    <div class="col-sm">
	<div class="card border-dark mb-3" style="max-width: 18rem;">
  	<div class="card-header">11321043 - Suandika Napitupulu</div>
  	<div class="card-body text-dark">
	  <img src="../image/suan.jpg" alt="..." class="img-thumbnail">
  	</div>
	</div>
    </div>
    <div class="col-sm">
	<div class="card border-dark mb-3" style="max-width: 18rem;">
  	<div class="card-header">11321034 - Akdes.S.S</div>
  	<div class="card-body text-dark">
	  <img src="../image/akdes.png" alt="..." class="img-thumbnail">
  	</div>
	</div>
    </div>
  </div>
</div>
<div class="container">
  <div class="row">
    <div class="col-sm">
	<div class="card border-dark mb-3" style="max-width: 18rem;">
  	<div class="card-header">11321001 - Krisna Saragih</div>
  	<div class="card-body text-dark">
  	<img src="../image/krisna.jpeg" alt="..." class="img-thumbnail">
  	</div>
	</div>
</div>
    <div class="col-sm">
	<div class="card border-dark mb-3" style="max-width: 18rem;">
  	<div class="card-header">11321062 - Olyvia Siahaan</div>
  	<div class="card-body text-dark">
	  <img src="../image/olip.jpeg" alt="..." class="img-thumbnail">
  	</div>
	</div>
    </div>
    <div class="col-sm">
	<div class="card border-dark mb-3" style="max-width: 18rem;">
  	<div class="card-header">11321072 - Herlina Purba</div>
  	<div class="card-body text-dark">
	  <img src="../image/herlina.png" alt="..." class="img-thumbnail">
  	</div>
	</div>
    </div>
  </div>
</div>
	
<!-- About US End -->

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

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
</body>
</html>