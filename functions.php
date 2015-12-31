<?php 

function wpml_shortcode_func(){
do_action('icl_language_selector');
}
add_shortcode( 'wpml_lang_selector', 'wpml_shortcode_func' );

/*
default anguage selector
 <div class="lang-sel sel-dropdown"><a href="#"><span>En</span></a><ul><li><a href="#">En</a></li><li><a href="#">De</a></li><li><a href="#">Fr</a></li></ul></div>

header top addresss bar default
<i class="dfd-icon-phone"></i><span class="dfd-top-info-delim-blank"></span>+1234567890<span class="dfd-top-info-delim"></span><i class="dfd-icon-email_2"></i><span class="dfd-top-info-delim-blank"></span>info@yourmail.com

 */
