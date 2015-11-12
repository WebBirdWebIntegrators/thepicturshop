<?php
	//Template Name: WP Designer
?>

<?php get_header(); ?>

<div id="body">
	<div class="page">
		<div class="page-wpd-">
			<div class="wrapper">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<div class="post" id="post-<?php the_ID(); ?>">
						<?php the_content(); ?>
					</div>
				<?php endwhile; endif; ?>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>
