<?php
/*
 * Plugin Name: news translator
 * Description: this plugin for translate the news 
 * Plugin URI: #
 * Author: Alireza.k
 * Version: 1.0.0
 * Author URI: #
 */


// import url dir path and dir path 
define("INCLUDENEWSPATH",plugin_dir_path(__FILE__)."include/");
define("INCLUDENEWSURL",plugin_dir_url(__FILE__)."assets/");
define("INCLUDENEWSASSETS",plugin_dir_path(__FILE__)."assets/");
define("INCLUDENEWSTEMPLATE",plugin_dir_path(__FILE__)."template/");

// if not in public page dosent show and if in public page show . 
if(is_admin()){
    include INCLUDENEWSPATH . "admin/show_menu_page.php";
    include INCLUDENEWSPATH. "admin/register_admin_script_style.php";
    include INCLUDENEWSPATH . "admin/filter_word_in_post_metabox.php";
}else{
    include INCLUDENEWSPATH . "public/short_code_forms.php";
    include INCLUDENEWSPATH . "public/register_public_script_style.php";
    include INCLUDENEWSPATH . "public/filter_word.php";
}
