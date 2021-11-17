<?php

add_action("wp_ajax_live_search","live_search_proces");
function live_search_proces()
{
    // array for keep data
    $find_site_name = [];

    // get data from ajax
    $get_search = $_POST["data_value"];
    
    // get data from database
    global $wpdb;
    $get_dataform_database = $wpdb->get_results("select * from {$wpdb->prefix}site_list");
    foreach($get_dataform_database as $site_name_list){
        $name = $site_name_list->name_site;
        array_push($find_site_name, $name);
    }
    
    // find search results
    foreach($find_site_name as $find_search){
        if ($find_search == $get_search) {
            $result = $get_search;
            $massage = "Found successfully";
            break;  
        }else{
            $massage = "can't find";
        }
    }

    // send json 
    wp_send_json([
        "success" => true, 
        "search_list" => $find_site_name,
        "result" => $result,
        "massage"=> $massage
    ]);
}