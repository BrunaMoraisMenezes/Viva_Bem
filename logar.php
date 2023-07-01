<?php
include 'conexao.php';
$email = $_POST ["txtEmail"];
$senha = $_POST ["txtSenha"];

$sql =mysql_query ("SELECT * FROM tb_cadastro
                    WHERE email='$email' AND senha='$senha'");

if($email == "funcionario@vivabem" && $senha == "123a") 
{
    echo ("<script>
    window.alert('Bem vindo!')
    window.location.href='home_produto.html';
    </script>");  
}
if($email == "gerente@vivabem" && $senha == "123a") 
{
    echo ("<script>
    window.alert('Bem vindo!')
    window.location.href='home_gerente.html';
    </script>");  
}
 else if(mysql_num_rows ($sql) > 0){
	echo ("<script>
    window.alert('Bem vindo(a) novamente!')
    window.location.href='pagamento.html';
    </script>");
}
else if (mysql_num_rows ($sql) <= 0){
    echo ("<script>
    window.alert('Insira um login valido.')
    window.location.href='login.html';
    </script>");  
}     
?>
