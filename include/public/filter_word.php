<?php

function word_filtering($content)
{
    $replace = get_option("Replace");
    $new_word = get_option("Place_Word");
    
    $content = preg_replace("/{$replace}/", $new_word, $content); 
    return $content;
}
function filter_title($title)
{
    return "یک تایتل است" . $title;
}


add_filter("the_content","word_filtering");
add_filter("the_title","filter_title");