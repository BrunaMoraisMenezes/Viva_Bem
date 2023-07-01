<?php
include 'conexao.php';
$email = $_POST ["txtEmailNovo"];
$senha = $_POST ["txtSenhaNova"];


$sql =mysql_query ("update tb_cadastro set senha='$senha' where email='$email'"); 
    echo ("<script>
    window.alert('Senha alterada.')
    window.location.href='login.html';
    </script>");
?>