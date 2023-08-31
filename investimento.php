
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
    <script src="javinha/investimento2.js"></script>
    <script src="javinha/empres.js"></script>
    <script src="javinha/cotaçao.js"></script>
    <link rel="stylesheet" href="css/font.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="css/ling.css">
    <link rel="stylesheet" href="css/nome.css">
    <link rel="stylesheet" href="css/carrousel.css">
    <link rel="icon" href="./img/dollar.png" type="image/x-icon">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <title>Investimento</title>
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



       <nav class="gg" >
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
        <div class="container">
            <div class="principal">
                <div class="cont-principal">
                    <div class="digitasolo">
                        <a href="https://git.io/typing-svg"><img src="https://readme-typing-svg.demolab.com?font=Shrikhand&size=50&duration=3000&pause=1000&color=ECC65C&center=true&multiline=true&width=435&height=180&lines=+++++++++++++++++++++++Bem+Vindo;++++++++++++++++++++++++A+%C3%A1rea;++++++++++++++++++++++Investimento" alt="Typing SVG" /></a>
                    </div>
                    <div class="txt">Investir no Tesouro Direto em vez da poupança é uma escolha mais vantajosa por 
                        diversas razões. Os investimentos no Tesouro Direto geralmente oferecem rentabilidade 
                        superior à poupança, especialmente em períodos de juros baixos. Além disso, a variedade 
                        de opções de títulos permite escolher o mais adequado aos objetivos financeiros. 
                        A segurança é similar, mas a liquidez é maior nos títulos públicos, e investir no 
                        Tesouro Direto também ajuda na diversificação da carteira. Com acesso online fácil e 
                        custos relativamente baixos, essa opção é acessível a diversos perfis de investidores. 
                        Contudo, é crucial considerar metas, prazos e riscos ao tomar decisões de investimento, 
                        podendo buscar orientação profissional para escolhas mais embasadas.
                    </div>
                </div>
                         <img src="img/calculadora.bmp"  width="900px" height="900px"  alt="imagem de um cara contando">
            </div>
        </div>


        


        <article class="articlee">
            <p class="ty"> <p class="princ3"> Eu tenho R$  <input type="number" name="dif1" id="dif1" class="format"  focus required ></p>
            <br>
            <br>
            <p class="ty"> <p class="princ3"> Para aplicar durante  <input type="number" name="dif2" id="dif2" class="format"> anos </p>
            <br>
            <p class="ty"> <p class="princ3"> Para aplicar durante   <b id="rangeValue" class="ajeitar"> 0 </b> Meses</p>
            <input type="range" name="dif3" id="dif3" class="format" min="0" max="12"  width="2000px" oninput="updateRangeValue()">
            <br>
            <label >Investimentos</label>
            <select name="investments" id="investments">
                <option value="nada">SELECIONE SUA OPÇÃO</option>
                <option value="selic">TESOURO SELIC</option>
                <option value="prefixado">TESOURO PREFIXADO</option>
                <option value="ipca">TESOURO IPCA+</option>
                <option value="renda">TESOURO RENDA+</option>

            </select>
            <br>
            <br>
            <br>
            <br>
            <button class="button-54" id="button01" onclick="calcinvestimento()"role="button" style="margin-right: 6rem;"><a>Calcular</a></button>
            <button class="button-54" id="button01" onclick="limparCampos()" role="button" ><a>&nbsp;Limpar&nbsp;</a></button>
            
            <article class="calculartudo">
            <br>
            <p class="princ3">Investimento</p> 
            <p class="calcprincipal ajeitar2"> <span id="resultado"></span> </p>
            <br>

                               <p class="princ3">Poupança</p> 
            <p class="calcprincipal">  <span id="poupança"></span> </p>
        </article>
            </article>





    </main>

    

        <div class="content">
        </div>
        <a href="#" class="to-top" onclick="scrollToTop(); return false;">Voltar</a>
        <script src="script.js"></script>

        <div class="king-size">
        <canvas id="investmentChart"></canvas>
    </div>
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