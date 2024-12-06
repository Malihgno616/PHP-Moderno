<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Desafio 10</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <?php 
    $nasc = $_GET["nasc"] ?? 0;
    $qual_ano = $_GET["qual-ano"] ?? 0;
    $idade = $qual_ano - $nasc; 
  ?>
  <main>
    <h1>Calculando a sua idade</h1>
    <form action="<?= $_SERVER['PHP_SELF']?>" method="get">
      <label for="nasc">Em qual ano você nasceu? </label>
      <input type="number" id="nasc" name="nasc" min="1900">
      <label for="idade">Quer saber a sua idade em qual ano?: (atualmente estamos em 2024) </label>
      <input type="number" id="qual-ano" name="qual-ano" max="2024">
      <input type="submit" value="Qual será a minha idade? ">      
    </form>
  </main>
  <section>
    <h2>Resultado</h2>
    <p>Quem nasceu em <strong><?=$qual_ano?></strong> vai ter <?=$idade?> anos</p>
  </section>
</body>
</html>