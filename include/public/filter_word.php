<?php

function word_filtering($content)
{
    $changings = [
        '0'  => ["Hello","luck","good"],
        '1' => ["(._.)","WOW","<._.>"]
    ];

    foreach ($changings as $change){
        $content = preg_replace("/{$change[0]}/", $change[1], $content);
    } 
    return $content;
}
function filter_title($title)
{
    return "یک تایتل است" . $title;
}


add_filter("the_content","word_filtering");
add_filter("the_title","filter_title");