<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css\style.css" type="text/css">
    <title>Meu lanche - carrinho</title>
</head>
<body>

    <?php
        if(isset($_GET['msg']) == "q"){
            echo "Campo de Quantidade não pode ficar vazio!<br>";
        }
        elseif(isset($_GET['msg1']) == "pg"){
            echo "Campo de Pagamento não pode ficar vazio!<br>";
        }
        elseif(isset($_GET['msg2']) == "e"){
            echo "Campo endereço não pode ficar vazio!<br>";
        }
        elseif(isset($_GET['msg3']) == "b"){
            echo "Campo bairro não pode ficar vazio!<br>";
        }
        elseif(isset($_GET['msg4']) == "n"){
            echo "Campo número não pode ficar vazio!<br>";
        }
    ?>

    <form action="exibir3.php" method="post">
        <div id="header">
            <h1>Meu Cardapio</h1>
            <nav>
                <ul class="menu">
		            <li><a href="index.php">Inicio</a></li>
		            <li><a href="#">Sobre</a></li>
	  		        <li><a href="#">Serviços</a>
	         	        <ul>
	                        <li><a href="#">Entrega rápida</a></li>
	                        <li><a href="#">Serviço premium</a></li>
	                        <li><a href="#">Monte seu prato</a></li>
	       		        </ul>
			        </li>
		            <li><a href="#">Parceiros</a></li>
		            <li><a href="#">Contato</a></li>
                </ul>
            </nav>
        </div>
        <div class="escopo">
            <h2>Meu Carrinho</h2><br>
            <div class="pedido">
                <label for="">Produto:</label>
                <input type="text" name="nome" id="" value="Panelada" readonly><br><br>
                <label for="">Preço: </label>
                <input type="number" name="preco" id="" value="12.00" readonly><br><br>
                <label for="">Quantidade: </label>
                <input type="number" name="quantidade" id="" min="0" step="1" value="0"><br><br>
                <label for="">Pagamento: </label><br>
                <input type="radio" name="pagamento" id="p1" value="Credito">
                <label for="" id="">Crédito</label><br>
                <input type="radio" name="pagamento" id="p2" value="Debito">
                <label for="" id="">Débito</label><br><br>
                <label for="">Informações para entrega: </label><br><br>
                <label for="" id="">Endereço: </label>
                <input type="text" name="endereco" id=""><br>
                <label for="" id="">Bairro: </label>
                <input type="text" name="bairro" id=""><br>
                <label for="" id="  ">Número: </label>
                <input type="text" name="num" id=""><br><br>
                <button type="submit" value="Confirmar" id="botao">Comprar</button>
            </div>
        </div>
    </form>
</body>
</html>