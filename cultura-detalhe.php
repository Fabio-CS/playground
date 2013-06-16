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
                        <h1>03 de Maio > Disney on ice</h1>
                        <p class="legendaAnuncio">Patrocinado</p>
                        <div class="anuncio660x86 anuncio">
                            <p><span>660 x 86 px</span></p>
                        </div>
                        <div id="div_fotoConteudo">
                            <img src="imagens/img_disney.png" alt="Disney on ice">
                            <p class="legendaFoto">Por Fernando Lemos | Foto Fotolia</p>    
                        </div>
                        <div id="div_textosConteudo">
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
                            <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem.</p>
                            <p>Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.</p>
                        </div>
                        <div id="div_agenda">
                        <h5>Anote na Agenda</h5>
                            <p>
                                Data: 24 de junho<br>
                                Local: Escola São Paulo<br>
                                Endereço: Rua Augusta, 2239 – São Paulo<br>
                                Duração: 4 horas<br>
                                Valor: 280 reais em duas vezes<br>
                                Mais informações: (11) 3060-3636<br>
                            </p>
                        </div>
                        <div id="div_btn_redes">
                            <img src="imagens/btn_redes.png">
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
                        <div class="anuncio250x125 anuncio">
                            <p><span>PUB <br> 250 x 125px</span></p>
                        </div>
                        <div class="anuncio250x125 anuncio">
                            <p><span>PUB <br> 250 x 125px</span></p>
                        </div>
                    </div>
                </div>
                <?php include 'rodape.php'; ?>
            </div>
        </div>
    </body>
</html>