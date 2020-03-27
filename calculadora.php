<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>php -S localhost:4040</title>
  </head>
  <body>
      <form action="site.php" method="get">
        <input type="number" name="num1">
        <br>
        <input type="number" name="num2">
        <input type="submit">
      </form>
      Soma: <?php echo $_GET["num1"] + $_GET["num2"] ?>
      <br>
      Multiplicação: <?php echo $_GET["num1"] * $_GET["num2"] ?>
      <br>
      Divisão: <?php echo $_GET["num1"] / $_GET["num2"] ?>
      <br>
      Subtração: <?php echo $_GET["num1"] - $_GET["num2"] ?>

  </body>
</html>
