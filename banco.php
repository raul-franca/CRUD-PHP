<?php


function conexaoDB()
{
    //dados do banco
    $bdServidor = '127.0.0.1';
    $bdUsuario = 'root';
    $bdSenha = '1234raul';
    $bdBanco = 'agenda';
    //abre uma conexao com o banco de dados
    $conexao = mysqli_connect($bdServidor,$bdUsuario,$bdSenha,$bdBanco);

    //verifica se a erros
    if (!$conexao) {
        /* Use your preferred error logging method here */
        error_log('Connection error: ' . mysqli_connect_errno());
    }

    return $conexao;

}

?>