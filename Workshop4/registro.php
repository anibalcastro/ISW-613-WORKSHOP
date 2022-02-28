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
  <title>Register</title>
</head>


<body>
  <div class="wrapper fadeInDown">
    <div id="formContent">
      <!-- Tabs Titles -->

      <!-- Icon -->
      <div class="fadeIn first">
        <img src="https://static.vecteezy.com/system/resources/previews/002/318/271/non_2x/user-profile-icon-free-vector.jpg" id="icon" alt="User Icon" />
        <h1>Create User</h1>
      </div>

      <!-- Login Form -->
      <form action="registrar.php" method="POST">
        <input type="text" id="nameUser" class="fadeIn first" name="nameU" placeholder="Complete name">
        <input type="text" id="idUser" class="fadeIn second" name="idU" placeholder="Id">
        <input type="text" id="emailUser" class="fadeIn third" name="emailU" placeholder="Email">
        <input type="password" id="passwordUser" class="fadeIn fourth" name="passwordU" placeholder="Password">
        <input type="submit" class="fadeIn fourth" value="Sign up">
      </form>

      <!-- Remind Passowrd -->
      <div id="formFooter">
        <a class="underlineHover" href="#">I have user</a>
      </div>

    </div>
  </div>
</body>


</html>