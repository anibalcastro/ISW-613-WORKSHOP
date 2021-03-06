<?php
  // get all users from the database
  $sql = 'SELECT * FROM categories';
  $connection = new mysqli('127.0.0.1','root','','workshop3');
  $result = $connection->query($sql);
  $users = $result->fetch_all();

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <title>Document</title>
</head>
<style>
  h1{
    margin-top: 50px;
  }
</style>
<body>
<div class="container">
  <?php require ('header.php') ?>
  <h1>List of Categories</h1>
    <table class="table table-light">
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Description</th>
        <th>Actions</th>
      </tr>
      <tbody>
        <?php
          // loop users
          foreach($users as $user) {
        ?>
            <tr>
            <td><?php echo "$user[0]"?></td>
            <td><?php echo "$user[1]"?></td>
            <td><?php echo "$user[2]"?></td>
            <td> <form action="delete.php" method="post">
            <input type='hidden' name='idCategories' value='<?php echo "$user[0]" ?>'>
            <input type="submit" value='Eliminar'>
            </form>
            </td>
            </tr>
        <?php
          }
        ?>
      </tbody>
    </table>
    <?php

  $connection->close();
?>
</div>
</body>