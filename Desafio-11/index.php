<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Desafio-11</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <?php 
    $preco = $_GET["preco"] ?? 0;
    $reaj = $_GET["reaj"] ?? 0;
    $preco_reaj = $preco + ($preco * $reaj) / 100;    
  ?>
  <main>
    <h1>Reajustador de preços</h1>
    <form action="<?=$_SERVER["PHP_SELF"]?>" method="get">
      <label for="preco">Preço do produto (R$): </label>
      <input type="number" name="preco" id="preco" value="preco" step="0.01">
      <label for="reaj">Qual será o percentual de reajuste?: (<strong><span id="p">?</span>%</strong>)</label>
      <input type="range" name="reaj" id="reaj" max="100" step="1" oninput="mudaValor()" value="<?=$reaj?>">
      <input type="submit" value="Reajustar">
    </form>
  </main>
  <section>
    <h2>Resultado do Reajuste: </h2>
    <p>O produto que custava<strong> R$<?= number_format($preco,2,",",".")?></strong>, com <strong><?= $reaj?>%</strong> de aumento vai passar a custar <strong>R$<?=number_format($preco_reaj, 2,",",".")?></strong> a partir de agora</p>
  </section>
  <script>
    mudaValor();

    function mudaValor(){
        p.innerText = reaj.value;
    }
  </script>
</body>
</html>