<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Desafio 13</title>
  <link rel="stylesheet" href="style.css">
  <style>
    .notas li img {
      width: 150px;
    }
    
  </style>
</head>
<body>
  <?php 
    $din = $_REQUEST["valor"] ?? 0;
  ?>
  <main>
    <h1>Caixa Eletrônico</h1>
    <form action="<?=$_SERVER['PHP_SELF']?>">
      <label for="valor">Qual valor deseja sacar? (R$): </label>
      <input type="number" name="valor" id="valor" min="0" step="0">
      <p>Notas disponíveis: <strong>R$1,00 R$2,00 R$5,00 R$10,00 R$20,00 R$50,00 R$100,00</strong></p>
      <input type="submit" value="Sacar">
    </form>
  </main>
  <section>
    <?php 
      $troco = $din;
      $tot100 = floor($troco / 100);
      $troco %= 100;
        
      $tot50 = floor($troco / 50);
      $troco %= 50;

      $tot20 = floor($troco / 20);
      $troco %= 30;

      $tot10 = floor($troco / 10);
      $troco %= 10;

      $tot5 = floor($troco / 5);
      $troco %= 5;

      $tot2 = floor($troco / 2);
      $troco %= 2;

      $tot1 = floor($troco / 1);
      $troco %= 1;

    ?>
    <h2>Saque de R$<?=number_format($din,2,",",".")?> realizado com sucesso!!</h2>
    <p>O caixa eletrônico vai te entregar as seguintes notas: </p>
    <ul class="notas">
      <li><img src="imagens/100-reais.jpg" alt="100 reais">x<?=$tot100?>
      <li><img src="imagens/50-reais.jpg" alt="50 reais">x<?=$tot50?>
      <li><img src="imagens/20-reais.jpg" alt="20 reais">x<?=$tot20?>
      <li><img src="imagens/10-reais.jpg" alt="10 reais">x<?=$tot10?>
      <li><img src="imagens/5-reais.jpg" alt="5 reais">x<?=$tot5?>
      <li><img src="imagens/2-reais.jpg" alt="2 reais">x<?=$tot2?>
      <li><img src="imagens/1-real.jpg" alt="1 real">x<?=$tot1?>
    </ul>
  </section>
</body>
</html>