<nav class="nav-tab-wrapper">
  <a href="?page=nnews_menu" class="nav-tab nav-tab-active">مدیریت مترجم</a>
  <a href="?page=word-filtering" class="nav-tab">مدیریت فیلتر ها</a>
</nav>
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
        border: 1px gray solid;
        margin: 0px auto;
        margin-top: 20px;
        border-radius: 10px;
        padding: 10px 50px;
    }
</style>
<body>
    <div class="WRAP" id="first_form">
        <form action="" method="post" style="text-align: center;margin-top:10px;">
            <label for="add_word">
                کلمه ایی که میخواید جایگزین کنید :
                <input type="text" name="add_word" id="add_word"
                <?php echo "value=" . get_option("Place_Word"); ?>
                >
            </label>
            <br>
            <br>
            <label for="replace">
                کلمه ای که قسد به تعقیر اون دارید :
                <input type="text" name="replace" id="replace"
                <?php echo "value=" . get_option("Replace"); ?>
                > 
            </label>
            <div class="" style="margin:10px;"><button class="button button-primary" type="submit">ذخیره</button></div>
        </form>
    </div>
</body>
</html>
