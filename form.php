<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Form - Risky Ariadi Chandra</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/blog-home.css" rel="stylesheet">

</head>

<body style="background-image: url(Gambar/bg5.jpg);">

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">@racs24</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item ">
            <a class="nav-link" href="index.html">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.html">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="service.html">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.html">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="form.html">Form</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>


  <!-- Page Content -->
  <div class="container">

    <div class="row">

      <!-- Blog Entries Column -->
      <div class="col-md-8">

        <h1 class="my-4" style="color: rgb(255, 255, 21)" >Form Tour Bali</h1>
        


      

      </div>

      <body>
        <div class="container">
            <form name="formPendaftaran" action="daftar.php" method="post" onsubmit="return validateForm()">
                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" name="nama" placeholder="Name" class="form-control" required maxlength="40" minlength="3">
                </div>
                <div class="form-group">
                    <label>Time</label>
                    <input type="text" time="waktu" placeholder="Time" class="form-control" >
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" placeholder="Email " class="form-control">
                    <small id="emailHelp" class="form-text text-muted">Email Akan Digunakan Untuk Mengirimkan Notifikasi.</small>
                </div>
                <div class="form-group">
                    <label>Which tours or events are you most interested in</label>
                    <select name="jurusan" class="form-control">
                            <option value="0">select</option>
                            <option value="1">tavern live</option>
                            <option value="2">revolution was just thr beginning</option>
                            <option value="3">costum</option>
                        </select>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        <script>
            function validateForm() {
                if (document.forms["formPendaftaran"]["nama"].value == "") {
                    alert("Nama Tidak Boleh Kosong");
                    document.forms["formPendaftaran"]["nama"].focus();
                    return false;
                }
                if (document.forms["formPendaftaran"]["waktu"].value == "") {
                    alert("waktu Tidak Boleh Kosong");
                    document.forms["formPendaftaran"]["waktu"].focus();
                    return false;
                if (document.forms["formPendaftaran"]["email"].value == "") {
                    alert("Email Tidak Boleh Kosong");
                    document.forms["formPendaftaran"]["email"].focus();
                    return false;
                }
                if (document.forms["formPendaftaran"]["jurusan"].selectedIndex < 1) {
                    alert("Pilih Jurusan.");
                    document.forms["formPendaftaran"]["jurusan"].focus();
                    return false;
                }
            }
        </script>

      

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-dark" style="margin-top: 150px; height: 30px;">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Risky Ariadi Chandra 2021</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
