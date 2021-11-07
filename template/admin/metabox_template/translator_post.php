<body>
    <form class="WPRAP" action="post">
        <label for="index_word">
            کلمه ورودی : 
            <input type="text" id="index_word" name="index_word"
            <?php echo "value=" . $index_word ;  ?>
            >
        </label>
        <label for="replace_word">
            کلمه جایگذین : 
            <input type="text" id="replace_word" name="replace_word"
            <?php echo "value=" . $replace_word; ?>
            >
        </label>
    </form>
</body>