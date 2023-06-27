<!doctype html>
<html <?php language_attributes(); ?>>
<head>

	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width,initial-scale=1,viewport-fit=cover,user-scalable=no">
	<meta name="format-detection" content="telephone=no">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<div id="Wrapper">

		<!-- ヘッダー -->
		<header class="common-header" id="Header">
			<div class="common-header__inner">
				<!-- *** logo *** -->
				<?php if(is_front_page()): ?>
					<h1 class="common-header__logo">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
							<img class="object_fit" src="<?php echo get_stylesheet_directory_uri();?>/img/common/logo_ferie-beside.svg" alt="<?php bloginfo('name');?>">
						</a>
					</h1>
				<?php else: ?>
					<div class="common-header__logo">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
						<img class="object_fit" src="<?php echo get_stylesheet_directory_uri();?>/img/common/logo_ferie-beside.svg" alt="<?php bloginfo('name');?>">
						</a>
					</div>
				<?php endif; ?>

				<div class="common-header__right">
					<div class="common-header__toggle">
						<span></span>
						<span></span>
						<span></span>
					</div>

					<nav class="common-header__nav">
						<ul class="common-header__menu">
							<li><a class="font-en" href="<?php if(!is_front_page() ||  !is_home()) {echo esc_url( home_url( '/' ) ); }?>#villa1"><small>Ferie</small>Lodge<span> 1st</span></a></li>
							<li><a class="font-en" href="<?php if(!is_front_page() ||  !is_home()) {echo esc_url( home_url( '/' ) ); }?>#villa2"><small>Ferie</small>Lodge<span> 2nd</span></a></li>
							<li><a href="<?php echo home_url( '/contact/' ); ?>">お問い合わせ</a></li>
						</ul>
					</nav>
					<div class="common-header__lang">
						<a class="#">JP</a>
						<a class="#">EN</a>
					</div>
					<div class="common-header__sns">
						<a class="#">
								<img class="object_fit" src="<?php echo get_stylesheet_directory_uri();?>/img/common/icn_instagram.svg" alt="instagram">
						</a>
						<a class="#">
							<img class="object_fit" src="<?php echo get_stylesheet_directory_uri();?>/img/common/icn_facebook.svg" alt="facebook">
						</a>
					</div>
				</div>
			</div>
		</header>
		<!-- ////ヘッダー -->

    <!-- コンテンツ -->
    <main class="common-main">
      <?php get_template_part('template-parts/common/page-title'); ?>
      <?php
			//パンくず
			if(!is_front_page()){
				get_template_part('template-parts/common/breadcrumbs');
			}?>
