<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>php -S localhost:4040</title>
  </head>
  <body>
    <form action="site.php" method="post">
      Apples: <input type="checkbox" name="fruits[]" value="apples"><br>
      Oranges: <input type="checkbox" name="fruits[]" value="oranges"><br>
      Pears: <input type="checkbox" name="fruits[]" value="pears"><br>
      <input type="submit">

      <?php
      $fruits = $_POST["fruits"];
      echo $fruits[0];
       ?>
  </body>
</html>
