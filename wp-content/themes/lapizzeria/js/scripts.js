$ = jQuery.noConflict();
$(document).ready(function(){

  //ocultar y mostrar
  $('.mobile-menu a').on('click', function(){
    $('nav.menu-sitio').toggle('show');
  });

///reacción a resize en la pantalla
  var breakpoint = 768;

  $(window).resize(function(){
    if($(document).width() >= breakpoint){
      $('nav.menu-sitio').show();
    }else{
      $('nav.menu-sitio').hide();
    }
  });
});
