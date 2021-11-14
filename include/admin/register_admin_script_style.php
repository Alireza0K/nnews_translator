<?php

function register_script()
{
    wp_register_script("empty_word_alert", INCLUDENEWSURL."js/alert_empty_addword.js");
    wp_register_script("empty_index_alert", INCLUDENEWSURL."js/alert_empty_replace.js");
}

add_action("admin_enqueue_scripts","register_script");
