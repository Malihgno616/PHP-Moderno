<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>

<body>
    <h1>Conversor de Moedas v1.0</h1>
    <?php
        $real = $_GET["numero"];
        $dolar = $real / 5.47;
        $dolar = number_format($dolar,2,".","");
        
        print "Os seus $real R$ vale $dolar U$";      
    ?>
    <form action="index.html">

        <a href="index.html">
            <input type="submit" value="Voltar">
        </a>
    </form>
</body>

</html>