<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="UTF-8">
	<title> Editar produtos</title>
	<link rel="stylesheet" href="css/estilo_funcionario.css">
</head>
<body link=black alink='green' vlink='black' Onload="inicio()">
	<div class="container">
		<div class="navbar">
			<a href="home_produto.html"><img src="imagens/vivabem.png" class="logo" alt="home"></a>
			<nav>
				<ul id="menuList">
					<li><a href="lista.php" id="lista"><img src='imagens/lista.png' alt='editar' height='60' width='60' class='right'></a></li>
					<li><a href="cadastro_produto.html" id="cadastro_produto"><img src='imagens/adicionar.png' alt='cadastro' height='60' width='60' class='right'></a></li>
					<li><a href="lista_excluir.php"id="excluir_produto"><img src='imagens/excluir.png' alt='excluir' height='70' width='70' class='right'></a></li>
					<li><a href="lista_editar.php"id="editar_produto"><img src='imagens/editar_produto.png' alt='editar' height='60' width='60' class='right'></a></li>
					<li><a href="login.html"id="Loginicone"><img src='imagens/loginicone.png' alt='login' height='60' width='60' class='right'></a></li> 
		
				</ul>
			</nav>
			<img src="imagens/menu.png" class="menu-icon" onclick="togglemenu()">
		</div>
        <center>
        <div class="container">
            <div class="coluna-1">
                <br><br><br><br><br><br><h2><font color="#602d8f"> EDITAR PRODUTO </b></h1></font>
                <form name="form1" method="POST">
                <fieldset style='width: 47.5%;'>
                <legend align="center"><h3>DADOS DO PRODUTO:</h3></legend>
                    <br><br>
                    <font 	font-size="15px" font-family="Arial">
                    <b>
                    GTIN:<br>
                    <input type="text" id="gtin" size='20' maxlength='20' name="txt_gtin" value="<?php if (isset($_GET['edit'])) echo $_GET['edit'] ?>" readonly><br><br>
                    <p>
                    NOME:<br>
                    <input type="text"  id="nome" size='45' maxlength='45' name="txt_nome" value="<?php if (isset($_GET['edit'])) echo $_GET['nome'] ?>" disabled><br><br>
                    <p>
                    INSTRUCOES:<br>
                    <input type="text" id="instrucoes" size='45' maxlength='45' name="txt_instrucoes" value="<?php if (isset($_GET['edit'])) echo $_GET['instrucoes'] ?>" disabled><br><br>
                    <p>
                    DOSAGEM:<br>
                    <input type="text"  id="dosagem" size='20' maxlength='20' name="txt_dosagem" value="<?php if (isset($_GET['edit'])) echo $_GET['dosagem'] ?>" disabled><br><br>
                    <p>
                    PRECO:<br>
                    <input type="text" id="preco" size='20' maxlength='20' name="txt_preco" value="<?php if (isset($_GET['edit'])) echo $_GET['preco'] ?>" disabled><br><br>
                    <p>
                    QUANTIDADE:<br>
                    <input type="text" id="quantidade" size='20' maxlength='20' name="txt_quantidade" value="<?php if (isset($_GET['edit'])) echo $_GET['quantidade'] ?>"><br><br>
            <input type="submit" name="bt_editar" VALUE="EDITAR"  onClick="document.form1.action='editar.php'" id="btn_cadastrar">
            <input type='submit' name='btn_voltar' value='VOLTAR' id="btn_limpar" onClick="document.form1.action='home_produto.html'">
            <br><br>
            </font>
            </div>
		<div class="social-links"></div>
</div>
</body>
</html>
