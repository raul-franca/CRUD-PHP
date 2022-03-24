<?php

    include_once "conct.php";

    $sql = "DELETE FROM contatos WHERE id = " . $_GET["id"];

    $rs = $pdo->query($sql);

    $pdo = null;

    header("location:index.php");
