<?php get_header(); ?>

<div id="body">
	<div class="page">
		<div class="page__b1">
			<div class="wrapper">
				<div class="col1">
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						<div class="post" id="post-<?php the_ID(); ?>">
							<?php yoast_breadcrumb('<p id="breadcrumbs">','</p>'); ?>
							<?php the_content('<p>Read the rest of this page &raquo;</p>'); ?>
						</div>
					<?php endwhile; endif; ?>
				</div>
				<div class="col2">
					<div class="sidebar">
						<?php get_sidebar(); ?>
					</div>
				</div>
			</div>	
		</div>
	</div>
</div>

<?php get_footer(); ?>