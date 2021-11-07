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
    if (empty($_POST["add_word"])) {
        include INCLUDENEWSASSETS . "js/alert_empty_addword.php" ;
    }else{
        update_option( "Place_Word", $_POST["add_word"] );
    }
    if (empty($_POST["replace"])) {
        include INCLUDENEWSASSETS . "js/alert_empty_replace.php" ;
    }else{
        update_option( "Replace", $_POST["replace"] );
    }

    include INCLUDENEWSTEMPLATE . "admin/menu/first_submenu.php" ;
}

function main_menu()
{
    global $wpdb;

    if (isset($_POST["post_form"])) {
        $Dubbing_this_page_check = isset($_POST["Dubbing_this_page"]) ? 1 : 0;
        $Add_Site_To_List = isset($_POST["youre_site"]);
        update_option( "Dubbing_this_page_check",$Dubbing_this_page_check );
        add_option("Site_List",$Add_Site_To_List);
    }
    
    $action = $_GET["action"];
    if ($action == "delete") {
        $item = intval($_GET["item"]);
        if ($item > 0) {
            $wpdb->delete($wpdb->prefix."site_list",["id"=>$item]);
        }
    }
    if (isset($_POST["post_form"])){
        $wpdb->insert($wpdb->prefix."site_list",[
            "name_site" => $_POST["site_name"],
            "url" => $_POST["url_site"],
        ]);
    }
    
    $get_site_list = $wpdb->get_results("select * from {$wpdb->prefix}site_list");

    
    $Posting_Site_List = get_option("Site_List");
    $Posting_History = get_option("Dubbing_this_page_check");

    // import page 
    include INCLUDENEWSTEMPLATE . "admin/menu/main.php";
}