<?php 
include("conectadb.php");

session_start();

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
#cli_cpf	cli_nome	cli_senha	cli_datanasc	cli_telefone	cli_logradouro	cli_numero	cli_cidade
$cpf =$_POST['cpf'];
$nome = $_POST['nome'];
$senha =$_POST['senha'];
$sql = "SELECT COUNT(id) FROM usuario WHERE cpf = '$cpf' AND nome = '$nome' AND senha = '$senha'";
$retorno = mysqli_query($link, $sql);

##TODO RETORNO DO BANCO É RETORNADO EM ARRAY EM PHP
while($tbl = mysqli_fetch_array($retorno))
{
$cont = $tbl[0];
}

##VALIDAÇÃO DE TRUE E FALSE

if (empty($cpf) || empty($nome) || empty($senha)) {
    echo "<script>window.alert('Por favor, preencha todos os campos.');</script>";
} else if($cont == 1) {
      echo"<script>window.alert('CLIENTE JÁ EXISTE');</script>";
    }
    else{
    $sql = "INSERT INTO usuario (cpf, nome, senha)
    VALUES('$cpf','$nome','$senha')";
    mysqli_query($link, $sql);
    #CADASTROU USUARIO E JOGA MENSAGEM NA TELA E DIRECIONA PARA LISTA USUARIO
    echo"<script>window.alert('CLIENTE CADASTRADO');</script>";
    echo"<script>window.location.href='login.php';</script>";
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
    <title>CADASTRO</title>
</head>
<body>


<video autoplay loop muted style="-webkit-filter: blur(5px);" >
    <source src="./video/backvideo.mp4" type="video/mp4">
  </video >
  
    <div >
        <form action="cadastrausuario.php" method="post" class="dind"  style="filter:drop-shadow(5px -5px 0px #000000);">
        <h1 >CADASTRE-SE</h1>
            <input type="text" name="nome" id="nome" placeholder="NOME USUARIO">
            <br>
            <input type="password" name="senha" id="senha"placeholder="SENHA">
            <br>
            <input type="number" name="cpf" id="cpf" placeholder="CPF">
            <br>
            <button  class="button-54"  role="button" type="submit" name="cadastrar" id="cadastrar" value="CADASTRAR"><a>CADASTRAR</a></button>
        </form>
</div>
 
 
</body>
</html>