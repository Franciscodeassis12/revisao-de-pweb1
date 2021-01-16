<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css\style.css" type="text/css">
    <title>Meu cardapio</title>
</head>
<body>
    <form action="verificar_se_existe.php" method="post">
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
            <h2>Conheça a culinária nordestina</h2><br>
            <h4>A culinária Nordestina é rica em iguarias e sabores que vão te deixar com gostinho de quero mais.
            Não perca tempo e peça já uma refeição, trabalhamos com as melhores comidas tipicas da região!</h4><br>
            <p id="promocao"><a href="#">Aproveite e peça já o seu prato!</a></p><br>
            <p id="p1">Menu rápido:</p>
            <div id="container">
                <div class="prato" id="prato1">
                    <img src="imagens\baiao.jpg" alt="Baião de dois"><br><br>
                    <button type="submit" name="botao" value="baiao">Baião de dois</button><br><br>
                    <p>Descrição:</p><br>
                    <p> • Arroz branco<br>
                     • Feijão de corda<br>
                     • + Farofa sadia</p><br>
                    <p>Preço do prato: 2,00</p>
                </div>
                <div class="prato" id="prato2">
                    <img src="imagens\cuscuz.jpg" alt="Cuscuz Original do Nordeste"><br><br>
                    <button type="submit" name="botao" value="cuscuz">Cuscuz Original do Nordeste</button><br><br>
                    <p>Descrição:</p><br>
                    <p> • Cuscuz<br>
                     • + Porção de creme</p><br>
                    <p>Preço do prato: 4,00</p>
                </div>
                <div class="prato" id="prato3">
                    <img src="imagens\panelada.jpg" alt="Panelada"><br><br>
                    <button type="submit" name="botao" value="panelada">Panelada</button><br><br>
                    <p>Descrição:</p><br>
                    <p> • Uma porção de panelada<br>
                     • + porção de cuscuz</p><br>
                    <p>Preço do prato: 12,00</p>
                </div>
            </div>
        </div>
    </form>
</body>
</html>