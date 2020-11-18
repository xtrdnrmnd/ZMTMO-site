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
        <title>contacts</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="style2.css">
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@600&display=swap" rel="stylesheet">
    </head>
    <body style="height: 1200px;">
        <header>
            <a href="index.php"><img src="Media/logo1.svg" id="logo"></a>
            <a href="characteristics.php" >Characteristics</a>
            <a href="media.php" >Media</a>
            <a href="user_exp.php" >Comments</a>
            <a href="accessories.php" >Accessories</a>
            <a href="buy.php" >Compare</a>
            <a href="contacts.php" style="color: #A6D23F;">Contacts</a>
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
        <p class="info" id="adr">Apple Inc.<br>Corporate address:<br>
            Apple<br>
            One Apple Park Way<br>
            Cupertino, CA 95014<br>
            <a href="callto:4089961010" style="color: #A6D23F;">(408) 996-1010</a></p>
        <img src="Media/app.png" id="apl">
        <div id="sup">If you need product or service support:</div>
        <div>
                <a href="https://support.apple.com" id="app">The apple<br>support page</a>      
        </div>
        <div class="dropdown">
            <button class="mainmenubtn" style="position: absolute; top:15px; color: #A6D23F;left:350px;font-size: 30px;">Helpful numbers</button>
            <div class="dropdown-child">
                <a href="callto:18002752273">United States:1-800-275-2273</a>
                <a href="callto:18002633394">Canada (English): 1-800-263-3394</a>
                <a href="callto:08007610880">Brazil: 0800-761-0880</a>
                <a href="callto:0800220325">Austria: 0800 220325</a>
                <a href="callto:800700527">Czech Republic: 800 700527</a>
                <a href="callto:88005556734">Russia: 8 800 555 6734</a>
                <a href="0800178661">Slovakia: 0800 178661</a>
            </div>
        </div>
        <p style="position: absolute; top:800px; color: #FFFFFF;left:30px;font-size: 30px;font-family: 'Roboto Mono', monospace;">For more information you can go to the Apple Inc. web site
            <a href="https://www.apple.com" style="color: #A6D23F">https://www.apple.com</a></p>
        <footer>
            <hr>
            <a href="mailto:xtrdnrmnd@gmail.com">xtrdnrmnd@gmail.com</a>
            <br>©xtrdnrmnd 2020
        </footer>
    </body>
</html>