<!DOCTYPE html>
<html>
    <head>
        <title>media</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="style2.css">
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@600&display=swap" rel="stylesheet">
    </head>
    <body>
        <header>
            <a href="index.php"><img src="Media/logo1.svg" id="logo"></a>
            <a href="characteristics.php" >Characteristics</a>
            <a href="media.php" style="color: #A6D23F;">Media</a>
            <a href="user_exp.php" >Comments</a>
            <a href="accessories.php" >Accessories</a>
            <a href="buy.php" >Compare</a>
            <a href="contacts.php">Contacts</a>
            <select onchange="set_language_2()" name="language" id="language" class="lang">
                <option value="en">ENG</option>
                        <option value="ru">RU</option>
                        <option value="sk">SK</option>
                    </select>
            <hr>
        </header>
        <div style="position: absolute; top: 200px; left: 140px"><a href="photos.php"><img src="Media/covers/media_cover_1.jpg"></a><a href="videos.php"><img src="Media/covers/media_cover_3.jpg" style="position:absolute;margin-left: 200px; margin-right: 140px"></a></div><div style="position: absolute;top: 600px; left: 140px"><a href="articles.php"><img src="Media/covers/media_cover_4.jpg"></a><a href="other.php"><img src="Media/covers/media_cover_2.jpg" style="position:absolute;margin-left: 200px; margin-right: 140px"></a></div>
        <footer>
            <hr>
            <a href="mailto:xtrdnrmnd@gmail.com">xtrdnrmnd@gmail.com</a>
            <br>©xtrdnrmnd 2020
        </footer>
    </body>
</html>