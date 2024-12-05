<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Desafio 08</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <?php 
    $numero = $_GET["numero"] ?? 0;
  ?>
  <main>
    <h1>Informe um número</h1>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
      <label for="numero">Número: </label>
      <input type="number" name="numero" id="numero" step="0.001">
      <input type="submit" value="Calcular Raízes">
    </form>
  </main>
  <section>
    <h2>Resultado Final</h2>
    <?php 
      print "<p>Analisando o <strong>número " . number_format($numero, 3,",",".") . "</strong> temos: </p>";

      print "<ul><li>Sua raíz quadrada é: " ."<strong>". number_format(sqrt($numero), 3,",",".") . "</strong></ul>";

      $num_ao_cubo = pow($numero, 1/3);

      print "<ul><li>Sua raíz cúbica é: " . "<strong>" . number_format($num_ao_cubo, 3,",", ".") . "</strong></ul>";
    
    ?>    
  </section>
</body>
</html>