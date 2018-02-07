<?php

function try_menus(){

	register_nav_menus(array(
	'header-menu' => __('header menu','msc817'),
	'header-footer' => __('footer menu','msc817'),
	));

}

add_action('ini','try_menus');


function front_menu(){
	$args = array(
	'theme_location' => 'header-menu',
	'container' => 'div',
	'container_id'  => 'navbarNav',
	'container_class'=> 'navbar-collapse collapse',
	'items_wrap' => '<ul id="%1$s" class="navbar-nav">%3$s</ul>'
	);

wp_nav_menu($args);

}


?>
