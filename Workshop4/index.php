
<?php
  session_start();
  if ($_SESSION && $_SESSION['user']){
    //user already logged in
    header('Location: dashboard.php');
  }

  $message = "";
  if(!empty($_REQUEST['status'])) {
    switch($_REQUEST['status']) {
      case 'login':
        $message = 'User does not exists';
      break;
      case 'error':
        $message = 'There was a problem inserting the user';
      break;
    }
  }
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <?php echo "<link rel=stylesheet href=index.css>"; ?>
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <!------ Include the above in your HEAD tag ---------->
  <title>Login</title>
</head>


<body>
  <div class="wrapper fadeInDown">
    <div id="formContent">
      <!-- Tabs Titles -->

      <!-- Icon -->
      <div class="fadeIn first">
        <img src="https://static.vecteezy.com/system/resources/previews/002/318/271/non_2x/user-profile-icon-free-vector.jpg" id="icon" alt="User Icon" />
        <h1>Login</h1>
      </div>

      <!-- Login Form -->
      <form action="login.php" method="POST">
        <input type="text" id="email" class="fadeIn second" name="email" placeholder="Email">
        <input type="password" id="password" class="fadeIn third" name="password" placeholder="Password">
        <input type="submit" class="fadeIn fourth" value="Log In">
      </form>

      <!-- Remind Passowrd -->
      <div id="formFooter">
        <a class="underlineHover" href="http://utnweb.com/web2/ISW-613-WORKSHOP/Workshop4/registro.php">Create user.</a>
      </div>

    </div>
  </div>
</body>


</html>