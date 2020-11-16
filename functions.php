<?php

// стили и скрипты
require get_template_directory() . '/functions/enqueue.php';

// опции ACF
require get_template_directory() . '/functions/acf.php';

// включает поддержку миниатюр thumbnail для записей
add_theme_support( 'post-thumbnails' );

// добавляет вохможность написать отрывок для страницы
add_post_type_support( 'page', 'excerpt' );

// главное меню
require get_template_directory() . '/functions/menus.php';

add_theme_support( 'html5', array( 'search-form' ) );