<?php
error_reporting('true'); 
session_start();
if (empty($_SESSION['username'])) {
    header('location:auth/');
}else{
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Aplikasi Persuratan</title>
    <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="shortcut icon" href="favicon_16.ico"/>
    <link rel="bookmark" href="favicon_16.ico"/>
    <!-- site css -->
    <link rel="stylesheet" href="assets/dist/css/site.min.css">
    <link rel="stylesheet" href="assets/dist/swal/sweetalert.css">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,800,700,400italic,600italic,700italic,800italic,300italic" rel="stylesheet" type="text/css">

    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.15/css/jquery.dataTables.css">
    <!-- <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'> -->
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
    <!-- jQuery -->
    <style type="text/css">
    th, td {
      text-align: center;
    }
 
  .table-fixed-left {
    width: 100%;
    float: left;
    overflow-x: scroll;
    white-space: nowrap;
    text-align: left;
    border: 1px solid #ddd;
    z-index: 2;
  }

  .warna
  {
      background-color: #cefdff;
  }
  .danger
  {
      background-color: #ff5722;
  }
</style>
    <script src="assets/dist/swal/sweetalert.min.js"></script>
    <script src="assets/js/jquery.js"></script>
    <!-- DataTables -->
    <script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.15/js/jquery.dataTables.js"></script>

    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="//cdn.jsdelivr.net/webshim/1.14.5/polyfiller.js"></script>
    <script src="assets/js/jquery.chained.min.js"></script>
    <script>
    webshims.setOptions('forms-ext', {types: 'date'});
    webshims.polyfill('forms forms-ext');
  </script>
    <!-- App scripts -->
  </head>
  <body>
    <!--nav-->
    <nav role="navigation" class="navbar navbar-custom">
        <div class="container-fluid">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button data-target="#bs-content-row-navbar-collapse-5" data-toggle="collapse" class="navbar-toggle" type="button">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a href="/material-beta" class="navbar-brand" style="color:#ffffff">Upah Management System</a>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div id="bs-content-row-navbar-collapse-5" class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">

              <li class="dropdown">
                <a data-toggle="dropdown" class="dropdown-toggle" href="#"><?php echo $_SESSION['username'] ?><b class="caret"></b></a>
                <ul role="menu" class="dropdown-menu">
                  <li ><a href="/auth/logout.php">
                      Logout
                  </a></li>
                </ul>
              </li>
            </ul>

          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>
    <!--header-->
<?php } ?>
