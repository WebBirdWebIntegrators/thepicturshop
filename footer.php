<div id="footer">
	<div class="footer__b1">
		<div class="wrapper">
			<div class="col1">
				<div class="wrapper">
					<div class="footer-nav">
						<?php
						$menu_location = 'footer-nav';
						$menu_locations = get_nav_menu_locations();
						$menu_object = (isset($menu_locations[$menu_location]) ? wp_get_nav_menu_object($menu_locations[$menu_location]) : null);
						$menu_name = (isset($menu_object->name) ? $menu_object->name : '');
						echo '<h3>' . esc_html($menu_name) . '</h3>' ;
						?>
						<?php {
							$footer_nav = array(
								'theme_location'  => 'footer-nav',
								'menu'            => '',
								'container'       => '',
								'container_class' => '',
								'container_id'    => '',
								'menu_class'      => 'footer-nav',
								'menu_id'         => 'footer-nav',
								'echo'            => true,
								'fallback_cb'     => '',
								'before'          => '',
								'after'           => '',
								'link_before'     => '',
								'link_after'      => '',
								'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
								'depth'           => 0,
								'walker'          => ''
							);
							wp_nav_menu( $footer_nav ); }
						?>
					</div>
					<div class="contact">
						<h3>Contact</h3>
						<p>
							<?php echo get_field('ts_contact_info__company_name','option'); ?><br/>
							<span>Shopping center</span><br/>
							<span>(10/508)</span><br/>
							<?php echo get_field('ts_contact_info__street_number','option'); ?><br/>
							<?php echo get_field('ts_contact_info__postal_code__city','option'); ?><br/>
						</p>
						<p>
							<a href="<?php echo 'tel:' . str_replace( ' ', '', get_field('ts_contact_info__phone_number','option') ) ?>"><?php echo get_field('ts_contact_info__phone_number','option'); ?></a><br/>
						</p>
					</div>
				</div>
			</div>
			<div class="col2">
				<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d624.7139921318104!2d4.5004332!3d51.2217289!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c3f84c7b1a55d5%3A0x61e3e1c4a7c04af1!2sThe+Picture+Shop!5e0!3m2!1snl!2sbe!4v1435243615064" allowfullscreen></iframe>
			</div>
		</div>
	</div>
	<div class="footer__b2">
		<div class="wrapper">
			<div class="col1">
				<div class="social-media">
					<ul>
						<!-- Facebook button -->
						<?php if( get_field('ts_social_media__facebook','option') ) : ?>
							<li>
								<a href="<?php the_field('ts_social_media__facebook','option'); ?>" target="_blank">
									<i class="fa fa-facebook"></i>
								</a>
							</li>
						<?php endif; ?>

						<!-- Twitter button -->
						<?php if( get_field('ts_social_media__twitter','option') ) : ?>
							<li class="twitter">
								<a href="<?php the_field('ts_social_media__twitter','option'); ?>" target="_blank">
									<i class="fa fa-twitter"></i>
								</a>
							</li>
						<?php endif; ?>

						<!-- Linked button -->
						<?php if( get_field('ts_social_media__linkedin','option') ) : ?>
							<li>
								<a href="<?php the_field('ts_social_media__linkedin','option'); ?>" target="_blank">
									<i class="fa fa-linkedin"></i>
								</a>
							</li>
						<?php endif; ?>

						<!-- Google+ button -->
						<?php if( get_field('ts_social_media__google_plus','option') ): ?>
							<li class="twitter">
								<a href="https://plus.google.com/<?php the_field('ts_social_media__google_plus','option'); ?>" target="_blank" rel="publisher">
									<i class="fa fa-google-plus"></i>
								</a>
							</li>
						<?php endif; ?>

						<!-- Instagram button -->
						<?php if( get_field('ts_social_media__instagram','option') ): ?>
							<li>
								<a href="<?php the_field('ts_social_media__instagram','option'); ?>" target="_blank">
									<i class="fa fa-instagram"></i>
								</a>
							</li>
						<?php endif; ?>

						<!-- Pinterest button -->
						<?php if( get_field('ts_social_media__pinterest','option') ): ?>
							<li>
								<a href="<?php the_field('ts_social_media__pinterest','option'); ?>" target="_blank">
									<i class="fa fa-pinterest"></i>
								</a>
							</li>
						<?php endif; ?>

						<!-- YouTube button -->
						<?php if( get_field('ts_social_media__youtube','option')  ): ?>
							<li>
								<a href="<?php the_field('ts_social_media__youtube','option'); ?>" target="_blank">
									<i class="fa fa-youtube"></i>
								</a>
							</li>
						<?php endif; ?>

						<!-- Vimeo button -->
						<?php if( get_field('ts_social_media__vimeo','option') ): ?>
							<li>
								<a href="<?php the_field('ts_social_media__vimeo','option'); ?>" target="_blank">
									<i class="fa fa-vimeo-square"></i>
								</a>
							</li>
						<?php endif; ?>
					</ul>
				</div>
			</div>
			<div class="col2">
				&copy;<?php echo date("Y"); ?> - Alle rechten voorbehouden
				<?php {
					$footer_copyrights = array(
						'theme_location'  => 'footer-copyrights',
						'menu'            => '',
						'container'       => '',
						'container_class' => '',
						'container_id'    => '',
						'menu_class'      => 'footer-copyrights',
						'menu_id'         => 'footer-copyrights',
						'echo'            => true,
						'fallback_cb'     => '',
						'before'          => '',
						'after'           => '',
						'link_before'     => '',
						'link_after'      => '',
						'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
						'depth'           => 0,
						'walker'          => ''
					);
					wp_nav_menu( $footer_copyrights ); }
				?>
			</div>
		</div>
	</div>
</div>

<!-- Google Analytics -->
<?php get_template_part( 'assets/google-analytics' ) ?>

<?php wp_footer(); ?>

</body>

</html>
