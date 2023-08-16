<?php
    
    session_start();
    $nome=$_SESSION['nome'];





?>

<!DOCTYPE html>
<html lang="pt-bt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="javinha/index1.js"></script>
    <script src="javinha/empres.js"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <link rel="stylesheet" href="css/nome.css">
    <link rel="stylesheet" href="css/ling.css">
    <link rel="stylesheet" href="css/carrousel.css">
    <link rel="icon" href="./img/dollar.png" type="image/x-icon">
    <title>Personagens</title>
</head>
<body>

<header>

<nav>
    <a href="principal.HTM"><img class="imagem00" src=""></a>

    <div class="cabeçalho">


    
       <a href="salario.php">SALARIO</a>
        <a href="empresa.php">EMPRESA</a>                
        <a href="investimento.php">INVESTIMENTOS</a>
    </div>
</nav>
</header>

<div class="carousel">
     <div class="slider">
      <div class="slide-track">
        <div class="slides">
            


        <div class="canada slide"">
          <img  src="img/Flag_of_Canada_(Pantone).svg.png" alt="bandeira canada">
          
            <span class="u-text-placeholder currency_cad" >1 CAD = 3.58 BRL</span>
        </div>

        <div class="usd slide">
            <img  src="img/Flag_of_the_United_States.svg.png"   alt="bandeira estados unidos">
                <span class="u-text-placeholder currency_usd" >1 USD = 4.73 BRL</span>
        </div>

        <div class="russia slide">
            <img  src="img/Flag_of_Russia.svg.png"   alt="bandeira da russia">
            <span class="u-text-placeholder currency_rub">1 RUB = 0.05 BRL</span>
        </div>

        <div class="japao slide">
            <img  src="img/Flag_of_Japan.svg.png"  alt="bandeira do japao">
            <span class="u-text-placeholder currency_jpy" >1 JPY = 0.03 BRL</span>
        </div>

        <div class="china slide">
            <img  src="img/Flag_of_the_People's_Republic_of_China.svg.png"  alt="bandeira da china">
            <span class="u-text-placeholder currency_cny" >1 CNY = 0.66 BRL</span>
        </div>

        
        <div class="reino-unido slide">
            <img  src="img/Flag_of_the_United_Kingdom_(3-5).svg.png"  alt="bandeira reino unido">
            <span class="u-text-placeholder currency_gbp" >1 GBP = 6.07 BRL</span>
        </div>

        <div class="india slide">
            <img  src="img/Flag_of_India.svg.png"  alt="bandeira india">
            <span class="u-text-placeholder currency_inr" >1 INR = 0.06 BRL</span>
        </div>

        <div class="uniao slide">
            <img  src="img/Flag_of_Europe.svg.png"  alt="bandeira runiao europeia">
            <span class="u-text-placeholder currency_eur" >1 EUR = 5.24 BRL</span>
        </div>

        <div class="hk slide">
            <img  src="img/Flag_of_Hong_Kong.svg.png"  alt="bandeira Hong Kong">
            <span class="u-text-placeholder currency_hkd" >1 HKD = 0.61 BRL</span>
        </div>

        <div class="hk slide">
            <img  src="img/Flag_of_the_United_Arab_Emirates.svg.png"  alt="bandeira emira dos arabes">
            <span class="u-text-placeholder currency_aed" >1 AED = 1.29 BRL</span>
        </div>


        </div>
      </div>
     </div>
    </div>

<nav class="gg">
            <div class="cabeçalho">
              <?php
        if($nome != null)
        {
            ?>
            <h2 class="jj">Olá <?=strtoupper($nome)?></h2>
            <?php
        }
        else
        {
            echo"<script>window.alert('USUARIO NÃO AUTENTICADO'); 
            window.location.href='login.php'; </script>";
        }
        ?>
            </div>
        </nav>

<div style="text-align: center;">
    <a ><img src="https://readme-typing-svg.demolab.com?font=Shrikhand&size=50&pause=1000&color=F7BA3D&width=1000&height=150&lines=Bem+Vindo+a+%C3%81rea+de+Personagens" alt="Typing SVG" /></a>
</div>
   

   
     
    <div style="display: flex;">
<div class="card">
                <img src="img/moneybagretro.png" alt="Money bagreto">
                <h2>Saquitel</h2>
                <p>Um saco de dinheiro bem sapeca.</p>
              </div>

              <div class="card">
                <img src="img/moedaretro.png" alt="Moeda">
                <h2>Mo & Eda</h2>
                <p>São eles os irmãos Mo e Eda.</p>
              </div>

              <div class="card">
                <img src="img/moneybagretro.png" alt="Money bagreto">
                <h2>Saco de Dinheiro</h2>
                <p>Um saquinho bem sapeca.</p>
              </div>
    </div>
            
    <div style="display: flex;">
        <div class="card">
                        <img src="img/moneybagretro.png" alt="Money bagreto">
                        <h2>Saquitel</h2>
                        <p>Um saco de dinheiro bem sapeca.</p>
                      </div>
        
                      <div class="card">
                        <img src="img/moedaretro.png" alt="Moeda">
                        <h2>Mo & Eda</h2>
                        <p>São eles os irmãos Mo e Eda.</p>
                      </div>
        
                      <div class="card">
                        <img src="img/moneybagretro.png" alt="Money bagreto">
                        <h2>Saco de Dinheiro</h2>
                        <p>Um saquinho bem sapeca.</p>
                      </div>
            </div>
            
             


        <footer>
        <div class="footer1">
        <a href="educacao.php">APRENDA</a>
                <a href="personagens.php">PERSONAGENS</a> 
        </div>
        </footer>

</body>

</html>