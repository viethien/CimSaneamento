if(window.location.href.indexOf("index") > -1) {
  $('#transitoBg').hover(function(){
    $('#atividades').attr("class", "atividadesTran");
  });
  $('#saneamentoBg').mouseover(function(){
    $('#atividades').attr("class", "atividadesSan");
  });
}

document.addEventListener("scroll", function(){

});
var menu = false;
$('#toggle').click(function(){
  if (menu===false) {
    $('#containernavbar').slideDown();
    menu = true;
  } else {
    $('#containernavbar').slideUp();
    menu =false;
  }
});
