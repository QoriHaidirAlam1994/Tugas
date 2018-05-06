<?php 
require 'function.php';
?>
<!DOCTYPE html>
<html lang="en" id="home">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Tugas enam</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

    <!-- Navbar -->
  <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
           </button>
          <a href="#home" class="navbar-brand page-scroll">QHA</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#tugas" class="page-scroll">Tugas</a></li>
            <li><a href="#contact" class="page-scroll">Contact</a></li>
          </ul>           
        </div>
      </div>
    </nav>
  <!-- Akhir Navbar -->

    <!-- about -->
    <section class="tugas" id="tugas">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <h2 class="text-center">Tugas</h2>
            <hr>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-8 col-sm-offset-3">
            <table border="1" cellpadding="10" cellspacing="0">
				<tr>
					<th>Title</th>
					<th>Username</th>
					<th>Comment</th>

				</tr>
				<tr>
					<td><?= $row["title"] ?></td>
					<td><?= $rowdua["username"] ?></td>
					<td><?= $rowtiga["comment"] ?></td>
				</tr>
			</table>
          </div>
      </div>
    </section>
    <!-- akhir about -->


    <!--contact-->
    <section class="contact" id="contact">
      <div class="container">
      <div class="row">
        <div class="col-sm-12 text-center">
          <h2>Contact</h2>
            <hr>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-8 col-sm-offset-2">
            <form>
              <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" id="nama" class="form-control" placeholder="masukan nama">
              </div> 

              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" class="form-control" placeholder="masukan email">
              </div> 

              <div class="form-group">
                <label for="telp">No. Telp</label>
                <input type="tel" id="telp" class="form-control" placeholder="masukan no telepon">
              </div>
              <select class="form-control">
                <option>== Pilihan Kategori==</option>
                <option>Web Design</option>
                <option>Web Development</option>
              </select>

              <div class="form-group">
                <label for="pesan">Pesan</label>
                <textarea class="form-control"rows="10" placeholder="masukan pesan"></textarea>
              </div>

              <button type="submit" class="btn btn-primary">Kirim</button>
            </form>
          </div>
        </div>
      </div>
    </section>
    <!-- Akhir Contact-->

    <!-- Footer -->
    <footer>
      <div class="container text-center">
        <div class="row">
          <div class="col-sm-12">
            <p>&copy; copyright 2017 | built with <i class="glyphicon glyphicon-heart"></i> by. <a href="https://instagram.com/qorihaidiralam">Qori Haidir Alam</a>.</p>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <a href="http://youtube.com/akhyar.tv" class="btn btn-danger"><i class="glyphicon glyphicon-play"></i> Subscribe to youtube</a>
          </div>
        </div>
      </div>
    </footer>
    <!-- Akhir footer -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery.easing.js"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>

    
  </body>
</html>