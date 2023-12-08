<!DOCTYPE html>
<html lang="en">

<head>
  <title>Website &mdash; Lelang Padi</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css" integrity="sha384-SI27wrMjH3ZZ89r4o+fGIJtnzkAnFs3E4qz9DIYioCQ5l9Rd/7UAa8DHcaL8jkWt" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css">
  <link rel="stylesheet" href="fonts/icomoon/style.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/jquery-ui.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/jquery.fancybox.min.css">
  <link rel="stylesheet" href="css/bootstrap-datepicker.css">
  <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
  <link rel="stylesheet" href="css/aos.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
  <meta name='viewport' content='width=device-width, initial-scale=1'>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
  <link href="css/jquery.mb.YTPlayer.min.css" media="all" rel="stylesheet" type="text/css">
<style>
  form{
    margin-left:15px;
  }
  .form {
  margin:50px;
  padding: 20px;
}
.container{
  border-color:black;
}
.checked {
  color: orange;
  width: 15px;
  margin-left:5px;
}

.button{
margin-left:23cm;
}
article {
    overflow: hidden;
    width: 450px;
    float: left;
}
.header {
  overflow: hidden;
  background-color: #F9F3D3;
  padding:20px;
}
.gambar1{
  float:left;
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
<div class="container">
<div class="header">
          <a class="logo"href="index.php"> <img src="image/logo.png" alt="Image"  style="width:30%;"> </a> </img>
<div class="header-right">
<div class="dropdown">
  <button class="btn btn-primary" type="button" data-toggle="dropdown" style="font-size:15px;" aria-haspopup="true" aria-expanded="false">User
  <i class="fas fa-user-circle" style="font-size:15px;"></i>
  <span class="caret"></span></button>
  <ul class="dropdown-menu">
    <li style="font-size:11px;"><a href="#">Profile</a></li>
    <li style="font-size:11px;"><a href="#">Logout</a></li> </ul>
</div>
</div>
  <div class="header-center">
    
    <a class="a" href="index.php">Home</a>
    <a class="a" href="daftar_.php">Daftar Lelang</a>
    <a class="a" href="add_lelang.php">Produk Lelang</a>
    <a class="a active" href="look_review.php">Review</a>
    
</div>
</div>

<div class="form">
  <fieldset>
    <article>
      <a class="gambar1"> <img src="image/bulir-padi.jpg"> </a> </img>
    </article>

    <aside>
    <form action="" method="post">
  <div class="form-group row">
    <label  class="col-sm-2 col-form-label">Nama Padi:</label>
    <div class="col-sm-10">
      <input class="form-control" type="text" name="nama_padi" required><br><br>
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Komentar:</label>
  <div class="col-sm-10">
    <textarea class="form-control" type="text" name="komentar" rows="3"required></textarea><br><br><br>
  </div>
</div>
  <div class="form-group row">
    <label class="col-sm-2 col-form-label">Rating</label><br><br><br>
    <div class="rateyo" id = "rating">
            data-rateyo-rating="4"
            data-rateyo-num-stars="5"
            data-rateyo-score="3">
        </div>
        <span class='result'>0</span>
            <input type="hidden" name="rating">
        <div class="col-sm-10">
        </div>
        </div>
         <div class="button">
        <div class="col-sm-10">
            <button type="submit" name="proses" class="btn btn-primary btn-lg">Kirim</button>
       </div>
       </div>
</form>
    </aside>

  </fieldset>
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
</div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js"></script>
<script>


    $(function () {
        $(".rateyo").rateYo().on("rateyo.change", function (e, data) {
            var rating = data.rating;
            $(this).parent().find('.score').text('score :'+ $(this).attr('data-rateyo-score'));
            $(this).parent().find('.result').text('rating :'+ rating);
            $(this).parent().find('input[nam=rating]').val(rating); //add rating value to input field
        });
    });

</script>
</body>
</html>
<?php
require 'db_connection.php';
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $nama_padi = $_POST["nama_padi"];
    $komentar = $_POST["komentar"];
    $rating = $_POST["rating"];

    $sql = "INSERT INTO ratee (nama_padi,komentar,rating) VALUES ('$nama_padi','$komentar','$rating')";
    if (mysqli_query($conn, $sql))
    mysqli_close($conn);
}
?>

