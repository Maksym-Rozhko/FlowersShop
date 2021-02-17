<?php
// правильный способ подключить стили и скрипты
add_action( 'wp_enqueue_scripts', 'flowers_scripts' );

function flowers_scripts() {
    // Подключаем файл style.css от самой темы
	wp_enqueue_style( 'style', get_stylesheet_uri() );
    // Подключаем файл bootstrap-grid.css
    wp_enqueue_style( 'bootstrap-grid', get_template_directory_uri() . '/assets/css/bootstrap-grid.min.css' );
    // Подключаем файл Swiper css
    wp_enqueue_style( 'swiper', 'https://unpkg.com/swiper/swiper-bundle.min.css' );
    // Подключаем файл fancybox.css
    wp_enqueue_style( 'fancybox', 'https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css' );
    // Подключаем файл fonts.css
    wp_enqueue_style( 'fonts', get_template_directory_uri() . '/assets/css/fonts.css' );
    // Подключаем файл style.css
    wp_enqueue_style( 'flowers', get_template_directory_uri() . '/assets/css/style.css' );

    // Подключаем scripts
    wp_deregister_script( 'jquery-core' );
	wp_register_script( 'jquery-core', '//cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js');
	wp_enqueue_script( 'jquery' );

	wp_enqueue_script( 'swiper', 'https://unpkg.com/swiper/swiper-bundle.min.js', array(), '1.0.0', true );
	wp_enqueue_script( 'fancybox', 'https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js', array(jquery), '1.0.0', true );
	wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.js', array(fancybox), '1.0.0', true );
}