
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Admin login</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>

<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Custom styles for this template -->
    <link href="css/admin_login.css" rel="stylesheet">
  <!-- <script src="js/admin_login.js"></script> -->
</head>

  <body class="text-center">
    <form class="form-signin"  id="admin_log" method="post" action="admin.php" name="admin_log">
      <img class="mb-4" src="img\logo.jpg" alt="" width="72" height="72">
      <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>

      <label for="inputEmail" class="sr-only">Email address</label>
      <input type="email" name="email" id="email" class="form-control" placeholder="Email address" required autofocus>
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" name="pass" id="pass" class="form-control" placeholder="Password" required>
      
      <input class="btn btn-lg btn-primary btn-block" name="submit" id="submit" type="submit" placeholder="sign in">
      <p class="mt-5 mb-3 text-muted">&copy; 2023-2024</p>
    </form>
  </body>
</html>

