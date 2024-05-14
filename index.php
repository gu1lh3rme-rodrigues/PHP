<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Formulário</h1>
    <form action="index.php" method="post">
        <label>Nome</label>
            <input type="text" name="campo_nome">
        <label>Cidade</label>
            <input type="text" name="campo_cidade">
        <label>CPF</label>
            <input type="text" name="campo_cpf">
        <label>Telefone</label>
            <input type="text" name="campo_telefone">
            <input type="submit">
    </form>

    <?php
    if(empty($_POST["campo_nome"]) or empty($_POST["campo_cidade"]) or empty($_POST["campo_cpf"]) or empty($_POST["campo_telefone"])){
        ?>
        <h3>Preencha algum dado acima</h3>

        <?php 
    }else {
        $nome = $_POST ["campo_nome"];
        $cidade = $_POST ["campo_cidade"];
        $Cpf = $_POST ["campo_cpf"];
        $Telefone = $_POST ["campo_telefone"];
        ?>
        <h3>Resultado</h3>
    O usuário se chama: <b><?php echo $nome ?> </b> 
    Mora na cidade de <b><?php echo $cidade ?> </b> 
    Seu Cpf é: <b><?php echo $Cpf ?> </b> 
    Seu telefone é: <b><?php echo $Telefone ?> </b>.
    
    <?php } ?>
    
</body>

</html>