<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
      <form action="site.php" method="get">
        Nome: <input type="text" name="nome">
        <br>
        Idade: <input type="number" name="idade">
        <input type="submit">
      </form>
      <br>
      Sou nome é: <?php echo $_GET["nome"]?>.
      <br>
      Sua idade é: <?php echo $_GET["idade"]?>.
  </body>
</html>
