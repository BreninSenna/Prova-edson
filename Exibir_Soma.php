<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exibe e faz o cálculo da soma de 2 número</title>
</head>
<body>
    <?php
    echo "<h3 align='center'>SOMA DE SOMA 2 NÚMEROS</h3>";
    echo "<hr ize='3' color='red'>";
    // Recupera os valores informados nas caixas de textos, e armaneza nas variáveis, nas duas linhas abaixos.
    $num1 = $_POST["numero1"];
    $num2 = $_POST["numero2"];
    echo $num1;
    echo $num2;
    echo "Número1: " .$num1;
    echo "Número2: " .$num2;
    echo "<hr size='3' color='blue' align='left'
    widht='165'>";
    // Efetuando e exibindo o cálculo
    $soma = $num1 + $num2;
    echo "A soma de $num1 com $num2 é " .$soma;

    ?>

</body>
</html>