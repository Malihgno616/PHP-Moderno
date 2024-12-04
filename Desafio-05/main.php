<?php 

$numero = $_POST['numero'];

function separateNumbers($num) {
  $parteinteira = (int) $num;
  $partedecimal = $num - $parteinteira;
  return array($parteinteira, $partedecimal);
}

list($parteinteira, $partedecimal) = separateNumbers($numero);  

?>

<!DOCTYPE html>
<html lang="en">
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
        <li>A parte inteira do numero é <strong><?php echo $parteinteira; ?></strong></li>
        <li>A parte decimal do número é <strong><?php echo number_format($partedecimal, 3); ?></strong></li>
      </ul>
    </div>
    <button onclick="javascript:history.go(-1)">Voltar</button>
  </main>
</body>
</html>