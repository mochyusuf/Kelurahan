<?PHP
session_start();
include "config.php";
if(!isset($_SESSION['id_admin'])){
  exit();
}

if(isset($_SESSION['id_admin'])){
  $id_admin = $_SESSION['id_admin'];
  ?>

  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

    <link rel="stylesheet" href="css/style.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../css/table.css">
    <link rel="stylesheet" type="text/css" href="../css/font-awesome.css">
    <link href="../css/panel_admin.css" rel="stylesheet">
    <script type="text/javascript" src="../js/jquery-1.11.3.min.js"></script>

		<script src="ckeditor/ckeditor.js"></script>
		<link rel="stylesheet" href="ckeditor/samples/sample.css">

    <script>
		CKEDITOR.config.removeDialogTabs = 'image:advanced;link:advanced;flash:advanced;creatediv:advanced;editdiv:advanced';
		</script>

    <title>ADMIN PANEL | Kelurahan Purwawinangun</title>

  </head>
  <body>
    <div class="row">
      <div class="side-menu">
        <nav class="navbar navbar-default" role="navigation">
          <div class="navbar-header">
            <div class="brand-wrapper">

              <button type="button" class="navbar-toggle">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>


              <div class="brand-name-wrapper">
                <a class="navbar-brand" href="admin.php">
                  Panel Admin
                </a>
              </div>


              <div id="search" class="panel-collapse collapse">
                <div class="panel-body">
                  <form class="navbar-form" role="search">
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Search">
                    </div>
                    <button type="submit" class="btn btn-default "><span class="glyphicon glyphicon-ok"></span></button>
                  </form>
                </div>
              </div>
            </div>

          </div>


          <div class="side-menu-container">
            <ul class="nav navbar-nav">
              <li class="panel panel-default" id="dropdown">
                <a data-toggle="collapse" href="#dropdown-Data">
                  <i class="fa fa-database" aria-hidden="true"></i> Data Kelurahan <span class="caret"></span>
                </a>


                <div id="dropdown-Data" class="panel-collapse collapse">
                  <div class="panel-body">
                    <ul class="nav navbar-nav">

                      <li class="panel panel-default" id="dropdown">
                        <a data-toggle="collapse" href="#dropdown-Profil">
                          <i class="fa fa-home" aria-hidden="true"></i>Profil <span class="caret"></span>
                        </a>
                        <div id="dropdown-Profil" class="panel-collapse collapse">
                          <div class="panel-body">
                            <ul class="nav navbar-nav">
                              <li><a href="?laman=profil|visimisi">Visi Misi</a></li>
                              <li><a href="?laman=profil|sejarah">Sejarah</a></li>
                              <li><a href="?laman=profil|singkat">Profil Singkat</a></li>
                              <li><a href="?laman=profil|struktur">Struktur</a></li>
                            </ul>
                          </div>
                        </div>
                      </li>
                      <li class="panel panel-default" id="dropdown">
                        <a data-toggle="collapse" href="#dropdown-Potensi">
                          <i class="fa fa-line-chart" aria-hidden="true"></i> Potensi <span class="caret"></span>
                        </a>
                        <div id="dropdown-Potensi" class="panel-collapse collapse">
                          <div class="panel-body">
                            <ul class="nav navbar-nav">
                              <li><a href="?laman=potensi|sda">SDA</a></li>
                              <li><a href="?laman=potensi|sdm">SDM</a></li>
                              <li><a href="?laman=potensi|sarana">Sarana</a></li>
                            </ul>
                          </div>
                        </div>
                      </li>
                      <li class="panel panel-default" id="dropdown">
                        <a data-toggle="collapse" href="#dropdown-Kelembagaan ">
                          <i class="fa fa-university" aria-hidden="true"></i> Kelembagaan <span class="caret"></span>
                        </a>
                        <div id="dropdown-Kelembagaan" class="panel-collapse collapse">
                          <div class="panel-body">
                            <ul class="nav navbar-nav">
                              <li><a href="?laman=kelembagaan|karangtaruna">Karang Taruna</a></li>
                              <li><a href="?laman=kelembagaan|lpm">LPM</a></li>
                              <li><a href="?laman=kelembagaan|pkk">PKK</a></li>
                            </ul>
                          </div>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </li>
              <li class="panel panel-default" id="dropdown">
                <a data-toggle="collapse" href="#dropdown-Postingan">
                  <i class="fa fa-newspaper-o" aria-hidden="true"></i> Postingan <span class="caret"></span>
                </a>


                <div id="dropdown-Postingan" class="panel-collapse collapse">
                  <div class="panel-body">
                    <ul class="nav navbar-nav">
                      <li><a href="?laman=berita">Berita</a></li>
                    </ul>
                  </div>
                </div>
              </li>
              <li class="panel panel-default" id="dropdown">
                <a data-toggle="collapse" href="#dropdown-Komentar">
                  <i class="fa fa-commenting-o" aria-hidden="true"></i> Komentar <span class="caret"></span>
                </a>


                <div id="dropdown-Komentar" class="panel-collapse collapse">
                  <div class="panel-body">
                    <ul class="nav navbar-nav">
                      <li><a href="?laman=komentar|berita">Berita</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </li>

              <li class="panel panel-default" id="dropdown">
                <a data-toggle="collapse" href="#dropdown-Foto">
                  <i class="fa fa-picture-o" aria-hidden="true"></i> Foto <span class="caret"></span>
                </a>


                <div id="dropdown-Foto" class="panel-collapse collapse">
                  <div class="panel-body">
                    <ul class="nav navbar-nav">
                      <li><a href="?laman=galery">Galeri</a></li>
                    </ul>
                  </div>
                </div>
              </li>

              <li><a href=".." target="output"><span class="glyphicon glyphicon-th-large"></span> Lihat Website</a></li>
              <li><a href="?laman=admin"><span class="glyphicon glyphicon-user"></span> Admin</a></li>
              <li><a href="?laman=kontak"><span class="glyphicon glyphicon-envelope"></span> Kritik & Saran</a></li>
              <li><a href="?laman=about"><span class="glyphicon glyphicon-info-sign"></span> About</a></li>
              <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Log Out</a></li>
            </ul>
          </div>
        </nav>

      </div>


      <div class="container-fluid">
        <div class="side-body">
            <?php include "content.php";?>
        </div>
      </div>
    </div>



    <script src="../js/jquery-1.11.3.min.js"></script>
    <script src="../js/bootstrap.js"></script>
    <script src="../js/panel_admin.js"></script>
  </body>
  </html>
  <?PHP
  }
  else {
  unset($_SESSION['id_admin']);
  //unset($_SESSION['password']);
  session_destroy();
  header("location:index.php");
  }
  ?>
