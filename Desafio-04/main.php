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
        <h1>Conversor de Moedas v2.0</h1>
        <?php

            $inicio = date("m-d-Y", strtotime("-7 days"));
            $fim = date("m-d-Y");
            $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=%27'. $inicio .'%27&@dataFinalCotacao=%27'. $fim .'%27&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';
            
            $dados = json_decode(file_get_contents($url), true);
            
            if (isset($dados["value"][0]["cotacaoCompra"])) {
                $cotação = $dados["value"][0]["cotacaoCompra"];
                
                if (!is_numeric($cotação)) {
                    echo "Cotação do dólar não é um valor numérico.";
                    exit;
                }

                echo "A cotação do dólar é " . number_format($cotação, 2, ".", ""); 

                if (isset($_GET["numero"]) && !empty($_GET["numero"])) {
                    $real = str_ireplace(",", ".", $_GET["numero"]); // Substitui vírgulas por pontos

                    if (is_numeric($real)) {
                        $real = floatval($real); // Converte para float
                        $dolar = $real / $cotação; // Realiza a divisão
                        $dolar = number_format($dolar, 2, ".", ""); // Formata o resultado em dólares
                        $real = number_format($real, 2, ","); // Formata o valor em reais para exibição

                        print "<p>Os seus $real R$ vale $dolar U$</p>";  
                    } else {
                        echo "Por favor, insira um valor válido.";
                    }
                } else {
                    echo "Por favor, insira um valor.";
                }                  
            } else {
                echo "Não foi possível obter a cotação do dólar.";
            }
        ?>
        
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>

</body>

</html>