<?php


include_once "banco.php";

    $conexao = conexaoDB();

    $sql = "DELETE FROM contatos WHERE id = " . $_GET["id"];

    $rs = mysqli_query($conexao,$sql);

    mysqli_close($conexao);

    header("location:listar.php");

