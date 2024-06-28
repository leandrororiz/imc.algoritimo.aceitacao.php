<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Algoritimo</h1>
  
    
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="valorProduto">Valor do Produto:</label>
        <input type="text" id="valorProduto" name="valorProduto" required>
        <input type="submit" value="Calcular Desconto">
    </form>

    <?php
   
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
       
        @$valorProduto = $_POST['valorProduto'];
    }

       
        if (!(@$valorProduto) || $valorProduto <= 0) {
           
        } else {
            @$desconto = $valorProduto * 0.07; 
            @$valorComDesconto = $valorProduto - $desconto;
        }
        echo "Valor Original R$:"  .@$valorProduto;
        echo "Valor do Desconto R$:"   .@$desconto;
        echo "Valor com Desconto R$"  .@$valorComDesconto;
        ?>
</body>
</html>