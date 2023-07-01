<?php
    include 'conexao.php';
	
    $gtin = $_POST ["txt_gtin"];
    $nome = $_POST ["txt_nome"];
    $instrucoes = $_POST ["txt_instrucoes"]; 
	$dosagem = $_POST ["txt_dosagem"];
	$preco = $_POST ["txt_preco"];
	$quantidade = $_POST ["txt_quantidade"];

    $sql = mysql_query ("SELECT * FROM tb_produtos WHERE gtin='$gtin'");

	if (mysql_num_rows($sql) > 0)  
	{
        echo ("<script>
        window.alert('Produto existente com mesmo GTIN.')
        window.location.href='home.html';
        </script>"); 
	}    
    else 
	{
        $sql=mysql_query ("INSERT INTO tb_produtos (gtin, nome, instrucoes, dosagem, preco, quantidade) 
						  VALUES ('$gtin', '$nome', '$instrucoes','$dosagem', '$preco','$quantidade')");
			
        echo ("<script>
        window.alert('Produto cadastrado.')
        window.location.href='lista.php';
        </script>"); ;
    }

	$sql=mysql_query("UPDATE tb_produtos SET nome='$nome', instrucoes='$instrucoes', dosagem='$dosagem', preco='$preco', quantidade='$quantidade'
					WHERE gtin='$gtin'");	

?>
