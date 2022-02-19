<?php
  // read the id from the querystring
  // select from the users table the user with that id
  // show the date of that user in the form
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <!-- Latest compiled and minified CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <title>Document</title>
</head>
<body>
<div class="container">
    <?php require ('header.php') ?>
    <div class="msg">
      <?php echo $message; ?>
    </div>
    <h1>Form Registration Categories</h1>
    <form action="signup.php" method="POST" class="form-inline" role="form">
      <div class="form-group">
        <label class="sr-only" for="">Name</label>
        <input type="text" class="form-control" name="username" placeholder="Categorie name" value="<?php echo $name ?>">
      </div>
      <div class="form-group">
        <label class="sr-only" for="">Description</label>
        <input type="text" class="form-control" name="name" placeholder="Categorie description">
      </div>
      <input type="submit" class="btn btn-primary" value="Submit"></input>
    </form>
</div>

</body>
</html>