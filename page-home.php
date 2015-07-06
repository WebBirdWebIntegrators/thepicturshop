<?php
	//Template Name: Home
?>

<?php get_header(); ?>

<div id="body">
	<div class="home">
		<div class="home__b1">
			<div class="wrapper">

			</div>
		</div>
	</div>
	<div class="page">
		<div class="page__b1">
			<div class="wrapper">
				<div class="col1">
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						<div class="post" id="post-<?php the_ID(); ?>">
							<?php
							echo empty( $post->post_parent ) ? '<h2>' . get_the_title( $post->ID ) . '</h2>' : '<h2>' . get_the_title( $post->post_parent ) . '<h2>';
							?>
							Home - <?php the_title('<h1>','</h1>'); ?>
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
