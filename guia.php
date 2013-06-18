<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta name="description" content="texto de descri&ccedil;&atilde;o do site">
        <?php include 'head.php'; ?>
        <script>
            $(document).ready(function(e) {
                menu("menu_guia");
                SetBg("guia");
            });
        </script>
    </head>
    <body>
        <div id="div_main_container">
            <div id="div_main_guia">
                <?php include 'topo.php'; ?>
                <div id="div_conteudo">
                    <div id="div_esquerda">
                        <h1>Guia de fornecedores e serviços</h1>
                        <p class="legendaAnuncio">Patrocinado</p>
                        <div class="parceiro patrocinado">
                            
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
                                <img class="img_prod" src="imagens/img_cup_cakes.png" alt="">
                                <h3>CUPCAKES <br> LE BISTROT GOURMET</h3>
                                <img src="imagens/img_ir_site.png" alt="" id="img_btn_recomenda">
                            </div>
                        </div>
                    </div>
                </div>
                <?php include 'rodape.php'; ?>
            </div>
        </div>
    </body>
</html>