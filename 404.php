<?php get_header(); ?>

<div id="body">
	<div class="b2">
		<div class="cntr page">
			<div class="content with-aside">
				<h1><?php _e('Oeps: page not found', 'eagle'); ?></h1>
				<p><?php _e('Sorry, but the page you are looking for has not been found. Try checking the URL for errors, then hit the refresh button on your browser.', 'eagle'); ?></p>
			</div>
			<?php if( get_field('field_552fb0b78c6c1') === 'disabled' ) { ?>
			<?php } else { ?>
				<div class="sidebar">
					<?php dynamic_sidebar( 'sidebar1' ); ?>
				</div>
			<?php } ?>
		</div>
	</div>	
</div>

<?php get_footer(); ?>