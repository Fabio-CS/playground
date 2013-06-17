<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta name="description" content="texto de descri&ccedil;&atilde;o do site">
        <?php include 'head.php'; ?>
        <script>
            $(document).ready(function(e) {
                menu("menu_gastronomia");
                SetBg("gastronomia");
            });
        </script>
    </head>
    <body>
        <div id="div_main_container">
            <div id="div_main_gastronomia">
                <?php include 'topo.php';?>
                <div id="div_conteudo">
                    <div id="div_esquerda">
                        <h1>Gastronomia</h1>
                        <p class="legendaAnuncio">Patrocinado</p>
                        <div class="anuncio660x86 anuncio">
                            <p><span>681 x 86 px</span></p>
                        </div>
                        <div id="div_noticias">
                            <h2>Últimas notícias</h2>
                            <div id="noticia_container">
                                <div id="seta_esq"><img src="imagens/img_arrow_left.png" alt=""></div>
                                <div class="noticia_item">
                                    <img src="imagens/img_mae_menina.png" alt="">
                                    <h6>GASTRONOMIA</h6>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna</p>
                                </div>
                                <div class="noticia_item">
                                    <img src="imagens/img_mae_menina.png" alt="">
                                    <h6>GASTRONOMIA</h6>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna</p>
                                </div>
                                <div class="noticia_item">
                                    <img src="imagens/img_mae_menina.png" alt="">
                                    <h6>GASTRONOMIA</h6>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna</p>
                                </div>
                                <div class="noticia_item">
                                    <img src="imagens/img_mae_menina.png" alt="">
                                    <h6>GASTRONOMIA</h6>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna</p>
                                </div>
                                <div id="seta_dir"><img src="imagens/img_arrow_right.png" alt=""></div>
                            </div>
                        </div>
                    </div>
                    <div id="div_direita">
                        <div id="box_pesq">
                            <form action="#" method="get">
                                <input type="text" id="pesquisa" name="pesquisa"/>
                                <input type="submit" id="buscar" name="buscar" value="BUSCAR"/>
                            </form>
                        </div>
                        <div id="div_boxhist">
                            <img class="tit_album" src="imagens/img_tit_historico.png" alt="">
                            <ul id="historico">
                                <li id="ano"> <h5>2013</h5>
                                    <ul id="mes"> 
                                        <li> <a href="gastronomia-detalhe.php"><H6>JANEIRO (2)</H6></a></li>
                                        <li><H6>FEVEREIRO</H6></li>
                                        <li><H6>MARÇO(5)</H6></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="anuncio250x250 anuncio">
                            <p><span>PUB <br> 250 x 250px</span></p>
                        </div>
                    </div>
                    <?php include 'rodape.php'; ?>
                </div>
            </div>
        </div>
    </body>
</html>
