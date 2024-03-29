<!doctype html>
<html <?php language_attributes(); ?>>
<head>

	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width,initial-scale=1,viewport-fit=cover,user-scalable=no">
	<meta name="format-detection" content="telephone=no">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<script>
		(function(d) {
			var config = {
				kitId: 'hhr2qwu',
				scriptTimeout: 3000,
				async: true
			},
			h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
		})(document);
	</script>

	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-T9ZCF38C');</script>
	<!-- End Google Tag Manager -->

	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T9ZCF38C"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
	<div id="Wrapper">

		<!-- ヘッダー -->
		<header class="common-header" id="Header">
			<div class="common-header__inner">
				<!-- *** logo *** -->
				<?php if(is_front_page()): ?>
					<h1 class="common-header__logo">
						<a href="<?php if(is_page('en') || is_page('en/faq/')){ echo esc_url( home_url( 'en' ));} else { echo esc_url( home_url( '/' ));} ?>">
							<img class="object_fit" src="<?php echo get_stylesheet_directory_uri();?>/img/common/logo_ferie-beside.svg" alt="<?php bloginfo('name');?>">
						</a>
					</h1>
				<?php else: ?>
					<div class="common-header__logo">
						<a href="<?php if(is_page('en') || is_page('en/faq/')){ echo esc_url( home_url( 'en' ));} else { echo esc_url( home_url( '/' ));} ?>">
						<img class="object_fit" src="<?php echo get_stylesheet_directory_uri();?>/img/common/logo_ferie-beside.svg" alt="<?php bloginfo('name');?>">
						</a>
					</div>
				<?php endif; ?>
				<div class="common-header__toggle">
					<span></span>
					<span>MENU</span>
					<span></span>
				</div>

				<div class="common-header__right">
					<div class="common-header__right-inner">
						<nav class="common-header__nav">
							<ul class="common-header__menu">
								<?php 
									if(have_rows('acf_inn_group','option')):
									while(have_rows('acf_inn_group','option')): the_row();
									$lodge_name = get_sub_field('acf_inn_name');
									$lodge_link = get_sub_field('acf_inn_link');
								?>
								<li>
									<a class="font-en" href="<?php if(!is_front_page() ||  !is_home()) {echo esc_url( home_url( '/' ) ); }?>#<?php echo $lodge_link;?>"><?php echo $lodge_name;?></a>
								</li>
								<?php endwhile; endif;?>
								<li><a href="mailto:info@ferie.jp">お問い合わせ</a></li>
							</ul>
						</nav>
						<!-- <div class="common-header__lang">
							<a class="<?php //if(is_front_page() || is_page('faq') && !is_page(array('en','en/faq/'))){echo 'now';}?>" href="<?php //echo esc_url( home_url( '/' ));?>">JP</a>
							<a class="<?php //if(is_page(array('en','en/faq/'))){echo 'now';}?>" href="<?php //echo esc_url( home_url( '/en/' ));?>">EN</a>
						</div> -->
						<div class="common-header__sns">
							<a href="https://www.instagram.com/ferie_vacation/" target="_blank">
									<img class="object_fit" src="<?php echo get_stylesheet_directory_uri();?>/img/common/icn_instagram.svg" alt="instagram">
							</a>
							<a href="https://www.facebook.com/ferievacation" target="_blank">
								<img class="object_fit" src="<?php echo get_stylesheet_directory_uri();?>/img/common/icn_facebook.svg" alt="facebook">
							</a>
						</div>
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
