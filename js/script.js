var menu = false;

if(window.location.href.indexOf("index") > -1) {
  $('#transitoBg').hover(function(){
    $('#atividades').attr("class", "atividadesTran");
  });
  $('#saneamentoBg').mouseover(function(){
    $('#atividades').attr("class", "atividadesSan");
  });
}

$(window).scroll(function() {
    var posicao = window.pageYOffset;
    var navbar = $('#navbar');
    var itensmenu = $(".nav-item");
    var navmobile = $(".navbar-mobile");

    trocaNav(navbar, posicao, itensmenu, navmobile);
    /* Check the location of each desired element */
    $('.escondida').each( function(i){
        var inferior_obj = ($(this).offset().top - 100) + $(this).outerHeight();
        var inferior_janela = $(window).scrollTop() + $(window).height();
        /* If the object is completely visible in the window, fade it it */
        if( inferior_janela > inferior_obj ){
            $(this).animate({'opacity':'1'},500);
        }
    });
});

function trocaNav(navbar, posicao, itensmenu, navmobile) {
    if (posicao == 0) {
        navbar.css("background-color", "transparent");
        itensmenu.css("color", "#fff");
    }
    if (posicao === 0 && menu === true) {
      navmobile.css("background-color", "#292929");
    }
    else if (posicao != 0){
        navbar.css("background-color", "#292929");
        itensmenu.css("color", "#fff");
        navmobile.css("background-color", "#292929");
    }
    else if (posicao != 0 && menu === false) {
      navmobile.css("background-color", "transparent");
    }
    else if (posicao === 0 && menu === false) {
      navmobile.css("background-color", "transparent");
    }
}

$('#toggle').click(function(){
  if (menu===false) {
    $('#containernavbar').slideDown();
    $('#toggleicon').attr('class', 'glyphicon glyphicon-remove');
    $('#toggleicon').fadeIn();
    $(".navbar-mobile").css("background-color", "#292929");
    menu = true;

  } else {
    $('#containernavbar').slideUp();
    $('#toggleicon').attr('class', 'glyphicon glyphicon-menu-hamburger');
    $('#toggleicon').fadeIn();
    menu =false;
  }
});
