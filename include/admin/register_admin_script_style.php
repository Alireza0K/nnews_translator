<?php

function register_script()
{
    // java script files
    wp_register_script("empty_word_alert", INCLUDENEWSURL."js/alert_empty_addword.js");
    wp_register_script("empty_index_alert", INCLUDENEWSURL."js/alert_empty_replace.js");
    wp_register_script("load_json" , INCLUDENEWSURL."js/json.js",["jquery"]);

    // css file
    wp_register_style("search_box_style",INCLUDENEWSURL."css/search_box.css");
    
    // load in all page
    wp_enqueue_script("load_json");
}

add_action("admin_enqueue_scripts","register_script");
