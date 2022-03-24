<?php

include "banco.php";

function listarContatos($conexao){


    $sql = "SELECT * FROM contatos";

    $rs = mysqli_query($conexao,$sql);

    $contatos = array();

    while($contato = mysqli_fetch_array($rs)){
        $contatos[] = $contato;
    }

    //fecha a conexao com o banco de dados
    mysqli_close($conexao);

    return $contatos;
}

function listaContatosTabelaHTML(){
    $contatos = listarContatos( conexaoDB() );

    echo "<table><tr><th colspan='5' style='text-align: center; font-size:larger'>Contatos</th><tr>";
    echo "<tr><th>ID</th><th>Nome</th><th>Telefone</th><th>E-mail</th><th></th><tr>";


    foreach ($contatos as &$contato){

        echo "<tr><td>{$contato['id']}</td>";
        echo "<td>{$contato["nome"]}</td>";
        echo "<td>{$contato["tel"]}</td>";
        echo "<td>{$contato["email"]}</td>";
        echo "<td><a href=update.php?id={$contato['id']}&&nome={$contato["nome"]}
        ><input type='submit' value='Alterar'></a></td>";
        echo "<td><a href=deletar.php?id={$contato['id']}
        ><input type='button' value='Excluir'></a></td></tr>";

    }
    echo '<td colspan="6" style="text-align: right; background-color: white"> 
        <a href="novo.html" style="text-decoration: none">
        <input type="button" value="Adicionar" ></a></td></tr>';
    echo "</table>";


    echo "<style>
          
          tr:nth-child(even) {
              background-color:lightsteelblue;
            }
          
            
         </style>";

    return;

}


listaContatosTabelaHTML();
