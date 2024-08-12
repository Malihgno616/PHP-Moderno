<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <header>
        <h1>Resultado do processamento</h1>
    </header>
    <main>
        <?php 
            $nome = $_GET["nome"] ?? "sem nome";
            $sobrenome = $_GET["sobrenome"] ?? "desconhecido da silva";
            echo "<p><em>$nome $sobrenome</em> seja <strong>bem vindo</strong> ao meu site</p>";     
        ?>
        <p><a href="javascript:history.go(-1)">Voltar para o início</a></p>
    </main>
</body>

</html>