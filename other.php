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
        <title>other</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="style2.css">
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@600&display=swap" rel="stylesheet">
        <style>
            .text_other {
                font-family: 'Roboto Mono', monospace;
                color:#A6D23F;
                font-size:30px;
                position:absolute;
            }
            .tex2 {
                font-family: 'Roboto Mono', monospace;
                color: white;
                position: absolute;
            }
        </style>
    </head>
    <body>
        <header>
            <a href="index.php?language=<?php echo $language?>" <?php setcookie("lang", $language); ?>><img src="Media/logo1.svg" id="logo"></a>
            <a href="characteristics.php?language=<?php echo $language?>"><?php echo $top_nav[$language]['0']?></a>
            <a href="media.php?language=<?php echo $language?>" style="color: #A6D23F;"><?php echo $top_nav[$language]['1']?></a>
            <a href="user_exp.php?language=<?php echo $language?>"><?php echo $top_nav[$language]['2']?></a>
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
                window.location.href='http://localhost/ZMTMO-site/other.php?language='+language;
            }
        </script>
        <p class="text_other" style="top:200px; left:100px;"><?php echo $other[$language]['0']?></p>
        <img src="Media/gifs/one.gif" style="position:absolute; top: 300px; left:300px;height:400px;">
        <img src="Media/gifs/two.gif" style="position:absolute; top: 300px; left:900px;height:400px;">
        <p class="text_other" style="top:700px; left:100px;"><?php echo $other[$language]['1']?></p>
        <audio style="position: absolute; top: 800px; left:100px;" controls>
            <source src="Media/audios/opening.mp3" type="audio/mpeg">
        </audio>
        <audio style="position: absolute; top: 800px; left:450px;" controls>
            <source src="Media/audios/audio2.mp3" type="audio/mpeg">
        </audio>
        <audio style="position: absolute; top: 800px; left:800px;" controls>
            <source src="Media/audios/audio3.mp3" type="audio/mpeg">
        </audio>
        <div class="tex2" style="top: 900px; left:100px;"><ul><li>Apex</li>
            <li>Beacon</li>
            <li>Bulletin</li>
            <li>By The Seaside</li>
            <li>Chimes</li>
            <li>Curcuit</li>
            <li>Constellation</li>
            <li>Cosmic</li>
            <li>Crystals</li>
            <li>Hillside</li>
            <li>Illuminate</li></ul></div>
        <footer>
            <hr>
            <a href="mailto:xtrdnrmnd@gmail.com">xtrdnrmnd@gmail.com</a>
            <br>©xtrdnrmnd 2020
        </footer>
    </body>
</html>