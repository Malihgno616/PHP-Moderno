<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos de String</title>
</head>

<body>
    <h1>Manipulando Strings em PHP</h1>
    <?php 
        $nome = 'Gustavo';
        $sobrenome = "Guanabara \u{1F596}";
        echo "$nome $sobrenome";
    ?>


    <?php 
        const CANAL ="Curso em Vídeo";
        echo "Eu adoro o canal " .CANAL;
        echo " Estamos no ano ". date('Y');
        
        $nome = "Gustavo";
        $sobrenome = "Guanabara";
        $apelido = "Gafanhoto";
        echo " $nome \t\t \"$apelido\" \t\t $sobrenome ";    

    ?>

</body>

</html>