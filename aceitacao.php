<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>Verificação de Aceitação</h2>
    
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        
        <input type="text"  name="nome" <br><br>
        <select id="sexo" name="sexo" required>
            <option value="M">Masculino</option>
            <option value="F">Feminino</option>
        </select><br><br>
        <input type="text" name="idade"><br><br>
        <input type="submit" value="Verificar Aceitação">
    </form>

    <?php
   
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
     
        $nome = $_POST['nome'];
        $sexo = $_POST['sexo'];
        $idade = $_POST['idade'];

  
        if ($sexo == 'F' && $idade < 25) {
            echo "$nome: ACEITA";
        } else {
            echo "$nome: NÃO ACEITA";
        }
    }
    ?>
</body>
</html>