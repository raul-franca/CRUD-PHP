<?php

    include_once "banco.php";

/*
    echo "id: ";
    echo $_GET["id"] . "     ";
    echo "nome: ";
    echo $_GET["nome"] . "<br>";
*/

    if(isset($_GET["alterar"])){

        $conexao = conexaoDB();

        $sql = "UPDATE `contatos` 
                SET `nome` = '{$_GET["nome"]}', `tel` = '{$_GET["tel"]}',
                `email` = '{$_GET["email"]}' 
                WHERE `contatos`.`id` = " . $_GET["id"] ;

        $rs = mysqli_query($conexao,$sql);


        mysqli_close($conexao);

        header("location:listar.php");
        return;

    }


    $conexao = conexaoDB();

    $sql = "SELECT * FROM contatos WHERE id =" . $_GET["id"] ;

    $rs = mysqli_query($conexao,$sql);

    $contato = mysqli_fetch_assoc($rs);

    mysqli_close($conexao);
/*    $sql = "UPDATE `contatos`
            SET `nome` = '{$_GET["nome"]}', `tel` = '{$_GET["tel"]}',
                `email` = '{$_GET["email"]}' WHERE `contatos`.`id` = " . $_GET["id"] ;
*/

?>

<form action="update.php?">
    <input type="hidden" id="alterar" name="alterar" value="1">
    <input type="hidden" id="id" name="id" value="<?php echo $contato["id"]  ?>">
    <label for="fname">Nome:</label><br>
    <input type="text" id="nome" name="nome"  value="<?php echo $contato["nome"]  ?>"><br>
    <label for="lfone">Telefone:</label><br>
    <input type="tel" id="tel" name="tel"  value="<?php echo $contato["tel"]  ?>"><br>
    <label for="lemail">E-mail:</label><br>
    <input type="email" id="email" name="email"  value="<?php echo $contato["email"]  ?>"><br><br>
    <input type="submit" value="Submit">
</form>

