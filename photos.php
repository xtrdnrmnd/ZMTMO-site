<!DOCTYPE html>
<?php
include('language.php');
$en_select='';
$sk_select='';
$ru_select='';
$language = '';
if ((isset($_COOKIE['lang']) && $_COOKIE['lang']=='ru') || !isset($_COOKIE['lang'])) {
    $ru_select='selected';
        $language='ru';
}
if ((isset($_COOKIE['lang']) && $_COOKIE['lang']=='sk') || !isset($_COOKIE['lang'])) {
    $sk_select='selected';
    $language='sk';
}
if ((isset($_COOKIE['lang']) && $_COOKIE['lang']=='en') || !isset($_COOKIE['lang'])) {
    $en_select='selected';
        $language='en';
}
if ((isset($_GET['language']) && $_GET['language']=='ru') || !isset($_GET['language'])) {
    $ru_select='selected';
        $language='ru';
}
if ((isset($_GET['language']) && $_GET['language']=='sk') || !isset($_GET['language'])) {
    $sk_select='selected';
    $language='sk';
}
if ((isset($_GET['language']) && $_GET['language']=='en') || !isset($_GET['language'])) {
    $en_select='selected';
        $language='en';
}
?>
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
            <a href="index.php?language=<?php echo $language?>" <?php setcookie("lang", $language); ?>><img src="Media/logo1.svg" id="logo"></a>
            <a href="characteristics.php?language=<?php echo $language?>"><?php echo $top_nav[$language]['0']?></a>
            <a href="media.php?language=<?php echo $language?>" style="color: #A6D23F;"><?php echo $top_nav[$language]['1']?></a>
            <a href="user_exp.php?language=<?php echo $language?>" ><?php echo $top_nav[$language]['2']?></a>
            <a href="accessories.php?language=<?php echo $language?>"><?php echo $top_nav[$language]['3']?></a>
            <a href="buy.php?language=<?php echo $language?>"><?php echo $top_nav[$language]['4']?></a>
            <a href="contacts.php?language=<?php echo $language?>"><?php echo $top_nav[$language]['5']?></a>
                    <select onchange="set_language()" name="language" id="language" class="lang">
                        <?php
    $en_select='';
               $sk_select='';
                $ru_select='';
               if ((isset($_GET['language']) && $_GET['language']=='en') || !isset($_GET['language'])) 
               {
                   $en_select='selected';
               }
               if ((isset($_GET['language']) && $_GET['language']=='sk') || !isset($_GET['language']))
               {
                   $sk_select='selected';
               }
                if ((isset($_GET['language']) && $_GET['language']=='ru') || !isset($_GET['language']))
                {
                    $ru_select='selected';
                }
                        ?>
                        <option value="ru" <?php echo $ru_select?>>RU</option>
                        <option value="sk" <?php echo $sk_select?>>SK</option>
                        <option value="en" <?php echo $en_select?>>ENG</option>
                    </select>
            <hr>
        </header>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script>
            function set_language() {
                var language=jQuery('#language').val();
                window.location.href='http://localhost/ZMTMO-site/photos.php?language='+language;
            }
        </script>
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