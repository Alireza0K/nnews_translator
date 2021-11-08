<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<style>
    #first_form{
        width: 310px;
        background-color: #fff;
        border: 1px gray solid;
        margin: 0px auto;
        margin-top: 20px;
        border-radius: 10px;
        padding: 10px 50px;
    }
</style>
<body>
    <div class="WRAP" id="first_form">
        <form  method="post" style="text-align: center;margin-top:10px;">
            <label for="new_website_name">
                اسم جدید وبسایت :
                <input type="text" name="new_website_name" id="new_website_name" value="<?php echo $Show_Site_Name_s;?>">
            </label>
            <br>
            <br>
            <label for="new_url">
                آدرس جدید وبسایت :
                <input type="text" name="new_url" id="new_url"  value="<?php echo $Show_Site_Url_s;?>"> 
            </label>
            <div class="" style="margin:10px;"><button class="button button-primary" type="submit" name="save_edit_mode" >ذخیره</button></div>
        </form>
    </div>
</body>
</html>