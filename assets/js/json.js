jQuery(document).ready(function($) {
    $("#send_search").on("click", function(event){
        $.ajax({
            url:"admin-ajax.php",
            type:"POST",
            dataType:"json",
            data:{
                action:"live_search",
                massage:"Hello",
                data_value:$("#search_box_value").val()
            },
            success:function(response){
                $("#site_id_load").append(response.site_id)
                $("#site_name").append(response.result)
                $("#site_url").append(response.site_url)
            },
            error:function(error){
                if(error){
                    console.log(error)
                }
            }
        });
    });
})