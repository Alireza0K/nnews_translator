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
                console.log(response.search_list)
                console.log(response.result)
                console.log(response.massage)
            },
            error:function(error){
                if(error){
                    console.log(error)
                }
            }
        });
    });
})