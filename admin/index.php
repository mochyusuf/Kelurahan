<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>LOGIN | ADMIN PANEL</title>
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/login.css">
  <link rel="icon" href="../image/icon.png"><!--- icon -->
</head>

<body>
  <div class="wrap">
    <center>
      <img src="../image/logo.png">
    </center>
    <br />
    <div class="sekolah">Administrator</div>
    <br />
    <form action="act_log.php" method="POST">
      <input type="user" placeholder="username" class="wrap" name="username" required />
      <div class="bar">
      </div>
      <input type="password" placeholder="password" class="wrap" name="password" required/>
      <button type="submit" name="submit" id="submit">Masuk
      </button>
    </form>
  </div>

  <script src="js/index.js"></script>
</body>
</html>
