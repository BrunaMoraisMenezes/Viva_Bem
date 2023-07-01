<?php
include 'conexao.php';

	$query="55";
	if(isset($_POST['busca_gtin']) != "") {
	$sql = mysql_query("SELECT * FROM tb_produtos WHERE gtin LIKE '{$_POST['busca_gtin']}%' ORDER BY gtin ASC");
	}
	else {
	$sql = mysql_query("SELECT * FROM tb_produtos ORDER BY gtin ASC");
	}
	
	if(isset($_GET['apagar'])) 
		{
		$sql = mysql_query ("DELETE FROM tb_produtos WHERE gtin=". $_GET['apagar']);
			echo ("<script>
				window.alert('Produto excluido com sucesso!')
				window.location.href='lista.php';
				</script>"); 
			return false;
		}
?>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="UTF-8">
	<title> Excluir produtos</title>
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
	<br><br><br><br><br><br>
		<form name="form1" method="POST" action="lista.php">
		<b><h1><font color="#602d8f"> Digite o GTIN do medicamento: </b></h1></font>
			<input type="text" size="35" name="busca_gtin"  id="txt_busca"><br><br>
			<input type="submit" value="FILTRAR" id="btn_filtrar">
			<input type="submit" onClick="document.form1.action='home_produto.html'" value="VOLTAR" id="btn_voltar">
		</form>

	<table border="0" align="center">
		<tr>
			<th align="center" colspan="9" bgcolor="#602d8f"><font color="white"> LISTAGEM DE PRODUTOS CADASTRADOS </th>
		</tr>
		<tr>
			<th bgcolor="#5fba51">&nbsp;&nbsp;&nbsp;&nbsp;GTIN&nbsp;&nbsp;&nbsp;&nbsp;</th>
			<th bgcolor="#5fba51">&nbsp;&nbsp;&nbsp;&nbsp;NOME&nbsp;&nbsp;&nbsp;&nbsp;</th>
			<th bgcolor="#5fba51">&nbsp;&nbsp;&nbsp;&nbsp;INSTRUCOES&nbsp;&nbsp;&nbsp;&nbsp;</th>
			<th bgcolor="#5fba51">&nbsp;&nbsp;&nbsp;&nbsp;DOSAGEM&nbsp;&nbsp;&nbsp;&nbsp;</th>
			<th bgcolor="#5fba51">&nbsp;&nbsp;&nbsp;&nbsp;PRECO&nbsp;&nbsp;&nbsp;&nbsp;</th>
			<th bgcolor="#5fba51">&nbsp;&nbsp;&nbsp;&nbsp;QUANTIDADE&nbsp;&nbsp;&nbsp;&nbsp;</th>
			<th bgcolor="#5fba51">&nbsp;&nbsp;&nbsp;&nbsp;EXCLUIR&nbsp;&nbsp;&nbsp;&nbsp;</th>
		</tr>
		<tr>
	</div>

<?php	
	if (!$query){
	die('Invalid query: '.mysql_error());}

	while($linha = mysql_fetch_assoc($sql)) {
		?>		
		<td align="center"><?php echo $linha['gtin']; ?></td>
		<td align="center"><?php echo $linha['nome']; ?></td>
		<td align="center"><?php echo $linha['instrucoes']; ?></td>
		<td align="center"><?php echo $linha['dosagem']; ?></td>
		<td align="center"><?php echo $linha['preco']; ?></td>
		<td align="center"><?php echo $linha['quantidade']; ?></td>
		
		<th><a href="lista.php?apagar=' <?php echo $linha ['gtin']; ?>'"><img src='imagens/excluir_lista.png' height='50' width='50'></a></td>
		<tr>
		<br>
<?php }	?>
</table>
<div class="social-links"></div>
</div>
</body>
</html>