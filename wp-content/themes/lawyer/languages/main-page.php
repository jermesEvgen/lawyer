<?php
/**
 * Template name: Главная страница 
 **/
get_header(); ?>


<!-- 
========================
  ** section HEADER **
======================== 
-->

<?php
$bg_headerWrapper = ot_get_option('header__bg');
// var_dump($bg_headerWrapper);
?>
<style type="text/css">
/*	.headerWrapper {
		background: <?php echo $bg_headerWrapper['background-color'] ?> url('<?php echo $bg_headerWrapper['background-image'] ?>') <?php echo $bg_headerWrapper['background-position'] ?> <?php echo $bg_headerWrapper['background-repeat'] ?>;
		background-size: <?php echo $bg_headerWrapper['background-size'] ?>;
	}*/
.headerWrapper {
		background-image:  url('<?php echo $bg_headerWrapper['background-image'] ?>');
		background-size: cover;
	    background-color: <?php echo $bg_headerWrapper['background-color'] ?>;
	    background-position: top center;
	    background-repeat: no-repeat;
	}
</style>


<section class="headerWrapper" >
	<aside>
		<!-- Белый логотип  -->
		<div class="logo__mobile" >
			<img src="<?php echo get_template_directory_uri() ?>/img/logo.png" alt="">
		</div>
		<?php if (ot_get_option( 'header__logo'  )) {?>
			 <div class="header__logo" style="display: none;">
			   <img src="<?php echo ot_get_option( 'header__logo' ); ?>"  alt="">
			</div>
		<?php } ?>

		<?php if (ot_get_option( 'header__title'  )) {?>
		    <h1><?php echo ot_get_option( 'header__title' ); ?></h1>
		<?php } ?>
		<?php if (ot_get_option( 'header__descr'  )) {?>
		    <h3 ><?php echo ot_get_option( 'header__descr' ); ?></h3>
		<?php } ?>

        <div class="btnHeader_posit">
		   <a href="#ctaForm" class="btnHeader  smoothscroll">
		   	   Получить бесплатную консультацию
		   </a>

        </div>
	</aside>
   <a href="#services" class="mouse smoothscroll">
		   <img src="<?php echo get_template_directory_uri() ?>/img/mouse.png" alt="">
   </a>
</section>

<!-- 
========================
  ** section SERVICES **
======================== 
-->


<section class="services" id="services" >

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

<section class="services" id="services" style="display: none;"  > 

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
	  ?></section>


<!-- 
========================
  ** section ABOUT **
======================== 
-->

<?php
$bg_quote = ot_get_option('quote__bg');
// var_dump($bg_headerWrapper);
?>
<style type="text/css">

	.about {
			background-image:  url('<?php echo $bg_quote['background-image'] ?>');
			background-size: cover;
		    background-color: <?php echo $bg_quote['background-color'] ?>;
		    background-position: top center;
		    background-repeat: no-repeat;
		}

</style>

<section class="about" >
	<div class="aboutWrap">
		<div class="aboutImg" >
			<?php if (ot_get_option( 'quote__photo' )) {?>
			   <img src="<?php echo ot_get_option( 'quote__photo' ); ?>" alt="">			    
			<?php } ?>			
		</div>
		<div class="aboutContent">
			<div class="aboutContent__logo">
				<?php if (ot_get_option( 'quote__logo' )) {?>
				   <img src="<?php echo ot_get_option( 'quote__logo' ); ?>" alt="">			    
				<?php } ?>	
			</div>
			<hr>
			<!-- <div class="aboutCont_txt"> -->
			
			<div class="aboutContent__quote">
				<?php if (ot_get_option( 'quote__descr_leftcolumn' )) {?>
				  <p> <?php echo ot_get_option( 'quote__descr_leftcolumn' ); ?></p>		    
				<?php } ?>	

				<?php if (ot_get_option( 'quote__descr_rightcolumn' )) {?>
				   <p><?php echo ot_get_option( 'quote__descr_rightcolumn' ); ?></p>    
				<?php } ?>				
			</div>


            <div class="singatule">
				<?php if (ot_get_option( 'quote__descr_auhtorcolumn' )) {?>
				   <?php echo ot_get_option( 'quote__descr_auhtorcolumn' ); ?>		    
				<?php } ?>	
			</div>


		<!-- </div> -->

	    <div class="aboutContent__bt_pos">
			<?php if (ot_get_option( 'quote__btn_link' )) {?>
			     <a href="<?php echo ot_get_option( 'quote__btn_link' ); ?>" class="aboutContent__bt "><?php echo ot_get_option( 'quote__btn' ); ?></a>
			<?php } ?>	
		</div>
	</div>
	</div>
</section>	 

<!-- 
========================
  ** section PROFIT **
======================== 
-->

<?php
// $bg_profit = ot_get_option('profit__bg');
// var_dump($bg_headerWrapper);
?>
<style type="text/css">
/*	.profit {
		background: <?php echo $bg_profit['background-color'] ?> url('<?php echo $bg_profit['background-image'] ?>') <?php echo $bg_profit['background-position'] ?> <?php echo $bg_profit['background-repeat'] ?>;
		background-size: <?php echo $bg_profit['background-size'] ?>;
	}*/

	.profit {
			background-image:  url('<?php echo $bg_profit['background-image'] ?>');
			background-size: cover;
		    background-color: <?php echo $bg_profit['background-color'] ?>;
		    background-position:  center bottom;
		    background-repeat: no-repeat;
		}
</style>

<section class="profit" style="display: none;">
	<?php if (ot_get_option( 'profit__title' )) {?>
	     <h2><?php echo ot_get_option( 'profit__title' ); ?></h2>
	<?php } ?>	
	<div class="profitWrapp">
		
		<div class="profitWrapp__firstLine">
			<div class="profitItem profitItem__bg_1">
				<div class="profitItem__img">
					<?php if (ot_get_option( 'profit__img_ps1' )) {?>
					     <img  class="profitItem__img_ps1" src="<?php echo ot_get_option( 'profit__img_ps1' ); ?>">
					<?php } ?>						
				</div>
				<div class="profitItem__title">
					<?php if (ot_get_option( 'profit__title_1' )) {?>
					     <?php echo ot_get_option( 'profit__title_1' ); ?>
					<?php } ?>	
				</div>
			</div>

			<div class="profitItem profitItem__bg_2">
				<div class="profitItem__img">
					<?php if (ot_get_option( 'profit__img_ps2' )) {?>
					     <img  class="profitItem__img_ps2" src="<?php echo ot_get_option( 'profit__img_ps2' ); ?>">
					<?php } ?>						
				</div>
				<div class="profitItem__title">
					<?php if (ot_get_option( 'profit__title_2' )) {?>
					     <?php echo ot_get_option( 'profit__title_2' ); ?>
					<?php } ?>	
				</div>
			</div>


			<div class="profitItem profitItem__bg_3">
				<div class="profitItem__img">
					<?php if (ot_get_option( 'profit__img_ps3' )) {?>
					     <img  class="profitItem__img_ps3" src="<?php echo ot_get_option( 'profit__img_ps3' ); ?>">
					<?php } ?>						
				</div>
				<div class="profitItem__title">
					<?php if (ot_get_option( 'profit__title_3' )) {?>
					     <?php echo ot_get_option( 'profit__title_3' ); ?>
					<?php } ?>	
				</div>
			</div>

		</div>

		<div class="profitWrapp__secdLine">

			<div class="profitItem profitItem__bg_4">
				<div class="profitItem__img">
					<?php if (ot_get_option( 'profit__img_ps4' )) {?>
					     <img  class="profitItem__img_ps4" src="<?php echo ot_get_option( 'profit__img_ps4' ); ?>">
					<?php } ?>						
				</div>
				<div class="profitItem__title">
					<?php if (ot_get_option( 'profit__title_4' )) {?>
					     <?php echo ot_get_option( 'profit__title_4' ); ?>
					<?php } ?>	
				</div>
			</div>

			<div class="profitItem profitItem__bg_5">
				<div class="profitItem__img">
					<?php if (ot_get_option( 'profit__img_ps5' )) {?>
					     <img  class="profitItem__img_ps5" src="<?php echo ot_get_option( 'profit__img_ps5' ); ?>">
					<?php } ?>						
				</div>
				<div class="profitItem__title">
					<?php if (ot_get_option( 'profit__title_5' )) {?>
					     <?php echo ot_get_option( 'profit__title_5' ); ?>
					<?php } ?>	
				</div>
			</div>

			<div class="profitItem profitItem__bg_6">
				<div class="profitItem__img">
					<?php if (ot_get_option( 'profit__img_ps6' )) {?>
					     <img  class="profitItem__img_ps6" src="<?php echo ot_get_option( 'profit__img_ps6' ); ?>">
					<?php } ?>						
				</div>
				<div class="profitItem__title">
					<?php if (ot_get_option( 'profit__title_6' )) {?>
					     <?php echo ot_get_option( 'profit__title_6' ); ?>
					<?php } ?>	
				</div>
			</div>

		</div>
		
	</div>
</section>




<section class="profit">
	<h2>Преимущества</h2>
	<div class="profitWrapp">
		
		<div class="profitWrapp__firstLine">
			<div class="profitItem profitItem__bg_1">
				<div class="profitItem__img">
					<!-- <img  class="profitItem__img_ps1" src="img/profit-img1.png" alt=""> -->
					<div class="bg-profit_img1"></div>
					<!-- <img  class="profitItem__img_ps1" src="<?php echo get_template_directory_uri() ?>/img/profit-img1.png" alt=""> -->
				</div>
				<div class="profitItem__title">
					<h5> <span>3000</span><br> судебных заседаний</h5>
				</div>
			</div>

			<div class="profitItem profitItem__bg_2">
				<div class="profitItem__img">
					<!-- <img  class="profitItem__img_ps2" src="img/profit-img2.png" alt=""> -->
					<div class="bg-profit_img2"></div>
				    <!-- <img  class="profitItem__img_ps2" src="<?php echo get_template_directory_uri() ?>/img/profit-img2.png" alt=""> -->
				</div>
				<div class="profitItem__title">
					<h5><span>95%</span> <br> выигранных дел</h5>
				</div>
			</div>

			<div class="profitItem profitItem__bg_3">
				<div class="profitItem__img">
					<!-- <img class="profitItem__img_ps3" src="img/profit-img3.png" alt=""> -->
					<div class="bg-profit_img3"></div>
					<!-- <img  class="profitItem__img_ps3" src="<?php echo get_template_directory_uri() ?>/img/profit-img3.png" alt=""> -->
				</div>
				<div class="profitItem__title">
					<h5><span>500</span><br> млн рублей взыскано в пользу клиентов</h5>
				</div>
			</div>
		</div>

		<div class="profitWrapp__secdLine">
			<div class="profitItem profitItem__bg_4">
				<div class="profitItem__img">
					<!-- <img  class="profitItem__img_ps4" src="img/profit-img4.png" alt=""> -->
				    <div class="bg-profit_img4"></div>
					<!-- <img  class="profitItem__img_ps4" src="<?php echo get_template_directory_uri() ?>/img/profit-img4.png" alt=""> -->
				</div>
				<div class="profitItem__title">
					<h5>С нами быстро, выгодно и надёжно</h5>
				</div>
			</div>

			<div class="profitItem profitItem__bg_5">
				<div class="profitItem__img">
					<!-- <img  class="profitItem__img_ps5" src="img/profit-img5.png" alt=""> -->
					<div class="bg-profit_img5"></div>
					<!-- <img  class="profitItem__img_ps5" src="<?php echo get_template_directory_uri() ?>/img/profit-img5.png" alt=""> -->
				</div>
				<div class="profitItem__title">
					<h5>Работаем с <br>2007 года</h5>
				</div>
			</div>

			<div class="profitItem profitItem__bg_6">
				<div class="profitItem__img">

					<!-- <img class="profitItem__img_ps6" src="img/profit-img6.png" alt=""> -->
					<div class="bg-profit_img6"></div>
					<!-- <img  class="profitItem__img_ps6" src="<?php echo get_template_directory_uri() ?>/img/profit-img6.png" alt=""> -->
				</div>
				<div class="profitItem__title">
					<h5>Работаем в  Москве, Архангельске, Санкт-Петербурге и Сочи </h5>
				</div>
			</div>
		</div>
		
	</div>
</section>

<!-- 
========================
  ** section aboutWwork **
======================== 
-->

<section class="aboutWwork"  style="display: none;">
	<?php if (ot_get_option( 'aboutWwork__title' )) {?>
	     <h2><?php echo ot_get_option( 'aboutWwork__title' ); ?></h2>
	<?php } ?>	



	<div class="aboutWworkItem">
		<div class="aboutWworkItem__arrow"></div>
		<?php
	       $aboutWwork__list_item = ot_get_option('aboutWwork__list_item');
	    ?>
	    
	   <?php 
	       foreach ($aboutWwork__list_item as $items__abtwork) :

	       	$aboutWwork__img_block = $items__abtwork['aboutWwork__img_block'] ? $items__abtwork['aboutWwork__img_block'] : ''; 
	       	$aboutWwork__img_number = $items__abtwork['aboutWwork__img_number'] ? $items__abtwork['aboutWwork__img_number'] : '';
	       	$aboutWwork__title  = $items__abtwork['aboutWwork__title'] ? $items__abtwork['aboutWwork__title'] : '';
	    ?>

	    <div class="aboutWworkItem__block">
	    	<div class="aboutWworkItem__img">
	    		<img src="<?php echo $aboutWwork__img_block; ?> " alt="">
	    	</div>

	    	<div class="aboutWworkItem__dot">
	    		<div class="delimetr"></div>
	    	</div>
	    	<div class="aboutWworkItem__number">
	    		<img src="<?php echo $aboutWwork__img_number; ?>" alt="">
	    	</div>
	    	<div class="aboutWworkItem__title">
	    		<h5><?php echo $aboutWwork__title; ?></h5>
	    	</div>
	    </div>


		  <?php 
		  endforeach;
		  ?>

    </div>
</section>


<section class="aboutWwork">
	<h2>Как мы работаем </h2>
    <div class="aboutWworkItem">
    	<div class="aboutWworkItem__arrow"></div>
    	<div class="aboutWworkItem__block">
    		<div class="aboutWworkItem__img">
    			<!-- <img src="img/abWork1.png" alt=""> -->
    			<div class="bg-abWork1"></div>
    			<!-- <img src="<?php echo get_template_directory_uri() ?>/img/abWork1.png" alt=""> -->
    		</div>
    		
    
    		<div class="aboutWworkItem__dot">
    			<div class="delimetr"></div>
    		</div>
    		<div class="aboutWworkItem__number">
    			<!-- <img src="img/abWork_numb_1.png" alt=""> -->
    			<div class="bg-abWork_numb_1"></div>
    			<!-- <img src="<?php echo get_template_directory_uri() ?>/img/abWork_numb_1.png" alt=""> -->
    		</div>
    		<div class="aboutWworkItem__title">
    			<h5>Выслушиваем вас или приглашаем на встречу</h5>
    		</div>
    	</div>

    	<div class="aboutWworkItem__block">
    		<div class="aboutWworkItem__img">
    			<!-- <img src="img/abWork2.png" alt=""> -->
    			<div class="bg-abWork2"></div>
    			<!-- <img src="<?php echo get_template_directory_uri() ?>/img/abWork2.png" alt=""> -->
    		</div>
    		<div class="aboutWworkItem__dot">
    			<div class="delimetr"></div>
    		</div>
    		<div class="aboutWworkItem__number">
    			<!-- <img src="img/abWork_numb_2.png" alt=""> -->
    			<div class="bg-abWork_numb_2"></div>
    			<!-- <img src="<?php echo get_template_directory_uri() ?>/img/abWork_numb_2.png" alt=""> -->
    		</div>
    		<div class="aboutWworkItem__title">
    			<h5>Проводим правовой анализ вашего дела</h5>
    		</div>
    	</div>

    	<div class="aboutWworkItem__block">
    		<div class="aboutWworkItem__img">
    			<!-- <img src="img/abWork3.png" alt=""> -->
    			<div class="bg-abWork3"></div>
    			<!-- <img src="<?php echo get_template_directory_uri() ?>/img/abWork3.png" alt=""> -->
    		</div>
    		<div class="aboutWworkItem__dot">
    			<div class="delimetr"></div>
    		</div>
    		<div class="aboutWworkItem__number">
    			<!-- <img src="img/abWork_numb_3.png" alt=""> -->
    			<div class="bg-abWork_numb_3"></div>
    			<!-- <img src="<?php echo get_template_directory_uri() ?>/img/abWork_numb_3.png" alt=""> -->
    		</div>
    		<div class="aboutWworkItem__title">
    			<h5>Составляем необходимые документы</h5>
    		</div>
    	</div>

    	<div class="aboutWworkItem__block">
    		<div class="aboutWworkItem__img">
    			<!-- <img src="img/abWork4.png" alt=""> -->
    			<div class="bg-abWork4"></div>
    			<!-- <img src="<?php echo get_template_directory_uri() ?>/img/abWork4.png" alt=""> -->
    		</div>
    		<div class="aboutWworkItem__dot"></div>
    		<div class="aboutWworkItem__number">
    			<!-- <img src="img/abWork_numb_4.png" alt=""> -->
    			<div class="bg-abWork_numb_4"></div>
    			<!-- <img src="<?php echo get_template_directory_uri() ?>/img/abWork_numb_4.png" alt=""> -->
    		</div>
    		<div class="aboutWworkItem__title">
    			<h5>Защищаем вас в суде</h5>
    		</div>
    	</div>
    </div>	
</section>



<!-- 
========================
  ** section cases **
======================== 
-->




  <!-- =================
  НОВЫЙ БЛОК С КЕЙСАМИ 
  реализован на базе owl-carusel
  ==================== -->

  <section class="cases">
  	<?php if (ot_get_option( 'cases__title' )) {?>
  	     <h2><?php echo ot_get_option( 'cases__title' ); ?></h2>
  	<?php } ?>	


  	<div class="slider-container" id="cases" >
  		<div class="owl-carousel owl-theme">
  			
  				<?php
  			       $cases__list_item = ot_get_option('cases__list_item');
  			    ?>
  			    
  			   <?php 
  			       foreach ($cases__list_item as $items__cases) :

  			       	$cases__imgServ = $items__cases['cases__imgServ'] ? $items__cases['cases__imgServ'] : ''; 
  			       	$cases__imgServ_hover = $items__cases['cases__imgServ_hover'] ? $items__cases['cases__imgServ_hover'] : '';
  			       	$cases__title_item  = $items__cases['cases__title_item'] ? $items__cases['cases__title_item'] : '';
  			       	$cases__descr_item  = $items__cases['cases__descr_item'] ? $items__cases['cases__descr_item'] : '';
  			       	$cases__result_item  = $items__cases['cases__result_item'] ? $items__cases['cases__result_item'] : '';
  			       	$cases__bt_item  = $items__cases['cases__bt_item'] ? $items__cases['cases__bt_item'] : '';
  			       	$cases__btlink_item  = $items__cases['cases__btlink_item'] ? $items__cases['cases__btlink_item'] : '';
  			    ?>


  			    <div class="casesItem"> <!-- 1 карточка  -->

  			    		<div class="casesItem__img" >
  			    			<img  class="imgServ " src="<?php echo $cases__imgServ; ?>" alt="">
  			    			<img  class="imgServHover " src="<?php echo $cases__imgServ_hover; ?>" alt="">
  			    		</div>
  			    		<div class="casesItem__title"  >
  			    			<h4><?php echo $cases__title_item; ?></h4>
  			    		</div>
  			    		<div class="casesItem__content"  >
  			    			<p><?php echo $cases__descr_item; ?></p>
  			    			<p><?php echo $cases__result_item; ?></p>
  			    		</div>
  			    		<a href="<?php echo $cases__btlink_item; ?>" class="casesItem__btn"><?php echo $cases__bt_item; ?></a>

  			    </div>



  			    <?php 
  			    endforeach;
  			    ?>



          </div>
      </div>
  </section>


  <!-- 
  ========================
    ** section contact-form **
  ======================== 
  -->


  <!-- Форма обратной связи  -->
  <section class="ctaMain" id="ctaForm"  >
  
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



<div class="loader">
	<div class="loader_inner"></div>
</div>

<!--[if lt IE 9]>
<script src="libs/html5shiv/es5-shim.min.js"></script>
<script src="libs/html5shiv/html5shiv.min.js"></script>
<script src="libs/html5shiv/html5shiv-printshiv.min.js"></script>
<script src="libs/respond/respond.min.js"></script>
<![endif]-->





















<!--  Дефолтный код -->

	<div id="primary" class="content-area" >
		<main id="main" class="site-main">

		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) :
				?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
				<?php
			endif;

			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_type() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
