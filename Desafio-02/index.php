<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 02</title>
    <link rel="stylesheet" href="app.css">
</head>

<body>
    <section>
        <h1>Trabalhando com números Aleatórios</h1>
        <p>Gerando um número aleatório entre 0 e 100...</p>
        <?php
            $num = rand(0,100);
            echo"<p>O valor gerado foi <strong>$num</strong></p>";
        ?>
    </section>
    <form method="POST">
        <input type="submit" value="🐋Gerar Outro" />
    </form>
</body>

</html>