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
        <title>other</title>
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
                window.location.href='http://localhost/ZMTMO-site/php/other.php?language='+language;
            }
        </script>
                <p class="text_other text_other_gif" ><?php echo $other[$language]['0']?></p>
        <img src="../Media/gifs/one.gif" class="gif gif1">
        <img src="../Media/gifs/two.gif" class="gif gif2">
        <p class="text_other text_other_ringtones"><?php echo $other[$language]['1']?></p>
        <audio class="audio audio1" controls>
            <source src="../Media/audios/opening.mp3" type="audio/mpeg">
        </audio>
        <audio class="audio audio2" controls>
            <source src="../Media/audios/audio2.mp3" type="audio/mpeg">
        </audio>
        <audio class="audio audio3" controls>
            <source src="../Media/audios/audio3.mp3" type="audio/mpeg">
        </audio>
        <div class="tex2"><ul><li>Apex</li>
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
    </body>
</html>