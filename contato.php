<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Central Kids! - Contato</title>
<link rel="stylesheet" href="estilo.css" media="all" />
<link rel="shortcut icon" href="images/icon.png">
<script>
	function validar(){
		if(document.frmContato.comentario.value == null || document.frmContato.comentario.value == ""){
			document.getElementById('msgNão').style.display = "inline";
			document.frmContato.comentario.focus();
			return false;
		}else{
			document.frmContato.comentario.style.display = "none";
			return true;
		}		
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
		<li><a href="jogos.php">jogos</a></li>
		<li><a href="projeto.php">projeto</a></li>
		<li class="true"><a href="contato.php">contato</a></li>
		<li><a href="downloads.php">downloads</a></li>
	</ul>
</div>
<div id="content">
	<div id="contato">
    	<Br />
    	Dê a sua opinião sobre o Central Kids<Br />
        <hr size="1px" color="#334b5e" align="center"/>
        <font size="4" color="#5b83a4">Preencha o formulário abaixo e clique em enviar.</font>
        <Br /> 
    </div>
    <center><span id="msgNão" style="background-color:#FA8D8D;color:#000;padding:5px 10px;border:1px solid black;font-size:20px;display:none;">Campo MENSAGEM não preenchido.</span></center>
	<div id="labels">
        Mensagem:<br /><Br />
    </div>
    <div id="campos">
    <form name="frmContato" action="../i9/funcoes/contato.php" method="post" onsubmit="return validar()">
        <textarea name="comentario" cols="38" wrap="soft" rows="10" style="max-width:325px; max-height:200px;"></textarea><Br /><Br /><font color="#334b5e" size="3">(O remetente dessa mensagem será <?php session_start(); echo($_SESSION['nome']); ?>, com o email <?php  echo($_SESSION['email']); ?>)</font><Br /><Br />
        <input type="submit" value="Enviar" name="enviar" class="btn"/>
    </form>
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