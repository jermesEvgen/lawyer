<?php
/**
 * Initialize the custom Meta Boxes. 
 */
add_action( 'admin_init', 'custom_meta_boxes' );

/**
 * Meta Boxes demo code.
 *
 * You can find all the available option types in demo-theme-options.php.
 *
 * @return    void
 * @since     2.0
 */
function custom_meta_boxes() {
  /* =============================
  страница: Новая страница с услгами 
  ==============================*/
  $my_services_box = array(
    'id'          => 'services_box',
    'title'       => 'Настройки страницы "Услуги"',
    'desc'        => '',
    'pages'       => array( 'page' ),
    'context'     => 'normal',
    'priority'    => 'high',
    'fields'      => array(
  /* =============================
  страница: Новая страница с услгами 
  ---------------------------
  Метабокс для раздела 
  Header  
  -------------------------
  ==============================*/
         array(
           'label'       => 'Шапка блока',
           'id'          => 'servHeader__tab',
           'type'        => 'tab'
         ),
         array(
           'label'       => 'Показывать блок ',
           'id'          => 'servHeader__show',
           'type'        => 'on-off',
           'desc'        => 'Показывать или нет блок на странице ',
           'std'         => 'off'
         ),
         array(
           'id'          => 'servHeader__list',
           'label'       => 'Шапка сайта',
           'desc'        => '',
           'std'         => '',
           'type'        => 'list-item',
           'condition'   => 'servHeader__show:is(on)',
           'settings'    => array( 
                array(
                  'id'          => 'servHeader__bg',
                  'label'       => __( 'Background', 'theme-text-domain' ),
                  'desc'        => sprintf( __( 'The Background option type is for adding background styles to your theme either dynamically via the CSS option type below or manually with %s. The Background option type has filters that allow you to remove fields or change the defaults. For example, you can filter %s to remove unwanted fields from all Background options or an individual one. You can also filter %s. These filters allow you to fine tune the select lists for your specific needs.', 'theme-text-domain' ), '<code>ot_get_option()</code>', '<code>ot_recognized_background_fields</code>', '<code>ot_recognized_background_repeat</code>, <code>ot_recognized_background_attachment</code>, <code>ot_recognized_background_position</code>, ' . __( 'and', 'theme-text-domain' ) . ' <code>ot_type_background_size_choices</code>' ),
                  'std'         => '',
                  'type'        => 'background',
                  'section'     => 'option_types',
                  'rows'        => '',
                  'post_type'   => '',
                  'taxonomy'    => '',
                  'min_max_step'=> '',
                  'class'       => '',
                  'condition'   => '',
                  'operator'    => 'and'
                ),

                 array(
                     'id'          => 'servHeader__upload',
                     'label'       => 'Загрузите картинку.',
                     'desc'        => 'Изображение для этого блока ',
                     'std'         => '',
                     'type'        => 'upload',
                     ),
                 array(
                     'id'          => 'servicesHeader__title',
                     'label'       =>'Напишите заголовок',
                     'desc'        => '',
                     'std'         => '',
                     'type'        => 'text',
                   ),
                 array(
                     'id'          => 'servicesHeader__subtitle',
                     'label'       =>'Краткое описание',
                     'desc'        => '',
                     'std'         => '',
                     'type'        => 'text',
                   ),
                 )
              ),


/* =============================
страница: Новая страница с услгами 
---------------------------
Метабокс для раздела 
Прайс-лист
-------------------------
==============================*/
        // array(
        //   'label'       => 'Прайс-лист',
        //   'id'          => 'servPrice__tab',
        //   'type'        => 'tab'
        // ),
        // array(
        //   'label'       => 'Показывать блок ',
        //   'id'          => 'servPrice__show',
        //   'type'        => 'on-off',
        //   'desc'        => 'Показывать или нет блок на странице ',
        //   'std'         => 'off'
        // ),
        // array(
        //   'id'          => 'servPrice__list',
        //   'label'       => 'Прайс-лист',
        //   'desc'        => '',
        //   'std'         => '',
        //   'type'        => 'list-item',
        //   'condition'   => 'servPrice__show:is(on)',
        //   'settings'    => array( 

        //     /* Контент таблицы */

        //         array(
        //             'id'          => 'servPrice__body_number',
        //             'label'       => '№',
        //             'desc'        => '',
        //             'std'         => '',
        //             'type'        => 'text',
        //             ),
        //         array(
        //             'id'          => 'servPrice__body_view',
        //             'label'       => 'Вид услуги',
        //             'desc'        => '',
        //             'std'         => '',
        //             'type'        => 'text',
        //             ),
        //         array(
        //             'id'          => 'servPrice__body_time',
        //             'label'       => 'Время на услугу ',
        //             'desc'        => '',
        //             'std'         => '',
        //             'type'        => 'text',
        //             ),
        //         array(
        //             'id'          => 'servPrice__body_price',
        //             'label'       => 'Стоимость',
        //             'desc'        => '',
        //             'std'         => '',
        //             'type'        => 'text',
        //         ),
        //        )
        //      ),
/* =============================
страница: Новая страница с услгами 
---------------------------
Метабокс для раздела 
Прайс-лист (описание )
-------------------------
==============================*/
        // array(
        //   'label'       => 'Описание прайса',
        //   'id'          => 'servPriceDescr__tab',
        //   'type'        => 'tab'
        // ),
        // array(
        //   'label'       => 'Показывать блок ',
        //   'id'          => 'servPriceDescr__show',
        //   'type'        => 'on-off',
        //   'desc'        => 'Показывать или нет блок на странице ',
        //   'std'         => 'off'
        // ),
        // array(
        //   'id'          => 'servPriceDescr__list',
        //   'label'       => 'Прайс-лист',
        //   'desc'        => '',
        //   'std'         => '',
        //   'type'        => 'list-item',
        //   'condition'   => 'servPriceDescr__show:is(on)',
        //   'settings'    => array( 

        //     /* Описание услуг */
        //         array(
        //             'id'          => 'servPriceDescr__title_left',
        //             'label'       => 'заголовок #1',
        //             'desc'        => '',
        //             'std'         => '',
        //             'type'        => 'text',
        //             ),
        //         array(
        //             'id'          => 'servPriceDescr__body_left',
        //             'label'       => 'Описание #1',
        //             'desc'        => '',
        //             'std'         => '',
        //             'type'        => 'textarea',
        //             ),
        //         array(
        //             'id'          => 'servPriceDescr__title_right',
        //             'label'       => 'заголовок #2',
        //             'desc'        => '',
        //             'std'         => '',
        //             'type'        => 'text',
        //             ),
        //         array(
        //             'id'          => 'servPriceDescr__body_right',
        //             'label'       => 'Описание #2',
        //             'desc'        => '',
        //             'std'         => '',
        //             'type'        => 'textarea',
        //             ),
        //          )
        //       ),
/* =============================
страница: Новая страница с услгами 
---------------------------
Метабокс для раздела 
Прайс-лист (дополнение Notice )
-------------------------
==============================*/
          // array(
          //   'label'       => 'Примечания к прайсу',
          //   'id'          => 'servPriceNotice__tab',
          //   'type'        => 'tab'
          // ),
          // array(
          //   'label'       => 'Показывать блок',
          //   'id'          => 'servPriceNotice__show',
          //   'type'        => 'on-off',
          //   'desc'        => 'Показывать или нет блок на странице ',
          //   'std'         => 'off'
          // ),
          // array(
          //   'id'          => 'servPriceNotice__list',
          //   'label'       => 'Примечания',
          //   'desc'        => 'Тут можно написать примечание',
          //   'std'         => '',
          //   'type'        => 'list-item',
          //   'condition'   => 'servPriceNotice__show:is(on)',
          //   'settings'    => array( 
          //         array(
          //             'id'          => 'servPriceNotice__txt',
          //             'label'       => 'Текст описание',
          //             'desc'        => '',
          //             'std'         => '',
          //             'type'        => 'text',
          //             ),
          //          )
          //       ),
/* =============================
страница: Новая страница с услгами 
---------------------------
Метабокс для раздела 
Прайс-лист (кнопка скачать прайс)
-------------------------
==============================*/
          // array(
          //   // 'label'       => 'Кнопка скачать прайс',
          //   'id'          => 'servPriceBtn__tab',
          //   'type'        => 'tab'
          // ),
          // array(
          //   'label'       => 'Показывать блок',
          //   'id'          => 'servPriceBtn__show',
          //   'type'        => 'on-off',
          //   'desc'        => 'Показывать или нет блок на странице ',
          //   'std'         => 'off'
          // ),
          // array(
          //   'id'          => 'servPriceBtn__list',
          //   'label'       => 'Примечания',
          //   'desc'        => 'Тут можно написать примичание',
          //   'std'         => '',
          //   'type'        => 'list-item',
          //   'condition'   => 'servPriceBtn__show:is(on)',
          //   'settings'    => array( 
          //         array(
          //             'id'          => 'servPriceBtn__txt',
          //             'label'       => 'Текст описание',
          //             'desc'        => '',
          //             'std'         => '',
          //             'type'        => 'text',
          //             ),
          //         array(
          //             'id'          => 'servPriceBtn__link',
          //             'label'       => 'Ссылка',
          //             'desc'        => ' Ссылка для скачивание документа',
          //             'std'         => '',
          //             'type'        => 'text',
          //             ),
          //         array(
          //             'id'          => 'servPriceBtn__img',
          //             'label'       => 'Картинка',
          //             'desc'        => 'Загрузите скартинку ',
          //             'std'         => '',
          //             'type'        => 'upload',
          //             ),
          //          )
          //       ),

           )
        );   




  
  /**
   * Create a custom meta boxes array that we pass to 
   * the OptionTree Meta Box API Class.
   */
  $my_meta_box = array(
    'id'          => 'demo_meta_box',
    'title'       => __( 'Demo Meta Box', 'theme-text-domain' ),
    'desc'        => '',
    'pages'       => array( 'post' ),
    'context'     => 'normal',
    'priority'    => 'high',
    'fields'      => array(
      array(
        'label'       => __( 'Conditions', 'theme-text-domain' ),
        'id'          => 'demo_conditions',
        'type'        => 'tab'
      ),
      array(
        'label'       => __( 'Show Gallery', 'theme-text-domain' ),
        'id'          => 'demo_show_gallery',
        'type'        => 'on-off',
        'desc'        => sprintf( __( 'Shows the Gallery when set to %s.', 'theme-text-domain' ), '<code>on</code>' ),
        'std'         => 'off'
      ),
      array(
        'label'       => '',
        'id'          => 'demo_textblock',
        'type'        => 'textblock',
        'desc'        => __( 'Congratulations, you created a gallery!', 'theme-text-domain' ),
        'operator'    => 'and',
        'condition'   => 'demo_show_gallery:is(on),demo_gallery:not()'
      ),
      array(
        'label'       => __( 'Gallery', 'theme-text-domain' ),
        'id'          => 'demo_gallery',
        'type'        => 'gallery',
        'desc'        => sprintf( __( 'This is a Gallery option type. It displays when %s.', 'theme-text-domain' ), '<code>demo_show_gallery:is(on)</code>' ),
        'condition'   => 'demo_show_gallery:is(on)'
      ),
      array(
        'label'       => __( 'More Options', 'theme-text-domain' ),
        'id'          => 'demo_more_options',
        'type'        => 'tab'
      ),
      array(
        'label'       => __( 'Text', 'theme-text-domain' ),
        'id'          => 'demo_text',
        'type'        => 'text',
        'desc'        => __( 'This is a demo Text field.', 'theme-text-domain' )
      ),
      array(
        'label'       => __( 'Textarea', 'theme-text-domain' ),
        'id'          => 'demo_textarea',
        'type'        => 'textarea',
        'desc'        => __( 'This is a demo Textarea field.', 'theme-text-domain' )
      )
    )
  );
  
  /**
   * Register our meta boxes using the 
   * ot_register_meta_box() function.
   */
  if ( function_exists( 'ot_register_meta_box' ) )
    ot_register_meta_box( $my_meta_box );

  if ( function_exists( 'ot_register_meta_box' ) )
    ot_register_meta_box( $my_services_box );
}
