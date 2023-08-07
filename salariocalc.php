<?php

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $salario = $_POST['salario'];
    
    $essenciais = $_POST['n50'] = ($salario * 0.5);
    $variaveis = $_POST['n30'] = ($salario * 0.3);
    $poupanca = $_POST['n20'] = ($salario * 0.2);
    // echo($essenciais);
    header("Location: salario.php");

}



?>