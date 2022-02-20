<?php
  $message = "";
  if(!empty($_REQUEST['status'])) {
    $message = $_REQUEST['message'];
  }
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
  <style>
    h1{
      margin-top: 50px;
    }
  </style>
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
        <input type="text" class="form-control" name="nameCategory" placeholder="Category name">
      </div>
      <div class="form-group">
        <label class="sr-only" for="">Description</label>
        <input type="text" class="form-control" name="descriptionCategory" placeholder="Description category">
      </div>
      <input type="submit" class="btn btn-primary" value="Submit"></input>
    </form>
</div>

</body>
</html>