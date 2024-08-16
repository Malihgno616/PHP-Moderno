<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">


</head>


<body>
    <section>
        <h1>Resultado Final</h1>
        <main>
            <?php 
                $num = $_GET["numero"];
                $ante = $num -1;
                $suc = $num +1;
                               
                print "<p>O numero escolhido foi <strong>$num</strong></p>";
                echo "<p>O seu antecessor é <strong>$ante</strong></p>";
                echo "<p>O seu sucessor é <strong>$suc</strong></p>";       
                                    
            ?>

        </main>
        <button>
            <a href="index.html">Voltar</a>
        </button>
    </section>





</body>

</html>