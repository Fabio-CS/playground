<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta name="description" content="texto de descri&ccedil;&atilde;o do site">
        <?php include 'head.php'; ?>
        <script>
            $(document).ready(function(e) {
                $(".cultura_item").mouseenter(function() {
                    $(this).addClass("ativo");
                });
                $(".cultura_item").mouseleave(function() {
                    $(this).removeClass("ativo");
                });
                menu("menu_cultura");
                SetBg("cultura");
            });
        </script>
    </head>
    <body>
        <div id="div_main_container">
            <div id="div_main_cultura">
                <?php include 'topo.php'; ?>
                <div id="div_conteudo">
                    <div id="div_esquerda">
                        <h1>Cultura</h1>
                        <div class="cultura_item">
                            <a href="cultura-detalhe.php">
                                <div class="imagem_item_cultura">
                                    <!-- Colocar Imagem aqui-->
                                </div>
                            </a>
                            <div class="info_item_cultura">
                                <h2>03 de Maio</h2>
                                <h4>Holiday on ice</h4>
                                <p>
                                    Patinação no gelo com toda a turma da Disney!<br>
                                    Classificação: LIVRE<br>
                                    <span>Desconto para assinantes</span>
                                </p>
                                <a href="cultura-detalhe.php" class="mais_info"></a>
                            </div>
                        </div>
                        <div class="cultura_item">
                            <div class="imagem_item_cultura">
                                <!-- Colocar Imagem aqui-->
                            </div>
                            <div class="info_item_cultura">
                                <h2>05 de Maio</h2>
                                <h4>Holiday on ice</h4>
                                <p>
                                    Patinação no gelo com toda a turma da Disney!<br>
                                    Classificação: LIVRE<br>
                                    <span>Desconto para assinantes</span>
                                </p>
                                <a href="#" class="mais_info"></a>
                            </div>
                        </div>
                        <div class="cultura_item">
                            <div class="imagem_item_cultura">
                                <!-- Colocar Imagem aqui-->
                            </div>
                            <div class="info_item_cultura">
                                <h2>07 de Maio</h2>
                                <h4>Holiday on ice</h4>
                                <p>
                                    Patinação no gelo com toda a turma da Disney!<br>
                                    Classificação: LIVRE<br>
                                    <span>Desconto para assinantes</span>
                                </p>
                                <a href="#" class="mais_info"></a>
                            </div>
                        </div>
                        <div class="cultura_item">
                            <div class="imagem_item_cultura">
                                <!-- Colocar Imagem aqui-->
                            </div>
                            <div class="info_item_cultura">
                                <h2>12 de Maio</h2>
                                <h4>Holiday on ice</h4>
                                <p>
                                    Patinação no gelo com toda a turma da Disney!<br>
                                    Classificação: LIVRE<br>
                                    <span>Desconto para assinantes</span>
                                </p>
                                <a href="#" class="mais_info"></a>
                            </div>
                        </div>
                        <div class="cultura_item">
                            <div class="imagem_item_cultura">
                                <!-- Colocar Imagem aqui-->
                            </div>
                            <div class="info_item_cultura">
                                <h2>20 de Junho</h2>
                                <h4>Holiday on ice</h4>
                                <p>
                                    Patinação no gelo com toda a turma da Disney!<br>
                                    Classificação: LIVRE<br>
                                    <span>Desconto para assinantes</span>
                                </p>
                                <a href="#" class="mais_info"></a>
                            </div>
                        </div>
                    </div>
                    <div id="div_direita">
                        <div id="div_boxzoom">
                            <div id="div_fotozoom">
                                <a href="zoom-detalhe.php"><img src="imagens/img_zoom.png"></a><br>
                                <a href="zoom-detalhe.php"><img id="img_tit_zoom" src="imagens/img_zoom_tit.png"></a>
                            </div>
                            <p>Festa de Aniversário do Theo</p>
                            <p><span>Grêmio Náutico União</span></p>
                        </div>
                        <div class="anuncio250x250 anuncio">
                            <p><span>PUB <br> 250 x 250px</span></p>
                        </div>
                        <div class="anuncio250x250 anuncio">
                            <p><span>PUB <br> 250 x 250px</span></p>
                        </div>
                    </div>
                </div>
                <?php include 'rodape.php'; ?>
            </div>
        </div>
    </body>
</html>