$ = jQuery.noConflict();
$(document).ready(function(){

  //ocultar y mostrar
  $('.mobile-menu a').on('click', function(){
    $('nav.menu-sitio').toggle('show');
  });

///reacción a resize en la pantalla
  var breakpoint = 768;

  $(window).resize(function(){
    ajustarCajas();
    if($(document).width() >= breakpoint){
      $('nav.menu-sitio').show();
    }else{
      $('nav.menu-sitio').hide();
    }

  });
  //ajustar cajas nosotros
  ajustarCajas();
  //Fluidbox
  jQuery('.gallery a').each(function(){
    jQuery(this).attr({'data-fluidbox': ''});
  });
  if(jQuery('[data-fluidbox]').length > 0){
    jQuery('[data-fluidbox]').fluidbox();
  }
});

//ajustar cajas nosotros

function ajustarCajas(){
  var imagenes  = $('.imagen-caja');
  if(imagenes.length > 0){
    var altura = imagenes[0].height;
    var cajas = $('div.contenido-caja');
    $(cajas).each(function(i, elemento){
      $(elemento).css({'height':altura+'px'});
    });
  }
}
