<!DOCTYPE html>
<html lang="<?php language_attributes() ?>" class="no-js">
<head>
	<meta charset="<?php bloginfo('charset') ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

	<div class="container">
		<div class="col-md-12">
			<div class="row">
				<div class="logo">
					<a href="">
						<img src="<?php echo get_theme_mod('cdm_logo'); ?>" style="height: 150px;" />
					</a>
				</div>
			</div>
		</div>

		<div class="col-md-12">
			<div class="row">
				<?php wp_nav_menu( array( 'theme_location' => 'main_menu' ) ); ?>

			</div>
		</div>
	</div>


<?php wp_footer(); ?>
</body>
</html>
