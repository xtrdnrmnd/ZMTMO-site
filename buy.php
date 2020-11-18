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
        <title>buy</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="style2.css">
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@600&display=swap" rel="stylesheet">
        <style>
            .img {
                position: absolute;
                top: 200px;
                height: 400px;
            }
            table {
                color: white;
                position: absolute;
                top: 600px;
                left: 100px;
            }
            tr {
                color: black;
            }
            td {
                width: 370px;
            }
        </style>
    </head>
    <body>
        <header>
            <a href="index.php?language=<?php echo $language?>"><img src="Media/logo1.svg" id="logo"></a>
            <a href="characteristics.php?language=<?php echo $language?>"><?php echo $top_nav[$language]['0']?></a>
            <a href="media.php?language=<?php echo $language?>" <?php setcookie("lang", $language); ?>><?php echo $top_nav[$language]['1']?></a>
            <a href="user_exp.php?language=<?php echo $language?>"><?php echo $top_nav[$language]['2']?></a>
            <a href="accessories.php?language=<?php echo $language?>"><?php echo $top_nav[$language]['3']?></a>
            <a style="color: #A6D23F;"><?php echo $top_nav[$language]['4']?></a>
            <a href="contacts.php"><?php echo $top_nav[$language]['5']?></a>
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
                window.location.href='http://localhost/ZMTMO-site/buy.php?language='+language;
            }
        </script>
        <img class="img" src="Media/front.png" style="left: 200px;">
        <img class="img" src="Media/photos/iphone7.png" style="left: 600px;">
        <img class="img" src="Media/photos/iphone8.png" style="left: 1000px;">
        <div style="position: absolute; height: 800px;margin-bottom: 300px;width: 100%"><table border="1">
            <tr>
                <th><?php echo $buy_tex[$language]['0']?></th>
                <td><?php echo $buy_tex[$language]['1']?></td>
                <td><?php echo $buy_tex[$language]['2']?></td>
                <td><?php echo $buy_tex[$language]['3']?></td>
            </tr>
            <tr>
                <th><?php echo $buy_tex[$language]['4']?></th>
                <td><?php echo $buy_tex[$language]['5']?></td>
                <td><?php echo $buy_tex[$language]['6']?></td>
                <td><?php echo $buy_tex[$language]['7']?></td>
            </tr>
            <tr>
                <th><?php echo $buy_tex[$language]['8']?></th>
                <td><?php echo $buy_tex[$language]['9']?></td>
                <td><?php echo $buy_tex[$language]['10']?></td>
                <td><?php echo $buy_tex[$language]['11']?></td>
            </tr>
            <tr>
                <th><?php echo $buy_tex[$language]['12']?></th>
                <td><?php echo $buy_tex[$language]['13']?></td>
                <td><?php echo $buy_tex[$language]['14']?></td>
                <td><?php echo $buy_tex[$language]['15']?></td>
            </tr>
            </table></div>
        <footer>
            <hr>
            <a href="mailto:xtrdnrmnd@gmail.com">xtrdnrmnd@gmail.com</a>
            <br>©xtrdnrmnd 2020
        </footer>
    </body>
</html>