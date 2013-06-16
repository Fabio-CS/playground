<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta name="description" content="texto de descri&ccedil;&atilde;o do site">
        <?php include 'head.php'; ?>
        <script>
            $(document).ready(function(e) {
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
                        
                        <div class="box_cultura destaq">
                            <div class="foto"></div>
                            <div class="texto">
                                <h2>03 de Maio</h2>
                                <h3>Holiday on ice</h3>
                                <p>Patinação no gelo com toda a turma da Disney!</p>
                                <p>Classificação: LIVRE</p>
                                <p>Desconto para assinantes</p>
                                
                            </div>
                        </div>
                        
                    </div>
                    <div id="div_direita">
                        <div id="div_boxzoom">
                            <div id="div_fotozoom">
                                <img src="imagens/img_zoom.png"><br>
                                <img id="img_tit_zoom" src="imagens/img_zoom_tit.png">
                            </div>
                            <p>Festa de Aniversário do Theo</p>
                            <p><span>Grêmio Náutico União</span></p>
                        </div>
                        <div class="anuncio250x250 anuncio">
                            <p><span>PUB <br> 250 x 250px</span></p>
                        </div>
                        <div class="anuncio250x250 anuncio">
                            <p><span>PUB <br> 250 x 250</span></p>
                        </div>
                    </div>
                </div>
                <?php include 'rodape.php'; ?>
            </div>
        </div>
    </body>
</html>