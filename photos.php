<!DOCTYPE html>
<html>
    <head>
        <title>photos</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="style2.css">
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@600&display=swap" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
        <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
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
        <div>
            <a data-fancybox="gallery" href="Media/photos/1.JPG"><img src="Media/photos/1.JPG" style="top: 200px; margin-left: 300px" class="photo_images"></a><br>
            <a data-fancybox="gallery" href="Media/photos/2.JPG"><img src="Media/photos/2.JPG" style="top: 450px; margin-left: 800px;" class="photo_images"></a><br>
            <a data-fancybox="gallery" href="Media/photos/3.JPG"><img src="Media/photos/3.JPG" style="top: 700px; margin-left: 300px;" class="photo_images"></a><br><br>
            <a data-fancybox="gallery" href="Media/photos/4.JPG"><img src="Media/photos/4.JPG" style="top: 950px; margin-left: 800px;" class="photo_images"></a><br>
            <a data-fancybox="gallery" href="Media/photos/5.JPG"><img src="Media/photos/5.JPG" style="top: 1200px; margin-left: 300px;" class="photo_images"></a><br><br>
            <a data-fancybox="gallery" href="Media/photos/6.JPG"><img src="Media/photos/6.JPG" style="top: 1450px; margin-left: 800px;" class="photo_images"></a><br>
            <a data-fancybox="gallery" href="Media/photos/7.JPG"><img src="Media/photos/7.JPG" style="top: 1700px; margin-left: 300px;" class="photo_images"></a><br>
        </div>
        <footer>
            <hr>
            <a href="mailto:xtrdnrmnd@gmail.com">xtrdnrmnd@gmail.com</a>
            <br>©xtrdnrmnd 2020
        </footer>
    </body>
</html>