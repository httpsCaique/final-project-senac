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
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script src="javinha/cotaçao.js"></script>
    <link rel="stylesheet" href="css/nome.css">
    <link rel="stylesheet" href="css/ling.css">
    <link rel="stylesheet" href="css/carrousel.css">
    <link rel="icon" href="./img/dollar.png" type="image/x-icon">
    <title>Personagens</title>
</head>
<body>

<header>

<nav style="background-color: #2A47AD;">
<a href="pricipal.php"><img class="imagem00" src="img/dollar.png"></a>
    <div class="cabeçalho">


    
       <a href="salario.php">SALARIO</a>
        <a href="empresa.php">EMPRESA</a>                
        <a href="investimento.php">INVESTIMENTOS</a>
    </div>
</nav>
</header>

<div class="logos">
      <div class="logos-slide">



 <img  src="img/Flag_of_Canada_(Pantone).svg.png" alt="bandeira canada">
        <b class="cont-ajuste">
            <span class="u-text-placeholder currency_cad" ">1 CAD = 3.58 BRL</span>
        </b>


            <img  src="img/Flag_of_the_United_States.svg.png"   alt="bandeira estados unidos">
            <b class="cont-ajuste">
                <span class="u-text-placeholder currency_usd" ">1 USD = 4.73 BRL</span>
            </b>



               
            <img  src="img/Flag_of_Russia.svg.png"   alt="bandeira da russia">
             <b class="cont-ajuste">
            <span class="u-text-placeholder currency_rub">1 RUB = 0.05 BRL</span>
        </b>



            

         
            <img  src="img/Flag_of_Japan.svg.png"  alt="bandeira do japao">
            <b class="cont-ajuste">
            <span class="u-text-placeholder currency_jpy" >1 JPY = 0.03 BRL</span>
        </b>
            


            <img  src="img/Flag_of_the_People's_Republic_of_China.svg.png"  alt="bandeira da china">
            <b class="cont-ajuste">
            <span class="u-text-placeholder currency_cny" >1 CNY = 0.66 BRL</span>
        </b>
           


            <img  src="img/Flag_of_the_United_Kingdom_(3-5).svg.png"  alt="bandeira reino unido"> 
            <b class="cont-ajuste">
            <span class="u-text-placeholder currency_gbp" >1 GBP = 6.07 BRL</span>
        </b>


            <img  src="img/Flag_of_India.svg.png"  alt="bandeira india">
            <b class="cont-ajuste">
            <span class="u-text-placeholder currency_inr" >1 INR = 0.06 BRL</span>
            </b>


            <img  src="img/Flag_of_Europe.svg.png"  alt="bandeira runiao europeia">
            <b class="cont-ajuste">
            <span class="u-text-placeholder currency_eur" >1 EUR = 5.24 BRL</span>
            </b>
       
            <img  src="img/Flag_of_Hong_Kong.svg.png"  alt="bandeira Hong Kong"> 
            <b class="cont-ajuste">
            <span class="u-text-placeholder currency_hkd" >1 HKD = 0.61 BRL</span>
            </b>
       
            <img  src="img/Flag_of_the_United_Arab_Emirates.svg.png"  alt="bandeira emira dos arabes">
             <b class="cont-ajuste">
            <span class="u-text-placeholder currency_aed" >1 AED = 1.29 BRL</span>
            </b>





      </div>
    </div>

    <script>
      var copy = document.querySelector(".logos-slide").cloneNode(true);
      document.querySelector(".logos").appendChild(copy);
    </script>


    <nav class="gg" style="background-color: #2A47AD;">
            <div class="cabeçalho">
                <div class="container-calculator" style="display: flex; align-items: center;">
                <a class="ajuste11" style="font-size: 25px;" href="calculadora.php">Calculadora </a>
                <?php
        if($nome != null)
        {
            ?>
            <p class="ajuste11" style="font-size: 25px; margin-left:900px;  ">Olá <?=strtoupper($nome)?></p>
            <?php
        }
        else
        {
            echo"<script>window.alert('USUARIO NÃO AUTENTICADO'); 
            window.location.href='login.php'; </script>";
        }
        ?>
            
              
            
                </div>
            </div>
        </nav>

<div style="text-align: center; justify-self: center;">
    <a ><img src="https://readme-typing-svg.demolab.com?font=Shrikhand&size=50&pause=1000&color=5932AD&width=1000&height=150&lines=Bem+Vindo+a+%C3%81rea+de+Personagens" alt="Typing SVG" /></a>
</div>
   

   
     
    <div style="display: flex;" >
<div class="card" ">
                <img src="img/moneybagretro.png" alt="Money bagreto">
                <h2>Saquitel</h2>
                <p>Um pequeno saco de dinheiro.</p>
              </div>

              <div class="card">
                <img src="img/moedaretro.png" alt="Moeda">
                <h2>Mo & Eda</h2>
                <p>São eles os irmãos Mo e Eda.</p>
              </div>

              <div class="card">
                <img src="img/calculadora2.bmp" alt="centavo">
                <h2>Penny Gold</h2>
                <p>A moedinha de ouro.</p>
              </div>
    </div>
            
    <div style="display: flex; margin-left: 14rem;">
                        <div class="card">
                        <img src="img/calculadora.bmp" alt="Money bagreto">
                        <h2>Loan Shark</h2>
                        <p>Sempre disposto a contar as notas.</p>
                        </div>
        
                        <div class="card">
                        <img src="img/moneybagretro1.png" alt="Moeda">
                        <h2>Loan Shark: 1920s</h2>
                        <p>Sempre disposto a contar as notas.</p>
                        </div>
        
            </div>
            
             
            <div class="content">
    </div>
    <a href="#" class="to-top" onclick="scrollToTop(); return false;" style="background-color: #2A47AD;">Voltar</a>
    <script src="script.js"></script>

        <footer style="background-color: #2A47AD;">
        <div class="footer1">
            <div class="okk">
            <a href="educacao.php" >APRENDA</a>
            <a href="personagens.php">PERSONAGENS</a>
            </div>
            <div class="okk">
                  <a href="https://github.com/httpsCaique" target="_blank">
                <img src="./img/github.png" alt="Instagram">
            </a>
            <a href="https://www.instagram.com/guilherme_henrique_mb/" target="_blank">
                <img src="./img/ints2.png" alt="Instagram">
            </a>
            </div>
          <div class="okk" style="margin-left: -25px;  ">
            <p>httpscaique</p>
            <p>YGuilhermo13</p>
          </div>
        </div>
        </footer>

</body>

</html>