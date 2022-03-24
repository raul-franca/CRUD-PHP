<?php

include_once "conct.php";

if(isset($_GET["novo"])){

    $sql = "INSERT INTO contatos (nome, tel, email) 
        VALUES ( '{$_GET["nome"]}','{$_GET["tel"]}','{$_GET["email"]}')";

    $rs = $pdo->query($sql);

    $pdo = null; //fechar
    header("location:index.php");
    return;

}

?>
<h3>Novo Contato</h3>
<form action="inserir.php?">
    <input type="hidden" id="novo" name="novo" value="1">
    <label for="fname">Nome:</label><br>
    <input type="text" id="nome" name="nome"  value="nome"><br>
    <label for="lfone">Telefone:</label><br>
    <input type="tel" id="tel" name="tel"  value="99999999"><br>
    <label for="lemail">E-mail:</label><br>
    <input type="email" id="email" name="email"  value="nome@email.com"><br><br>
    <input type="submit" value="Submit">
</form>
