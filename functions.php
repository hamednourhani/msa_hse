<?php 

function wpml_shortcode_func(){
do_action('icl_language_selector');
}
add_shortcode( 'wpml_lang_selector', 'wpml_shortcode_func' );

function msa_scripts_and_scripts()
{
        wp_register_script( 'msa-main-js', get_stylesheet_directory_uri() . '/js/main.js', array('jquery',"scrolltofixed"), '', true );
        wp_register_script( 'scrolltofixed', get_stylesheet_directory_uri() . '/js/jquery-scrolltofixed-min.js', array('jquery'), '', true );
        wp_enqueue_script('msa-main-js');
        wp_enqueue_script('scrolltofixed');
}
add_action( 'wp_enqueue_scripts', 'msa_scripts_and_scripts', 999 );

/*
default anguage selector
 <div class="lang-sel sel-dropdown"><a href="#"><span>En</span></a><ul><li><a href="#">En</a></li><li><a href="#">De</a></li><li><a href="#">Fr</a></li></ul></div>

header top addresss bar default
<i class="dfd-icon-phone"></i><span class="dfd-top-info-delim-blank"></span>+1234567890<span class="dfd-top-info-delim"></span><i class="dfd-icon-email_2"></i><span class="dfd-top-info-delim-blank"></span>info@yourmail.com

 */

if ( ICL_LANGUAGE_CODE=='en'){ 
  
        remove_filter('the_title', 'ztjalali_persian_num');
        remove_filter('the_content', 'ztjalali_persian_num');
        remove_filter('the_excerpt', 'ztjalali_persian_num');
        remove_filter('comment_text', 'ztjalali_persian_num');
    // change arabic characters
        remove_filter('the_content', 'ztjalali_ch_arabic_to_persian');
        remove_filter('the_title', 'ztjalali_ch_arabic_to_persian');
        remove_filter('the_excerpt', 'ztjalali_ch_arabic_to_persian');
        remove_filter('comment_text', 'ztjalali_ch_arabic_to_persian');
    


}
