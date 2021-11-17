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


function Create_table_site_list()
{
    global $wpdb;
    $Customer_table_name = $wpdb->prefix . "site_list";
    $collate = $wpdb->get_charset_collate();
    $site_list_create_teble="
    CREATE TABLE `{$Customer_table_name}` (
        `id` int(21) NOT NULL,
        `name_site` varchar(120) COLLATE utf8_persian_ci DEFAULT NULL,
        `url` varchar(300) COLLATE utf8_persian_ci DEFAULT NULL
      ) {$collate};
    ";
    require_once(ABSPATH."wp-admin/includes/upgrade.php");
    dbDelta($site_list_create_teble);
}

function nnews_Active_plugin()
{
    Create_table_site_list();
}

register_activation_hook(__FILE__,"nnews_Active_plugin");


// if not in public page dosent show and if in public page show . 
if(is_admin()){
    include INCLUDENEWSPATH . "admin/show_menu_page.php";
    include INCLUDENEWSPATH . "admin/register_admin_script_style.php";
    include INCLUDENEWSPATH . "admin/filter_word_in_post_metabox.php";
    include INCLUDENEWSPATH . "json.php";
}else{
    include INCLUDENEWSPATH . "public/short_code_forms.php";
    include INCLUDENEWSPATH . "public/register_public_script_style.php";
    include INCLUDENEWSPATH . "public/filter_word.php";
}
