<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de IMC</title>
</head>
<body>
    <h1>Calculadora de IMC</h1>
    <form method="post">
     
        Altura:<input type="text" name="altura"><br><br>
        Peso:<input type="text" name="peso"> <br><br>

        <input type="submit" value="Calcular IMC">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        @$altura = $_POST['altura'];
        @$peso = $_POST['peso'];
        @$imc = $peso / ($altura * $altura);
    }
   
    if (@$altura > 0 && @$peso > 0) {
        @$imc = $peso / ($altura * $altura);
    }
    echo "Seu imc é: ".@$imc;
    ?>

   

    
</body>
</html>
