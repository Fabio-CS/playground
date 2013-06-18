<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta name="description" content="texto de descri&ccedil;&atilde;o do site">
        <?php include 'head.php'; ?>
        <script>
            $(document).ready(function(e) {
                menu("menu_saude");
                SetBg("saude");
            });
        </script>
    </head>
    <body>
        <div id="div_main_container">
            <div id="div_main_saude">
                <?php include 'topo.php'; ?>
                <div id="div_conteudo">
                    <div id="div_esquerda">
                        <h1>Saúde</h1>
                        <p class="legendaAnuncio">Patrocinado</p>
                        <div class="anuncio660x86 anuncio">
                            <p><span>660 x 86 px</span></p>
                        </div>
                        <h2 id="result_h2">Resultados (3)</h2>
                        <div class="artigo_saude_result">
                            <div>
                                <div class="result_img"><img src="imagens/img_coracao.png" alt=""></div>
                                <div class="result_titulo">
                                    <h3>Tópico 1</h3>
                                </div>
                                <div class="clear"></div>
                                <div class="result_det">
                                    <ul class="result_det_ul">
                                        <li>
                                            <span class="result_saude_p">Iniciado por <a href="#">Cristine</a> </span>
                                        </li>
                                        <li>
                                            <span class="result_saude_p">Comentarios: 5</span>
                                        </li>
                                        <li>
                                            <span class="result_saude_p">Ultimo comentario por <a href="#">Renata</a> </span>
                                        </li>
                                        <li>
                                            <span class="result_saude_p">Ultima vez ativo há 5 minutos</span>
                                        </li>
                                    </ul>
                                    <div class="img_participar">
                                        <img src="imagens/btn_participar_menor.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="artigo_saude_result">
                            <div>
                                <div class="result_img"><img src="imagens/img_coracao.png" alt=""></div>
                                <div class="result_titulo">
                                    <h3>Tópico 2</h3>
                                </div>
                                <div class="clear"></div>
                                <div class="result_det">
                                    <ul class="result_det_ul">
                                        <li>
                                            <span class="result_saude_p">Iniciado por <a href="#">Cristine</a> </span>
                                        </li>
                                        <li>
                                            <span class="result_saude_p">Comentarios: 5</span>
                                        </li>
                                        <li>
                                            <span class="result_saude_p">Ultimo comentario por <a href="#">Renata</a> </span>
                                        </li>
                                        <li>
                                            <span class="result_saude_p">Ultima vez ativo há 5 minutos</span>
                                        </li>
                                    </ul>
                                    <div class="img_participar">
                                        <img src="imagens/btn_participar_menor.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="artigo_saude_result">
                            <div>
                                <div class="result_img"><img src="imagens/img_coracao.png" alt=""></div>
                                <div class="result_titulo">
                                    <h3>Tópico 3</h3>
                                </div>
                                <div class="clear"></div>
                                <div class="result_det">
                                    <ul class="result_det_ul">
                                        <li>
                                            <span class="result_saude_p">Iniciado por <a href="#">Cristine</a> </span>
                                        </li>
                                        <li>
                                            <span class="result_saude_p">Comentarios: 5</span>
                                        </li>
                                        <li>
                                            <span class="result_saude_p">Ultimo comentario por <a href="#">Renata</a> </span>
                                        </li>
                                        <li>
                                            <span class="result_saude_p">Ultima vez ativo há 5 minutos</span>
                                        </li>
                                    </ul>
                                    <div class="img_participar">
                                        <img src="imagens/btn_participar_menor.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="div_direita">
                        <div id="box_pesq">
                            <form action="saude-busca.php" method="get">
                                <input type="text" id="pesquisa" name="pesquisa"/>
                                <input type="submit" id="buscar" name="buscar" value="BUSCAR"/>
                            </form>
                        </div>
                        <div id="div_boxhist">
                            <img class="tit_album" src="imagens/img_tit_categorias.png" alt="">
                            <ul id="categoria">
                                <li> <h5>CATEGORIA 1</h5>
                                    <ul id="sub-categoria"> 
                                        <li><H6>SUB-CATEGORIA 1</H6></li>
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
                                <img class="img_prod" src="imagens/img_oculos_sol.png" alt="">
                                <h3>OCULOS DE SOL P/ BEBÊS RAY BAN</h3>
                                <img src="imagens/img_ir_site.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <?php include 'rodape.php'; ?>
            </div>
        </div>
    </body>
</html>