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
                menu("menu_viagem");
                SetBg("viagem");
            });
        </script>
    </head>
    <body>
        <div id="div_main_container">
            <div id="div_main_cultura">
                <?php include 'topo.php'; ?>
                <div id="div_conteudo">
                    <div id="div_esquerda">
                        <h1>Viagem</h1>
                        <div class="cultura_item">
                            <a href="cultura-detalhe.php">
                                <div class="imagem_item_cultura">
                                    <!-- Colocar Imagem aqui-->
                                </div>
                            </a>
                            <div class="info_item_cultura">
                                <h2>Cancún</h2>
                                <h4>Hotel</h4>
                                <p>
                                    Descrição<br>
                                    <span>Desconto para assinantes</span>
                                </p>
                                <a href="viagem-detalhe.php" class="mais_info"></a>
                            </div>
                        </div>
                        <div class="cultura_item">
                            <a href="cultura-detalhe.php">
                                <div class="imagem_item_cultura">
                                    <!-- Colocar Imagem aqui-->
                                </div>
                            </a>
                            <div class="info_item_cultura">
                                <h2>Cancún</h2>
                                <h4>Hotel</h4>
                                <p>
                                    Descrição<br>
                                    <span>Desconto para assinantes</span>
                                </p>
                                <a href="viagem-detalhe.php" class="mais_info"></a>
                            </div>
                        </div>
                        <div class="cultura_item">
                            <a href="cultura-detalhe.php">
                                <div class="imagem_item_cultura">
                                    <!-- Colocar Imagem aqui-->
                                </div>
                            </a>
                            <div class="info_item_cultura">
                                <h2>Cancún</h2>
                                <h4>Hotel</h4>
                                <p>
                                    Descrição<br>
                                    <span>Desconto para assinantes</span>
                                </p>
                                <a href="viagem-detalhe.php" class="mais_info"></a>
                            </div>
                        </div>
                        <div class="cultura_item">
                            <a href="cultura-detalhe.php">
                                <div class="imagem_item_cultura">
                                    <!-- Colocar Imagem aqui-->
                                </div>
                            </a>
                            <div class="info_item_cultura">
                                <h2>Cancún</h2>
                                <h4>Hotel</h4>
                                <p>
                                    Descrição<br>
                                    <span>Desconto para assinantes</span>
                                </p>
                                <a href="viagem-detalhe.php" class="mais_info"></a>
                            </div>
                        </div>
                        <div class="cultura_item">
                            <a href="cultura-detalhe.php">
                                <div class="imagem_item_cultura">
                                    <!-- Colocar Imagem aqui-->
                                </div>
                            </a>
                            <div class="info_item_cultura">
                                <h2>Cancún</h2>
                                <h4>Hotel</h4>
                                <p>
                                    Descrição<br>
                                    <span>Desconto para assinantes</span>
                                </p>
                                <a href="viagem-detalhe.php" class="mais_info"></a>
                            </div>
                        </div>
                    </div>
                    <div id="div_direita">
                        <div id="div_boxzoom">
                            <div id="div_fotozoom">
                                <a href="#"><img src="imagens/img_capa_playground.png"></a><br>
                                <a href="#"><img id="img_tit_assine" src="imagens/img_tit_assine.png"></a>
                            </div>
                            <p>e beneficie de descontos especiais em serviços, viagens, etc...</p>  
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