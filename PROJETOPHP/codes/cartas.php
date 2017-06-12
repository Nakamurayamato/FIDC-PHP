<?php 
session_unset();
session_start();
    if (!isset($_SESSION['cartas'])){
    header("Location: consulta.php");}
    elseif ($_SESSION['cartas'] != "SIM" ){
    header("Location: consulta.php");}
?>
<!DOCTYPE html>
<html>
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">     
<link href="https://fonts.googleapis.com/css?family=Maven+Pro" rel="stylesheet"> 
<link href="style3.css" rel="stylesheet">
<link rel="shortcut icon" href="../img/favicon.png">    
<head>
    <title>FRDFIDC</title>
</head>
    <body>
	  <div class="menu">
          <img src="../img/logo-mini.png" alt="Fundo de renegociação de débitos">
		  <ul id="nav">
			<li><a href="http://www.frdfidc.com.br/#faq">Perguntas Frequentes</a></li>
			<li><a href="http://www.frdfidc.com.br/#parceiros">Parceiros</a></li>
			<li><a href="http://www.frdfidc.com.br/#contato">Contato</a></li>
		  </ul>
	  </div>
    <hr id="line">    
    <div class="texto">   
            <strong><p><?php  echo $_SESSION['nome']; ?>,</p></strong>
            <p>Você possui cartas de Anuência.</p>
            <form action="php.php" method="post">
                <input type="hidden" name="download"/>
                <div id="send-button" class="send-button">
                    <button type="submit"><span>Baixar</span></button>
                </div>
            </form>
    </div>
    <footer>
        <hr>
        <img src="../img/logo-mini.png" alt="Fundo de renegociação de débitos">
    </footer>
</body>
</html>