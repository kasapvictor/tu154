<?php

//добавляет скрипты и стили
function tu154_enqueue(){
    // основные стили
    wp_enqueue_style('main-style', get_template_directory_uri() . '/assets/styles/main.css', false, '1');

    // UIKIT
    wp_enqueue_style('uikit-style', get_template_directory_uri() . '/assets/styles/uikit.min.css', false, '2');

    // отключаем текущий jquery
    // wp_deregister_script( 'jquery' );

    // подключаем свой jquery
    // wp_register_script('jquery', get_template_directory_uri() . '/assets/scripts/jquery-3.5.1.min.js' , false, '3.5.1', true);
    // wp_enqueue_script( 'jquery' );

    // основной скрипт
    wp_enqueue_script('main-scripts', get_template_directory_uri() . '/assets/scripts/main.js', false, '1.0.0', true);

    // UIKIT скрипт
    wp_enqueue_script('uikit-scripts', get_template_directory_uri() . '/assets/scripts/uikit.min.js', ['jquery'], '1.0.0', true);

    // UIKIT скрипт иконки
    wp_enqueue_script('uikit-icons-scripts', get_template_directory_uri() . '/assets/scripts/uikit-icons.min.js', ['uikit-scripts'], '1.0.0', true);
}

add_action('wp_enqueue_scripts', 'tu154_enqueue');