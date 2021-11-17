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
    $site_id_for_send_json = $wpdb->get_results("select id from {$wpdb->prefix}site_list WHERE name_site='{$get_search}'");
    $site_ur_for_send_json = $wpdb->get_results("select url from {$wpdb->prefix}site_list WHERE name_site='{$get_search}'");
    foreach($get_dataform_database as $site_name_list){
        $name = $site_name_list->name_site;
        array_push($find_site_name, $name);
    }
    foreach($site_id_for_send_json as $site_id){
        $id = $site_id->id;
    }
    foreach($site_ur_for_send_json as $site_url){
        $url = $site_url->url;
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
        "site_id" =>$id,
        "site_url" => $url,
        "massage"=> $massage,
    ]);
}