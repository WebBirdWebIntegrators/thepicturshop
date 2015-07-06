<?php get_header(); ?>

<div id="body">
	<div class="b1">
		<div class="b1__wrapper">
			<div class="archive">
				<div class="b1__wrapper__col1">
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						<div class="post" id="post-<?php the_ID(); ?>">
							<h2><?php the_title(); ?></h2>
							<div class="post__details">
								<ul>
									<li><i class="fa fa-pencil"></i>
										<?php
											$post_id = get_the_id();
											echo the_author_meta( 'display_name' ); 
										?></li>
									<li><i class="fa fa-clock-o"></i><?php the_time('l, F jS, Y') ?></li>
									<li><i class="fa fa-folder"></i><?php the_category(', ') ?></li>
								</ul>
							</div>
							<?php the_post_thumbnail('large', array('class' => 'featured-image')); ?>
							<?php the_excerpt(); ?>
							<a href="<?php the_permalink(); ?>">
								<div class="read-more">
									<div class="label"><?php _e('Read more', 'mybackpack'); ?></div>
									<div class="icon"><i class="fa fa-search"></i></div>
								</div>
							</a>
						</div>
					<?php endwhile; endif; ?>
					<?php the_posts_pagination( array(
					    'mid_size' => 3,
					    'prev_text' => __( 'Back', 'mybackpack' ),
					    'next_text' => __( 'Next', 'mybackpack' ),
					) ); ?>
				</div>
				<div class="b1__wrapper__col2">
					<div class="sidebar">
						<?php get_sidebar(); ?>
					</div>
				</div>
			</div>
		</div>	
	</div>
</div>

<?php get_footer(); ?>