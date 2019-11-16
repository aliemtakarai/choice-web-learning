<?php
if (empty($_GET['page'])) {
  include "modul/dashboard/dashboard.php";
}
//404
else{
  include 'modul/404.php';
}
?>
