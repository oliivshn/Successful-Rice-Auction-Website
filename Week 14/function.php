<?php

$con = mysqli_connect("localhost","root","","lelang_padi");

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}

// function tambah lapor
function add_lelang($data)
{
    global $con;

    $nama_padi = $data['nama_padi'];
    $detail = $data['detail'];
    $berat_padi = $data['berat_padi'];
    $harga_padi = $data['harga_padi'];
    $open_padi = $data['open_padi'];
    $gambar = upload();
    $close_padi = $data['close_padi'];

    if (!$gambar) {
        return false;
    }

    $padi = "INSERT INTO padi VALUES ('', '$nama_padi','$detail','$berat_padi','$harga_padi','$open_padi','$gambar', '$close_padi')";

    mysqli_query($con, $padi);

    return mysqli_affected_rows($con);
}

// Membuat fungsi upload gambar
function upload()
{
  // Syarat
  $namaFile = $_FILES['gambar']['name'];
  $ukuranFile = $_FILES['gambar']['size'];
  $error = $_FILES['gambar']['error'];
  $tmpName = $_FILES['gambar']['tmp_name'];

  // Jika tidak mengupload gambar atau tidak memenuhi persyaratan diatas maka akan menampilkan alert dibawah
  if ($error === 4) {
      echo "<script>alert('Pilih gambar terlebih dahulu!');</script>";
      return false;
  }

  // format atau ekstensi yang diperbolehkan untuk upload gambar adalah
  $extValid = ['jpg', 'jpeg', 'png', 'JPG', 'JPEG', 'PNG'];
  $ext = explode('.', $namaFile);
  $ext = strtolower(end($ext));

  // Jika format atau ekstensi bukan gambar maka akan menampilkan alert dibawah
  if (!in_array($ext, $extValid)) {
      echo "<script>alert('Yang anda upload bukanlah gambar!');</script>";
      return false;
  }

  // Jika ukuran gambar lebih dari 3.000.000 byte maka akan menampilkan alert dibawah
  if ($ukuranFile > 3000000) {
      echo "<script>alert('Ukuran gambar anda terlalu besar!');</script>";
      return false;
  }

  // nama gambar akan berubah angka acak/unik jika sudah berhasil tersimpan
  $namaFileBaru = uniqid();
  $namaFileBaru .= '.';
  $namaFileBaru .= $ext;

  // memindahkan file ke dalam folde img dengan nama baru
  move_uploaded_file($tmpName, '../image/' . $namaFileBaru);

  return $namaFileBaru;
}

// membuat fungsi query dalam bentuk array
function query($query)
{
    // Koneksi database
    global $con;

    $result = mysqli_query($con, $query);

    // membuat varibale array
    $rows = [];

    // mengambil semua data dalam bentuk array
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}

// Membuat fungsi hapus
function delete($id_padi)
{
    global $con;
    mysqli_query($con, "DELETE FROM padi WHERE id_padi = $id_padi");
    return mysqli_affected_rows($con);
}

function edit($data)
{

    global $con;

    $id_padi = $_GET['id_padi'];
    $nama_padi = $data['nama_padi'];
    $detail = $data['detail'];
    $berat_padi = $data['berat_padi'];
    $harga_padi = $data['harga_padi'];
    $open_padi = $data['open_padi'];
    $close_padi = $data['close_padi'];

    $gambar = $data['gambar'];

    if ($_FILES['gambar']['error'] === 4) {
        $gambar = $gambar;
    } else {
        $gambar = upload();
    }

    $padi = "UPDATE padi SET nama_padi = '$nama_padi', open_padi = '$open_padi', harga_padi = '$harga_padi', detail = '$detail', close_padi = '$close_padi', gambar = '$gambar' WHERE id_padi = $id_padi";

    mysqli_query($con, $padi);

    return mysqli_affected_rows($con);
}

function header_s(){
echo '
<div class="topnav" id="myTopnav">
<div class="right">
<div class="dropdown">
  <button class="btn btn-primary " type="button" data-toggle="dropdown" style="font-size:10px;" aria-haspopup="true" aria-expanded="false">Petani
  <i class="fas fa-user-circle" style="font-size:15px;"></i>
  <span class="caret"></span></button>
  <ul class="dropdown-menu">
    <li style="font-size:11px;"><a href="#">Profile</a></li>
    <li style="font-size:11px;"><a href="logout.php">Logout</a></li> </ul>
</div>
</div>
<a class="navbar-brand" href="index.html"><img src="image/logo.png" alt="Image"  style="width:30%;"> </img></a>
  <a class="a" href="home.php">Home</a>
  <a class="a" href="daftar_lelang.php">Daftar Lelang</a>
  <a class="a" href="add_lelang.php">Product Lelang</a>
  <a  class="a"href="review.php">Review</a>
  

  
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>
</div>



';
}

function header_t(){
  echo '
<div class="topnav" id="myTopnav">
<div class="right">
<div class="dropdown">
  <button class="btn btn-primary " type="button" data-toggle="dropdown" style="font-size:10px;" aria-haspopup="true" aria-expanded="false">Penawar
  <i class="fas fa-user-circle" style="font-size:12px;"></i>
  <span class="caret"></span></button>
  <ul class="dropdown-menu">
    <li style="font-size:11px;"><a href="#">Profile</a></li>
    <li style="font-size:11px;"><a href="logout.php">Logout</a></li> </ul>
</div>
</div>
<a class="navbar-brand" href="home.php"><img src="image/logo.png" alt="Image"  style="width:30%;"> </img></a>
  <a class="a" href="home.php">Home</a>
  <a class="a" href="daftar_lelang.php">Daftar Lelang</a>
  <a class="a" href="product_lelang.php">Product Lelang</a>
  <a  class="a"href="review.php">Review</a>
  
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>



';
    
}
function footer_y(){
  echo '
  <footer class="page-footer font-small blue pt-4" style=" background-color: #F9F3D3;">
  
    <!-- Footer Links -->
    <div class="container-fluid text-center text-md-left">
  
      <!-- Grid row -->
      <div class="row">
  
        <!-- Grid column -->
        <div class="col-md-6 mt-md-0 mt-3">
  
          <!-- Content -->
          <h5 style="margin:20px"class="text-uppercase">Copyright © startend 2022 | By Kelompk 04 </h5>
  
        </div>
        <!-- Grid column -->
  
        <hr class="clearfix w-100 d-md-none pb-3">
  
        <!-- Grid column -->
        <div class="col-md-3 mb-md-0 mb-3">
  
          <!-- Links -->
  
          <ul class="list-unstyled">
            <li>
            <a class="social-media-icon" href="https://link_social_mendia_anda"><span style="font-size:16px" class="fab fa-facebook"> Facebook</span></a>
            </li>
            <li>
            <a class="social-media-icon" href="https://link_social_mendia_anda"><span style="font-size:16px" class="fab fa-instagram"> Instagram</span></a>
            </li>
            <li>
            <a class="social-media-icon" href="https://link_social_mendia_anda"><span style="font-size:16px" class="fab fa-facebook"> Facebook</span></a>
            </li>
          </ul>
  
        </div>
  
  <script>
  function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
      x.className += " responsive";
    } else {
      x.className = "topnav";
    }
  }
  </script>
  
  
';
}
?>
