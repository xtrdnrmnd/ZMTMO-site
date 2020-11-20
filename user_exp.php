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

date_default_timezone_set('Europe/Bratislava');
?>
<html>
    <head>
        <title>user</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="style2.css">
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@600&display=swap" rel="stylesheet">
    </head>
    <body style="background-color:white;">
        <header>
            <a href="index.php"><img src="Media/logo1.svg" id="logo"></a>
            <a href="characteristics.php?language=<?php echo $language?>"><?php echo $top_nav[$language]['0']?></a>
            <a href="media.php?language=<?php echo $language?>" <?php setcookie("lang", $language); ?>><?php echo $top_nav[$language]['1']?></a>
            <a style="color: #A6D23F;"><?php echo $top_nav[$language]['2']?></a>
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
                window.location.href='http://localhost/ZMTMO-site/user_exp.php?language='+language;
            }
        </script>
        <form action="" method="POST">
            <label> <?php echo $user_exp[$language]['0']?>
                <input type="text" name="Name" style="width: 295px" required>
            </label><br><br>
            <label><?php echo $user_exp[$language]['1']?><br>
                <textarea name="Comment" style="width: 400px; height: 250px;" required></textarea>
            </label><br><br>
            <input type="hidden" name="date" value='".date('Y-m-d H:i:s')."'>
            <input type="submit" name="Submit" value="<?php echo $user_exp[$language]['2']?>" id="sub_btn">
        </form>
        <footer>
            <hr>
            <a href="mailto:xtrdnrmnd@gmail.com">xtrdnrmnd@gmail.com</a>
            <br>©xtrdnrmnd 2020
        </footer>
    </body>
</html>
<?php
 
 if(isset($_POST['Submit'])){
  print "<h1>Your comment has been submitted!</h1>";
  $Name = $_POST['Name'];
  $Comment = $_POST['Comment'];
  #Get old comments
  $old = fopen("comments.txt", "r+t");
  $old_comments = fread($old, 1024);
  #Delete everything, write down new and old comments
  $write = fopen("comments.txt", "w+");
  $string = "<b>".$Name."</b><br>".$Comment."<br>\n".$old_comments;
  fwrite($write, $string);
  fclose($write);
  fclose($old);
 }
 #Read comments
 $read = fopen("comments.txt", "r+t");
 echo "<br><br>Comments<hr>".fread($read, 1024);
 fclose($read);

?>