<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title><?php bloginfo('name'); wp_title('>'); ?></title>
		<?php wp_head(); ?>
	</head>
	<body id="<?php echo motivation_get_body_id(); ?>" <?php body_class(); ?>>

		<?php wp_body_open(); ?>

		<header class="container-fluid">
			<div class="row">

				<div class="open-line col-sm-12"></div>

				<?php if (is_front_page() || is_home()) : ?>
					<div id="slideshow" class="col-sm-12">
						<div class="easyfade autoplay container-fluid">
							<input name="easyfade_anchor" id="easyfade_slide_0" type="radio" class="ef_anchor slide">
							<input name="easyfade_anchor" id="easyfade_slide_1" type="radio" class="ef_anchor slide">
							<input name="easyfade_anchor" id="easyfade_slide_2" type="radio" class="ef_anchor slide">
							
							<input name="easyfade_anchor" id="easyfade_play" type="radio" class="ef_anchor" checked>
							
							<input name="easyfade_anchor" id="easyfade_pause_0" type="radio" class="ef_anchor pause">
							<input name="easyfade_anchor" id="easyfade_pause_1" type="radio" class="ef_anchor pause">
							<input name="easyfade_anchor" id="easyfade_pause_2" type="radio" class="ef_anchor pause">

							<ul>
								<li class="easyfade_skeleton"><img src="<?php echo get_template_directory_uri(); ?>/images/slide_001.jpg"></li>

								<li class="num0 img slide"><img src="<?php echo get_template_directory_uri(); ?>/images/slide_001.jpg"></li>
								<li class="num1 img slide"><img src="<?php echo get_template_directory_uri(); ?>/images/slide_002.jpg"></li>
								<li class="num2 img slide"><img src="<?php echo get_template_directory_uri(); ?>/images/slide_003.jpg"></li>
							</ul>
							
							<div class="easyfade_play_slides">
								<label class="ef_play_btn" for="easyfade_play"><span></span></label>
							</div>

							<div class="easyfade_bullets">
								<label class="num0" for="easyfade_slide_0"><span class="ef_point"></span></label>
								<label class="num1" for="easyfade_slide_1"><span class="ef_point"></span></label>
								<label class="num2" for="easyfade_slide_2"><span class="ef_point"></span></label>
							</div>
						</div>

						<div class="slider-side-frame col-sm-5"></div>

					</div>
				<?php endif; ?>
				<?php if (has_nav_menu('header-menu')) {
					wp_nav_menu(array(
						'container_id' => 'nav-menu',
						'theme_location' => 'header-menu',
						'menu_id' => 'navigation-menu'

					));
				} ?>
				<div class="content-after-menu"></div>
			</div>
		</header>