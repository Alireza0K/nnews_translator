<div class="WRAP">
    <h1>تنظیمات</h1>
</div>
<div class="WRAP">
    <h1>دوبله کردن این صفحه</h1>
    <form action="" method="post">
        
        <label for="youre_name">
            لینک سایت رو وارد کنید :
            <input type="text" name="youre_site" id="youre_name">
        </label>
        <br>
        <label for="Dubbing_this_page">  
            اطمینان دارید که این صفحه دوبله شه :
            <input type="checkbox" name="Dubbing_this_page" id="Dubbing_this_page" 
            <?php echo isset($Posting_History) && intval($Posting_History) ? "checked" : "" ?>
            >
        </label>  
        <br>
        <button name="post_form" type="submit">فرستادن</button>
    </form>
    <div class="WRAP">
        <h1><?php  echo $Posting_Site_List ?></h1>
    </div>
</div>