<?PHP
include "config.php";
$sql=mysql_query("INSERT INTO kritik (id_kritik,nama_kritik,email_kritik,kritik) VALUES
(
  '',
  '$_POST[nama]',
  '$_POST[email]',
  '$_POST[pesan]'

)");

if($sql){ echo"<script>window.alert(' $_POST[nama], Terimakasih Atas Krtiknya.'); history.back(); </script>";
  header("location:home.php?halaman=kontak");}
  else{echo"gagal";}

  ?>
