<?php

// for get code for translate 
function translate_code_handler()
{

}
function Post_Meta_Box($post_type, $post)
{
    add_meta_box( 
    "post-meta-box" ,
    "کد ترجمه مقاله رو اینجا قرار دهید",
    "translate_code_handler", 
    "post",
    "normal",
    "default"
    );
}

add_action("add_meta_boxes","Post_Meta_Box",10,2);