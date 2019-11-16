<?php
include '../config/db.php';
if (isset($_POST['submit'])) {
$username = $MySQLiconn->real_escape_string($_POST['username']);
$pass     = $MySQLiconn->real_escape_string($_POST['password']);

$SQL = $MySQLiconn->query("SELECT * FROM user WHERE username = '$username'");
$row = $SQL->fetch_array();
if (password_verify($pass,$row['password']))
{
  session_start();
  $_SESSION['username'] = $row['username'];
  $_SESSION['level']    = $row['level'];
  header('location:../');
}
else
{
?>
<!DOCTYPE html>
<html>
  <head>
    <script src="../assets/dist/swal/sweetalert.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../assets/dist/swal/sweetalert.css">
    <script type='text/javascript'>
         setTimeout(function () {
          swal({
           title: 'Username atau Password Salah',
           type: 'error',
           timer: 3000,
           showConfirmButton: false
          });
         },10);
         window.setTimeout(function(){
          window.location.replace('/upah-system/auth');

         } ,3000);
    </script>
  </head>
  <body>

  </body>
</html>
<?php
}
}
?>
