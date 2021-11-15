<nav class="nav-tab-wrapper">
  <a href="?page=nnews_menu" class="nav-tab <?php if($tab===null):?>nav-tab-active<?php endif; ?>">مدیریت مترجم</a>
  <a href="?page=word-filtering" class="nav-tab <?php if($tab===null):?>nav-tab-active<?php endif; ?>">مدیریت فیلتر ها</a>
</nav>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<div class="container">

    <div class="WRAP">
        <h1>تنظیمات</h1>
    </div>
    <div class="WRAP">
            <h1>دوبله کردن این صفحه</h1>
            <form method="post">
                <div class=" col-6">
                <div class="form-group">
                    <label for="url_site">لینک سایت رو وارد کنید :</label>
                    <input type="text" class="form-control" id="url_site" name="url_site" >
                </div>
                <div class="form-group">
                    <label for="site_name">اسم سایت را وارد کنید :</label>
                    <input type="text" class="form-control" id="site_name" name="site_name">
                </div>
                </div>
                <br>
                <label for="Dubbing_this_page">  
                    اطمینان دارید که این صفحه دوبله شه :
                    <input type="checkbox" name="Dubbing_this_page" id="Dubbing_this_page" 
                    <?php echo isset($Posting_History) && intval($Posting_History) ? "checked" : "" ?>
                    >
                </label>  
                <br>
                <button class="btn btn-primary"name="post_form" type="submit" style="margin-top:10px">فرستادن</button>
            </form>
            <div class="WRAP">
                <h1><?php  echo $Posting_Site_List ?></h1>
            </div>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">شناسه وبسایت</th>
                        <th scope="col">نام وبسایت</th>
                        <th scope="col">آدرس وبسایت</th>
                        <th scope="col">عملیات ها</th>
                    </tr>
                </thead>
                <tbody>
                        <?php foreach($get_site_list as $site_list_ll): ?>
                            <tr>
                            <th scope="row"><?php echo $site_list_ll->id ?></th>
                            <td><?php echo $site_list_ll->name_site ?></td>
                            <td><?php echo $site_list_ll->url ?></td>
                            <td>
                                <a class="btn btn-danger" href="<?php echo add_query_arg(['action'=>'delete' , 'item'=>$site_list_ll->id]) ; ?>"> حذف</a>
                                |
                                <a class="btn btn-success" href="<?php echo add_query_arg(['action'=>'change_to_edit_mode', 'item'=>$site_list_ll->id]) ; ?>">تعقیر</a>
                            </td>
                            </tr>
                        <?php endforeach; ?>
                </tbody>
            </table>
        </div>
</div>