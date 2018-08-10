<?php
/**
 * Initialize the custom Theme Options.
 */
add_action( 'init', 'custom_theme_options' );

/**
 * Build the custom settings & update OptionTree.
 *
 * @return    void
 * @since     2.0
 */
function custom_theme_options() {

  /* OptionTree is not loaded yet, or this is not an admin request */
  if ( ! function_exists( 'ot_settings_id' ) || ! is_admin() )
    return false;

  /**
   * Get a copy of the saved settings array. 
   */
  $saved_settings = get_option( ot_settings_id(), array() );
  
  /**
   * Custom settings array that will eventually be 
   * passes to the OptionTree Settings API Class.
   */
  $custom_settings = array( 
    'contextual_help' => array( 
      'content'       => array( 
        array(
          'id'        => 'option_types_help',
          'title'     => __( 'Option Types', 'theme-text-domain' ),
          'content'   => '<p>' . __( 'Help content goes here!', 'theme-text-domain' ) . '</p>'
        )
      ),
      'sidebar'       => '<p>' . __( 'Sidebar content goes here!', 'theme-text-domain' ) . '</p>'
    ),
    'sections'        => array( 




/* ==========
Верхнее меню 
------------
id: headerTop
============*/
    // array(
    //    'id'          => 'headerTop',
    //    'title'       => 'Меню'
    // ),



/* ==========
Типовое меню
------------
id: headerTop__tip
============*/
    // array(
    //    'id'          => 'headerTop__tip',
    //    'title'       => 'Типовое меню'
    // ),


/* ==========
Шапка сайта 
------------
id: header
============*/
    array(
       'id'          => 'header',
       'title'       => 'Шапка сайта'
    ),
/* ==========
Секция сервис 
------------
id: service
============*/
    // array(
    //    'id'          => 'service',
    //    'title'       => 'Услуги'
    // ),
/* ==========
Секция цитата 
------------
id: quote
============*/
    array(
       'id'          => 'quote',
       'title'       => 'Цитата'
    ),
/* ==========
Секция преимущества 
------------
id: profit
============*/
    // array(
    //    'id'          => 'profit',
    //    'title'       => 'Преимущества'
    // ),

/* ==========
Секция как мы работаем
------------
id: aboutWwork
============*/
    // array(
    //    'id'          => 'aboutWwork',
    //    'title'       => 'Как мы работаем '
    // ),

/* ==========
Секция Кейсы
------------
id: cases
============*/
    array(
       'id'          => 'cases',
       'title'       => 'Кейсы'
    ),

/* ==========
Секция форма 
обратной связи
------------
id: feedbackForm
============*/
    array(
       'id'          => 'feedbackForm',
       'title'       => 'Форма обратной связи  '
    ),

/* ==========
Секция footer
------------
id: footer
============*/
    array(
       'id'          => 'footer',
       'title'       => 'Подвал сайта'
    ),
/* ==========
Секция прайс лист
------------
id: pricelist
============*/
    array(
       'id'          => 'pricelist',
       'title'       => 'Прайс лист '
    ),

/* ==========
Блок "Demo"
------------
id: header
============*/

      // array(
      //   'id'          => 'option_types',
      //   'title'       => __( 'Option Types', 'theme-text-domain' )
      // )
    ),


    'settings'        => array(

/* ==========
Типовое меню
------------
id: headerTop__tip
============*/

        // array(
        //   'id'          => 'header__menu_tip',
        //   'label'       => 'Фоновая картинка',
        //   'desc'        => 'Установите фоновую картинку для блока',
        //   'type'        => 'background',
        //   'section'     => 'header',
        // ),


        array(
          'id'          => 'headerTopTip__list_item',
          'label'       => 'Меню',
          'desc'        => 'Установите параметры блока меню',
          'std'         => '',
          'type'        => 'list-item',
          'section'     => 'headerTop__tip',
          'rows'        => '',
          'post_type'   => '',
          'taxonomy'    => '',
          'min_max_step'=> '',
          'class'       => '',
          'condition'   => '',
          'operator'    => 'and',
          'settings'    => array(            
               array(
                 'id'          => 'headerTopTip__link',
                 'label'       => 'Ссылка меню',
                 'desc'        => 'Укажите ссылку для меню ',
                 'type'        => 'text',
                 'section'     => 'headerTop__tip',
               ),
               array(
                 'id'          => 'headerTopTip__link_name',
                 'label'       => 'Название меню',
                 'desc'        => 'Укажите название для меню ',
                 'type'        => 'text',
                 'section'     => 'headerTop__tip',
               ),

              )
            ),



/* ==========
Верхнее меню 
------------
id: headerTop
============*/

        // array(
        //   'id'          => 'header__menu',
        //   'label'       => 'Фоновая картинка',
        //   'desc'        => 'Установите фоновую картинку для блока',
        //   'type'        => 'background',
        //   'section'     => 'header',
        // ),


        array(
          'id'          => 'headerTop__list_item',
          'label'       => 'Меню',
          'desc'        => 'Установите параметры блока меню',
          'std'         => '',
          'type'        => 'list-item',
          'section'     => 'headerTop',
          'rows'        => '',
          'post_type'   => '',
          'taxonomy'    => '',
          'min_max_step'=> '',
          'class'       => '',
          'condition'   => '',
          'operator'    => 'and',
          'settings'    => array(            
               array(
                 'id'          => 'headerTop__link',
                 'label'       => 'Ссылка меню',
                 'desc'        => 'Укажите ссылку для меню ',
                 'type'        => 'text',
                 'section'     => 'headerTop',
               ),
               array(
                 'id'          => 'headerTop__link_name',
                 'label'       => 'Название меню',
                 'desc'        => 'Укажите название для меню ',
                 'type'        => 'text',
                 'section'     => 'headerTop',
               ),

              )
            ),

  
/* ==========
Шапка сайта 
------------
id: header
============*/

        array(
          'id'          => 'header__bg',
          'label'       => 'Фоновая картинка',
          'desc'        => 'Установите фоновую картинку для блока',
          'type'        => 'background',
          'section'     => 'header',
        ),

        // array(
        //   'id'          => 'header__logo',
        //   'label'       => 'Логотип',
        //   'desc'        => 'Загрузите логотип',
        //   'type'        => 'upload',
        //   'section'     => 'header',
        // ),

        array(
          'id'          => 'header__title',
          'label'       => 'Заголовок для блока',
          'desc'        => 'Укажите заголовок',
          'type'        => 'text',
          'section'     => 'header',
        ),

        array(
          'id'          => 'header__descr',
          'label'       => 'Описание для блока',
          'desc'        => 'Укажите подзаголовок',
          'type'        => 'text',
          'section'     => 'header',
        ),

/* ==========
Секция сервис 
------------
id: service
============*/

        array(
          'id'          => 'service__list_item',
          'label'       => 'Блок с услугами',
          'desc'        => ' Установите параметры блока с услугами',
          'std'         => '',
          'type'        => 'list-item',
          'section'     => 'service',
          'rows'        => '',
          'post_type'   => '',
          'taxonomy'    => '',
          'min_max_step'=> '',
          'class'       => '',
          'condition'   => '',
          'operator'    => 'and',
          'settings'    => array(            
               array(
                 'id'          => 'service__img',
                 'label'       => 'Картинка',
                 'desc'        => 'Загрузите картинку для блока (состояние инертное) ',
                 'type'        => 'upload',
                 'section'     => 'service',
               ),
               array(
                 'id'          => 'service__img_hover',
                 'label'       => 'Картинка 2',
                 'desc'        => 'Загрузите картинку для блока (состояние наведения курсора) ',
                 'type'        => 'upload',
                 'section'     => 'service',
               ),
               array(
                 'id'          => 'service__title',
                 'label'       => 'Заголовок блока',
                 'desc'        => 'Напишите заголовок для блока ',
                 'type'        => 'text',
                 'section'     => 'service',
               ),
              )
            ),


/* ==========
Секция сервис 
------------
id: quote
============*/
        array(
          'id'          => 'quote__bg',
          'label'       => 'Фоновая картинка',
          'desc'        => 'Установите фоновую картинку для блока',
          'type'        => 'background',
          'section'     => 'quote',
        ),
        array(
          'id'          => 'quote__photo',
          'label'       => 'Фотография',
          'desc'        => 'Установите фотографию для блока',
          'type'        => 'upload',
          'section'     => 'quote',
        ),
        array(
          'id'          => 'quote__logo',
          'label'       => 'Логотип ',
          'desc'        => 'Установите логотип',
          'type'        => 'upload',
          'section'     => 'quote',
        ),
        array(
          'id'          => 'quote__descr_leftcolumn',
          'label'       => 'Описание',
          'desc'        => 'Напишите текст левая колонка ',
          'type'        => 'textarea-simple',
          'section'     => 'quote',
        ),
        array(
          'id'          => 'quote__descr_rightcolumn',
          'label'       => 'Описание',
          'desc'        => 'Напишите текст правая колонка ',
          'type'        => 'textarea-simple',
          'section'     => 'quote',
        ),
        array(
          'id'          => 'quote__descr_auhtorcolumn',
          'label'       => 'Подпись',
          'desc'        => 'Имя автора цитаты ',
          'type'        => 'textarea',
          'section'     => 'quote',
        ),

        array(
          'id'          => 'quote__btn',
          'label'       => 'Кнопка',
          'desc'        => 'Подробно об описании',
          'type'        => 'text',
          'section'     => 'quote',
        ),
        array(
          'id'          => 'quote__btn_link',
          'label'       => 'ссылка',
          'desc'        => 'Укажите ссылку на ресурс',
          'type'        => 'text',
          'section'     => 'quote',
        ),

/* ==========
Секция преимущества 
------------
id: profit
============*/
        array(
          'id'          => 'profit__bg',
          'label'       => 'Фоновая картинка',
          'desc'        => 'Установите фоновую картинку для блока',
          'type'        => 'background',
          'section'     => 'profit',
        ),

        array(
          'id'          => 'profit__title',
          'label'       => 'Заголовок блока',
          'desc'        => 'Напишите заголовок для блока',
          'type'        => 'text',
          'section'     => 'profit',
        ),

        array(
          'id'          => 'profit__img_ps1',
          'label'       => 'Картинка для блока №1',
          'desc'        => 'Установите картинку для блока №1',
          'type'        => 'upload',
          'section'     => 'profit',
        ),
        array(
          'id'          => 'profit__title_1',
          'label'       => 'Заголовок для блока №1',
          'desc'        => 'Напишите заголовок для блока №1 ',
          'type'        => 'textarea',
          'section'     => 'profit',
        ),
        array(
          'id'          => 'profit__img_ps2',
          'label'       => 'Картинка для блока №2',
          'desc'        => 'Установите картинку для блока №2',
          'type'        => 'upload',
          'section'     => 'profit',
        ),
        array(
          'id'          => 'profit__title_2',
          'label'       => 'Заголовок для блока №2',
          'desc'        => 'Напишите заголовок для блока №2 ',
          'type'        => 'textarea',
          'section'     => 'profit',
        ),
        array(
          'id'          => 'profit__img_ps3',
          'label'       => 'Картинка для блока №3',
          'desc'        => 'Установите картинку для блока №3',
          'type'        => 'upload',
          'section'     => 'profit',
        ),
        array(
          'id'          => 'profit__title_3',
          'label'       => 'Заголовок для блока №3',
          'desc'        => 'Напишите заголовок для блока №3 ',
          'type'        => 'textarea',
          'section'     => 'profit',
        ),
        array(
          'id'          => 'profit__img_ps4',
          'label'       => 'Картинка для блока №4',
          'desc'        => 'Установите картинку для блока №4',
          'type'        => 'upload',
          'section'     => 'profit',
        ),
        array(
          'id'          => 'profit__title_4',
          'label'       => 'Заголовок для блока №4',
          'desc'        => 'Напишите заголовок для блока №4 ',
          'type'        => 'textarea',
          'section'     => 'profit',
        ),
        array(
          'id'          => 'profit__img_ps5',
          'label'       => 'Картинка для блока №5',
          'desc'        => 'Установите картинку для блока №5',
          'type'        => 'upload',
          'section'     => 'profit',
        ),
        array(
          'id'          => 'profit__title_5',
          'label'       => 'Заголовок для блока №5',
          'desc'        => 'Напишите заголовок для блока №5 ',
          'type'        => 'textarea',
          'section'     => 'profit',
        ),

        array(
          'id'          => 'profit__img_ps6',
          'label'       => 'Картинка для блока №6',
          'desc'        => 'Установите картинку для блока №6',
          'type'        => 'upload',
          'section'     => 'profit',
        ),
        array(
          'id'          => 'profit__title_6',
          'label'       => 'Заголовок для блока №6',
          'desc'        => 'Напишите заголовок для блока №6',
          'type'        => 'textarea',
          'section'     => 'profit',
        ),

/* ==========
Секция как мы работаем
------------
id: aboutWwork
============*/

        array(
          'id'          => 'aboutWwork__title',
          'label'       => 'Заголовок блока',
          'desc'        => '',
          'type'        => 'text',
          'section'     => 'aboutWwork',
        ),

        array(
          'id'          => 'aboutWwork__list_item',
          'label'       => 'Блок c условиями',
          'desc'        => ' Перечислите условия работы ',
          'std'         => '',
          'type'        => 'list-item',
          'section'     => 'aboutWwork',
          'rows'        => '',
          'post_type'   => '',
          'taxonomy'    => '',
          'min_max_step'=> '',
          'class'       => '',
          'condition'   => '',
          'operator'    => 'and',
          'settings'    => array(            
               array(
                 'id'          => 'aboutWwork__img_block',
                 'label'       => 'Картинка',
                 'desc'        => 'Загрузите картинку для блока ',
                 'type'        => 'upload',
                 'section'     => 'aboutWwork',
               ),
               array(
                 'id'          => 'aboutWwork__img_number',
                 'label'       => 'Картинка номер',
                 'desc'        => 'Загрузите картинку номер',
                 'type'        => 'upload',
                 'section'     => 'aboutWwork',
               ),
               array(
                 'id'          => 'aboutWwork__title',
                 'label'       => 'Заголовок блока',
                 'desc'        => 'Напишите заголовок для блока ',
                 'type'        => 'text',
                 'section'     => 'aboutWwork',
               ),
              )
            ),
/* ==========
Секция Кейсы
------------
id: cases
============*/

        array(
          'id'          => 'cases__title',
          'label'       => 'Заголовок блока',
          'desc'        => '',
          'type'        => 'text',
          'section'     => 'cases',
        ),

        array(
          'id'          => 'cases__list_item',
          'label'       => 'Блок c кейсами',
          'desc'        => ' Описание тут',
          'std'         => '',
          'type'        => 'list-item',
          'section'     => 'cases',
          'rows'        => '',
          'post_type'   => '',
          'taxonomy'    => '',
          'min_max_step'=> '',
          'class'       => '',
          'condition'   => '',
          'operator'    => 'and',
          'settings'    => array(            
               array(
                 'id'          => 'cases__imgServ',
                 'label'       => 'Картинка',
                 'desc'        => 'Загрузите картинку для блока (состояние инертное)  ',
                 'type'        => 'upload',
                 'section'     => 'cases',
               ),
               array(
                 'id'          => 'cases__imgServ_hover',
                 'label'       => 'Картинка ',
                 'desc'        => 'Загрузите картинку для блока (состояние при наведении курсора)  ',
                 'type'        => 'upload',
                 'section'     => 'cases',
               ),
               array(
                 'id'          => 'cases__title_item',
                 'label'       => 'Заголовок блока',
                 'desc'        => 'Напишите заголовок для блока ',
                 'type'        => 'text',
                 'section'     => 'cases',
               ),
               array(
                 'id'          => 'cases__descr_item',
                 'label'       => 'Описание блока',
                 'desc'        => ' ',
                 'type'        => 'textarea',
                 'section'     => 'cases',
               ),
               array(
                 'id'          => 'cases__result_item',
                 'label'       => 'Результат ',
                 'desc'        => 'Напишите какой результат был достигнут  ',
                 'type'        => 'textarea',
                 'section'     => 'cases',
               ),
               array(
                 'id'          => 'cases__bt_item',
                 'label'       => 'Кнопка ',
                 'desc'        => 'Напишите название кнопки ',
                 'type'        => 'text',
                 'section'     => 'cases',
               ),
               array(
                 'id'          => 'cases__btlink_item',
                 'label'       => 'Кнопка ссылка',
                 'desc'        => 'Укажите ссылку на ресурс ',
                 'type'        => 'text',
                 'section'     => 'cases',
               ),

              )
            ),

/* ==========
Секция форма 
обратной связи
------------
id: feedbackForm
============*/


/* Первая форма */
            array(
              'id'          => 'feedbackForm__first_title',
              'label'       => 'Первая форма',
              'desc'        => 'Вставьте Шорт-Код формы',
              'type'        => 'tab',
              'section'     => 'feedbackForm',
            ),
            array(
              'id'          => 'feedbackForm__first',
              'label'       => 'Закажите бесплатную телефонную консультацию',
              'desc'        => ' Вставьте Шорт-Код формы',
              'type'        => 'text',
              'section'     => 'feedbackForm',
            ),

/* Вторая форма */
            array(
              'id'          => 'feedbackForm__second_title',
              'label'       => 'Вторая форма',
              'desc'        => 'Вставьте Шорт-Код формы',
              'type'        => 'tab',
              'section'     => 'feedbackForm',
            ),
            array(
              'id'          => 'feedbackForm__second',
              'label'       => 'Запишитесь на консультацию в удобное для вас время',
              'desc'        => ' Вставьте Шорт-Код формы',
              'type'        => 'text',
              'section'     => 'feedbackForm',
            ),

/* Третья  форма */
            array(
              'id'          => 'feedbackForm__third_title',
              'label'       => 'Третья форма',
              'desc'        => 'Вставьте Шорт-Код формы',
              'type'        => 'tab',
              'section'     => 'feedbackForm',
            ),
            array(
              'id'          => 'feedbackForm__third',
              'label'       => 'Задайте вопрос нашим специалистам ',
              'desc'        => ' Вставьте Шорт-Код формы',
              'type'        => 'text',
              'section'     => 'feedbackForm',
            ),

/* ==========
Секция footer
------------
id: footer
============*/
            /* Адрес*/
            array(
              'id'          => 'footer_tab',
              'label'       => 'Адрес',
              'desc'        => 'Напишите адрес',
              'type'        => 'tab',
              'section'     => 'footer',
            ),

            array(
              'id'          => 'footer__address',
              'label'       => 'Адрес',
              'desc'        => 'Напишите адрес',
              'type'        => 'text',
              'section'     => 'footer',
            ),

           /* Время работы */
            array(
              'id'          => 'footer__timework_tab',
              'label'       => 'Время работы',
              'desc'        => 'Напишите адрес',
              'type'        => 'tab',
              'section'     => 'footer',
            ),

            array(
              'id'          => 'footer__timework',
              'label'       => 'Время работы',
              'desc'        => 'Напишите время работы',
              'type'        => 'text',
              'section'     => 'footer',
            ),


            /* Почта  */
            array(
              'id'          => 'footer__email',
              'label'       => 'Почта',
              'desc'        => 'Напишите почту',
              'type'        => 'text',
              'section'     => 'footer',
            ),

            /* Телефоны */
            array(
              'id'          => 'phone__city_tab',
              'label'       => 'телефон',
              'desc'        => 'Напишите телефон',
              'type'        => 'tab',
              'section'     => 'footer',
            ),

/* Городской телефон 1 */            
            array(
              'id'          => 'phone__city',
              'label'       => 'Телефон городской',
              'desc'        => 'Напишите телефон ',
              'type'        => 'text',
              'section'     => 'footer',
            ),
            array(
              'id'          => 'phone__city_link',
              'label'       => 'Укажите формат набора номера',
              'desc'        => 'Например +7(900)123-32-24',
              'type'        => 'text',
              'section'     => 'footer',
            ),
/* Городской телефон 2 */
            array(
              'id'          => 'phone__city2',
              'label'       => 'городской факс',
              'desc'        => 'Напишите факс',
              'type'        => 'text',
              'section'     => 'footer',
            ),
            array(
              'id'          => 'phone__city2_link',
              'label'       => 'Укажите формат набора номера ',
              'desc'        => 'Например +7(900)123-32-12',
              'type'        => 'text',
              'section'     => 'footer',
            ),
/* Мобильный */

            array(
              'id'          => 'phone__mobile',
              'label'       => 'Укажите мобильный телефон ',
              'desc'        => 'Например +7(900)123-32-12',
              'type'        => 'text',
              'section'     => 'footer',
            ),
            array(
              'id'          => 'phone__mobile_link',
              'label'       => 'Укажите формат набора номера',
              'desc'        => 'Например +7(900)123-32-12',
              'type'        => 'text',
              'section'     => 'footer',
            ),

/* Факс */
            array(
              'id'          => 'fax__city',
              'label'       => 'Укажите мобильный телефон ',
              'desc'        => 'Например +7(900)123-32-12',
              'type'        => 'text',
              'section'     => 'footer',
            ),
            array(
              'id'          => 'fax__city_link',
              'label'       => 'Укажите формат набора номера',
              'desc'        => 'Например +7(900)123-32-12',
              'type'        => 'text',
              'section'     => 'footer',
            ),


           /* Социальные сети */
            array(
              'id'          => 'social__tab',
              'label'       => 'Социальные сети ',
              'desc'        => 'Укажите социальные сети',
              'type'        => 'tab',
              'section'     => 'footer',
            ),

           array(
              'id'          => 'social__list_item',
              'label'       => 'Социальные сети ',
              'desc'        => 'Заполните информацию',
              'std'         => '',
              'type'        => 'list-item',
              'section'     => 'footer',
              'rows'        => '',
              'post_type'   => '',
              'taxonomy'    => '',
              'min_max_step'=> '',
              'class'       => '',
              'condition'   => '',
              'operator'    => 'and',
              'settings'    => array(            
                   array(
                     'id'          => 'social__link',
                     'label'       => 'Ссылка ',
                     'desc'        => 'Укажите ссылку соц сети',
                     'type'        => 'text',
                     'section'     => 'footer',
                   ),
                   array(
                     'id'          => 'social__upload',
                     'label'       => 'Картинка',
                     'desc'        => 'Загрузите иконку социальной сети',
                     'type'        => 'upload',
                     'section'     => 'footer',
                   ),
                  )
                ),
/* ==========
Секция прайс лист
------------
id: pricelist
============*/

      array(
              'id'          => 'pricelist__list_item',
              'label'       => 'Блок с услугами',
              'desc'        => ' Установите параметры блока с услугами',
              'std'         => '',
              'type'        => 'list-item',
              'section'     => 'pricelist',
              'rows'        => '',
              'post_type'   => '',
              'taxonomy'    => '',
              'min_max_step'=> '',
              'class'       => '',
              'condition'   => '',
              'operator'    => 'and',
              'settings'    => array(            
                   array(
                     'id'          => 'pricelist_title',
                     'label'       => 'Услуга ',
                     'desc'        => 'Укажите название услуги  ',
                     'type'        => 'text',
                     'section'     => 'pricelist',
                   ),
                   array(
                     'id'          => 'pricelist_time',
                     'label'       => 'Время  ',
                     'desc'        => 'Укажите сколько требуется времени на  оказание услуги ',
                     'type'        => 'text',
                     'section'     => 'pricelist',
                   ),
                   array(
                     'id'          => 'pricelist_cost',
                     'label'       => 'Стоимость  ',
                     'desc'        => 'Сколько стоит услуга  ',
                     'type'        => 'text',
                     'section'     => 'pricelist',
                   ),
                  )
                ),
      /* Описание услуг */
      array(
        'id'          => 'tablica__ps__left',
        'label'       => 'Левая колонка ',
        'desc'        => 'Содержание левой колонки ',
        'type'        => 'textarea',
        'section'     => 'pricelist',
      ),
      array(
        'id'          => 'tablica__ps__right',
        'label'       => 'Правая колонка ',
        'desc'        => 'Содержание правой колонки ',
        'type'        => 'textarea',
        'section'     => 'pricelist',
      ),
      array(
        'id'          => 'tablica_notice',
        'label'       => 'Оповещение P.S  ',
        'desc'        => 'Напишите еще что нибудь важное в это поле  ',
        'type'        => 'text',
        'section'     => 'pricelist',
      ),




/* ==========
Блок "Demo"
------------
id: header
============*/



      array(
        'id'          => 'demo_background',
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
        'id'          => 'demo_border',
        'label'       => __( 'Border', 'theme-text-domain' ),
        'desc'        => __( 'The Border option type is used to set width, unit, style, and color values.', 'theme-text-domain' ),
        'std'         => '',
        'type'        => 'border',
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
        'id'          => 'demo_box_shadow',
        'label'       => __( 'Box Shadow', 'theme-text-domain' ),
        'desc'        => sprintf( __( 'The Box Shadow option type is used to set %s, %s, %s, %s, %s, and %s values.', 'theme-text-domain' ), '<code>inset</code>', '<code>offset-x</code>', '<code>offset-y</code>', '<code>blur-radius</code>', '<code>spread-radius</code>', '<code>color</code>' ),
        'std'         => '',
        'type'        => 'box-shadow',
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
        'id'          => 'demo_category_checkbox',
        'label'       => __( 'Category Checkbox', 'theme-text-domain' ),
        'desc'        => __( 'The Category Checkbox option type displays a list of category IDs. It allows the user to check multiple category IDs and will return that value as an array for use in a custom function or loop.', 'theme-text-domain' ),
        'std'         => '',
        'type'        => 'category-checkbox',
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
        'id'          => 'demo_category_select',
        'label'       => __( 'Category Select', 'theme-text-domain' ),
        'desc'        => __( 'The Category Select option type displays a list of category IDs. It allows the user to select only one category ID and will return that value for use in a custom function or loop.', 'theme-text-domain' ),
        'std'         => '',
        'type'        => 'category-select',
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
        'id'          => 'demo_checkbox',
        'label'       => __( 'Checkbox', 'theme-text-domain' ),
        'desc'        => __( 'The Checkbox option type displays a group of choices. It allows the user to check multiple choices and will return that value as an array for use in a custom function or loop.', 'theme-text-domain' ),
        'std'         => '',
        'type'        => 'checkbox',
        'section'     => 'option_types',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and',
        'choices'     => array( 
          array(
            'value'       => 'no',
            'label'       => __( 'No', 'theme-text-domain' ),
            'src'         => ''
          ),
          array(
            'value'       => 'Yes',
            'label'       => __( 'Yes', 'theme-text-domain' ),
            'src'         => ''
          )
        )
      ),
      array(
        'id'          => 'demo_colorpicker',
        'label'       => __( 'Colorpicker', 'theme-text-domain' ),
        'desc'        => __( 'The Colorpicker option type saves a hexadecimal color code for use in CSS. Use it to modify the color of something in your theme.', 'theme-text-domain' ),
        'std'         => '',
        'type'        => 'colorpicker',
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
        'id'          => 'demo_colorpicker_opacity',
        'label'       => __( 'Colorpicker Opacity', 'theme-text-domain' ),
        'desc'        => __( 'Colorpicker Opacity', 'option-tree-theme' ),
        'desc'        => sprintf( __( 'The Colorpicker Opacity option type saves an rgba color value for use in CSS. To add opacity to other colorpickers add the %s class to the %s array.', 'option-tree' ), '<code>ot-colorpicker-opacity</code>', '<code>$args</code>' ),
        'std'         => '',
        'type'        => 'colorpicker-opacity',
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
        'id'          => 'demo_css',
        'label'       => __( 'CSS', 'theme-text-domain' ),
        'desc'        => '<p>' . sprintf( __( 'The CSS option type is a textarea that when used properly can add dynamic CSS to your theme from within OptionTree. Unfortunately, due server limitations you will need to create a file named %s at the root level of your theme and change permissions using %s so the server can write to the file. I have had the most success setting this single file to %s but feel free to play around with permissions until everything is working. A good starting point is %s. When the server can save to the file, CSS will automatically be updated when you save your Theme Options.', 'theme-text-domain' ), '<code>dynamic.css</code>', '<code>chmod</code>', '<code>0777</code>', '<code>0666</code>' ) . '</p><p>' . sprintf( __( 'This example assumes you have an option with the ID of %1$s. Which means this option will automatically insert the value of %1$s into the %2$s when the Theme Options are saved.', 'theme-text-domain' ), '<code>demo_background</code>', '<code>dynamic.css</code>' ) . '</p>',
        'std'         => '#custom {
  {{demo_background}}
}',
        'type'        => 'css',
        'section'     => 'option_types',
        'rows'        => '20',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'demo_custom_post_type_checkbox',
        'label'       => __( 'Custom Post Type Checkbox', 'theme-text-domain' ),
        'desc'        => sprintf( __( 'The Custom Post Type Select option type displays a list of IDs from any available WordPress post type or custom post type. It allows the user to check multiple post IDs for use in a custom function or loop. Requires at least one valid %1$s in the %1$s field.', 'theme-text-domain' ), '<code>post_type</code>' ),
        'std'         => '',
        'type'        => 'custom-post-type-checkbox',
        'section'     => 'option_types',
        'rows'        => '',
        'post_type'   => 'post',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'demo_custom_post_type_select',
        'label'       => __( 'Custom Post Type Select', 'theme-text-domain' ),
        'desc'        => sprintf( __( 'The Custom Post Type Select option type displays a list of IDs from any available WordPress post type or custom post type. It will return a single post ID for use in a custom function or loop. Requires at least one valid %1$s in the %1$s field.', 'theme-text-domain' ), '<code>post_type</code>' ),
        'std'         => '',
        'type'        => 'custom-post-type-select',
        'section'     => 'option_types',
        'rows'        => '',
        'post_type'   => 'post',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'demo_date_picker',
        'label'       => __( 'Date Picker', 'theme-text-domain' ),
        'desc'        => __( 'The Date Picker option type is tied to a standard form input field which displays a calendar pop-up that allow the user to pick any date when focus is given to the input field. The returned value is a date formatted string.', 'theme-text-domain' ),
        'std'         => '',
        'type'        => 'date-picker',
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
        'id'          => 'demo_date_time_picker',
        'label'       => __( 'Date Time Picker', 'theme-text-domain' ),
        'desc'        => __( 'The Date Time Picker option type is tied to a standard form input field which displays a calendar pop-up that allow the user to pick any date and time when focus is given to the input field. The returned value is a date and time formatted string.', 'theme-text-domain' ),
        'std'         => '',
        'type'        => 'date-time-picker',
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
        'id'          => 'demo_dimension',
        'label'       => __( 'Dimension', 'theme-text-domain' ),
        'desc'        => __( 'The Dimension option type is used to set width and height values.', 'theme-text-domain' ),
        'std'         => '',
        'type'        => 'dimension',
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
        'id'          => 'demo_gallery',
        'label'       => __( 'Gallery', 'theme-text-domain' ),
        'desc'        => __( 'The Gallery option type saves a comma separated list of image attachment IDs. You will need to create a front-end function to display the images in your theme.', 'theme-text-domain' ),
        'std'         => '',
        'type'        => 'gallery',
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
        'id'          => 'demo_gallery_shortcode',
        'label'       => __( 'Gallery Shortcode', 'theme-text-domain' ),
        'desc'        => sprintf( __( 'The Gallery option type can also be saved as a shortcode by adding %s to the class attribute. Using the Gallery option type in this manner will result in a better user experience as you\'re able to save the link, column, and order settings.', 'theme-text-domain' ), '<code>ot-gallery-shortcode</code>' ),
        'std'         => '',
        'type'        => 'gallery',
        'section'     => 'option_types',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => 'ot-gallery-shortcode',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'demo_google_fonts',
        'label'       => __( 'Google Fonts', 'theme-text-domain' ),
        'desc'        => sprintf( __( 'The Google Fonts option type will dynamically enqueue any number of Google Web Fonts into the document %1$s. As well, once the option has been saved each font family will automatically be inserted into the %2$s array for the Typography option type. You can further modify the font stack by using the %3$s filter, which is passed the %4$s, %5$s, and %6$s parameters. The %6$s parameter is being passed from %7$s, so it will be the ID of a Typography option type. This will allow you to add additional web safe fonts to individual font families on an as-need basis.', 'theme-text-domain' ), '<code>HEAD</code>', '<code>font-family</code>', '<code>ot_google_font_stack</code>', '<code>$font_stack</code>', '<code>$family</code>', '<code>$field_id</code>', '<code>ot_recognized_font_families</code>' ),
        'std'         => array( 
          array(
            'family'    => 'opensans',
            'variants'  => array( '300', '300italic', 'regular', 'italic', '600', '600italic' ),
            'subsets'   => array( 'latin' )
          )
        ),
        'type'        => 'google-fonts',
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
        'id'          => 'demo_javascript',
        'label'       => __( 'JavaScript', 'theme-text-domain' ),
        'desc'        => '<p>' . sprintf( __( 'The JavaScript option type is a textarea that uses the %s code editor to highlight your JavaScript and display errors as you type.', 'theme-text-domain' ), '<code>ace.js</code>' ) . '</p>',
        'std'         => '',
        'type'        => 'javascript',
        'section'     => 'option_types',
        'rows'        => '20',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'demo_link_color',
        'label'       => __( 'Link Color', 'theme-text-domain' ),
        'desc'        => __( 'The Link Color option type is used to set all link color states.', 'theme-text-domain' ),
        'std'         => '',
        'type'        => 'link-color',
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
        'id'          => 'demo_list_item',
        'label'       => __( 'List Item', 'theme-text-domain' ),
        'desc'        => __( 'The List Item option type allows for a great deal of customization. You can add settings to the List Item and those settings will be displayed to the user when they add a new List Item. Typical use is for creating sliding content or blocks of code for custom layouts.', 'theme-text-domain' ),
        'std'         => '',
        'type'        => 'list-item',
        'section'     => 'option_types',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and',
        'settings'    => array( 
          array(
            'id'          => 'demo_list_item_content',
            'label'       => __( 'Content', 'theme-text-domain' ),
            'desc'        => '',
            'std'         => '',
            'type'        => 'textarea-simple',
            'rows'        => '10',
            'post_type'   => '',
            'taxonomy'    => '',
            'min_max_step'=> '',
            'class'       => '',
            'condition'   => '',
            'operator'    => 'and'
          )
        )
      ),
      array(
        'id'          => 'demo_measurement',
        'label'       => __( 'Measurement', 'theme-text-domain' ),
        'desc'        => sprintf( __( 'The Measurement option type is a mix of input and select fields. The text input excepts a value and the select lets you choose the unit of measurement to add to that value. Currently the default units are %s, %s, %s, and %s. However, you can change them with the %s filter.', 'theme-text-domain' ), '<code>px</code>', '<code>%</code>', '<code>em</code>', '<code>pt</code>', '<code>ot_measurement_unit_types</code>' ),
        'std'         => '',
        'type'        => 'measurement',
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
        'id'          => 'demo_numeric_slider',
        'label'       => __( 'Numeric Slider', 'theme-text-domain' ),
        'desc'        => __( 'The Numeric Slider option type displays a jQuery UI slider. It will return a single numerical value for use in a custom function or loop.', 'theme-text-domain' ),
        'std'         => '',
        'type'        => 'numeric-slider',
        'section'     => 'option_types',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '-500,5000,100',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'demo_on_off',
        'label'       => __( 'On/Off', 'theme-text-domain' ),
        'desc'        => sprintf( __( 'The On/Off option type displays a simple switch that can be used to turn things on or off. The saved return value is either %s or %s.', 'theme-text-domain' ), '<code>on</code>', '<code>off</code>' ),
        'std'         => '',
        'type'        => 'on-off',
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
        'id'          => 'demo_page_checkbox',
        'label'       => __( 'Page Checkbox', 'theme-text-domain' ),
        'desc'        => __( 'The Page Checkbox option type displays a list of page IDs. It allows the user to check multiple page IDs for use in a custom function or loop.', 'theme-text-domain' ),
        'std'         => '',
        'type'        => 'page-checkbox',
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
        'id'          => 'demo_page_select',
        'label'       => __( 'Page Select', 'theme-text-domain' ),
        'desc'        => __( 'The Page Select option type displays a list of page IDs. It will return a single page ID for use in a custom function or loop.', 'theme-text-domain' ),
        'std'         => '',
        'type'        => 'page-select',
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
        'id'          => 'demo_post_checkbox',
        'label'       => __( 'Post Checkbox', 'theme-text-domain' ),
        'desc'        => __( 'The Post Checkbox option type displays a list of post IDs. It allows the user to check multiple post IDs for use in a custom function or loop.', 'theme-text-domain' ),
        'std'         => '',
        'type'        => 'post-checkbox',
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
        'id'          => 'demo_post_select',
        'label'       => __( 'Post Select', 'theme-text-domain' ),
        'desc'        => __( 'The Post Select option type displays a list of post IDs. It will return a single post ID for use in a custom function or loop.', 'theme-text-domain' ),
        'std'         => '',
        'type'        => 'post-select',
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
        'id'          => 'demo_radio',
        'label'       => __( 'Radio', 'theme-text-domain' ),
        'desc'        => __( 'The Radio option type displays a group of choices. It allows the user to choose one and will return that value as a string for use in a custom function or loop.', 'theme-text-domain' ),
        'std'         => '',
        'type'        => 'radio',
        'section'     => 'option_types',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and',
        'choices'     => array( 
          array(
            'value'       => 'yes',
            'label'       => __( 'Yes', 'theme-text-domain' ),
            'src'         => ''
          ),
          array(
            'value'       => 'no',
            'label'       => __( 'No', 'theme-text-domain' ),
            'src'         => ''
          ),
          array(
            'value'       => 'maybe',
            'label'       => __( 'Maybe', 'theme-text-domain' ),
            'src'         => ''
          )
        )
      ),
      array(
        'id'          => 'demo_radio_image',
        'label'       => __( 'Radio Image', 'theme-text-domain' ),
        'desc'        => sprintf( __( 'the Radio Images option type is primarily used for layouts. However, you can filter the image list using %s. As well, you can add your own custom images using the choices array.', 'theme-text-domain' ), '<code>ot_radio_images</code>' ),
        'std'         => 'right-sidebar',
        'type'        => 'radio-image',
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
        'id'          => 'demo_select',
        'label'       => __( 'Select', 'theme-text-domain' ),
        'desc'        => __( 'The Select option type is used to list anything you want that would be chosen from a select list.', 'theme-text-domain' ),
        'std'         => '',
        'type'        => 'select',
        'section'     => 'option_types',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and',
        'choices'     => array( 
          array(
            'value'       => '',
            'label'       => __( '-- Choose One --', 'theme-text-domain' ),
            'src'         => ''
          ),
          array(
            'value'       => 'yes',
            'label'       => __( 'Yes', 'theme-text-domain' ),
            'src'         => ''
          ),
          array(
            'value'       => 'no',
            'label'       => __( 'No', 'theme-text-domain' ),
            'src'         => ''
          ),
          array(
            'value'       => 'maybe',
            'label'       => __( 'Maybe', 'theme-text-domain' ),
            'src'         => ''
          )
        )
      ),
      array(
        'id'          => 'demo_sidebar_select',
        'label'       => __( 'Sidebar Select', 'theme-text-domain' ),
        'desc'        => '<p>' . sprintf(  __( 'This option type makes it possible for users to select a WordPress registered sidebar to use on a specific area. By using the two provided filters, %s, and %s we can be selective about which sidebars are available on a specific content area.', 'theme-text-domain' ), '<code>ot_recognized_sidebars</code>', '<code>ot_recognized_sidebars_{$field_id}</code>' ) . '</p><p>' . sprintf( __( 'For example, if we create a WordPress theme that provides the ability to change the Blog Sidebar and we don\'t want to have the footer sidebars available on this area, we can unset those sidebars either manually or by using a regular expression if we have a common name like %s.', 'theme-text-domain' ), '<code>footer-sidebar-$i</code>' ) . '</p>',
        'std'         => '',
        'type'        => 'sidebar-select',
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
        'id'          => 'demo_social_links',
        'label'       => __( 'Social Links', 'theme-text-domain' ),
        'desc'        => '<p>' . sprintf( __( 'The Social Links option type utilizes a drag & drop interface to create a list of social links. There are a few filters that make extending this option type easy. You can set the %s filter to %s and turn off loading default values. Use the %s filter to change the default values that are loaded. To filter the settings array use the %s filter.', 'theme-text-domain' ), '<code>ot_type_social_links_load_defaults</code>', '<code>false</code>', '<code>ot_type_social_links_defaults</code>', '<code>ot_social_links_settings</code>' ) . '</p>',
        'std'         => '',
        'type'        => 'social-links',
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
        'id'          => 'demo_spacing',
        'label'       => __( 'Spacing', 'theme-text-domain' ),
        'desc'        => __( 'The Spacing option type is used to set spacing values such as padding or margin in the form of top, right, bottom, and left.', 'theme-text-domain' ),
        'std'         => '',
        'type'        => 'spacing',
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
        'id'          => 'demo_tag_checkbox',
        'label'       => __( 'Tag Checkbox', 'theme-text-domain' ),
        'desc'        => __( 'The Tag Checkbox option type displays a list of tag IDs. It allows the user to check multiple tag IDs and will return that value as an array for use in a custom function or loop.', 'theme-text-domain' ),
        'std'         => '',
        'type'        => 'tag-checkbox',
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
        'id'          => 'demo_tag_select',
        'label'       => __( 'Tag Select', 'theme-text-domain' ),
        'desc'        => __( 'The Tag Select option type displays a list of tag IDs. It allows the user to select only one tag ID and will return that value for use in a custom function or loop.', 'theme-text-domain' ),
        'std'         => '',
        'type'        => 'tag-select',
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
        'id'          => 'demo_taxonomy_checkbox',
        'label'       => __( 'Taxonomy Checkbox', 'theme-text-domain' ),
        'desc'        => __( 'The Taxonomy Checkbox option type displays a list of taxonomy IDs. It allows the user to check multiple taxonomy IDs and will return that value as an array for use in a custom function or loop.', 'theme-text-domain' ),
        'std'         => '',
        'type'        => 'taxonomy-checkbox',
        'section'     => 'option_types',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => 'category,post_tag',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'demo_taxonomy_select',
        'label'       => __( 'Taxonomy Select', 'theme-text-domain' ),
        'desc'        => __( 'The Taxonomy Select option type displays a list of taxonomy IDs. It allows the user to select only one taxonomy ID and will return that value for use in a custom function or loop.', 'theme-text-domain' ),
        'std'         => '',
        'type'        => 'taxonomy-select',
        'section'     => 'option_types',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => 'category,post_tag',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'demo_text',
        'label'       => __( 'Text', 'theme-text-domain' ),
        'desc'        => __( 'The Text option type is used to save string values. For example, any optional or required text that is of reasonably short character length.', 'theme-text-domain' ),
        'std'         => '',
        'type'        => 'text',
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
        'id'          => 'demo_textarea',
        'label'       => __( 'Textarea', 'theme-text-domain' ),
        'desc'        => sprintf( __( 'The Textarea option type is a large string value used for custom code or text in the theme and has a WYSIWYG editor that can be filtered to change the how it is displayed. For example, you can filter %s, %s, %s, and %s.', 'theme-text-domain' ), '<code>wpautop</code>', '<code>media_buttons</code>', '<code>tinymce</code>', '<code>quicktags</code>' ),
        'std'         => '',
        'type'        => 'textarea',
        'section'     => 'option_types',
        'rows'        => '15',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'demo_textarea_simple',
        'label'       => __( 'Textarea Simple', 'theme-text-domain' ),
        'desc'        => __( 'The Textarea Simple option type is a large string value used for custom code or text in the theme. The Textarea Simple does not have a WYSIWYG editor.', 'theme-text-domain' ),
        'std'         => '',
        'type'        => 'textarea-simple',
        'section'     => 'option_types',
        'rows'        => '10',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'demo_textblock',
        'label'       => __( 'Textblock', 'theme-text-domain' ),
        'desc'        => __( 'The Textblock option type is used only on the Theme Option page. It will allow you to create & display HTML, but has no title above the text block. You can then use the Textblock to add a more detailed set of instruction on how the options are used in your theme. You would never use this in your themes template files as it does not save a value.', 'theme-text-domain' ),
        'std'         => '',
        'type'        => 'textblock',
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
        'id'          => 'demo_textblock_titled',
        'label'       => __( 'Textblock Titled', 'theme-text-domain' ),
        'desc'        => __( 'The Textblock Titled option type is used only on the Theme Option page. It will allow you to create & display HTML, and has a title above the text block. You can then use the Textblock Titled to add a more detailed set of instruction on how the options are used in your theme. You would never use this in your themes template files as it does not save a value.', 'theme-text-domain' ),
        'std'         => '',
        'type'        => 'textblock-titled',
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
        'id'          => 'demo_typography',
        'label'       => __( 'Typography', 'theme-text-domain' ),
        'desc'        => sprintf( __( 'The Typography option type is for adding typography styles to your theme either dynamically via the CSS option type above or manually with %s. The Typography option type has filters that allow you to remove fields or change the defaults. For example, you can filter %s to remove unwanted fields from all Background options or an individual one. You can also filter %s. These filters allow you to fine tune the select lists for your specific needs.', 'theme-text-domain' ), '<code>ot_get_option()</code>', '<code>ot_recognized_typography_fields</code>', '<code>ot_recognized_font_families</code>, <code>ot_recognized_font_sizes</code>, <code>ot_recognized_font_styles</code>, <code>ot_recognized_font_variants</code>, <code>ot_recognized_font_weights</code>, <code>ot_recognized_letter_spacing</code>, <code>ot_recognized_line_heights</code>, <code>ot_recognized_text_decorations</code> ' . __( 'and', 'theme-text-domain' ) . ' <code>ot_recognized_text_transformations</code>' ),
        'std'         => '',
        'type'        => 'typography',
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
        'id'          => 'demo_upload',
        'label'       => __( 'Upload', 'theme-text-domain' ),
        'desc'        => sprintf( __( 'The Upload option type is used to upload any WordPress supported media. After uploading, users are required to press the "%s" button in order to populate the input with the URI of that media. There is one caveat of this feature. If you import the theme options and have uploaded media on one site the old URI will not reflect the URI of your new site. You will have to re-upload or %s any media to your new server and change the URIs if necessary.', 'theme-text-domain' ), apply_filters( 'ot_upload_text', __( 'Send to OptionTree', 'theme-text-domain' ) ), 'FTP' ),
        'std'         => '',
        'type'        => 'upload',
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
        'id'          => 'demo_upload_attachment_id',
        'label'       => __( 'Upload Attachment ID', 'theme-text-domain' ),
        'desc'        => sprintf( __( 'The Upload option type can also be saved as an attachment ID by adding %s to the class attribute.', 'theme-text-domain' ), '<code>ot-upload-attachment-id</code>' ),
        'std'         => '',
        'type'        => 'upload',
        'section'     => 'option_types',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => 'ot-upload-attachment-id',
        'condition'   => '',
        'operator'    => 'and'
      )
    )
  );
  
  /* allow settings to be filtered before saving */
  $custom_settings = apply_filters( ot_settings_id() . '_args', $custom_settings );
  
  /* settings are not the same update the DB */
  if ( $saved_settings !== $custom_settings ) {
    update_option( ot_settings_id(), $custom_settings ); 
  }
  
  /* Lets OptionTree know the UI Builder is being overridden */
  global $ot_has_custom_theme_options;
  $ot_has_custom_theme_options = true;
  
}