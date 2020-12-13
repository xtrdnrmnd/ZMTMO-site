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
        <title>photos</title>
        <title>Main page</title>
        <link rel="stylesheet" href="../css/generalStyles.css">
        <link rel="stylesheet" href="../css/desktop.css">
        <link rel="stylesheet" href="../css/phone.css">
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@600&display=swap" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
        <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script>
            function set_language() {
                var language=jQuery('#language').val();
                window.location.href='http://localhost/ZMTMO-site/php/photos.php?language='+language;
            }
        </script>
        <div>
            <a data-fancybox="gallery" href="../Media/photos/1.JPG"><img src="../Media/photos/1.JPG" class="photos_left photo1"></a><br>
            <a data-fancybox="gallery" href="../Media/photos/2.JPG"><img src="../Media/photos/2.JPG" class="photos_right photo2"></a><br>
            <a data-fancybox="gallery" href="../Media/photos/3.JPG"><img src="../Media/photos/3.JPG" class="photos_left photo3"></a><br><br>
            <a data-fancybox="gallery" href="../Media/photos/4.JPG"><img src="../Media/photos/4.JPG" class="photos_right photo4"></a><br>
            <a data-fancybox="gallery" href="../Media/photos/5.JPG"><img src="../Media/photos/5.JPG" class="photos_left photo5"></a><br><br>
            <a data-fancybox="gallery" href="../Media/photos/6.JPG"><img src="../Media/photos/6.JPG" class="photos_right photo6"></a><br>
            <a data-fancybox="gallery" href="../Media/photos/7.JPG"><img src="../Media/photos/7.JPG" class="photos_left photo7"></a><br>
        </div>
    </body>
</html>