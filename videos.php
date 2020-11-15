<!DOCTYPE html>
<html>
    <head>
        <title>videos</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="style2.css">
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@600&display=swap" rel="stylesheet">
    </head>
    <body>
        <header>
            <img src="Media/logo1.svg" id="logo">
            <a href="characteristics.php" >Characteristics</a>
            <a href="media.php" style="color: #A6D23F;">Media</a>
            <a href="user_exp.php" >Comments</a>
            <a href="accessories.php">Accessories</a>
            <a href="buy.php" >Compare</a>
            <a href="contacts.php">Contacts</a>
            <select onchange="set_language()" name="language" id="language" class="lang">
                <option value="en">ENG</option>
                <option value="ru">RU</option>
                <option value="sk">SK</option>
            </select>
            <hr>
        </header>
        <video controls="controls" width="300px" style="position: absolute; top: 200px; left: 300px;">
            <source src="Media/videos/interface.mov">
        </video>
        <video controls="controls" width="300px" style="position: absolute; top: 200px; left: 800px;">
            <source src="Media/videos/video-1.mov">
        </video>
        <footer>
            <hr>
            <a href="mailto:xtrdnrmnd@gmail.com">xtrdnrmnd@gmail.com</a>
            <br>©xtrdnrmnd 2020
        </footer>
    </body>
</html>