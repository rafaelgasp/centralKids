<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Central Kids! - Jogos</title>
<link rel="stylesheet" href="estilo.css" media="all" />
<link rel="shortcut icon" href="images/icon.png">
<script>
	function trocarImg(obj){
		document[obj].src = "images/jogos/btnJogo"+obj+"_pass.png";
	}
	function voltarImg(obj){
		document[obj].src = "images/jogos/btnJogo"+obj+".png";
	}
</script>
</head>
<body background="images/bg.png">
<header>
	<img src="images/logo.png" width="700px"/>
</header>
<div id="menu">
	<ul>
		<li><a href="index.php">início</a></li>
		<li class="true"><a href="jogos.php">jogos</a></li>
		<li><a href="projeto.php">projeto</a></li>
		<li><a href="contato.php">contato</a></li>
		<li><a href="downloads.php">downloads</a></li>
	</ul>
</div>
<div id="content">
	<div id="contato">
    	<Br />
    	Conheça os Jogos do Central Kids<Br />
        <hr size="1px" color="#334b5e" align="center"/>
        <font size="4" color="#5b83a4">Existem jogos de Português, Matemática, Inglês e Artes.</font>
        <Br /> 
    </div>
    <div style="margin-left:60px;">
        <div id="lado1" style="margin-left:23px;margin-bottom:10px;width:150px;height:120px;">
            <a href="bookorder.php" style="color:#334b5e;text-decoration:none"><img src="images/jogos/btnJogoLivros.png" name="Livros" alt="Book Order" onmouseover="trocarImg(this.name)" onmouseout="voltarImg(this.name)"/></a>
        </div>
        <div id="lado2" style="padding-top:0px;height:120px;">
            O <strong>Book Order</strong> é um jogo de Matemática que auxilia a criança a aprender os números na ordem correta, sendo ela crescente ou decrescente.
        </div>
        <div id="lado3">
            O <strong>Train</strong> é um jogo de Português desenvolvido para introduzir a criança no mundo das palavras, para que ela se familiarize com o teclado e com as letras.
        </div>
        <div id="lado4" style="margin-left:23px;margin-bottom:-20px;width:150px;margin-top:10px;">
            <a href="train.php" style="color:#334b5e;text-decoration:none"><img src="images/jogos/btnJogoTrain.png" name="Train" alt="Train" onmouseover="trocarImg(this.name)" onmouseout="voltarImg(this.name)"/></a>
        </div>
         <div id="lado1" style="margin-left:23px;margin-bottom:10px;width:150px;height:120px;">
            <a href="anagrama.php" style="color:#334b5e;text-decoration:none"><img src="images/jogos/btnJogoAnagrama.png" name="Anagrama" alt="Anagrama" onmouseover="trocarImg(this.name)" onmouseout="voltarImg(this.name)"/></a>
        </div>
        <div id="lado2" style="padding-top:0px;height:120px;">
            O <strong>Anagrama</strong> é um jogo de Português para desenvolver a habilidade da criança para organizar letras e formar palavras.
        </div>
        <div id="lado3">
            O <strong>Balloon</strong> é um jogo de Português que ajuda a criança a se familiarizar com as palavras e com as letras de forma interativa.
        </div>
        <div id="lado4" style="margin-left:23px;margin-bottom:-20px;width:150px;margin-top:10px;">
            <a href="balloon.php" style="color:#334b5e;text-decoration:none"><img src="images/jogos/btnJogoBalao.png" name="Balao" alt="Balloon" onmouseover="trocarImg(this.name)" onmouseout="voltarImg(this.name)"/></a>
        </div>
        <div id="lado1" style="margin-left:23px;margin-bottom:10px;width:150px;height:120px;">
            <a href="corridanumerica.php" style="color:#334b5e;text-decoration:none"><img src="images/jogos/btnJogoCarros.png" name="Carros" alt="Carros" onmouseover="trocarImg(this.name)" onmouseout="voltarImg(this.name)"/></a>
        </div>
        <div id="lado2" style="padding-top:0px;height:120px;">
            O <strong>Corrida Numérica</strong> é um jogo de Matemática desenvolvido para desenvolver a habilidade das crianças de resolver cálculos simples.
        </div>
        <div id="lado3">
            O <strong>Chuck Colors</strong> é um jogo de Artes que introduz a criança às diversas cores existentes atráves de áudios e imagens.
        </div>
        <div id="lado4" style="margin-left:23px;margin-bottom:-20px;width:150px;">
            <a href="chuckcolors.php" style="color:#334b5e;text-decoration:none"><img src="images/jogos/btnJogoCores.png" name="Cores" alt="Chuck Colors" onmouseover="trocarImg(this.name)" onmouseout="voltarImg(this.name)"/></a>
        </div>
        <div id="lado1" style="margin-left:23px;margin-bottom:10px;width:150px;height:120px;">
            <a href="mazamaze.php" style="color:#334b5e;text-decoration:none"><img src="images/jogos/btnJogoMaza.png" name="Maza" alt="MazaMaze" onmouseover="trocarImg(this.name)" onmouseout="voltarImg(this.name)"/></a>
        </div>
        <div id="lado2" style="padding-top:0px;height:120px;">
            O <strong>MazaMaze</strong> é um jogo de Inglês que, através de labirintos, promove diversão e aprendizado de palavras numa nova língua.
        </div>
        <div id="lado3">
            O <strong>Memo Cards</strong> é um jogo de Inglês que por meio de um jogo fácil e divertido facilita a criança a conhecer o nome das principais coisas do nosso cotidiano em Inglês.
        </div>
        <div id="lado4" style="margin-left:23px;margin-bottom:-20px;width:150px;margin-top:10px;">
            <a href="memocards.php" style="color:#334b5e;text-decoration:none"><img src="images/jogos/btnJogoMemoria.png" name="Memoria" alt="Memo Cards" onmouseover="trocarImg(this.name)" onmouseout="voltarImg(this.name)"/></a>
        </div>
        <div id="lado1" style="margin-left:23px;margin-bottom:10px;width:150px;height:120px;">
            <a href="starmath.php" style="color:#334b5e;text-decoration:none"><img src="images/jogos/btnJogoStar.png" name="Star" alt="Star Math" onmouseover="trocarImg(this.name)" onmouseout="voltarImg(this.name)"/></a>
        </div>
        <div id="lado2" style="padding-top:0px;height:120px;">
            O <strong>Star Math</strong> é um jogo de Matemática que propõe o desafio para a criança realizar corretamente alguns cálculos matemáticos.
        </div>
        <div id="lado3">
            O <strong>Find Word</strong> é um jogo de Inglês que visa auxiliar no desenvolvimento da criança a reconhecer algo apenas visualizando sua palavra em outra língua.
        </div>
        <div id="lado4" style="margin-left:23px;margin-bottom:-20px;width:150px;margin-top:10px;">
            <a href="findword.php" style="color:#334b5e;text-decoration:none"><img src="images/jogos/btnJogoWord.png" name="Word" alt="Find Word" onmouseover="trocarImg(this.name)" onmouseout="voltarImg(this.name)"/></a>
        </div>
    </div>
    
</div>
<footer>
	i9 technologies<br />
    <hr align="center" color="#FFFFFF" size="2px"/>
  <a href="index.php" class="linkr">início</a> | <a href="jogos.php" class="linkr">jogos</a> | <a href="projeto.php" class="linkr">projeto</a> | <a href="contato.php" class="linkr">contato</a> | <a href="downloads.php" class="linkr">downloads</a> <br />
    Central Kids
</footer>
</body>
</html>