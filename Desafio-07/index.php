<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Desafio - 07</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <?php 
    const SALARIO_MINIMO = 1412;
    $salario = $_GET["salario"] ?? 0;
    $resultado_inteiro = (int)($salario / SALARIO_MINIMO);  
    $resto_salario = $salario % SALARIO_MINIMO;
  ?>
  <main>
    <h1>Informe o seu salário</h1>
    <p>Considerando um salário mínimo de  <?=number_format(SALARIO_MINIMO,2,",",".")?></p>
    <form action="<?= $_SERVER['PHP_SELF']?>" method="get">
        <label for="salario">Salário: </label>
        <input type="number" id="salario" name="salario" value="salario" required>
        <input type="submit" value="Calcular">
    </form>
  </main>
  <section>
      <h2>Resultado Final</h2>
      <p>Quem recebe um salário de <strong>R$<?=number_format($salario, 2, ",", ".")?>
      </strong> ganha <strong><?=$resultado_inteiro?> salários mínimos</strong> + R$<?= number_format($resto_salario, 2,",",".")?></p>
  </section>
</body>
</html>