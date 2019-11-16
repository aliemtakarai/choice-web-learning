<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Login Form</title>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

  <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900'>
<link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Montserrat:400,700'>
<link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

      <link rel="stylesheet" href="../assets/login/css/style.css">


</head>

<body>

<div class="container">
  <div class="info">
    <h1>Letter Apps</h1><br><h2>Fakultas Ilmu Komputer</h2>
  </div>
</div>
<div class="form">
  <div ><img src="../assets/login/img/fikom.png" width="100"/></div>
  <form class="login-form" method="POST" action="login.php">
    <input type="text" placeholder="username" name="username" required/>
    <input type="password" placeholder="password" name="password" required/>
    <button name="submit" value="login">login</button>
  </form>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="../assets/login/js/index.js"></script>

</body>
</html>
