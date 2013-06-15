// JavaScript Document
$(document).ready(function(e) {

});

function menu(menu) {
    var $lis = $("#menu").find('img'),
        $image,
        $new_image;

    $lis.removeClass('on');
    $(menu).addClass('on');
    $image = $("#" + menu).find('img');
    if ($image.attr('src').match(/inatv/g)) {
        $new_image = $image.attr('src').replace("inatv", "atv");
        $image.attr({src: $new_image});
    }
}

function SetBg(page){
    
    switch (page){
        case "cultura": 
            $("#main_container").css('background-image','url("imagens/img_cortina.png")');
            $("#main_container").css('background-repeat','no-repeat');
            $("#main_container").css('background-position','top right');
            $("#main_container").css('background-position','720px 0px');
            break;
        
        //adicionar os outros cases prevendo as paginas que acionarao essa funcao e setando a imagem de fundo:
        
        default :
            $("#main_container").css('background-image','');
    }
    
}