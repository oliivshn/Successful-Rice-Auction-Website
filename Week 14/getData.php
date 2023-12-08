<?php
 
  // database connection
  $con = mysqli_connect("localhost", "root", "" , "lelang_padi") or die($con);
 
  // post data


  if(!empty($_POST)) {
    $name = $_POST['nama'];
    $email = $_POST['email'];
    $contact = filter_input(INPUT_POST, 'contact');
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
    $alamat = $_POST['alamat'];
    $emailcheck="SELECT * from users where email='$email' ";                                                                   //username dan $_POST[un] diganti sesuai dengan yang kalian gunakan
    $prosescekemail = mysqli_query($con, $emailcheck);
    $role =$_POST['role'];
    $no_rekening =$_POST['rekening'];
 
 
    if(mysqli_num_rows($prosescekemail)>0){
      echo "<script>alert('Email Sudah Digunakan');history.go(-1) </script>";  
    }
   
$sql = "INSERT INTO users (nama, email, no_hp,no_rekening,PASSWORD,alamat,role_id) 
VALUES ('$name', '$email', '$contact','$no_rekening','$password','$alamat','$role')";
$insertData = mysqli_query($con,$sql);

if($insertData){
  echo "<script>alert('Berhasil Registrasi'); </script>"; 
  header("Location:login.php");
} else {
  echo "Something went wrong!";
}
}
 
?>