<?php
    
    session_start();
    $nome=$_SESSION['nome'];

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="./javinha/tdd.js"></script>
    <script src="javinha/empres.js"></script>
    <script src="javinha/index1.js"></script>
    <link rel="stylesheet" href="css/carrousel.css">
    <link rel="stylesheet" href="css/nome.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
     <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <link rel="stylesheet" href="css/ling.css">
   
    <link rel="icon" href="./img/dollar.png" type="image/x-icon">
    <title>Aprenda</title>
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
            


        <div class="canada slide">
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
                <div class="container-calculator" style="display: flex; align-items: center;">
                <a class="ajuste11" style="font-size: 20px;" href="calculadora.php">Calculadora </a>

        <?php
        if($nome != null)
        {
            ?>
            <p class="ajuste11" style="font-size: 25px; margin-left:1200px; ">Olá <?=strtoupper($nome)?></p>
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
  <div class="contaneral">
    <div>
    <div class="conteudo-top">
    <h1 class="ajuste3">Educação Financeira</h1>
    <p class="texto2 ajuste1">Educação financeira é um processo de adquirir conhecimentos, habilidades e atitudes necessárias para tomar decisões financeiras inteligentes. Através da educação financeira, as pessoas aprendem a gerenciar eficazmente seus recursos financeiros, a tomar decisões conscientes sobre gastos e investimentos, a evitar dívidas prejudiciais e a construir um futuro financeiro seguro.</p>
    </div>
    </div>
 
  </div>
   



    <div class="contaneral">
        <div class="princ">
            
                <div class="conteudo-eda">

                    <h1 class="ajuste2">Conhecimento de Conceitos Financeiros Básicos:</h1>
                    <p class="texto2 ajuste1"> Educação financeira envolve aprender conceitos fundamentais, como orçamentação, economia, juros, inflação, investimento e dívidas. Compreender esses conceitos é essencial para tomar decisões informadas sobre finanças pessoais.</p>
                    </div>

            
                <div class="conteudo-eda">
                    <h1 class="ajuste2">Orçamentação e Planejamento:</h1>
                    <p class="texto2 ajuste1"> Uma parte crucial da educação financeira é aprender a criar um orçamento. Isso implica em acompanhar os gastos, identificar áreas de economia e estabelecer metas financeiras realistas. Um planejamento financeiro bem estruturado ajuda a evitar gastos impulsivos e a garantir que as despesas estejam alinhadas com os objetivos financeiros de longo prazo.</p>
                   
                </div>          
        </div>
    </div>

    <div class="contaneral">
        <div class="princ">
            
                <div class="conteudo-eda">

                    <h1 class="ajuste2">Gestão de Dívidas e Crédito:</h1>
                    <p class="texto2 ajuste1"> Educação financeira ensina a usar o crédito de forma responsável, a evitar dívidas excessivas e a entender como os juros afetam o pagamento de empréstimos. Isso inclui saber quando é apropriado recorrer a empréstimos ou cartões de crédito, e como pagar essas dívidas de maneira eficiente.</p>
                    </div>

            
                <div class="conteudo-eda">
                    <h1 class="ajuste2">Investimento e Crescimento Financeiro:</h1>
                    <p class="texto2 ajuste1"> A educação financeira também abrange o conhecimento sobre investimentos, desde os básicos, como poupança, até opções mais avançadas, como ações, títulos e fundos mútuos. Aprender a investir de maneira informada pode ajudar a construir riqueza ao longo do tempo e garantir uma segurança financeira futura.</p>
                   
                </div>          
        </div>
    </div>

    <div class="content">
    </div>
    <a href="#" class="to-top" onclick="scrollToTop(); return false;">Voltar</a>
    <script src="script.js"></script>
 
    <footer>
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