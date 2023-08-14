<!DOCTYPE html>
<html lang="pt-bt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="javinha/index1.js"></script>
    <script src="javinha/empres.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


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
        <a href="investimento.html">INVESTIMENTOS</a>
        <?php
        if($nomeusuario != null)
        {
            ?>
            <li class="profile">OLÁ <?=strtoupper($nomeusuario)?></li>
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
</header>
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

        </footer>

</body>

</html>