<?php

function word_filtering_callback()
{

}

function word_filtering_in_post()
{
    add_meta_box( 
        "post-filtering-word", 
        "فیلتر کننده کلمات در نوشته", 
        "word_filtering_callback", 
        "post", 
        "normal", 
        "default", 
    );
}

add_action("add_meta_boxes","word_filtering_in_post");