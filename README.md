# PHP
PHP classes 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $nome = $_POST ["campo_nome"];

    $cidade = $_POST["campo_cidade"];
    
    $Cpf = $_POST ["campo_cpf"];

    $Telefone = $_POST["campo_telefone"];
    ?>

    <h2>Dados: </h2>
    
    O usuário se chama: <b><?php echo $nome ?> </b> 
    Mora na cidade de <b><?php echo $cidade ?> </b> 
    Seu Cpf é: <b><?php echo $Cpf ?> </b> 
    Seu telefone é: <b><?php echo $Telefone ?> </b>
    
</body>
</html>
<!-- $_Post == É uma variavel global, ela já é do sistema e não pode ser  utilizado como nome de variavel-- -->
