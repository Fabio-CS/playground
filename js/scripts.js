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