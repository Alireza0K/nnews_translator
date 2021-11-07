<div class="WRAP">
    <h1>تنظیمات</h1>
</div>
<div class="WRAP">
    <h1>دوبله کردن این صفحه</h1>
    <form method="post">
        
        <label for="url_site" style="margin-top:10px">
            لینک سایت رو وارد کنید :
            <input type="text" name="url_site" id="url_site">
        </label>
        <br>
        <label for="site_name" style="margin-top:10px">
            اسم سایت را وارد کنید :
            <input type="text" name="site_name" id="site_name">
        </label>
        <br>
        <label for="Dubbing_this_page">  
            اطمینان دارید که این صفحه دوبله شه :
            <input type="checkbox" name="Dubbing_this_page" id="Dubbing_this_page" 
            <?php echo isset($Posting_History) && intval($Posting_History) ? "checked" : "" ?>
            >
        </label>  
        <br>
        <button name="post_form" type="submit" style="margin-top:10px">فرستادن</button>
    </form>
    <div class="WRAP">
        <h1><?php  echo $Posting_Site_List ?></h1>
    </div>
    <table class="widefat">
        <thead>
            <tr>
                <th>شناسه وبسایت</th>
                <th>نام وبسایت</th>
                <th>آدرس وبسایت</th>
                <th>عملیات ها</th>
            </tr>
        </thead>
        <tbody>
                <?php foreach($get_site_list as $site_list_ll): ?>
                    <tr>
                    <td><?php echo $site_list_ll->id ?></td>
                    <td><?php echo $site_list_ll->name_site ?></td>
                    <td><?php echo $site_list_ll->url ?></td>
                    <td>
                        <a href="<?php echo add_query_arg(['action'=>'delete' , 'item'=>$site_list_ll->id]) ; ?>">حذف</a>
                    </td>
                    </tr>
                <?php endforeach; ?>
        </tbody>
    </table>
</div>