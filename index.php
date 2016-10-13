<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Central Kids! - Página Inicial</title>
<link rel="stylesheet" href="estilo.css" media="all" />
<link rel="shortcut icon" href="images/icon.png">
<script type="text/javascript" src="swfobject.js"></script>
</head>
<body background="images/bg.png">
<header>
	<img src="images/logo.png" width="700px"/>
</header>
<div id="menu">
	<ul>
		<li class="true"><a href="index.php">início</a></li>
		<li><a href="jogos.php">jogos</a></li>
		<li><a href="projeto.php">projeto</a></li>
		<li><a href="contato.php">contato</a></li>
		<li><a href="downloads.php">downloads</a></li>
	</ul>
</div>
<div id="content">
	<div id="contato">
    	<Br />
    	Central Kids!<Br />
        <hr size="1px" color="#334b5e" align="center"/>
        <font size="4" color="#5b83a4">
        	Seja Bem-Vindo ao Central Kids!
        </font>
    </div>
    <div id="media" style="margin-left:100px;margin-top:15px;">
    	<div id="noUpdate">
				<p>Habilite o JavaScript de seu Browser e faça do Download do Flash Player, caso não o tenha, <a href="http://www.macromedia.com/go/getflashplayer">aqui</a>. </p>
		</div>
	</div>
	<script type="text/javascript">
		// <![CDATA[
		var so = new SWFObject( "trailer.swf", "csSWF", "640", "498", "9.0.28", "#e8f5ff");
		so.addParam( "quality", "best" );
		so.addParam( "allowFullScreen", "true" );
		so.addParam( "scale", "showall" );
		so.addParam( "allowScriptAccess", "always" );
		so.addVariable( "autostart", "false" );
		so.write("media");			
		// ]]>
	</script>
    <Br />
    <?php
		session_start();
		echo($_SESSION['nome']);
	?>
    <div id="contato" style="float:left;width:400px;">
    	<Br />
    	O que é o Central Kids?<Br />
        <hr size="1px" color="#334b5e" align="center"/>
        <font size="4" color="#5b83a4" style="text-align:justify;">O Central Kids é um sistema que conta com 10 <a href="jogos.php" style="color:#334b5e;">jogos</a> e um sistema <a href="projeto.php" style="color:#334b5e;">Servidor-Cliente</a> desenvolvido para crianças de 5 a 7 anos de idade.</font>
        <Br />
    </div>
    <div id="contato" style="float:left;width:300px;">
    	Onde posso encontrar o Central Kids?<Br />
        <hr size="1px" color="#334b5e" align="center"/>
        <font size="4" color="#5b83a4" style="text-align:justify;">O Central Kids disponibiliza o download de cada jogo separadamente ou do sistema completo. Visite nossa página de <a href="downloads.php" style="color:#334b5e;">downloads</a>.</font>
        <Br />
    </div>
    <Br />
    <center>
    	<A href="#"><img src="images/logo.png" width="300px"/></A><A href="../i9/index.php"><img src="images/i9.png" width="300px"/></A>
    </center>
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