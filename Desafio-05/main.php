<?php 

$numero = $_POST['numero'];

function separateNumbers($num) {
  $parteinteira = (int) $num; //casting para inteiro
  $partedecimal = $num - $parteinteira; // subtrai o número real com o inteiro, sendo assim, sobrando apenas o número decimal.
  return array($parteinteira, $partedecimal);
}

list($parteinteira, $partedecimal) = separateNumbers($numero);  

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Resultado</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <main>
    <h1>Analisador de Número Real</h1>
    <div>
      <p>Analisando o número <?php echo $numero; ?> informado pelo usuário: </p>
      <ul>
        <li>A parte inteira do numero é <strong><?php echo number_format($parteinteira, 0, "", ","); ?></strong></li>
        <li>A parte decimal do número é <strong><?php echo number_format($partedecimal, 3); ?></strong></li>
      </ul>
    </div>
    <button onclick="javascript:history.go(-1)">Voltar</button>
  </main>
</body>
</html>