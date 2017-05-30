<?php
//habilitar opciones en la config de las pag. etc..
function lapizzeria_setup(){
	add_theme_support('post-thumbnails'); //activa las imagenes destacadas
	add_image_size('nosotros',437,291,true);
}
add_Action('after_setup_theme','lapizzeria_setup');


//cargar estilos
function lapizzeria_styles(){
//registrar
	wp_register_style('normalize',get_template_directory_uri().'/css/normalize.css', array(), '5.0.0');
	wp_register_style('google_fonts','https://fonts.googleapis.com/css?family=Open+Sans|Raleway:400,700,900',array(),'1.0.0');
	wp_register_style('fontawesome',get_template_directory_uri().'/css/font-awesome.min.css', array('normalize'), '4.7.0');
	wp_register_style('style',get_template_directory_uri().'/style.css', array('normalize'), '1.0');

//agregar(llamar a los estilos)
	wp_enqueue_style('normalize');
	wp_enqueue_style('google_fonts');
	wp_enqueue_style('fontawesome');
	wp_enqueue_style('style');

//registrar JS

	wp_register_script('scripts', get_template_directory_uri().'/js/scripts.js',array(), '1.0.0', true);

	wp_enqueue_script('jquery'); //llama a jquery que viene por defecto en wordpress
	wp_enqueue_script('scripts');
}
add_action('wp_enqueue_scripts','lapizzeria_styles');

//creacion de menu

function lapizzeria_menus(){
	register_nav_menus(array(
		'header-menu' => __('Header Menu', 'lapizzeria'),
		'social-menu' => __('Social Menu', 'lapizzeria'),
	));
}
add_action('init', 'lapizzeria_menus');

//JQUERY
