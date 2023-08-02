<?php
    #ABRE UMA VARIAVEL SESSÃO
    session_start();
    #SOLICITA O ARQUIVO CONECTADB
    include("conectadb.php");
    #EVENTO APÓS O CLICK NO BOTÃO LOGAR
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $nome = $_POST['nome'];
        $senha = $_POST['senha'];

        
        #QUERY DE BANCO DE DADOS
        $sql = "SELECT COUNT(usu_id) FROM usuarios WHERE usu_nome = '$nome'
        AND usu_senha = '$senha'";
        $retorno = mysqli_query($link, $sql);

        #TODO RETORNO DO BANCO É RETORNADO EM ARRAY EM PHP
        while($tbl = mysqli_fetch_array($retorno)){
            $cont = $tbl[0];
        }
        
        #VERIFICA SE USUARIO EXISTE
        #SE $CONT == 1 ELE EXISTE E FAZ LOGIN
        #SE $CONT == 0 ELE NÃO EXISTE E USUARIO NÃO ESTÁ CADASTRADO
        if($cont == 1){
            $sql = "SELECT * FROM usuarios WHERE usu_nome = '$nome' 
            AND usu_senha = '$senha' AND usu_ativo = 's'";

            $_SESSION['nomeusuario'] = $nome;
            
            #DIRECIONA USUARIO PARA O ADM
            echo"<script>window.location.href='admhome.php';</script>";
        }
        else{
            echo"<script>window.alert('USUARIO OU SENHA INCORRETO');</script>";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/estilo.css">
    <title>LOGIN USUARIO</title>
</head>
<body>


<video autoplay loop muted style="-webkit-filter: blur(5px);" >
    <source src="./video/backvideo.mp4" type="video/mp4">
  </video >


    <form action="login.php" method="post" class="log" >
        <h1>LOGIN DE USUARIO</h1>
        <input type="text" name="nome" placeholder="NOME" required>
        <p></p>
        <input type="password" name="senha" placeholder="SENHA" required>
        <p></p>
        <button  class="button-54" class="" role="button" type="submit" name="login" value="LOGIN">LOGIN</button>
    </form>
    
<div class="log"  >
    <h1 >Não tem Cadastro?</h1>
    <p>Faça seu Cadastro Aqui!</p>
    <button  class="button-54" role="button"><a href="cadastrausuario.php">CADASTRE</a></button>
</div>

</body>
</html>