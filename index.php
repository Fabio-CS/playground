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
        <div id="main_container">
            <div id="main_cultura">
                <?php include 'topo.php'; ?>
                <div id="conteudo">
                    <div id="div_esquerda">
                        <h1>03 de Maio > Disney on ice</h1>
                        <p class="legendaAnuncio">Patrocinado</p>
                        <div class="anuncio660x86">
                            660 x 86 px
                        </div>
                        <div id="fotoConteudo">
                            
                        </div>
                        <div id="textosConteudo">
                        <p class="legendaFoto">Por Fernando Lemos | Foto Fotolia</p>
                        <p></p>
                        </div>
                    </div>
                    <div id="div_direita">
                        <div class="box_highlight">
                            <div class="foto"></div>
                        </div>
                        <div class="box">
                        </div>
                    </div>
                </div>
                <?php include 'rodape.php'; ?>
            </div>
        </div>
    </body>
</html>