<?php


function themasohil_bronnen() {
	wp_enqueue_script('script', get_theme_file_uri('/js/script.js'), NULL , '1.0', true);
	wp_enqueue_style('Fjalla One', '//fonts.googleapis.com/css?family=Fjalla+One&display=swap');
	wp_enqueue_style('style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'themasohil_bronnen');


register_nav_menus(array(
	'hoofd' => __('Hoofd menu'),
	'footer' => __('Menu in footer'),
));

function themasohil_widgets() {
	register_sidebar( array(
		'name'          => __('Widget aside'),
		'id'            => __('widget_aside'),
		'description'   => __('Hier komen widgets'),
	    'class'         => '',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<h2 class="widgettitle">',
		'after_title'   => '</h2>'
	));
}
add_action('widgets_init', 'themasohil_widgets');

?>
