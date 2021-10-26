<?php
add_action( 'admin_menu', 'show_in_menu' );
add_action("admin_menu","first_submenu");
function show_in_menu() {
    add_menu_page(
        "ترجمه کننده", //name
        "ترجمه کننده", //title
        "manage_options", //unic
        "nnews_menu", //Slug
        "main_menu", //import file
        INCLUDENEWSURL . "image/translation.png",
    );
}
function first_submenu()
{
    add_submenu_page( 
        "nnews_menu", 
        "فیلتر کردن کلمات", 
        "فیلتر کردن کلمات", 
        "manage_options", 
        "word-filtering", 
        "first_slug_in_menu", 
    );
}


function first_slug_in_menu()
{
    include INCLUDENEWSTEMPLATE . "admin/menu/first_submenu.php" ;
}

function main_menu()
{
    if (isset($_POST["post_form"])) {
        $Dubbing_this_page_check = isset($_POST["Dubbing_this_page"]) ? 1 : 0;
        $Add_Site_To_List = isset($_POST["youre_site"]);
        update_option( "Dubbing_this_page_check",$Dubbing_this_page_check );
        add_option("Site_List",$Add_Site_To_List);
    }

    // if (isset($_POST["youre_site"])) {
    //     add_option("Site_List",$_POST);
    // }
    // var_dump($_POST);
    $Posting_Site_List = get_option("Site_List");
    $Posting_History = get_option("Dubbing_this_page_check");

    // import page 
    include INCLUDENEWSTEMPLATE . "admin/menu/main.php";
}