<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Desafio 09</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <main>
    <h1>Médias Aritméticas</h1>
    <form action="<?=$_SERVER['PHP_SELF'] ?>" method="get">
      <label for="num1">1º Valor: </label>
      <input type="number" id="num1" name="num1" step="0.01">
      <label for="peso1">1º Peso: </label>
      <input type="number" id="peso1" name="peso1" step="0.01">
      <label for="num2">2º Valor: </label>
      <input type="number" id="num1" name="num2" step="0.01">
      <label for="peso2">2º Peso: </label>
      <input type="number" id="peso1" name="peso2" step="0.01">
      <input type="submit" value="Calcular Médias">
    </form>
  </main>
  <section>
    <h2>Cálculo das médias</h2>
    <?php 
      $valor1 = $_GET["num1"] ?? 0;
      $valor2 = $_GET["num2"] ?? 0;
      $arit_simples = number_format(($valor1 + $valor2) / 2, 2,",",".");

      $peso1 = $_GET["peso1"] ?? 0;
      $peso2 = $_GET["peso2"] ?? 0;
      $arit_pond = number_format((($valor1 * $peso1) + ($valor2 * $peso2)) / ($peso1 + $peso2), 2, ",", ".");
      
      echo "<p>Analisando os valores $valor1 e $valor2:</p>";
      echo "<ul><li>A <strong>Média Aritmética Simples</strong> desses valores é igual a: <strong>$arit_simples</strong></ul>";
      echo "<ul><li>A <strong>Média Aritmética Ponderada</strong> desses valores é igual a: <strong>$arit_pond</strong></ul>";
    ?>
  </section>
</body>
</html>