<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Website &mdash; Lelang Padi</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
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
.img-account-profile {
    height: 15rem;
}
.rounded-circle {
    border-radius: 50% !important;
}
.card {
    box-shadow: 0 1.15rem 1.75rem 0 rgb(33 40 50 / 15%);
}
.card .card-header {
    font-weight: 500;
}
.card-header:first-child {
    border-radius: 0.35rem 0.35rem 0 0;
}
.card-header {
    padding: 1rem 1.35rem;
    margin-bottom: 0;
    background-color: #F9F3D3;
    border-bottom: 1px solid rgba(33, 40, 50, 0.125);
}
.form-control, .dataTable-input {
    display: block;
    width: 100%;
    padding: 0.875rem 1.125rem;
    font-size: 0.875rem;
    font-weight: 400;
    line-height: 1;
    color: #69707a;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #F9F3D3;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    border-radius: 0.35rem;
    transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}
  </style>	

</head>
<body>
<!-- TOP HEADER Start
    ================================================== -->
    <div class="container">
      <div class="header"><br>
        <a class="logo" href="index.php"> <img src="../image/logo.png" alt="Image"  style="width:30%;"> </a> </img>
          <div class="header-right">
            <div class="btn-group">
              <button type="button" class="btn btn-warning dropdown-toggle active" data-bs-toggle="dropdown" aria-expanded="false">Profil
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
          <a class="a" href="add_lelang.php">Produk Lelang</a>
          <a class="a" href="look_review.php">Review</a>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<div class="container">
<div class="container-xl px-4 mt-4">
    <hr class="mt-0 mb-4">
    
        <div class="col-xl-8">
            <!-- Account details card-->
            <div class="card mb-4">
                <div class="card-header">Detail Akun</div>
                <div class="card-body">
                    <form>
                        <!-- Form Group (username)-->
                        <div class="mb-3">
                            <!-- <label class="small mb-1" for="inputUsername">Username (how your name will appear to other users on the site)</label> -->
                            <label class="small mb-1" for="inputNamaLengkap">Nama Lengkap</label>
                            <input class="form-control" id="inputNamaLengkap" type="text">
                        </div>
                        
                        <!-- Form Group (No HP)-->
                        <div class="mb-3">
                              <label class="small mb-1" for="inputPhone">No HP</label>
                              <input class="form-control" id="inputPhone" type="tel">
                        </div>
                        <!-- Form Group (No Rekening)-->
                        <div class="mb-3">
                            <label class="small mb-1" for="inputNoRekening">No Rekening</label>
                            <input class="form-control" id="inputNoRekening" type="text">
                        </div>
                        <!-- Form Group (email)-->
                        <div class="mb-3">
                            <label class="small mb-1" for="inputEmail">Email</label>
                            <input class="form-control" id="inputEmail" type="email">
                        </div>
                        <!-- Form Group (alamat)-->
                        <div class="mb-3">
                            <label class="small mb-1" for="inputAlamat">Alamat</label>
                            <input class="form-control" id="inputAlamat" type="text">
                        </div>
                        <!-- Save changes button-->
                        <button class="btn btn-warning" type="button">Edit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <footer> 
<div class="container">
  <div class="row">
    <div class="col">
    <p style="margin-top:20px;text-align:center;">Copyright © startend 2022 | All right Deserve </p>
    </div>
    <div class="col col-lg-2">
    <a class="social-media-icon" href="https://link_social_mendia_anda"><span class="fab fa-facebook"> Facebook</span></a><br>
    <a class="social-media-icon" href="https://link_social_mendia_anda"><span class="fab fa-instagram"> Instagram</span></a><br>
    <a class="social-media-icon" href="https://link_social_mendia_anda"><span class="fab fa-facebook"> Facebook</span></a><br>
    </div>
  </div>
</div>
</footer>
</div>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>