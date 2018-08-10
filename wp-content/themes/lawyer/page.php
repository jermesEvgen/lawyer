<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Lawyer
 */

get_header(); ?>


<?php 
 $servHeader__box = get_post_meta( $post->ID, 'servHeader__list', true );
 $servPrice__box = get_post_meta( $post->ID, 'servPrice__list', true );
 $servPriceDescr__box = get_post_meta( $post->ID, 'servPriceDescr__list', true );
 $servPriceNotice__box = get_post_meta( $post->ID, 'servPriceNotice__list', true );
 $servPriceBtn__box = get_post_meta( $post->ID, 'servPriceBtn__list', true );
?>


<!-- 
========================
  ** section Services Header **
======================== 
-->



<?php 
if ($servHeader__box && (get_post_meta($post->ID, 'servHeader__show', true ) !='off' )) : ?>

<?php 
foreach ($servHeader__box as $servHeader) :
	$servHeader__bg = $servHeader['servHeader__bg'] ? $servHeader['servHeader__bg'] : '';
	$servHeader__img = $servHeader['servHeader__upload'] ? $servHeader['servHeader__upload'] : '';
	$servHeader__tite = $servHeader['servicesHeader__title'] ? $servHeader['servicesHeader__title'] : '';
	$servHeader__subtite = $servHeader['servicesHeader__subtitle'] ? $servHeader['servicesHeader__subtitle'] : '';
?>



<style type="text/css">
	.offerBlock {
		background-image:  url('<?php echo $servHeader__bg['background-image'] ?>');
		background-size: cover;
    background-color: rgba(0,0,0, .8);
    background-position: top center;
    background-repeat: no-repeat;

	}
</style>


<div class="offerBlock">
  <div class="offerBlock__wrapper_inner">

  	<div class="offerBlock__wrapper">
  		<div class="offerBlock__title">

  			<img src="<?php echo $servHeader__img; ?> " alt="">
  			<h1><?php echo $servHeader__tite; ?> </h1>
  			<h5><?php echo $servHeader__subtite; ?></h5>

  		</div>
  	</div>


   </div>
</div>

<?php
endforeach;
?>
	
<?php 
endif 
?>


<!-- 
========================
  ** section Services aboutOffer **
======================== 
-->
<section class="aboutOffer" id="information">
	<div class="aboutOffer__wrapper" >

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		   <?php the_content(); ?> 

		<?php endwhile; ?>
		<?php endif; ?>


    </div>
</section>






<!-- 
========================
  ** section Services tablica **
======================== 
-->

<section class="tablica" style="display: none;">
    <div class="tablica__top_arrow"></div>

    <ul class="tablica__list">
        <li class="tablica__title">
            <span>№ </span>  
            <span>Виды услуг </span>  
            <span>Время, затраченное на окозании услуги  </span>  
            <span>Стоимость услуг на 2017/18 год </span>  
        </li>


        <?php 
        if ($servPrice__box && (get_post_meta($post->ID, 'servHeader__show', true ) !='off' )) : ?>

	        <?php 
	        foreach ($servPrice__box as $servPrice) :
	        	$servPrice__numb = $servPrice['servPrice__body_number'] ? $servPrice['servPrice__body_number'] : '';
	        	$servPrice__view = $servPrice['servPrice__body_view'] ? $servPrice['servPrice__body_view'] : '';
	        	$servPrice__time = $servPrice['servPrice__body_time'] ? $servPrice['servPrice__body_time'] : '';
	        	$servPrice__price = $servPrice['servPrice__body_price'] ? $servPrice['servPrice__body_price'] : '';

	        ?>

	        <li class="tablica__body">
	            <span><?php echo $servPrice__numb; ?></span>
	            <span><?php echo $servPrice__view; ?> </span>
	            <span><?php echo $servPrice__time; ?> </span>
	            <span><?php echo $servPrice__price; ?> </span>
	        </li>

	        <?php
	        endforeach;
	        ?>

        <?php 
        endif 
        ?>



        <?php 
         if ($servPriceDescr__box && (get_post_meta($post->ID, 'servPriceDescr__show', true ) !='off' )) : ?>

 	        <?php 
 	        foreach ($servPriceDescr__box as $servPriceDescr) :
 	        	$servPriceDescr__title_left = $servPriceDescr['servPriceDescr__title_left'] ? $servPriceDescr['servPriceDescr__title_left'] : '';
 	        	$servPriceDescr__body_left = $servPriceDescr['servPriceDescr__body_left'] ? $servPriceDescr['servPriceDescr__body_left'] : '';
 	        	$servPriceDescr__title_right = $servPriceDescr['servPriceDescr__title_right'] ? $servPriceDescr['servPriceDescr__title_right'] : '';
 	        	$servPriceDescr__body_right = $servPriceDescr['servPriceDescr__body_right'] ? $servPriceDescr['servPriceDescr__body_right'] : '';
 	        ?>

        <li class="tablica__ps">
            <span>
                <h4><?php echo $servPriceDescr__title_left; ?></h4>                
                <p><?php echo $servPriceDescr__body_left; ?></p>                
            </span>  
            <span>
                <h4><?php echo $servPriceDescr__title_right; ?></h4>
                <p><?php echo $servPriceDescr__body_right; ?></p>
            </span>  
        </li>

        <?php
        endforeach;
        ?>

        <?php 
        endif 
        ?>



        <?php 
        if ($servPriceNotice__box && (get_post_meta($post->ID, 'servPriceNotice__show', true ) !='off' )) : ?>

	        <?php 
	        foreach ($servPriceNotice__box as $servPriceNotice) :
	        	$servPriceNotice__txt = $servPriceNotice['servPriceNotice__txt'] ? $servPriceNotice['servPriceNotice__txt'] : '';
	        ?>

        <li class="tablica__notice">
            <span><?php echo $servPriceNotice__txt; ?> </span>
        </li>


        <?php
        endforeach;
        ?>
        <?php 
        endif 
        ?>


    </ul>
    <a href="<?php echo get_template_directory_uri() ?>/documents/price.pdf" target="_blank" class="priceAll priceAll_pos"> Смотреть полный прайс</a>

    <a href="<?php echo get_template_directory_uri() ?>/documents/price.pdf" target="_blank" >
      <div class="tablica__price_mobile">
          <img  src="http://legalcenter.pro/wp-content/uploads/2018/03/icon-pdf.png" alt="">
          <span class="tablica__price_mobile btn"> Смотреть прайс</span>
      </div>
    </a>





    	    <?php 
    	    if ($servPriceBtn__box && (get_post_meta($post->ID, 'servPriceNotice__show', true ) !='off' )) : ?>

    	        <?php 
    	        foreach ($servPriceBtn__box as $servPriceBtn) :
    	        	$servPriceBtn__txt = $servPriceBtn['servPriceBtn__txt'] ? $servPriceBtn['servPriceBtn__txt'] : '';
    	        	$servPriceBtn__link = $servPriceBtn['servPriceBtn__link'] ? $servPriceBtn['servPriceBtn__link'] : '';
    	        	$servPriceBtn__img = $servPriceBtn['servPriceBtn__img'] ? $servPriceBtn['servPriceBtn__img'] : '';
    	        ?>

          <a style="display: none;"  href="<?php echo $servPriceBtn__link; ?>" >
            <div class="tablica__price_mobile">
                <img src="<?php echo $servPriceBtn__img; ?>">
                <span class="tablica__price_mobile btn"> <?php echo $servPriceBtn__txt; ?></span>
            </div>
          </a>


            <?php
            endforeach;
            ?>
            <?php 
            endif 
            ?>

</section>



<!-- ====================================
  =====Section Price Them Options Settings  
=======================================-->

<section class="tablica">
    <div class="tablica__top_arrow"></div>

    <?php
         $pricelist__list_item = ot_get_option('pricelist__list_item');
      ?>


    <ul class="tablica__list">
<!--         <li class="tablica__title">
            <span>№ </span>  
            <span>Виды услуг </span>  
            <span>Время, затраченное на окозании услуги  </span>  
            <span>Стоимость услуг на 2017/18 год </span>  
        </li> -->
            
           <?php 
               foreach ($pricelist__list_item as $pricelist) :
                $pricelist_title = $pricelist['pricelist_title'] ? $pricelist['pricelist_title'] : ''; 
                $pricelist_time = $pricelist['pricelist_time'] ? $pricelist['pricelist_time'] : ''; 
                $pricelist_cost = $pricelist['pricelist_cost'] ? $pricelist['pricelist_cost'] : ''; 
            ?>


          <li class="tablica__body">
              <span><?php echo $pricelist_title; ?> </span>
              <span><?php echo $pricelist_time; ?> </span>
              <span><?php echo $pricelist_cost; ?> </span>
          </li>
            <?php 
            endforeach;
            ?>


        <li class="tablica__ps">
 
               <?php if (ot_get_option( 'tablica__ps__left'  )) {?>
                  <span><?php echo ot_get_option( 'tablica__ps__left' ); ?></span>  
               <?php } ?>            

               <?php if (ot_get_option( 'tablica__ps__right'  )) {?>
                  <span><?php echo ot_get_option( 'tablica__ps__right' ); ?></span>  
               <?php } ?>  
        </li>



        <li class="tablica__notice">
          <?php if (ot_get_option( 'tablica_notice'  )) {?>
             <span><?php echo ot_get_option( 'tablica_notice' ); ?></span>  
          <?php } ?>  
            
        </li>




    </ul>
    

    <a href="<?php echo get_template_directory_uri() ?>/documents/price.pdf" target="_blank" class="priceAll priceAll_pos"> Смотреть полный прайс</a>

    <a href="<?php echo get_template_directory_uri() ?>/documents/price.pdf" target="_blank" >
      <div class="tablica__price_mobile">
          <img  src="http://legalcenter.pro/wp-content/uploads/2018/03/icon-pdf.png" alt="">
          <span class="tablica__price_mobile btn"> Смотреть прайс</span>
      </div>
    </a>





</section>



 <!-- 
  ========================
    ** section contact-form **
  ======================== 
  -->


  <!-- Форма обратной связи  -->
  <section class="ctaMain" id="ctaForm">
  
    <h2>Свяжитесь с нами</h2>
    <h6>Мы ответим на все интересующие Вас вопросы и вы получите консультацию абсолютно бесплатно</h6>
    <div class="ctaMainWrapper">
        <div class="ctaMainForm">
            
            <div class="ctaFormTab">
                
                <div class="ctaFormTab__item">
                     <div class="ctaFormTab__img">

                        <!-- Телефон трубка -->
                        <svg class="iconSvg iconSvg__firstSvg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                           width="60px" height="60px" viewBox="0 0 60 60" enable-background="new 0 0 60 60" xml:space="preserve">
                        <g>
                          
                            <path fill-rule="evenodd" clip-rule="evenodd" fill="none" stroke="#000000" stroke-width="1.5225" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="
                            M47.617,38.784c-1.69-1.484-3.658-2.703-5.629-3.815c-2.215-1.247-4.535-1.512-6.684,0.314c-0.137,0.117-0.322,0.178-0.471,0.287
                            c-0.944,0.689-1.777,0.64-2.624-0.234c-2.43-2.508-4.934-4.946-7.336-7.478c-1.538-1.621-1.553-1.877-0.182-3.665
                            c1.591-2.071,1.713-4.267,0.453-6.39c-1.228-2.072-2.731-3.997-4.239-5.885c-0.867-1.083-2.167-1.499-3.576-1.362
                            c-2.573,0.25-5.621,2.822-6.404,5.296c-0.927,2.934-0.085,5.615,1.176,8.194c4.875,9.989,12.353,17.56,21.845,23.202
                            c2.163,1.286,4.503,2.176,7.813,2.211c2.464,0.164,4.622-1.532,6.386-3.936C50.006,42.988,49.966,40.847,47.617,38.784z"/>
                          
                            <path fill-rule="evenodd" clip-rule="evenodd" fill="none" stroke="#000000" stroke-width="1.5225" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="
                            M15.074,13.836c-0.645,0.746-1.143,1.565-1.398,2.374c-0.928,2.933-0.085,5.616,1.176,8.195"/>
                        </g>

                        </svg>

                     </div>

                     <span class="ctaFormTab__descr">Закажите бесплатную телефонную консультацию</span>
                </div>

                <div class="ctaFormTab__item">
                     <div class="ctaFormTab__img">
                        <!-- Календарь -->
                        <svg class="iconSvg"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                           width="60px" height="60px" viewBox="0 0 60 60" enable-background="new 0 0 60 60" xml:space="preserve">
                        <g>
                          
                            <path fill="none" stroke="#000000" stroke-width="1.5105" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="
                            M54.012,46.53c0,1.778-1.351,3.222-3.018,3.222H9.778c-1.664,0-3.016-1.443-3.016-3.222V15.879c0-1.777,1.352-3.218,3.016-3.218
                            h41.216c1.667,0,3.018,1.441,3.018,3.218V46.53z"/>
                          
                            <line fill="none" stroke="#000000" stroke-width="1.5105" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="38.457" y1="46.062" x2="37.441" y2="46.062"/>
                          
                            <path fill="none" stroke="#000000" stroke-width="1.5105" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="
                            M50.442,34.014v8.826c0,1.777-1.35,3.222-3.016,3.222h-5.193"/>
                          
                            <ellipse fill="none" stroke="#000000" stroke-width="1.5105" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" cx="40.638" cy="20.073" rx="4.175" ry="4.451"/>
                          
                            <line fill="none" stroke="#000000" stroke-width="1.5105" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="40.638" y1="20.542" x2="40.638" y2="8.456"/>
                          
                            <line fill="none" stroke="#000000" stroke-width="1.5105" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="20.136" y1="20.542" x2="20.136" y2="8.456"/>
                          
                            <ellipse fill="none" stroke="#000000" stroke-width="1.5105" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" cx="20.136" cy="20.073" rx="4.175" ry="4.451"/>
                          
                            <line fill="none" stroke="#000000" stroke-width="1.5105" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="6.762" y1="29.073" x2="54.012" y2="29.073"/>
                        </g>
                        </svg>
            
                     </div>

                     <span class="ctaFormTab__descr">Запишитесь на консультацию в удобное для вас время</span>
                </div>

                <div class="ctaFormTab__item">
                     <div class="ctaFormTab__img">
                        <!-- Задать вопросы спецам -->

                        <svg class="iconSvg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                           width="60px" height="60px" viewBox="0 0 60 60" enable-background="new 0 0 60 60" xml:space="preserve">
                        <g>
                          <g>
                            <g>
                              <g>
                                <g>
                                  
                                    <path fill="none" stroke="#000000" stroke-width="1.2249" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="
                                    M15.469,43.188c0,0-3.66,4.383-6.271,5.508c0,0,2.406-2.38,2.51-5.508v-0.102H7.007c-0.693,0-1.254-0.674-1.254-1.503V22.425
                                    c0-0.83,0.562-1.502,1.254-1.502h10.242c0,0-4.003,13.449,17.488,15.406v5.254c0,0.829-0.561,1.503-1.253,1.503H15.471"/>
                                </g>
                              </g>
                              <g>
                                
                                  <path fill="none" stroke="#000000" stroke-width="1.2249" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="
                                  M40.511,35.881c-4.531,0.837-9.225,0.543-13.636-0.981c-3.375-1.166-6.957-3.086-8.891-6.79
                                  c-1.099-2.107-1.468-4.705-0.735-7.071c0.694-2.234,2.209-3.962,3.821-5.282c3.501-2.866,7.748-4.101,11.931-4.483
                                  c4.469-0.408,9.037,0.179,13.234,2.113c3.114,1.437,6.518,3.81,7.672,7.799c0.567,1.951,0.482,4.066-0.278,5.924
                                  c-0.74,1.813-1.992,3.271-3.354,4.428c-1.759,1.499-3.767,2.543-5.829,3.287"/>
                                <g>
                                  
                                    <path fill="none" stroke="#000000" stroke-width="1.2249" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="
                                    M40.637,35.877c0,0,4.415,3.24,7.173,3.607"/>
                                  
                                    <path fill="none" stroke="#000000" stroke-width="1.2249" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="
                                    M47.81,39.484c0,0-2.801-1.643-3.51-4.658"/>
                                </g>
                              </g>
                              
                                <path fill="none" stroke="#000000" stroke-width="1.2249" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="
                                M24.652,30.201c-1.527-0.871-2.913-2.075-3.814-3.803c-0.817-1.565-1.09-3.493-0.546-5.247"/>
                              
                                <path fill="none" stroke="#000000" stroke-width="1.2249" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="
                                M8.53,32.562v-7.294c0-0.663,0.453-1.203,1.006-1.203h2.731"/>
                              <g>
                                
                                  <path fill="none" stroke="#000000" stroke-width="1.2249" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="
                                  M45.489,16.787c2.225,1.089,4.551,2.834,5.368,5.664"/>
                              </g>
                            </g>
                          </g>
                        </g>
                        </svg>


                     </div>

                     <span class="ctaFormTab__descr">Задайте вопрос нашим специалистам</span>
                </div>
            </div><!-- //ctaFormTab -->

          <div class="ctaFormTabs">
              <!-- Бесплатная телефонная консультация   -->
              <!-- Выводим  форму  -->
            <?php if ( ot_get_option( 'feedbackForm__first')){ ?>
                  <?php echo do_shortcode( ot_get_option( 'feedbackForm__first' )) ; ?>
            <?php } ?>

             

              <!-- Запишитесь на консультацию  -->              
              <!-- Выводим  форму  -->
            <?php if ( ot_get_option( 'feedbackForm__second')){ ?>
                  <?php echo do_shortcode( ot_get_option( 'feedbackForm__second' )) ; ?>
            <?php } ?>

             

              <!-- Юристы вам помогут -->
              <!-- Выводим  форму  -->
            <?php if ( ot_get_option( 'feedbackForm__third')){ ?>
                  <?php echo do_shortcode( ot_get_option( 'feedbackForm__third' )) ; ?>
            <?php } ?>


          </div>
        </div><!-- //ctaMainForm -->
    </div>
  </section>


<!-- 
========================
  ** section SERVICES **
======================== 
-->

<section class="services" id="services">

<!-- Вывод эелементов  -->

<?php wp_nav_menu( array(
    'theme_location' => 'services_menu',
    'menu'            => 'Блок услуги', 
    'container'       => 'div', 
    'container_class' => '', 
    'container_id'    => '',
    'menu_class'      => 'services__item', 
    'menu_id'         => '',
    'echo'            => true,
    'fallback_cb'     => 'wp_page_menu',
    'before'          => '',
    'after'           => '',
    'link_before'     => '',
    'link_after'      => '',
    'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
    'depth'           => 0,
    'walker'          => '',
    )); ?>

</section>


<section class="services" id="services" style="display: none;">

	<?php
       $service__list_item = ot_get_option('service__list_item');
    ?>
    
   <?php 
       foreach ($service__list_item as $items) :

       	$service__img = $items['service__img'] ? $items['service__img'] : ''; 
       	$service__img_hover = $items['service__img_hover'] ? $items['service__img_hover'] : '';
       	$service__title  = $items['service__title'] ? $items['service__title'] : '';
    ?>

       	<div class="servicesItems">
       		<div class="servicesItems__img ">
       			<img  class="imgServ " src=" <?php echo $service__img; ?> " alt="">
       			<img  class="imgServHover" src="<?php echo $service__img_hover; ?>" alt="">
       		</div>
       		<div class="servicesItems__title">
       			<h4><?php echo $service__title; ?> </h4>
       		</div>
       	</div>

	  <?php 
	  endforeach;
	  ?>


</section>


















	<div id="primary" class="content-area" style="display: none;"> 
		<main id="main" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
// get_sidebar();
get_footer(); ?>
