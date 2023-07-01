<?php
   include 'conexao.php';
		 
		 $gtin = $_POST [ "txt_gtin"];
         $quantidade = $_POST["txt_quantidade"];		
		
		      $sql =mysql_query ("update tb_produtos set quantidade='$quantidade' where gtin='$gtin'") ;
			  echo ("<script>
				window.alert('Produto alterado com sucesso!')
				window.location.href='lista.php';
				</script>"); 
?>