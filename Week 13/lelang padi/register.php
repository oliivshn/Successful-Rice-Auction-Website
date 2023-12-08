<?php
include_once("connect.php");
$query = "SELECT * FROM role";
$roles = mysqli_query($koneksi,$query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Website &mdash; Lelang Padi</title>
  <link rel="stylesheet" href="css/login.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
  <style>
  .error {
    color: red;
  }
</style>
</head>
  <body>
  <div class="login-page">
  <div class="form" style="border-radius:10px;">
    <form class="login-form" method="POST" action="getData.php" id="form">
      <h2>Register Here</h2>
      <input type="text"required placeholder="Nama Lengkap" name="nama"
                      oninvalid="this.setCustomValidity('Masukkan nama anda')"
                      oninput="this.setCustomValidity('')"style="border-radius:30px;"/>
      <input type="number"required placeholder="No Telepon" name="contact"
                      oninvalid="this.setCustomValidity('Masukkan nomor telepon anda')"
                      oninput="this.setCustomValidity('')"style="border-radius:30px;"/>
      <input type="number"required placeholder="No rekening" name="rekening"
                      oninvalid="this.setCustomValidity('Masukkan no rekening anda')"
                      oninput="this.setCustomValidity('')"style="border-radius:30px;"/>
      <input type="email"required placeholder="E-mail" name="email"
                      oninvalid="this.setCustomValidity('Masukkan email anda')"
                      oninput="this.setCustomValidity('')"style="border-radius:30px;"/>
      <input type="text"required placeholder="Alamat" name="alamat"
                      oninvalid="this.setCustomValidity('Masukkan alamat anda')"
                      oninput="this.setCustomValidity('')"style="border-radius:30px;"/>
      <input type="password"required placeholder="Password " name="password" id="password"
                      oninvalid="this.setCustomValidity('Masukkan password anda')"
                      oninput="this.setCustomValidity('')"style="border-radius:30px;"/>
      <input type="password" placeholder="Konfirmasi Password" name="confirmPassword" id="confirmPassword"
                      oninput="this.setCustomValidity('')"style="border-radius:30px;"/> <br>
                      <label for="role">Pilih role</label>
                  <select style="margin:5px;"class="custom-select" name="role" id="role" required> 
                  <option value="">Pilih Role </option>
                  <?php while($x = mysqli_fetch_array($roles)){
                    $id = $x["id"];
                    $role = $x["role_name"];

 ?>
                   <option value="<?php echo $id ?>"><?php echo $role ?></option>
    <?php }?>
                    </select> 
      <button type="submit">Register Here</button>
      <p class="message">Sudah punya akun ? <a href="login.php">Login here</a></p>
    </form>
  </div>
</div>
  <script src="js/jquery-3.3.1.min.js"></script>
      <script src="js/jquery-migrate-3.0.1.min.js"></script>
      <script src="js/jquery-ui.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script src="js/owl.carousel.min.js"></script>
      <script src="js/jquery.stellar.min.js"></script>
      <script src="js/jquery.countdown.min.js"></script>
      <script src="js/bootstrap-datepicker.min.js"></script>
      <script src="js/jquery.easing.1.3.js"></script>
      <script src="js/aos.js"></script>
      <script src="js/jquery.fancybox.min.js"></script>
      <script src="js/jquery.sticky.js"></script>
      <script src="js/jquery.mb.YTPlayer.min.js"></script>
      <script src="js/main.js"></script>     
    </body>
    <script>
  $(document).ready(function () {
    $('#form').validate({
      rules: {
        nama: {
          required: true
        },
        email: {
          required: true,
          email: true
        },
        rekening:{
          required: true,
          number: true,
          rangelength: [10,20]
        },
        alamat: {
          required: true
        },
        contact: {
          required: true,
          rangelength: [10, 12],
          number: true
        },
        username: {
          required: true
        },
        password: {
          required: true,
          minlength: 8
        },
        confirmPassword: {
          required: true,
          equalTo: "#password"
        },
        role: { valueNotEquals: "default",
                required:true }
      },
      messages: {
        nama: 'Tolong isi Nama Lengkap Anda',
        email: {
          required: 'Tolong Isi Email Anda',
          email: 'Tolong isi Emali yang valid',
        },
        rekening:{
            required: 'Tolong isi rekening Anda',
            number: 'Tolong isi dengan Angka',
            rangelength: 'minimal 10 - 20 angka'
        },
        alamat : 'Tolong isi alamat Anda',
        contact: {
          required: 'Tolong isi nomor handphone Anda',
          number: 'Tolong isi dengan Angka',
          rangelength: 'Nomor Handphone hanya dapat disi 10 sampai 12',
        },
        username: 'Tolong isi username Anda',
        password: {
          required: '',
          minlength: 'Password must be at least 8 characters long.',
        },
        confirmPassword: {
          required: 'Please enter Confirm Password.',
          equalTo: 'Tidak Sama dengan Password',
        },
        role: { valueNotEquals: 'Pilih role', 
                required: 'pilih role',}
      },
      submitHandler: function (form) {
        form.submit();
      }
    });
  });
</script>
    </html>