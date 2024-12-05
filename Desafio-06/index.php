<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Desafio 06</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <?php 
    $dividendo = $_GET["dividendo"] ?? 0;
    $divisor = $_GET["divisor"] ?? 0;
    $resultado_divisao =(int)($dividendo / $divisor);
    $resultado_resto = $dividendo % $divisor;
  ?>
  <main>
    <h1>Anatomia de uma divisão</h1>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
        <label for="dividendo">Dividendo</label>
        <input type="number" id="dividendo" name="dividendo" />
        <label for="divisor">Divisor</label>
        <input type="number" id="divisor" name="divisor" />
        <input type="submit" value="Enviar">
    </form>
  </main>
  <section id="resultado-divisao">
      <h2>Estrutura da Divisão</h2>

        <table class="divisao">
          <tr>
            <td><?=$dividendo?></td>
            <td><?=$divisor?></td>
          </tr>
          <tr>
            <td><?=$resultado_resto?></td>
            <td><?=$resultado_divisao?></td>
          </tr>
        </table>
       

   
  </section>
</body>
</html>