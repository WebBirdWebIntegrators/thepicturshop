<?php

add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );

remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);

remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar' );

add_action('woocommerce_before_main_content', 'wb_woocommerce_wrapper_start', 10);
add_action('woocommerce_after_main_content', 'wb_woocommerce_wrapper_end', 10);


function wb_woocommerce_wrapper_start() {
	echo '<div id="body">';
		echo '<div class="woocommerce-content">';
			echo '<div class="wrapper">';
}

function wb_woocommerce_wrapper_end() {
			echo '</div>';
		echo '</div>';
	echo '</div>';
}
