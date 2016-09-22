


<html>
<head>
<title>Sign in</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container" align="center">

      <form name = "login class=" form-signin" action = "checklogin.php" method = 'POST'>
        <h2 class="form-signin-heading" align="center">SIGN IN</h2>
        <label for="inputEmail" class="sr-only">Username</label>
        <input type="text" name="username" align="center" class="form-control" placeholder="Username" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password"  name="password" class="form-control">
        <div class="checkbox">
          
        </div>
        <button class="btn btn-primary btn-block" type="submit" formaction = 'checklogin.php'>Sign in</button>
        <button class="btn btn-primary btn-block" type="submit" formaction = 'register.php'>Register</button><br>
      
      </form>

    </div> <!-- /container -->

</body>
</html>



