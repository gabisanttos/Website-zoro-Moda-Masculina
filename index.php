<?php
//include(verificar_login.php)

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zoro Moda Masculina</title>
    <!-- scroll reveal cdn  -->
    <script src="https://unpkg.com/scrollreveal"></script>
    <!-- box icon cdn  -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- custom css file -->
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="shortcut icon" href="img/logoZoro.png" alt="Logotipo da Zoro Moda Masculina" type="image/x-icon">
</head>
<body>
    <!-- ================= header section ================ -->
    <header class="section flex">
        <!-- header left section  -->
        <div class="header-left">
            <!-- header logo  -->
            <div class="header-logo">
                <a class="marca-zoro" href="#"><h1>Zoro</h1></a>
            </div>
        </div>
        <div class="header-right flex">
            <!-- header search box  -->
            <div class="search-box flex">
                <i class='bx bx-search search-icon'></i>
                <input type="text" class="input-search" placeholder="O que você busca?">
            </div>
            <!-- header icons  -->
            <div class="header-icons flex">
                <a href="carrinho.html">
                <i class='bx bx-cart-alt'></i></a>
                <a href="tela-de-login.html">
                <i class="bx bx-user"></i></a>
            </div>
            <!-- header menu -->
            <div class="header-menu">
                <i class='bx bx-menu-alt-right menu-icon' ></i>
                <!-- menu  -->
                <ul class="menu flex">
                    <li class="nav-item">
                        <i class='bx bxs-home' ></i>
                        <a href="#">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <i class='bx bxs-shopping-bag' ></i>                      
                        <a href="produtos.html">Produtos</a>
                    </li>
                </ul>
            </div>
            <!-- mode change icon  -->
            <div class="mode-change">
                <i class='bx bx-moon mode-change-icon' ></i>
            </div>
        </div>
    </header> 
    <!---Banner rotativo-->
    <div id="slider">
        <img class="selected" src="img/banner1.png" alt="primeiro banner com cores azul e preto">
        <img src="img/banner2.png" alt="segundo banner com cores azul, branco e preto ">
    </div> 
    <div class="products-collection section">
        <div class="section__content">
            <h1 class="content__header">Produtos</h1>
        </div> 
        <div class="products-section">
            <div class="card">
                <div class="card__image">
                    <img src="img/Calçacargo.jpg" alt="Calça cargo cor preta">
                </div>
                <h4 class="card__header">Calça Cargo</h4>
                <p class="card__preco">R$64.99</p>
            </div> 
                <div class="card">
                    <div class="card__image">
                        <img src="img/camisapolopreta.jpg" alt="Camisa polo cor preta">
                    </div>
                    <h4 class="card__header">Camisa Polo</h4>
                    <p class="card__preco">R$49.99</p>
                </div> 
                <div class="card">
                    <div class="card__image">
                        <img src="img/bermudaesportiva.jpg" alt="Bermuda esportiva cor preta com duas listras brancas na barra da bermuda">
                    </div>
                    <h4 class="card__header">Bermuda Esportiva</h4>
                    <p class="card__preco">R$29.99</p>
                </div>
        </div> 
        <a class="content_a" href="produtos.html">Veja todos os nossos produtos</a>
    </div>
    <footer>
        <div class="container-foot">
            <div class="row-footer">
                <!---footer col-->
                <div class="footer-col">
                    <h4>Sobre nós</h4>
                    <ul>
                        <li><a href="marca.html">Quem somos</a></li>
                        <li><a href="marca.html">A marca</a></li>
                        <li><a href="">Nossos Serviços</a></li>
                        <li><a href="">Mapa do Site</a></li>
                    </ul>
                </div>
                 <!---end footer col-->
                 <!---footer col-->
                <div class="footer-col">
                    <h4>Contato</h4>
                    <ul>
                        <li><a href="">+55 81 999992222</a></li>
                        <li><a href="">zoro@zoro.com</a></li> 
                        <li><a href="contato.html">Fale conosco</a></li>
                    </ul>
                </div> 
                <!---end footer col-->
                <!---footer col-->                           
                <div class="footer-col">
                    <h4>Política</h4>
                    <ul>
                        <li><a href="">Trocas e Devoluções</a></li>
                        <li><a href="">Privacidade e Segurança</a> </li>
                        <li><a href="">Ajuste</a></li>
                        <li><a href="">Cashback</a></li>
                    </ul>
                </div> 
                <!---end footer col-->
                <!---footer col--> 
                <div class="footer-col">
                    <h4>Formas de Pagamento</h4>
                    <ul>
                        <li><a href="">Parcela mínima</a></li>
                        <li><a href="">Transferência bancária</a></li>
                        <li><a href="">PIX</a></li>              
                    </ul>
               </div>
               <!---end footer col-->
              <div class="medias-sociais">
                <a href="https://pt-br.facebook.com/"><i class="fa fa-facebook"></i></a>
                <a href="https://www.instagram.com/"><i class="fa fa-instagram"></i></a>
                <a href="https://twitter.com/"><i class="fa fa-twitter"></i></a>
                <a href="https://spotify.link/EZE1jsKjaEb"><i class="fa fa-spotify"></i></a>
                <a href="https://br.pinterest.com/"><i class="fa fa-pinterest"></i></a>
              </div>
            </div>  
            <p class="copyright">Todos os direitos reservados. Zoro Moda Masculina.</p>
        </div> 
    </footer> 
    <!---Acessibilidade libras--> 
    <div vw class="enabled">
        <div vw-access-button class="active"></div>
         <div vw-plugin-wrapper>
           <div class="vw-plugin-top-wrapper"></div>
        </div>
       </div>
       <script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
       <script>
         new window.VLibras.Widget('https://vlibras.gov.br/app');
       </script>   
    <!-- custom js file  -->
    <script src="js/index.js"></script>
</body>
</html>