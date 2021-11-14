<?php

function register_script_front()
{
    //css files
    wp_register_style("classic_form_3", INCLUDENEWSURL."css/classic_form_3.css");
    wp_register_style("classic_form_2", INCLUDENEWSURL."css/classic_form_2.css");
    wp_register_style("classic_form_1", INCLUDENEWSURL."css/classic_form_1.css");
}

add_action("wp_enqueue_scripts","register_script_front");
