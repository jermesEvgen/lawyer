<?php

/**
 * Required: set 'ot_theme_mode' filter to true.
 */
add_filter( 'ot_theme_mode', '__return_true' );
add_filter( 'ot_show_new_layout', '__return_false' );
add_filter( 'ot_show_pages', '__return_false' );


/**
 * Required: include OptionTree.
 */
// Подключили файлы плагина Option Tree

// Этот фильтр меняет расположение настроек Темы 
add_filter( 'ot_theme_options_parent_slug', 'theme_options_parent',20 );
function theme_options_parent($parent ) {
    $parent = '';
    return $parent;
}


require( trailingslashit( get_template_directory() ) . 'option-tree/ot-loader.php' );
require( trailingslashit( get_template_directory() ) . 'functions/theme-options.php');
require( trailingslashit( get_template_directory() ) . 'functions/meta-boxes.php');


if ( ! function_exists( 'lawyer_setup' ) ) :
	function lawyer_setup() {
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );

		// register_nav_menus( array(
		// 	'menu-1' => esc_html__( 'Primary', 'lawyer' ),
		// ) );



		// register_nav_menus( array(
		// 	'services__box' => esc_html__( 'Секция услуги', 'lawyer' ),
		// ) );

		

			register_nav_menus( array(
				'header_menu' => 'Меню',
				'services_menu' => 'Блок услуги'
				
			) );

		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );
	}
endif;
add_action( 'after_setup_theme', 'lawyer_setup' );

function lawyer_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Язык', 'lawyer' ),
		'id'            => 'Language',
		'description'   => esc_html__( 'Меняем язык', 'lawyer' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'lawyer_widgets_init' );


/* Подключаем стили*/ 
function lawyer_style() {


	/*Google-fonts*/
	wp_enqueue_style( 'google-fonts' , 'https://fonts.googleapis.com/icon?family=Material+Icons' ); 

	/*font-awesome*/
	wp_enqueue_style( 'font-awesome' , 'https://use.fontawesome.com/releases/v5.0.6/css/all.css' ); 

	/*slyScrollbar css*/
	// wp_enqueue_style( 'slyScrollbar-ospb' , get_template_directory_uri() . '/libs/slyScrollbar/ospb.css');	 
	// wp_enqueue_style( 'slyScrollbar' , get_template_directory_uri() . '/libs/slyScrollbar/horizontal.css'); 

	/*Datepicker css */
	wp_enqueue_style( 'datapiker' , get_template_directory_uri() . '/libs/datapiker/bootstrap/css/bootstrap.min.css'); 
	wp_enqueue_style( 'datetimepicker' , get_template_directory_uri() . '/libs/datapiker/bootstrap/css/bootstrap-datetimepicker.min.css'); 

	/*Fonts*/
	wp_enqueue_style( 'lawyer-fonts' , get_template_directory_uri() . '/css/fonts.css', array ( 'lawyer-style' ) ); 
	
	/*Media*/
	wp_enqueue_style( 'lawyer-media' , get_template_directory_uri() . '/css/media.css');
	
	/* custom-css */
	wp_enqueue_style( 'lawyer-custom-css' , get_template_directory_uri() . '/css/custom-css.css'); 

	/*Owlcarousel*/
	wp_enqueue_style( 'Owlcarousel' , get_template_directory_uri() . '/libs/owlcarousel/dist/assets/owl.carousel.min.css'); 
	wp_enqueue_style( 'Owlcarousel' , get_template_directory_uri() . '/libs/owlcarousel/dist/assets/owl.theme.default.min.css'); 

	/* Главные стили*/
	wp_enqueue_style( 'lawyer-style', get_stylesheet_uri() );

}

add_action( 'wp_enqueue_scripts', 'lawyer_style' );


/* Подключаем скрипты */
function lawyer_scripts() {


	/* Common*/ 
	 wp_enqueue_script( 'script' , get_template_directory_uri() . '/js/script.js' , array ('jquery'), '', true); 
	 wp_enqueue_script( 'maskinput' , get_template_directory_uri() . '/libs/jquery/maskedinput.js' , array ('jquery'), '', true); 

	
    /* API Яндекс карты */ 
	 wp_enqueue_script( 'api-maps' , 'http://api-maps.yandex.ru/2.1/?lang=ru_RU' , array ('jquery'), '', true); 

	 /*modernizr.js*/
	 wp_enqueue_script( 'modernizr' , get_template_directory_uri() . '/libs/modernizr/modernizr.js' , array ('jquery'), ''); 

	 /* Datepicker*/ 
	  wp_enqueue_script( 'moment-with-locales' , get_template_directory_uri() . '/libs/datapiker/bootstrap/js/moment-with-locales.min.js' , array ('jquery'), '', true); 
	  wp_enqueue_script( 'bootstrap' , get_template_directory_uri() . '/libs/datapiker/bootstrap/js/bootstrap.min.js' , array ('jquery'), '', true); 
	  wp_enqueue_script( 'bootstrap-datetimepicker' , get_template_directory_uri() . '/libs/datapiker/bootstrap/js/bootstrap-datetimepicker.min.js' , array ('jquery'), '', true); 


	  /*Owlcarousel*/
	  wp_enqueue_script( 'Owlcarousel' , get_template_directory_uri() . '/libs/owlcarousel/dist/owl.carousel.min.js' , array ('jquery'), '', true); 




	  /*slyScrollBar-js*/
	  // wp_enqueue_script( 'slyScrollBar' , get_template_directory_uri() . '/libs/slyScrollbar/plugins.js' , array ('jquery'), ''); 
	  // wp_enqueue_script( 'slyScrollBarSly' , get_template_directory_uri() . '/libs/slyScrollbar/sly.min.js' , array ('jquery'), ''); 
	  // wp_enqueue_script( 'slyScrollBarHorizontal' , get_template_directory_uri() . '/libs/slyScrollbar/horizontal.js' , array ('jquery'), ''); 


	  /* Top top  */ 
	  // wp_enqueue_script( 'js-topScroll' , get_template_directory_uri() . '/libs/topScroll/scrolls.js' , array ('jquery'), '', true); 





	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'lawyer_scripts' );



	/**
	******* Удаление атрибутов type так как они уже устаревшие
	**/

	add_filter('style_loader_tag', 'clean_style_tag');
	function clean_style_tag($src) {
	    return str_replace("type='text/css'", '', $src);
	}

	add_filter('script_loader_tag', 'clean_script_tag');
	function clean_script_tag($src) {
	    return str_replace("type='text/javascript'", '', $src);
	}

   /**
   ******* Удаление пунктов меню в админ-панели
   **/
   add_action('admin_menu', 'remove_menus');
   function remove_menus(){
    global $menu;
    $restricted = array(
          __('Dashboard'),
          __('Posts'),
          // __('Media'),
          __('Links'),
          // __('Pages'),
          __('Appearance'),
          __('Tools'),
          __('Users'),
          // __('Settings'),
          __('Comments'),
          // __('Plugins')
    );
    end ($menu);
    while (prev($menu)){
        $value = explode(' ', $menu[key($menu)][0]);
        if( in_array( ($value[0] != NULL ? $value[0] : "") , $restricted ) ){
            unset($menu[key($menu)]);
        }
    }
};

// add_action( 'admin_menu', 'xelly_remove_menu_items' );
 
// function xelly_remove_menu_items() {
//     // тут мы укахываем ярлык пункты который удаляем.
//     remove_menu_page('edit.php'); // Удаляем пункт "Записи"
//     }



    /**
    ******* Поменять название плагина   
    **/

    add_filter(  'gettext',  'change_post_name'  );
    add_filter(  'ngettext',  'change_post_name'  );
    function change_post_name( $translated ) {
      $translated = str_ireplace(  'All in One SEO',  'СЕО заголовки',  $translated );
      $translated = str_ireplace(  'Contact Form 7',  'Формы обратной связи',  $translated );
      $translated = str_ireplace(  'Записи',  'Социальные сети',  $translated );
      $translated = str_ireplace(  'WP Security',  'Антивирус',  $translated );
      return $translated;
    }
function my_wp_default_styles($styles) {
 $styles->default_version = hash_file('crc32', get_stylesheet_directory() . '/style.css');
}
add_action("wp_default_styles", "my_wp_default_styles");




function register_strings() { 
   pll_register_string('Меню', 'menu');
   pll_register_string('Заголовок h1', 'header-title');
   pll_register_string('Подзаголовок h3', 'header-subtitle');
   
   pll_register_string('Преимущества', 'profit-title');
   pll_register_string('Преимущества-1', 'profit-sub-title-1');
   pll_register_string('Преимущества-2', 'profit-sub-title-2');
   pll_register_string('Преимущества-3', 'profit-sub-title-3');
   pll_register_string('Преимущества-4', 'profit-sub-title-4');
   pll_register_string('Преимущества-5', 'profit-sub-title-5');
   pll_register_string('Преимущества-5', 'profit-sub-title-6');
} 
add_action('init','register_strings'); 

