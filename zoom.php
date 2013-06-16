<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta name="description" content="texto de descri&ccedil;&atilde;o do site">
        <?php include 'head.php'; ?>
        <script>
            $(document).ready(function(e) {
                menu("menu_zoom");
                SetBg("zoom");
            });
        </script>
    </head>
    <body>
        <div id="div_main_container">
            <div id="div_main_zoom">
                <?php include 'topo.php'; ?>
                <div id="conteudo">

                    <div id="div_esquerda">
                        <h1>Zoom</h1>

                        <p class="legendaAnuncio">Patrocinado</p>
                        <div class="anuncio660x86 anuncio">
                            <p><span>660 x 86 px</span></p>
                        </div>

                        <div id="colecao_albums">
                            <h2>Álbums</h2>

                            <div class="album">
                                <div class="img_album"></div>
                                <p class="alb_tit">Nome do Evento</p>
                                <p>Local do Evento</p>
                            </div>
                            <div class="album">
                                <div class="img_album"></div>
                                <p class="alb_tit">Nome do Evento</p>
                                <p>Local do Evento</p>
                            </div>
                            <div class="album">
                                <div class="img_album"></div>
                                <p class="alb_tit">Nome do Evento</p>
                                <p>Local do Evento</p>
                            </div>
                            <div class="album">
                                <div class="img_album"></div>
                                <p class="alb_tit">Nome do Evento</p>
                                <p>Local do Evento</p>
                            </div>
                            <div class="album">
                                <div class="img_album"></div>
                                <p class="alb_tit">Nome do Evento</p>
                                <p>Local do Evento</p>
                            </div>
                            <div class="album">
                                <div class="img_album"></div>
                                <p class="alb_tit">Nome do Evento</p>
                                <p>Local do Evento</p>
                            </div>
                            <div class="album">
                                <div class="img_album"></div>
                                <p class="alb_tit">Nome do Evento</p>
                                <p>Local do Evento</p>
                            </div>
                            <div class="album">
                                <div class="img_album"></div>
                                <p class="alb_tit">Nome do Evento</p>
                                <p>Local do Evento</p>
                            </div>
                            <div class="album">
                                <div class="img_album"></div>
                                <p class="alb_tit">Nome do Evento</p>
                                <p>Local do Evento</p>
                            </div>
                            <div class="album">
                                <div class="img_album"></div>
                                <p class="alb_tit">Nome do Evento</p>
                                <p>Local do Evento</p>
                            </div>
                            <div class="album">
                                <div class="img_album"></div>
                                <p class="alb_tit">Nome do Evento</p>
                                <p>Local do Evento</p>
                            </div>
                            <div class="album">
                                <div class="img_album"></div>
                                <p class="alb_tit">Nome do Evento</p>
                                <p>Local do Evento</p>
                            </div>
                            <div class="album">
                                <div class="img_album"></div>
                                <p class="alb_tit">Nome do Evento</p>
                                <p>Local do Evento</p>
                            </div>
                            <div class="album">
                                <div class="img_album"></div>
                                <p class="alb_tit">Nome do Evento</p>
                                <p>Local do Evento</p>
                            </div>
                            <div class="album">
                                <div class="img_album"></div>
                                <p class="alb_tit">Nome do Evento</p>
                                <p>Local do Evento</p>
                            </div>
                            <div class="album">
                                <div class="img_album"></div>
                                <p class="alb_tit">Nome do Evento</p>
                                <p>Local do Evento</p>
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
                            <img class="tit_album" src="imagens/img_tit_album.png" alt="">
                            <ul id="historico">
                                <li id="ano"> <h5>2013</h5>
                                    <ul> 
                                        <li id="mes"><H6>JANEIRO</H6>
                                            <ul id="albuns">
                                                <li>LANÇAMENTO MARCA</li>
                                                <li>FESTA DE ANIVERSARIO DO THEO</li>
                                                <li>LANÇAMENTO MARCA</li>
                                                <li>LANÇAMENTO MARCA</li>
                                                <li>LANÇAMENTO MARCA</li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="anuncio250x250 anuncio">
                            <p><span>PUB <br> 250 x 250px</span></p>
                        </div>
                        <div class="anuncio250x250 anuncio">
                            <p><span>PUB <br> 250 x 250</span></p>
                        </div>
                    </div>
                </div>

            </div>
            <?php include 'rodape.php'; ?>
        </div>
    </div>
</body>
</html>