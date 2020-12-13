<!DOCTYPE html>
<?php
include ('lang_switch.php');
include ('header.php');
include ('footer.php');
include('language.php');
include ('lang_mutations.php');
?>
<html>
    <head>
        <title>media</title>
        <link rel="stylesheet" href="../css/generalStyles.css">
        <link rel="stylesheet" href="../css/desktop.css">
        <link rel="stylesheet" href="../css/phone.css">
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@600&display=swap" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script>
            function set_language() {
                var language=jQuery('#language').val();
                window.location.href='http://localhost/ZMTMO-site/php/media.php?language='+language;
            }
        </script>
        <div class="body_media">
            <a class="photos_one" href="photos.php?language=<?php echo $language?>"><img src="<?php echo $media[$language]['0']?>"></a>
            <a class="photos_one vid" href="videos.php?language=<?php echo $language?>"><img src="<?php echo $media[$language]['1']?>"></a>
            <a class="photos_two" href="articles.php?language=<?php echo $language?>"><img src="<?php echo $media[$language]['2']?>"></a>
            <a class="photos_two vid" href="other.php?language=<?php echo $language?>"><img src="<?php echo $media[$language]['3']?>"></a>
        </div>
    </body>
</html>