<?php

// import the form 
function form1_r()
{
    $page = include INCLUDENEWSTEMPLATE . "public\oforms\classic_form.php" ;
}

function form2_r()
{
    $page = include INCLUDENEWSTEMPLATE . "public\oforms\classic_form2.php" ;
}

function form3_r()
{
    $page = include INCLUDENEWSTEMPLATE . "public\oforms\classic_for3.php" ;
} 


// creat short code
add_shortcode( "form1" , "form1_r" );
add_shortcode( "form2" , "form2_r" );
add_shortcode( "form3" , "form3_r" );