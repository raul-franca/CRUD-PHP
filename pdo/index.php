<?php

    include_once "conct.php";

    $sql  = "SELECT * FROM contatos";
    $rs = $pdo->query($sql);

    echo "<table><tr><th colspan='6' style='text-align: center; font-size:larger'>Contatos</th><tr>";
    echo "<tr><th>ID</th><th>Nome</th><th>Telefone</th><th>E-mail</th><th></th><th></th><tr>";


    while ($contato = $rs->fetch()) {
        echo "<tr><td>{$contato['id']}</td>";
        echo "<td>{$contato["nome"]}</td>";
        echo "<td>{$contato["tel"]}</td>";
        echo "<td>{$contato["email"]}</td>";
        echo "<td><a href=update.php?id={$contato['id']}&&nome={$contato["nome"]}
        ><input type='submit' value='Alterar'></a></td>";
        echo "<td><a href=delete.php?id={$contato['id']}
        ><input type='button' value='Excluir'></a></td></tr>";

    }
    $pdo = null; //fechar a conexao
echo '<td colspan="6" style="text-align: right; background-color: white"> 
        <a href="inserir.php" style="text-decoration: none">
        <input type="button" value="Adicionar" ></a></td></tr>';
echo "</table>";

echo "<style>
          
          tr:nth-child(even) {
              background-color:lightsteelblue;
            }
          
            
         </style>";



/*
    Fetching a row while specifying the style
    The fetch method can return data in various styles, including the following:

    PDO::FETCH_ASSOC
    Returns the next row as an array indexed by column name
    PDO::FETCH_BOTH (default)
    Returns the next row as an array indexed by both column name and number
    PDO::FETCH_LAZY
    Returns the next row as an anonymous object with names as properties
    PDO::FETCH_OBJ
    Returns the next row as an anonymous object with column name as properties
    PDO::FETCH_NUM
    Returns an array indexed by column number

 * */