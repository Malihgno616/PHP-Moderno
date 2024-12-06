<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Desafio 12</title>
  <link rel="stylesheet" href="style.css">
</head>
<?php 
  $seg = $_GET["segundos"] ?? 0;
?>
<body>
  <main>
    <h1>Calculadora de Tempo</h1>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
      <label for="segundos">Qual é o total de segundos? </label>
      <input type="number" name="segundos" id="segundos" step="0.01">
      <input type="submit" value="Calcular">
    </form>
  </main>
  <?php 
      $semanas = (int)($seg / 604800);
      $sobra = $seg % 604800; 
      
      $dias = (int)($sobra / 86400);
      $sobra = $sobra % 86400;

      $horas = (int)($sobra / 3600);
      $sobra = $sobra % 3600; 

      $minutos = (int)($sobra / 60);
      $segundos = $sobra % 60; 
  ?>
  <section>
    <h2>Totalizando tudo</h2>
    <p>Analisando o valor que você digitou, <strong><?=number_format($seg,0,",",".")?> segundos</strong> equivalem a um total de;</p>
    <ul>
      <li><?=$semanas?> semana(s)</li>
      <li><?=$dias?> dia(s)</li>
      <li><?=$horas?> hora(s)</li>
      <li><?=$minutos?> minuto(s)</li>
      <li><?=$segundos?> segundo(s)</li>
    </ul>
  </section>
</body>
</html>