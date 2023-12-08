<?php
session_start();

include '../function.php';

// Jika fungsi tambah lebih dari 0/data tersimpan, maka munculkan alert dibawah
if (isset($_POST['submit'])) {
  if (add_lelang($_POST) > 0) {
      echo "<script>
              alert('Berhasil ditambahkan!');
          </script>";
  } else {
      // Jika fungsi tambah dari 0/data tidak tersimpan, maka munculkan alert dibawah
      echo "<script>
              alert('Gagal ditambahkan!');
          </script>";
  }
}

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
          <a class="a" href="view_produk.php">Daftar Produk Lelang</a>
          <a class="a active" href="add_lelang.php">Produk Lelang</a>
          <a class="a" href="look_review.php">Review</a>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container">
<br>
	<!-- End Of /.Container -->

<!-- About website brief start -->
<form action="" method="post" enctype="multipart/form-data"> 
  <div class="mb-3 row">
    <label for="nama_padi" class="col-sm-2 col-form-label">Nama Padi</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="nama_padi" name="nama_padi" required="required">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="detail" class="col-sm-2 col-form-label">Deskripsi</label>
    <div class="col-sm-10">
    <textarea class="form-control" name="detail" id="detail" rows="3" required="required"></textarea>
    </div>
  </div>
  <div class="mb-3 row">
    <label for="berat_padi" class="col-sm-2 col-form-label">Berat Padi &nbsp;&nbsp;&nbsp; (kg)</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="berat_padi" name="berat_padi" required="required">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="harga_padi" class="col-sm-2 col-form-label">Harga Lelang &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Rp. </label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="harga_padi" name="harga_padi" placeholder="kelipatan Rp. 100;" required="required">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="open_padi"  class="col-sm-2 col-form-label">Tanggal Buka Lelang</label>
    <div class="col-sm-10">
      <input type="date"  class="form-control datepicker" id="open_padi" name="open_padi" required="required">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="close_padi" class="col-sm-2 col-form-label">Tanggal Tutup</label>
    <div class="col-sm-10">
      <input type="date"  class="form-control datepicker" id="close_padi" name="close_padi" required="required">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="gambar" class="col-sm-2 col-form-label">Gambar Padi</label>
    <div class="col-sm-10">
    <input type="file" name="gambar" required="required">
    </div>
  </div>
  <div><br>
      <button class="btn btn-warning" name="submit" type="submit">Kirim</button>
  </div>
</form>
<!-- About website brief end -->

<br>


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

<script type="text/javascript">
   $(function(){
     $(".datepicker").datepicker({
        format: 'yyyy-mm-dd',
        autoclose: true,
        todayHighlight: true,
    });
    $("#open_padi").on('changeDate', function(selected) {
        var startDate = new Date(selected.date.valueOf());
        $("#close_padi").datepicker('setStartDate', startDate);
        if($("#open_padi").val() > $("#close_padi").val()){
          $("#close_padi").val($("#open_padi").val());
        }
    });
 });
</script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
</body>
</html>