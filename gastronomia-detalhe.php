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
                <?php include 'topo.php'; ?>
                <div id="div_conteudo">

                    <div id="div_esquerda">
                        <div id="gastr_main_txt">
                            <img src="imagens/img_mae_bebe.png" alt="">
                            <h1>Comida feita  em casa para bebês</h1>
                            <p class="label">Por Fernando Lemos | Foto Folia</p>

                            <div id="gast_text">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                </p>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                </p>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                </p>
                                <p>Visite nosso site: <a href="#">www.potinhosbebes.com.br</a></p>
                            </div>
                        </div>
                        <div id="div_noticias">
                            <h2 class="gast_detalhe">Leia Mais</h2>

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
                            <form action="" method="">
                                <input type="text" id="pesquisa" name="pesquisa"/>
                                <input type="submit" id="buscar" name="buscar" value="BUSCAR"/>
                            </form>
                        </div>
                        <div id="div_boxhist">
                            <img class="tit_album" src="imagens/img_tit_historico.png" alt="">
                            <ul id="historico">
                                <li id="ano"> <h5>2013</h5>
                                    <ul id="mes"> 
                                        <li> <a href="gastronomia-detalhe.php"> <H6>JANEIRO (2)</H6></a></li>
                                        <li><H6>FEVEREIRO</H6></li>
                                        <li><H6>MARÇO(5)</H6></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="anuncio250x250 anuncio">
                            <p><span>PUB <br> 250 x 250px</span></p>
                        </div>

                        <div id="recomenda">
                            <div id="rec_conteudo">
                                <img src="imagens/img_logo_playground_small.png" alt="">
                                <img class="recomenda" src="imagens/img_recomenda.png" alt="">
                                <img class="img_prod" src="imagens/img_potinho.png" alt="">
                                <h3>POTINHOS BABY GOURMET</h3>
                                <img src="imagens/img_ir_site.png" alt="">
                            </div>
                        </div>

                    </div>
                    <?php include 'rodape.php'; ?>
                </div>
            </div>
    </body>
</html>