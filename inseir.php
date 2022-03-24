<?php

    include "banco.php";

    $conexao = conexaoDB();

    $sql = "INSERT INTO contatos (nome, tel, email) 
        VALUES ( '{$_GET["nome"]}','{$_GET["fone"]}','{$_GET["email"]}')";
    $rs = mysqli_query($conexao,$sql);

    header("location:listar.php");
