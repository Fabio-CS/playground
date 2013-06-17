<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta name="description" content="texto de descri&ccedil;&atilde;o do site">
        <?php include 'head.php'; ?>
        <script>
            $(document).ready(function(e) {
                SetBg("index");
                $("#cadastraNews").click(function(){
                    $("#div_form_newsletter").slideToggle();
                    $("#email").focus();
                })
            });
        </script>
    </head>
    <body>
        <div id="div_main_container">
            <div id="div_main_index">
                <div id="div_newsletter">
                    <div id="ico_news">
                        <img src="imagens/img_newsletter.png">
                    </div>
                    <h5>Newsletter</h5>
                    <p><a href="#" id="cadastraNews">Cadastre-se aqui</a></p>
                    <div id="div_form_newsletter">
                        <form method="post" action="#">
                            <input type="text" name="email" id="email" placeholder="E-mail">
                            <input type="image" name="ok" id="btn_ok" src="imagens/img_btn_ok.png" alt="ok">
                        </form>
                    </div>
                </div>
                <?php include 'topo.php'; ?>
                <div id="div_conteudo">
                    <div id="div_esquerda">
                        <div id="div_destaque_home">
                            <div class="textoDestaque">
                                <h1>SAÚDE</h1>
                                <h3>Crianças e óculos</h3>
                                <p>Seu filho tem menos de 5 anos e necessita usar óculos Participe do nosso fórum!</p>
                            </div>
                            <div class="imagemDestaque">
                                <img src="imagens/img_menina_oculos.png">
                            </div>
                        </div>
                        <div id="div_noticias">
                            <div id="noticia_container">
                                <div class="noticia_item">
                                    <img src="imagens/img_mae_menina.png" alt="">
                                    <h6>CULTURA</h6>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et</p>
                                </div>
                                <div class="noticia_item">
                                    <img src="imagens/img_mae_menina.png" alt="">
                                    <h6>GASTRONOMIA</h6>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et</p>
                                </div>
                                <div class="noticia_item">
                                    <img src="imagens/img_mae_menina.png" alt="">
                                    <h6>MODA</h6>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et</p>
                                </div>
                                <div class="noticia_item last">
                                    <img src="imagens/img_mae_menina.png" alt="">
                                    <h6>VIAGEM</h6>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et</p>
                                </div>
                            </div>
                            <div id="noticia_container">
                                <div class="noticia_item">
                                    <img src="imagens/img_mae_menina.png" alt="">
                                    <h6>CULTURA</h6>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et</p>
                                </div>
                                <div class="noticia_item">
                                    <img src="imagens/img_mae_menina.png" alt="">
                                    <h6>GASTRONOMIA</h6>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et</p>
                                </div>
                                <div class="noticia_item">
                                    <img src="imagens/img_mae_menina.png" alt="">
                                    <h6>MODA</h6>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et</p>
                                </div>
                                <div class="noticia_item last">
                                    <img src="imagens/img_mae_menina.png" alt="">
                                    <h6>VIAGEM</h6>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et</p>
                                </div>
                            </div>
                        </div>
                        <div id="div_agenda_index">
                            <div id="div_img_agenda">
                                <img src="imagens/img_tit_agenda.png">
                            </div>
                            <div class="agenda-item">
                                <div class="agenda-data">
                                    <p class="agenda-dia">22</p>
                                    <p class="agenda-mes">Abril</p>
                                </div>
                                <div class="agenda-icone">
                                    <img src="imagens/img_nota.png">
                                </div>
                                <div class="agenda-info">
                                    <p><b>Espetáculo Musical Korvantunturi</b><br>
                                    Gramado<br>
                                    Livre
                                    </p>
                                </div>
                            </div>
                            <div class="agenda-item">
                                <div class="agenda-data">
                                    <p class="agenda-dia">22</p>
                                    <p class="agenda-mes">Abril</p>
                                </div>
                                <div class="agenda-icone">
                                    <img src="imagens/img_nota.png">
                                </div>
                                <div class="agenda-info">
                                    <p><b>Espetáculo Musical Korvantunturi</b><br>
                                    Gramado<br>
                                    Livre
                                    </p>
                                </div>
                            </div>
                            <div class="agenda-item">
                                <div class="agenda-data">
                                    <p class="agenda-dia">22</p>
                                    <p class="agenda-mes">Abril</p>
                                </div>
                                <div class="agenda-icone">
                                    <img src="imagens/img_nota.png">
                                </div>
                                <div class="agenda-info">
                                    <p><b>Espetáculo Musical Korvantunturi</b><br>
                                    Gramado<br>
                                    Livre
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="div_direita">
                        <div class="anuncio250x250 anuncio">
                            <p><span>PUB <br> 250 x 250px</span></p>
                        </div>
                        <div id="div_boxzoom">
                            <div id="div_fotozoom">
                                <a href="zoom-detalhe.php"><img src="imagens/img_zoom.png"></a><br>
                                <a href="zoom-detalhe.php"><img id="img_tit_zoom" src="imagens/img_zoom_tit.png"></a>
                            </div>
                            <p>Festa de Aniversário do Theo</p>
                            <p><span>Grêmio Náutico União</span></p>
                        </div>
                        <div id="recomenda">
                            <div id="rec_conteudo">
                                <img src="imagens/img_logo_playground_small.png" alt="">
                                <img class="recomenda" src="imagens/img_recomenda.png" alt="">
                                <img class="img_prod" src="imagens/img_cadeirao.png" alt="">
                                <h3>CADEIRÃO PARA BEBÊS FISCHER PRICE</h3>
                                <img id="img_btn_recomenda" src="imagens/img_ir_site.png" alt="">
                            </div>
                        </div>
                    </div>
                    <?php include 'rodape.php'; ?>
                </div>
            </div>
        </div>
    </body>
</html>