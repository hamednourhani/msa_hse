<?php 

function wpml_shortcode_func(){
do_action('icl_language_selector');
}
add_shortcode( 'wpml_lang_selector', 'wpml_shortcode_func' );

