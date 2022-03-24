<?php

include_once "conct.php";

if(isset($_GET["alterar"])){

    $sql = "UPDATE contatos
                SET nome = '{$_GET["nome"]}', tel = '{$_GET["tel"]}',
                email = '{$_GET["email"]}' 
                WHERE contatos.id = " . $_GET["id"] ;

    $rs = $pdo->query($sql);

    $pdo = null; //fechar
    header("location:index.php");
    return;

}

$sql = "SELECT * FROM contatos WHERE id =" . $_GET["id"] ;

$rs = $pdo->query($sql);

$contato =$rs->fetch();

$pdo = null; //fechar

?>
<h3>Contato</h3>
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


