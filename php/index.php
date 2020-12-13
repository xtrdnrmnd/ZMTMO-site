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
        <title>Main page</title>
        <link rel="stylesheet" href="../css/generalStyles.css">
        <link rel="stylesheet" href="../css/desktop.css">
        <link rel="stylesheet" href="../css/phone.css">
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@600&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@400;600&display=swap" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
            @keyframes spin {
                from {transform:rotate(0deg);}
                to {transform:rotate(360deg);}
            }
            #logo {
                height: 90px;
                animation: spin 5s linear 0s infinite;
            }
        </style>
    </head>
    <body>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script>
            function set_language() {
                var language=jQuery('#language').val();
                window.location.href='http://localhost/ZMTMO-site/php/index.php?language='+language;
            }
        </script>
        <article class="article mpt"><?php echo $index_tex[$language]['0']?><p>
        <?php echo $index_tex[$language]['1']?>
        </article>
        <article class="article cont_mpt"><?php echo $index_tex[$language]['2']?><p>
        <?php echo $index_tex[$language]['3']?>
        </article>
        <img id="ph" src="../Media/front.png">
        <img id="back" src="../Media/back.png">
        <img id="side" src="../Media/side.png">
    </body>
</html>