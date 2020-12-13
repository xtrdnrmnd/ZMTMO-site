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
        <title>accessories</title>
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
                window.location.href='http://localhost/ZMTMO-site/php/accessories.php?language='+language;
            }
        </script>
        <div>
            <a data-fancybox="gallery" href="../Media/acc/acc1.png"><img src="../Media/acc/acc1.png" class="photo_images acc_left acc1"></a><br>
            <a data-fancybox="gallery" href="../Media/acc/acc2.png"><img src="../Media/acc/acc2.png" class="photo_images acc_right acc2"></a><br>
            <a data-fancybox="gallery" href="../Media/acc/acc3.png"><img src="../Media/acc/acc3.png" class="photo_images acc_left acc3"></a><br><br>
            <a data-fancybox="gallery" href="../Media/acc/acc4.png"><img src="../Media/acc/acc4.png" class="photo_images acc_right acc4"></a><br>
        </div>
    </body>
</html>