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
    <script src="javinha/inpute.js"></script>
    <script src="javinha/empres.js"></script>
    <script src="javinha/cotaçao.js"></script>
    <link rel="stylesheet" href="css/nome.css">
    <link rel="icon" href="./img/dollar.png" type="image/x-icon">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

  
    <link rel="stylesheet" href="css/ling.css">
    <link rel="stylesheet" href="css/carrousel.css">

    <title>calculadora</title>
</head>
<body>

<header>

<nav style="background-color: rgb(153, 153, 153);">
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
            <span class="u-text-placeholder currency_cad" >1 CAD = 3.58 BRL</span>
        </b>

            <img  src="img/Flag_of_the_United_States.svg.png"   alt="bandeira estados unidos">
            <b class="cont-ajuste">
                <span class="u-text-placeholder currency_usd" >1 USD = 4.73 BRL</span>
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


       <nav class="gg" style="background-color: rgb(153, 153, 153);">
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


        <main >

            <div class="container">
                <div class="principal">
                    <div class="cont-principal">
                        <div class="digitasolo">
                            <a href="https://git.io/typing-svg" ><img src="https://readme-typing-svg.demolab.com?font=Shrikhand&size=50&duration=3000&pause=1000&color=ECC65C&center=true&multiline=true&width=435&height=180&lines=+++++++++++++++++++++++Bem+Vindo;+++++++++++++++++++++++++A+%C3%A1rea;++++++++++++++++++++++++Calculadora" alt="Typing SVG" /></a>
                        </div>

                       
                        <div class="txt" style="background-color: rgb(153, 153, 153);"><p>Método 50-30-20</p>método de divisão de salário é o 50-30-20 que, como o próprio nome diz, divide a sua renda líquida mensal em três partes: 50%, 30% e 20%.
                            Foi desenvolvido pela professora de direito e atual senadora norte-americana Elizabeth Warren com sua filha, Amelia Warren Tyagi. Ele consiste, basicamente, em dividir sua renda líquida mensal em três partes, tendo como principal pano de fundo o controle financeiro ou o equilíbrio do orçamento.
                             
                            
                            Veja como funciona na prática:
                        </div>
                    </div>
                             <img src="img/moneybagretro1.png"  width="900px" height="900px"  alt="imagem de um cara contando">
    
                </div>
            </div>

                <article class="articlee2" style="background-color: rgb(153, 153, 153);">
                <div class="wrapper">
		<p class="titlebasic">Calculadora</p><input id="num-one" name="num-one" type="text"> <input id="num-two" name="num-two" type="text"><br>
		<br>
		<input checked id="box1" name="sign-area" type="radio" value="add"><b>+</b> <input id="box2" name="sign-area" type="radio" value="subtract"><b>-</b> <input id="box3" name="sign-area" type="radio" value="multiply"><b>*</b> <input id="box4" name="sign-area" type="radio" value="divide"><b>/</b><br>
		<br>
		<button onclick="outcome()" class="button-54" id="button01" role="button"><a>calcular</a></button>
		<h1 id="resultArea"></h1>
	</div>
	<script src="index.js">


	</script> 
                </article>

        </main>

        <style>


.titlebasic{
    font-size: 5rem;

}

.button-54{
    margin-top: 2rem;
}
.articlee2{
    background-color:rgb(236, 198, 92);
  border-radius: 10px;
  box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
  margin: 50px auto;
  padding: 100px;
  width: 900px;
  text-align: center;
  border: 5px black solid;
  height: 800px;
}


input[type="text"] {
	height: 40px;

}
input[type="text"] {
	font-size: 24px;
}

input[type="radio"] {
	width: 20px;
	height: 20px;
}
b {
	font-size: 30px;
}


        </style>
        <script>
function outcome() {

let num1 = Number(document.getElementById("num-one").value)
let num2 = Number(document.getElementById("num-two").value)
let total = 0;


if(document.getElementById("box1").checked)
{
    total = (num1 + num2)
}

else if (document.getElementById("box2").checked)
{
    total = num1 - num2
}

else if (document.getElementById("box3").checked)
{
    total = num1 * num2
}

else if (document.getElementById("box4").checked)
{
    total = num1 / num2
}

document.getElementById("resultArea").innerHTML = "Resultado "+ total

}

        </script>
<footer style="background-color: rgb(153, 153, 153);">

<div class="footer1" >
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



