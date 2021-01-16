<?php

$produto = $_POST['nome'];
$preco = $_POST['preco'];
$quantidade = $_POST['quantidade'];
$pagamento = $_POST['pagamento'];
$rua = $_POST['endereco'];
$bairro = $_POST['bairro'];
$n = $_POST['num'];

if($produto == "Cuscuz Original do Nordeste"){
    echo "Produto: " . $produto . "<br>";
}

if($preco == "4.00"){
    echo "Preço: " . $preco . "<br>";
}

if($n != ""){
    echo "Número: " . $n . "<br>";
}else{
    header("Location: meucarrinho2.php?msg4=n");
}

if($bairro != ""){
    echo "Bairro: " . $bairro . "<br>";
}else{
    header("Location: meucarrinho2.php?msg3=b");
}

if($rua != ""){
    echo "Endereço: " . $rua . "<br>";
}else{
    header("Location: meucarrinho2.php?msg2=e");
}

if($pagamento != ""){
    echo "Pagamento: " . $pagamento . "<br>";
}else{
    header("Location: meucarrinho2.php?msg1=pg");
}

if($quantidade != 0){
    echo "Quantidade: " . $quantidade . "<br>";
}else{
    header("Location: meucarrinho2.php?msg=q");
}