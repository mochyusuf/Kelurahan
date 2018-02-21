<?php
include('header.php'); //script untuk menampilkan header, navigasi, slider
?>
<link href="../css/bootstrap.css" rel="stylesheet">
<link href="../css/w3.css" rel="stylesheet">

<?php
echo" <div style=\"height:50px;\"></div>"; //jarak antara header dan isi
?>
<html>
<head>

  <link href="../css/bootstrap.css" rel="stylesheet">
  <link href="../css/galery.css" rel="stylesheet">
</head>
<body style="padding:70px 0px 50px 0px" class ="w3-pale-blue">


  <div class="container ">
    <div class="well w3-border w3-round-xlarge w3-theme-l1">

    <?php
    include "dinamis.php";		//menampilkan isi memanngil berdasarkan id case
    ?>

    </div>
  </div>
  <?php
  include('footer.php'); //script untuk menampilakan fiiter
  ?>

  <script src="../js/jquery-1.11.3.min.js"></script>
  <script src="../js/galery.js"></script>
  <script src="../js/bootstrap.js"></script>
</body>
</html>
