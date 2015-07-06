<div id="header">
	<?php if( is_front_page() ) { ?>
		<div class="header__b1">
			<div class="wrapper">
				<a href="#" id="scrollTo"><img src="/wp-content/uploads/2015/06/header-img-1.png"></a>
			</div>
			<script type="text/javascript">
				jQuery("#scrollTo").click(function() {
						jQuery('html, body').animate({
								scrollTop: jQuery("#scroll-to-point").offset().top
						}, 500);
				});
			</script>
		</div>
	<?php } else { ?>
	<?php } ?>
	<div class="header__b2" id="scroll-to-point">
		<div class="wrapper">
			<div class="mnav-icon">
					<i class="fa fa-bars" id="mnav-menu-open"></i>
			</div>
			<div class="fnav">
				<div class="wrapper">
					<ul>
						<li>
							<a href="#">
								<img src="<?php echo get_template_directory_uri(); ?>/img/fnav-icon-1.png">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?php echo get_template_directory_uri(); ?>/img/fnav-icon-2.png">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?php echo get_template_directory_uri(); ?>/img/fnav-icon-3.png">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?php echo get_template_directory_uri(); ?>/img/fnav-icon-4.png">
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="header__b3" id="mnav-menu-desktop">
		<div class="wrapper">
			<ul>
				<li>
					<?php

					$defaults = array(
						'theme_location'  => 'mnav',
						'menu'            => '',
						'container'       => 'div',
						'container_class' => '',
						'container_id'    => '',
						'menu_class'      => 'menu',
						'menu_id'         => '',
						'echo'            => true,
						'fallback_cb'     => 'wp_page_menu',
						'before'          => '',
						'after'           => '',
						'link_before'     => '',
						'link_after'      => '',
						'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
						'depth'           => 1,
						'exclude'		  => '99',
						'walker'          => ''
					);

					wp_nav_menu( $defaults );

					?>
					<?php
						$menu_location = 'webshop';
						$menu_locations = get_nav_menu_locations();
						$menu_object = (isset($menu_locations[$menu_location]) ? wp_get_nav_menu_object($menu_locations[$menu_location]) : null);
						$menu_name = (isset($menu_object->name) ? $menu_object->name : '');
						echo '<h3 style="margin-top: 1em">' . esc_html($menu_name) . '</h3>' ;
					?>
					<?php

					$defaults = array(
						'theme_location'  => 'webshop',
						'menu'            => '',
						'container'       => 'div',
						'container_class' => '',
						'container_id'    => '',
						'menu_class'      => 'menu',
						'menu_id'         => '',
						'echo'            => true,
						'fallback_cb'     => 'wp_page_menu',
						'before'          => '',
						'after'           => '',
						'link_before'     => '',
						'link_after'      => '',
						'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
						'depth'           => 1,
						'exclude'		  => '99',
						'walker'          => ''
					);

					wp_nav_menu( $defaults );

					?>
				</li>
				<li>
					<?php
						$menu_location = 'printshop';
						$menu_locations = get_nav_menu_locations();
						$menu_object = (isset($menu_locations[$menu_location]) ? wp_get_nav_menu_object($menu_locations[$menu_location]) : null);
						$menu_name = (isset($menu_object->name) ? $menu_object->name : '');
						echo '<h3>' . esc_html($menu_name) . '</h3>' ;
					?>
					<?php

					$defaults = array(
						'theme_location'  => 'printshop',
						'menu'            => '',
						'container'       => 'div',
						'container_class' => '',
						'container_id'    => '',
						'menu_class'      => 'menu',
						'menu_id'         => '',
						'echo'            => true,
						'fallback_cb'     => '',
						'before'          => '',
						'after'           => '',
						'link_before'     => '',
						'link_after'      => '',
						'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
						'depth'           => 1,
						'exclude'		  => '99',
						'walker'          => ''
					);

					wp_nav_menu( $defaults );

					?>
				</li>
				<li>
					<?php
						$menu_location = 'copyshop';
						$menu_locations = get_nav_menu_locations();
						$menu_object = (isset($menu_locations[$menu_location]) ? wp_get_nav_menu_object($menu_locations[$menu_location]) : null);
						$menu_name = (isset($menu_object->name) ? $menu_object->name : '');
						echo '<h3>' . esc_html($menu_name) . '</h3>' ;
					?>
					<?php

					$defaults = array(
						'theme_location'  => 'copyshop',
						'menu'            => '',
						'container'       => 'div',
						'container_class' => '',
						'container_id'    => '',
						'menu_class'      => 'menu',
						'menu_id'         => '',
						'echo'            => true,
						'fallback_cb'     => '',
						'before'          => '',
						'after'           => '',
						'link_before'     => '',
						'link_after'      => '',
						'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
						'depth'           => 1,
						'exclude'		  => '99',
						'walker'          => ''
					);

					wp_nav_menu( $defaults );

					?>
				</li>
				<li>
					<?php
						$menu_location = 'balloonshop';
						$menu_locations = get_nav_menu_locations();
						$menu_object = (isset($menu_locations[$menu_location]) ? wp_get_nav_menu_object($menu_locations[$menu_location]) : null);
						$menu_name = (isset($menu_object->name) ? $menu_object->name : '');
						echo '<h3>' . esc_html($menu_name) . '</h3>' ;
					?>
					<?php

					$defaults = array(
						'theme_location'  => 'balloonshop',
						'menu'            => '',
						'container'       => 'div',
						'container_class' => '',
						'container_id'    => '',
						'menu_class'      => 'menu',
						'menu_id'         => '',
						'echo'            => true,
						'fallback_cb'     => '',
						'before'          => '',
						'after'           => '',
						'link_before'     => '',
						'link_after'      => '',
						'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
						'depth'           => 1,
						'exclude'		  => '99',
						'walker'          => ''
					);

					wp_nav_menu( $defaults );

					?>
				</li>
			</ul>
		</div>
	</div>
	<script type="text/javascript">
	    jQuery(function(){
	      jQuery("#mnav-menu-open").click(function () {
		  	jQuery("#mnav-menu-desktop").slideToggle();

	      });
	    });
	</script>
</div>
