<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculos dos Produtos</title>
</head>
<body>
    <form name="soma" method="post" action="exibir_soma.php">
    <label>Codigo:</label>
    <input type="text" name="codigo"><br>
    <label>Descrição:</label>
    <input type="text" name="descricao"><br>
    <label>Marca:</label>
    <input type="text" name="marca"><br>
    <label>Preço Unit:</label>
    <input type="text" name="preco"><br>
    <label>Quantidade:</label>
    <input type="text" name="quantidade"><br>
    <input type="submit" name="calcular" value="Calcular">
    </form>

    <?php
    if(isset($_POST['calcular'])) {
       
        if(!empty($_POST['codigo']) && !empty($_POST['descricao']) && !empty($_POST['marca']) && !empty($_POST['preco']) && !empty($_POST['quantidade'])) {
 
            $preco_unit = $_POST['preco'];
            $quantidade = $_POST['quantidade'];
      
            $preco_final = $preco_unit * $quantidade;
    
            echo "<p>Preço final: R$ " . number_format($preco_total, 2, ',', '.') . "</p>";
        } else {
            echo "<p>Todos os campos devem ser preenchidos!</p>";
        }
    }

    ?>
</body>
</html>
