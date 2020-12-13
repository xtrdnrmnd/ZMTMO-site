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
        <title>articles</title>
        <link rel="stylesheet" href="../css/generalStyles.css">
        <link rel="stylesheet" href="../css/desktop.css">
        <link rel="stylesheet" href="../css/phone.css">
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@600&display=swap" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>

        </style>
    </head>
    <body>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script>
            function set_language() {
                var language=jQuery('#language').val();
                window.location.href='http://localhost/ZMTMO-site/php/articles.php?language='+language;
            }
        </script>
        <p class="articles_header"><?php echo $articles[$language]['0']?></p>
        <div class="articles_links">
            <a href="https://www.wsj.com/articles/iphone-6s-review-a-slightly-better-iphone-6-1442923203" class="links">iPhone 6s Review: A Slightly Better iPhone 6</a><p>
            <a href="https://www.google.com/url?sa=t&rct=j&q=&esrc=s&source=web&cd=&ved=2ahUKEwjOp5PKgezsAhXFGewKHcCvCzcQFjALegQIGRAC&url=https%3A%2F%2Fwww.vice.com%2Fen%2Farticle%2Fjgej97%2Fiphone-6s-review-4-years-later&usg=AOvVaw1sRu0U0Ny3s8194AjVmrUi" class="links">iPhone 6S Review, 4 Years Later - Vice</a><p>
            <a href="https://www.cnet.com/reviews/apple-iphone-6s-review/ " class="links">Apple iPhone 6S review: The oldest iPhone can't compete with newer models</a>
        </div>
    </body>
</html>