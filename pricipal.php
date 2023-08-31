<?php
    
    session_start();
    $nome=$_SESSION['nome'];





?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="javinha/index1.js"></script>
    <link rel="stylesheet" href="css/ling.css">
    <link rel="stylesheet" href="css/nome.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link rel="icon" href="./img/dollar.png" type="image/x-icon">
    <link rel="stylesheet" href="css/carrousel.css">
    <script src="javinha/cotaçao.js" ></script>
    <script src="javinha/tradecolor.js"></script>
    <title>Principal</title>
</head>
<body>

 <header>

        <nav>
        <a href="pricipal.php"><img class="imagem00" src="img/dollar.png"></a>

            <div class="cabeçalho">


            
               <a href="salario.php">SALARIO</a>
                <a href="empresa.php">EMPRESA</a>                
                <a href="investimento.php">INVESTIMENTOS</a>
               
            
            </div>
        </nav>
       
    </header>
    <script src="javinha/index1.js"></script>
   


   

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


       <nav class="gg">
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

    

    <main>
        
            <div class="principal">
                <div class="cont-principal">
                    <div class="digitasolo">
                        <a href="https://git.io/typing-svg"><img src="https://readme-typing-svg.demolab.com?font=Shrikhand&size=40&duration=3000&pause=90&color=ECC65C&center=true&multiline=true&width=435&height=150&lines=Bem+vindo;Ao+Site;Mestre+dos+Centavos" alt="Typing SVG" /></a>
                    </div>
                    <div class="txt">"Mestre das moedas"  oferece recursos para dividir o salário, organizar finanças 
                        empresariais e acompanhar cotação de investimentos. Ele permite aos usuários 
                        criar categorias para distribuir o salário, gerenciar contas empresariais e
                         monitorar investimentos em tempo real. Além disso, o site garante segurança dos 
                         dados, possui uma interface amigável e é uma ferramenta completa para auxiliar na 
                         administração financeira pessoal e empresarial.
                    </div>
                </div>
                         <img src="img/calculadora1 (1).png"  width="900px" height="900px" alt="imagem de um cara contando">

            </div>
        
    </main>



   <div class="contaner-aux">
        <div class="princ">
            
                <div class="conteudo" style="background-color: rgb(236, 198, 92);">

                    <h1 class="centralalig2">O que é Finanças?</h1>
                    <p class="texto ajuste1">As finanças são a gestão do dinheiro, principalmente em relação a empresas, organizações ou governos. Elas lidam com as questões de 
                        como um indivíduo, empresa ou governo adquire o dinheiro necessário - chamado capital no contexto da empresa - e como eles gastam ou 
                        investem esse dinheiro.</p>
                        <button class="button-54 btn" role="button"> <a href="https://pt.wikipedia.org/wiki/Finan%C3%A7as" target="_blank">wikipedia</a></button>
                    </div>

            
                <div class="conteudo" style="background-color: rgb(236, 198, 92);">
                    <h1 class="centralalig2">O que é Economia?</h1>
                    <p class="texto ajuste1">A economia é a ciência que estuda como a sociedade administra seus recursos limitados para atender às infinitas necessidades humanas. Ela explora as escolhas de indivíduos, empresas e governos em relação à produção, distribuição e consumo de bens e serviços, impactando o crescimento, estabilidade e bem-estar das sociedades.</p>
                    <button class="button-54 btn1" role="button"> <a href="https://pt.wikipedia.org/wiki/Economia" target="_blank">wikipedia</a></button>
                </div>
        </div>
    </div>


  <footer >
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