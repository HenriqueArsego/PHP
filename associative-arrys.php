<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>php -S localhost:4040</title>
  </head>
  <body>
    <form action="site.php" method="post">
      <input type="text" name="student">

      <input type="submit">
    </form>
      <?php
      $grades = array("Jim"=>"A+", "Pam"=>"A-", "Oscar"=>"C+");
      echo $grades[$_POST["student"]];
       ?>
  </body>
</html>
