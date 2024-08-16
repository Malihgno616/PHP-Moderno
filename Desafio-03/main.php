<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <section>
        <h1>Conversor de Moedas v1.0</h1>
        <?php
            $real = $_GET["numero"];
            $dolar = $real / 5.47;
            $dolar = number_format($dolar,2,".","");
        
            print "Os seus $real R$ vale $dolar U$";
        ?>
        <p><strong>Cotação fixa de 5.57U$</strong> informada diretamento no código.</p>
        <form action="index.html">

            <a href="index.html">
                <input type="submit" value="Voltar">
            </a>
        </form>
    </section>

</body>

</html>