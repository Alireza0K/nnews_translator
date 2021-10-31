<?php

function word_filtering_callback($post)
{
    $index_word =  get_post_meta($post->ID,"index_word_post_for_translate_index",true);
    $replace_word = get_post_meta($post->ID,"index_word_post_for_translate_replace",true);
    
    include INCLUDENEWSTEMPLATE . "admin/metabox_template/translator_post.php";
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

function save_date_post_metabox_translator($post)
{
    if (isset($_POST["index_word"])){
        update_post_meta($post,"index_word_post_for_translate_index",$_POST["index_word"]);
    }
    if (isset($_POST["replace_word"])){
        update_post_meta($post,"index_word_post_for_translate_replace",$_POST["replace_word"]);
    }
}

add_action("save_post","save_date_post_metabox_translator");