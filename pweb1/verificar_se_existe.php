<?php

$nome = $_POST['botao'];

if($nome == "baiao"){
    header("Location: meucarrinho.php");
}else if($nome == "cuscuz"){
    header("Location: meucarrinho2.php");
}else if($nome == "panelada"){
    header("Location: meucarrinho3.php");
}