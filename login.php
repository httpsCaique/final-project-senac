<?php
##ABRE UMA VARIAVEL DE SESSÃO
session_start();
##SOLICITA ARQUIVO CONECTA DB
include("conectadb.php");

##EVENTO APÓS O CLICK NO BOTÃO LOGAR
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'];
    $senha = $_POST['senha'];
    #QUERY DE BANCO DE DADOS 
    $sql = "SELECT COUNT(id) FROM usuario WHERE nome = '$nome' AND senha = '$senha'";
    $retorno = mysqli_query($link, $sql);

    ##TODO RETORNO DO BANCO É RETORNADO EM ARRAY EM PHP
    while ($tbl = mysqli_fetch_array($retorno)) {
        $cont = $tbl[0];
    }

    ##VERIFICA SE USUARIO EXISTE
## SE $CONT == 1 ELE EXISTE
## SE $CONT == 0 ELE NAO EXISTE E USUARIO NAO ESTA CADASTRADO

    if ($cont == 1) {
        $sql = "SELECT * FROM usuario WHERE nome = '$nome' AND senha = '$senha'";

        echo "<script>window.location.href='index.HTM';</script>";

    } else {
        echo "<script>window.alert('USUARIO OU SENHA INCORRETO');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/font.css">
    <link rel="stylesheet" href="./css/tuim.css">
    <title>LOGIN USUARIO</title>
</head>
<body>


<video autoplay loop muted style="-webkit-filter: blur(5px);" >
    <source src="./video/backvideo.mp4" type="video/mp4">
  </video >

<div >
    <form action="login.php" method="post" class="log"  style="filter:drop-shadow(5px -5px 0px #000000);">
        <h1 >LOGIN DE USUARIO</h1>
        <input type="text" name="nome" placeholder="NOME" required>
        <p></p>
        <input type="password" name="senha" placeholder="SENHA" required>
        <p></p>
        <button  class="button-54"  role="button" type="submit" name="login" value="LOGIN"><a>LOGIN</a></button>
    </form>
</div>
     

 
    <div class="log" style="filter:drop-shadow(5px -5px 0px #000000);" >
    <h1 >Não tem Cadastro?</h1>
    <p>Faça seu Cadastro Aqui!</p>
    <button  class="button-54" role="button"><a href="cadastrausuario.php" style="display: block; text-decoration: none;">CADASTRE-SE</a></button>
     </div>
 


</body>
</html>