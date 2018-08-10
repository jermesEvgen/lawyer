<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?> onload="ShowPositon(64.532286, 40.523189)">


<div id="page" class="site">
	<a style="display: none;" class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'lawyer' ); ?></a>


	<header>
		<div class="headerMain cd-auto-hide-header">
			<div class="headerMain__top">
				
				<a class="menu-link" href="#0">
				  <span class="hamburger "></span>
				  <!-- <span class="hamburger-title">меню</span> -->
				</a>     

				
					<div class="headerMain__logo">
						<a href="<?php echo home_url(); ?>">
							<img src="http://lawyer.io/wp-content/uploads/2018/05/logoHeader2.png" alt="">
							
						</a>
					</div>
	        





				<nav class="menu">
					<ul>
                      <li><img  src="<?php echo get_template_directory_uri() ?>/img/logo__mobile.png" alt=""></li>
						<li><a href="http://lawyer.io/o-kompanii">о компании </a></li>
						<li><a  href="http://lawyer.io/uslugi">услуги </a></li>
						<li><a  href="http://lawyer.io/kejsy">кейсы</a></li>
						<li><a  href="http://lawyer.io/information">информация </a></li>
						<li><a  href="http://lawyer.io/kontakty">контакты</a></li>
                      <li><a href="tel:+78182408800" class="header__info_phnmedia" >+7 (8182) 40-88-00</a></li>
					</ul>
				</nav> 

			
				<div class="headerMain__top_cta">
				  <!-- <a class="header_phone" href="tel:+78182408800"  > <i class="material-icons">perm_phone_msg</i>+7 (8182) 40-88-00</a> -->
				  <a class="header_phone" href="tel:+78182408800"  > <i class="material-icons">phone</i>+7 (8182) 40-88-00</a>
	               <a href="#ctaForm" class="headerMain__btn smoothscroll">Задать вопрос </a>
			    </div>
			</div>
		</div>

	</header> 



	
	<header style="display: none;">
		<div class="wrapper__header_top cd-auto-hide-header">
			<div class="header__top">
					<div class="headerLogo__scroll">
						<img src="<?php echo get_template_directory_uri() ?> /img/logo_company.png" alt="">
					</div>
				    <a class="menuLink__main" href="#menu">
					  <span class="hamburger__main"></span>
					  <span class="hamburger__main_title">меню</span>
					</a>	


					<nav class="menuMain__horiz" >
						<ul>
							<li><a href="company.html">О компании </a></li>
							<li><a href="services.html">Услуги </a></li>
							<li><a class="smoothscroll" href="#cases">Кейсы</a></li>
							<li><a class="smoothscroll" href="#information">Информация </a></li>
							<li><a class="smoothscroll" href="#contact">Контакты</a></li>
						</ul>
					</nav>



					<nav class="menuMain" >
						<ul>
	                        <li><img style="width: 110px;" src="<?php echo get_template_directory_uri() ?> /img/logo_page_company.png" alt=""></li>
							<li><a href="company.html">О компании </a></li>
							<li><a href="services.html">Услуги </a></li>
							<li><a class="smoothscroll" href="#cases">Кейсы </a></li>
							<li><a class="smoothscroll" href="#information">Информация </a></li>
							<li><a class="smoothscroll" href="#contact">Контакты</a></li>
	                      <li><a href="tel:+78182408800" class="header__info_phnmedia" >+7 (8182) 40-88-00</a></li>
						</ul>
					</nav>

					<div class="header__info " ><!-- js_header__info -->
						<div>
							<a href="tel:+78182408800" class="header__info_phn">+7 (8182) 40-88-00</a>
							<a href="#ctaForm" class="header__info_qst smoothscroll" >Задать вопрос</a>
						</div>	
					</div>
			</div>
		</div>
	</header>


	<header id="masthead" class="site-header" style="display: none;">
		<div class="site-branding">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$lawyer_description = get_bloginfo( 'description', 'display' );
			if ( $lawyer_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $lawyer_description; /* WPCS: xss ok. */ ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'lawyer' ); ?></button>
			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			) );
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->



    <!--  Тут начинается контент для страницы main-page -->
	<div id="content" class="site-content">
