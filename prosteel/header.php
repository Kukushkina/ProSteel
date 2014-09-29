<?php
ERROR_REPORTING(E_ALL);
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title><?php if(is_category()){printf(single_cat_title()); echo" | ";  bloginfo('name'); } else { ?><?php if (have_posts()) {  the_title(); }?> | <?php bloginfo('name'); }?></title>			
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link rel="icon" href="<?php bloginfo('template_url')?>/img/favicon.ico" type="image/x-icon" />	
		<script type='text/javascript' src="<?php bloginfo('template_url')?>/js/jquery1.9.1.min.js"></script>
		<script type='text/javascript' src="<?php bloginfo('template_url')?>/js/tinynav.min.js"></script>
			<script type='text/javascript' src='<?php bloginfo('template_url')?>/js/jquery.min.js'></script>
			<script type='text/javascript' src='<?php bloginfo('template_url')?>/js/jquery.mobile.customized.min.js'></script>
			<script type='text/javascript' src='<?php bloginfo('template_url')?>/js/jquery.easing.1.3.js'></script> 
			<script type='text/javascript' src='<?php bloginfo('template_url')?>/js/camera.min.js'></script> 
		<script type='text/javascript' src="<?php bloginfo('template_url')?>/js/script.js"></script>
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url')?>/css/bootstrap.css"  />
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url')?>/css/camera.css"  />
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url')?>/css/bootstrap-responsive.css"  />		
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url')?>/css/style.css" >
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url')?>/css/responsive.css"  />
		<?php wp_head(); ?>
		<!--[if lte IE 6]>
			<meta http-equiv="refresh" content="0; url=<?php bloginfo('template_url')?>/ie/ie6.html"/>
		<![endif]-->
		<!--[if IE 7]>
			<meta http-equiv="refresh" content="0; url=<?php bloginfo('template_url')?>/ie/ie7.html"/>
		<![endif]-->	
		<!--[if IE 8]>
			<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url')?>/style-ie8.css"  />
		<![endif]-->
		<!--[if lt IE 9]>
			<script>
				var e = 				("article,aside,figcaption,figure,footer,header,hgroup,nav,section,time").split(',');
				for (var i = 0; i < e.length; i++) {
					document.createElement(e[i]);
				}
			</script>
		<![endif]-->		
		<script>
			$(function () {
				$("#nav").tinyNav();
			});
		</script>
		<script>
			jQuery(function(){		
				jQuery('#camera_wrap_4').camera({
					height: 'auto',
					loader: 'bar',
					pagination: false,
					thumbnails: true,
					hover: false,
					opacityOnGrid: false,
					imagePath: '<?php bloginfo('template_url')?>/img/slider'
				});
			});
		</script>
		<?php  wp_admin_bar_render(); ?>
	</head>
	<body>	
		<div class="main-holder">
			<header class="header">
				<div class="container">
					<div class="row">
						<div class="span12">
							<div class="row">
								<div class="span4">
									<div class="logo pull-left">
										<a class="logo_h logo_h__img" href="/">
											<img src="<?php bloginfo('template_url')?>/img/logo.png" alt="ProSteel" title="Художественная ковка в Минске под заказ">
										</a>
									</div>
								</div>
								<div class="span8">
									<nav class="nav nav_primary">										
										<?php wp_nav_menu('menu=nav'); ?>
									</nav>									
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>
			<div class="clear"></div>