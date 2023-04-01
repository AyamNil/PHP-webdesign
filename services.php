<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Nurul Huda</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- owl carousel style -->
      <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.0.0-beta.2.4/assets/owl.carousel.min.css" />
      <!-- bootstrap css -->
      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <!-- fonts -->
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Poppins:400,700&display=swap" rel="stylesheet">
      <!-- owl stylesheets --> 
      <link rel="stylesheet" href="css/owl.carousel.min.css">
      <link rel="stylesheet" href="css/owl.theme.default.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
   </head>
   <body>
      <!--header section start -->
      <div class="header_section" style="background-image: url(../images/2222.png);">
         <div class="header_bg" style="background: rgb(144,143,143); background: linear-gradient(93deg, rgba(144,143,143,1) 0%, rgba(84,81,81,1) 48%, rgba(117,117,117,1) 100%);">
            <div class="container">
               <nav class="navbar navbar-expand-lg navbar-light bg-light">
                  <a class="logo" href="index.html"><img src="images/Logo_Resmi-removebg-preview.png"></a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                     <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                           <a class="nav-link" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="about.php">Profil Sekolah</a>
                        </li>
                        <li class="nav-item active">
                           <a class="nav-link" href="services.php">Register</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="crud siswa/index.php">Login</a>
                        </li>
                        <!-- <li class="nav-item">
                           <a class="nav-link" href="blog.html">Blog</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="contact.html">Contact Us</a>
                        </li> -->
                     </ul>
                     <div class="call_section">
                        <ul>
                           <li><a href="#"><img src="images/fb-icon.png"></a></li>
                           <!-- <li><a href="#"><img src="images/twitter-icon.png"></a></li>
                           <li><a href="#"><img src="images/linkedin-icon.png"></a></li> -->
                           <li><a href="#"><img src="images/instagram-icon.png"></a></li>
                           <!-- <div class="donate_bt"><a href="#"><img src="images/search-icon.png"></a></div> -->
                        </ul>
                     </div>
                  </div>
               </nav>
            </div>
         </div>
      </div>
      <!--header section end -->

      <!-- services section start -->
      <div class="services_section layout_padding">
         <div class="container">
            <h1 class="services_taital"><span style="color: #fcce2d">Daftar</span> Sekarang</h1>
            <div class="services_section_2">
                  <form>
                     <div class="form-group ">
                       <label for="inputEmail3" id="name" class="col-sm-2 col-form-label">Nama Murid</label>
                       <div class="col-sm-10">
                         <input type="email" class="form-control" id="inputEmail3" placeholder="Nama Murid">
                       </div>
                     </div>
                     <div class="form-group ">
                       <label for="inputEmail3" id="nisn" class="col-sm-2 col-form-label">NISN</label>
                       <div class="col-sm-10">
                         <input type="email" class="form-control" id="inputEmail3" placeholder="NISN">
                       </div>
                     </div>
                     <div class="form-group">
                       <label for="inputEmail3" id="foto" class="col-sm-2 col-form-label">Foto Siswa</label>
                       <div class="input-group mb-3">
                          <input type="file" class="form-control" id="inputGroupFile02">
                          <label class="input-group-text" for="inputGroupFile02">Upload</label>
                        </div>
                     </div>
                     <div class="form-group">
                       <label for="inputEmail3" id="tempat" class="col-sm-2 col-form-label">Tempat Lahir</label>
                       <div class="col-sm-10">
                         <input type="email" class="form-control" id="inputEmail3" placeholder="Tempat lahir">
                       </div>
                     </div>
                     <div class="form-group">
                        <label for="tgl_Lahir" id="date" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                           <div class="col-sm-6">
                              <input type="date" class="form-control" id="tgl_Lahir" name="tgl_Lahir" max="01-01-2006" required>
                           </div>
                     </div>
                     <div class="form-group">
                        <label for="inputEmail3" id="alamat" class="col-sm-2 col-form-label">Alamat Rumah</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" id="inputEmail3" placeholder="Alamat Rumah">
                        </div>
                      </div>
                     <div class="form-group">
                        <label for="inputEmail3" id="email" class="col-sm-2 col-form-label">Email Orangtua</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" id="inputEmail3" placeholder="Email orang tua">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputEmail3" id="nomor" class="col-sm-2 col-form-label">Nomor Telepon</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" id="inputEmail3" placeholder="+62xxxxxxx">
                        </div>
                      </div>
                      
                     <div class="form-group">
                       <label for="inputPassword3" id="password" class="col-sm-2 col-form-label">Password</label>
                       <div class="col-sm-10">
                         <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                       </div>
                     </div>
                     <fieldset class="form-group">
                       <div class="row">
                         <legend class="col-form-label col-sm-2 pt-0">Jenis Kelamin Murid</legend>
                         <div class="col-sm-10">
                           <div class="form-check">
                             <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                             <label class="form-check-label" for="gridRadios1">
                               Laki-Laki
                             </label>
                           </div>
                           <div class="form-check">
                             <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                             <label class="form-check-label" for="gridRadios2">
                               Perempuan
                             </label>
                           </div>
                         </div>
                       </div>
                     </fieldset>
                     <div class="form-group row">
                       <div class="col-sm-2">Setuju dengan Syarat dan ketentuan</div>
                       <div class="col-sm-10">
                         <div class="form-check">
                           <input class="form-check-input" type="checkbox" id="gridCheck1">
                           <label class="form-check-label" for="gridCheck1">
                             Centang jika sudah membaca dan setuju
                           </label>
                         </div>
                       </div>
                     </div>
                     <div class="form-group row">
                       <div class="col-sm-10">
                         <button type="submit" onclick="sendEmail()" class="btn btn-primary" style="background-color: #deff05 ; color : black; font-weight: bolder;">Daftar</button>
                       </div>
                     </div>
                   </form>     
         </div>            
      </div>
      <!-- services section end -->
    <!-- footer section start -->
    <div class="footer_section layout_padding margin_top_90">
         <div class="container">
            <div class="footer_section_2">
               <div class="row">
                  <div class="col-lg-3 col-md-6 margin_top">
                     <div class="call_text"><a href="https://api.whatsapp.com/send?phone=6281212815331&text=Halo%2C%20Saya%20ingin%20membeli%20Form%20pendaftaran"><img src="images/call-icon1.png"><span class="padding_left_15">Contact Now +62 81212815331</span></a></div>
                     <div class="call_text"><a href="https://www.google.com/maps?q=JL.+MADRASAH+NURUL+HUDA+RT.04/02,+Curug+Wetan,+Kec.+Curug,+Kab.+Tangerang+Prov.+Banten&um=1&ie=UTF-8&sa=X&ved=2ahUKEwjIjq_OtOD7AhXCW3wKHRu3CoMQ_AUoAXoECAQQAw"><img src="images/mail-icon1.png"><span class="padding_left_15"> JL. MADRASAH NURUL HUDA RT.04/02, Curug Wetan, Kec. Curug, Kab. Tangerang Prov. Banten</span></a></div>
                  </div>
                  <div class="col-lg-3 col-md-6">
                     <div class="information_main">
                        <h4 class="information_text">Information</h4>
                        <p class="many_text">Informasi Lebih lanjut dapat menghubungi nomor disamping ataupun langsung datang ke sekolah dengan alamat disamping.</p>
                     </div>
                  </div>
                  <div class="col-lg-3 col-md-6">
                     <div class="information_main">
                        <h4 class="information_text">Helpful Links</h4>
                        <div class="footer_menu">
                           <ul>
                              <li><a href="/phpscript/html/index.php">Home</a></li>
                              <li><a href="/phpscript/html/about.php">About</a></li>
                              <li><a href="/phpscript/html/services.php">Register</a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-3 col-md-6">
                     <div class="information_main">
                        <div class="footer_logo"><a href="index.html"><img src="images/Logo_Resmi-removebg-preview.png"></a></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- footer section end -->
      <!-- copyright section start -->
      <div class="copyright_section">
         <div class="container">
            <p class="copyright_text">© 2022 All Rights Reserved. 
            </p>
         </div>
      </div>
      <!-- copyright section end -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <!-- javascript --> 
      <script src="js/owl.carousel.js"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
   </body>

   <script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script type="text/javascript">
        function sendEmail() {
            var name = $("#name");
            var nisn = $("#nisn");
            var foto = $("#foto");
            var tempat = $("#tempat");
            var date = $("#date");
            var alamat = $("#alamat");
            var email = $("#email");
            var nomor = $("#nomor");
            var password = $("#password");

            if (isNotEmpty(name) && isNotEmpty(date) && isNotEmpty(nomor) && isNotEmpty(password)) {
                $.ajax({
                   url: 'sendEmail.php',
                   method: 'POST',
                   dataType: 'json',
                   data: {
                       name: name.val(),
                       nisn: nisn.val(),
                       foto: foto.val(),
                       tempat: tempat.val(),
                       date: date.val(),
                       alamat: alamat.val(),
                       email: email.val(),
                       nomor: nomor.val(),
                       password: password.val()
                   }, success: function (response) {
                        $('#myForm')[0].reset();
                        $('.sent-notification').text("Message Sent Successfully.");
                   }
                });
            }
        }

        function isNotEmpty(caller) {
            if (caller.val() == "") {
                caller.css('border', '1px solid red');
                return false;
            } else
                caller.css('border', '');

            return true;
        }
    </script>
</html>

