<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>php -S localhost:4040</title>
  </head>
  <body>
    <?php
      function sayHi($name, $age){
        echo "Hello $name, you are $age<br>";
      }
      sayHi("Henrique", 27);
      sayHi("João", 13);
      sayHi("Pedro", 40);
     ?>
  </body>
</html>
