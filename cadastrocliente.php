<?php
include 'conexao.php';
$nome = $_POST ["txtNome"];
$email = $_POST ["txtEmail"];
$senha = $_POST ["txtSenha"];
$celular = $_POST ["txtCelular"];
$endereco = $_POST ["txtRua"];
$bairro = $_POST ["txtBairro"];
$cep = $_POST ["txtCEP"];
$cidade = $_POST ["cidades"];



$sql =mysql_query ("SELECT * FROM tb_cadastro
                    WHERE email ='$email'");

if (mysql_num_rows ($sql) > 0) 
{
    echo ("<script>
    window.alert('Conta existente. Faca login!')
    window.location.href='login.html';
    </script>"); 
}
    

else 
{
    $sql=mysql_query ("INSERT INTO tb_cadastro
                        (nome, email, senha, celular, endereco, bairro, cep, cidade )
                        VALUES ( '$nome','$email','$senha', '$celular', '$endereco', '$bairro', '$cep', '$cidade')") ;

    echo ("<script>
    window.alert('Conta criada com sucesso.')
    window.location.href='login.html';
    </script>");  
}

?>