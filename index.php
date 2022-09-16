<?php

require_once 'php/init.php';

//imbis na irerequire pa si config dahil may spl autoload register ang gagawin na lang ay rekta iinstantiate si $con.

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Todo List App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>
    
  <nav class="navbar navbar-dark bg-dark shadow">
    <span class="navbar-brand mb-O h1">To-do List App</span>
  </nav>

  <div class="container mt-5">
  <?php sanaol(); ?>
    <form action="" method="GET">
      <div class="row">
        <div class="col-md-9 form-group">
          <input class="form-control" type="text" name="item" placeholder="Add new Task" required/>
      </div>
      <div class = "col-md">
        <input class="btn btn-success" type="submit" value="Add task"/>
      </div>
      </div>
    </form>
<?php
viewTable(); ?>
  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>