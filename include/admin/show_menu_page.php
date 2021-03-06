<?php
add_action( 'admin_menu', 'show_in_menu' );
add_action("admin_menu","first_submenu_t");
function show_in_menu() {
    add_menu_page(
        "ترجمه کننده", //name
        "ترجمه کننده", //title
        "manage_options", //unic
        "nnews_menu", //Slug
        "main_menu_t", //import file
        INCLUDENEWSURL . "image/translation.png",
    );
}
function first_submenu_t()
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
    $Get_Replace_value = get_option("Replace");
    $Get_Add_Word_value = get_option("Place_Word");

    if (!empty($_POST["add_word"])){
        update_option( "Place_Word", $_POST["add_word"] );
    }elseif(empty($Get_Add_Word_value)){
        wp_enqueue_script("empty_word_alert");
    }
    if (!empty($_POST["replace"])) {
        update_option("Replace",$_POST["replace"]);
    }elseif (empty($Get_Replace_value)){
        wp_enqueue_script("empty_index_alert");
    }

    $page_url_for_tab = $_GET["page"];

    include INCLUDENEWSTEMPLATE . "admin/menu/first_submenu.php" ;
}

function main_menu_t()
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
    if ($action == "change_to_edit_mode") {

        if (isset($_POST["save_edit_mode"])) {
            $item = intval($_GET["item"]);
            $table = $wpdb->prefix."site_list";
            $data = array('name_site'=>$_POST["new_website_name"],"url"=>$_POST["new_url"]);
            $where = array('id'=>$item);
            $wpdb->update( $table, $data, $where);
        }
                
        $item = intval($_GET["item"]);
        $get_site_name_list = $wpdb->get_results("select name_site from {$wpdb->prefix}site_list where id=$item"); 
        foreach ($get_site_name_list as $site_name_list) {
            $Show_Site_Name_s = $site_name_list->name_site;
        }

        $get_site_for_show_url = $wpdb->get_results("select url from {$wpdb->prefix}site_list where id=$item"); 
        foreach ($get_site_for_show_url as $site_name_for_show_list) {
            $Show_Site_Url_s = $site_name_for_show_list->url;
        }
        
        include INCLUDENEWSTEMPLATE . "admin/menu/edit_mode_site_list.php";
    }else{
        $get_site_list = $wpdb->get_results("select * from {$wpdb->prefix}site_list");

    
        $Posting_Site_List = get_option("Site_List");
        $Posting_History = get_option("Dubbing_this_page_check");
        
        $page_url_for_tab = $_GET["page"];
        // import page 

        include INCLUDENEWSTEMPLATE . "admin/menu/main.php";
    }
}