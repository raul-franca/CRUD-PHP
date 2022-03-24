<?php



function conexaoDB()
{
    echo "1";
    $bdServidor = '127.0.0.1';
    $bdUsuario = 'root';
    $bdSenha = '1234raul';
    $bdBanco = 'agenda';
    //abre uma conexao com o banco de dados
    $conexao = mysqli_connect($bdServidor, $bdUsuario, $bdSenha, $bdBanco);
    echo "aqui";

    //verifica se a erro
    if (mysqli_connect_errno($conexao)) {
        echo "Problemas para conectar com o banco!";

        die();
    }
    return $conexao;
}




