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
        <title>contacts</title>
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
                window.location.href='http://localhost/ZMTMO-site/php/contacts.php?language='+language;
            }
        </script>
                <p class="info" id="adr">Apple Inc.<br><?php echo $contacts[$language]['0']?><br>
            Apple<br>
            One Apple Park Way<br>
            Cupertino, CA 95014<br>
            <a href="callto:4089961010" style="color: #A6D23F;">(408) 996-1010</a></p>
        <img src="../Media/app.png" id="apl">
        <div id="sup"><?php echo $contacts[$language]['1']?></div>
        <div>
                <a href="https://support.apple.com" id="app"><?php echo $contacts[$language]['2']?></a>      
        </div>
        <div class="dropdown">
            <button class="mainmenubtn"><?php echo $contacts[$language]['3']?></button>
            <div class="dropdown-child">
                <a href="callto:18002752273"><?php echo $contacts[$language]['4']?>:1-800-275-2273</a>
                <a href="callto:18002633394"><?php echo $contacts[$language]['5']?> (English): 1-800-263-3394</a>
                <a href="callto:08007610880"><?php echo $contacts[$language]['6']?>: 0800-761-0880</a>
                <a href="callto:0800220325"><?php echo $contacts[$language]['7']?>: 0800 220325</a>
                <a href="callto:800700527"><?php echo $contacts[$language]['8']?>: 800 700527</a>
                <a href="callto:88005556734"><?php echo $contacts[$language]['9']?>: 8 800 555 6734</a>
                <a href="0800178661"><?php echo $contacts[$language]['10']?>: 0800 178661</a>
            </div>
        </div>
        <p class="more_info"><?php echo $contacts[$language]['11']?>
            <a href="https://www.apple.com" style="color: #A6D23F">https://www.apple.com</a></p>
    </body>
</html>