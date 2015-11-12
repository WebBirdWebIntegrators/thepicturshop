<?php get_header(); ?>

<div id="body">
	<div class="page">
		<div class="page__b1">
			<div class="wrapper">
				<div class="col1">
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						<?php if ( function_exists('yoast_breadcrumb') ) {
							yoast_breadcrumb('<p id="breadcrumbs">','</p>');
						} ?>
						<div class="post" id="post-<?php the_ID(); ?>">
							
							<?php the_title('<h1>','</h1>'); ?>
							<?php the_content('<p>Read the rest of this page &raquo;</p>'); ?>
						</div>
					<?php endwhile; endif; ?>
				</div>
				<div class="col2">
					<div class="featured-image"
						<?php if( has_post_thumbnail() ) {
							$image_id = get_post_thumbnail_id($post->ID);
							$image_size = wp_get_attachment_image_src( $image_id, $size='large' );
							echo 'style="background-image: url(' . $image_size[0] . ');"';
						}
						?>>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>
