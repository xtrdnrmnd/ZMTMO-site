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
        <title>compare</title>
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
                window.location.href='http://localhost/ZMTMO-site/php/buy.php?language='+language;
            }
        </script>
        <img class="img_buy buy1" src="../Media/front.png" >
        <img class="img_buy buy2" src="../Media/iphone7.png">
        <img class="img_buy buy3" src="../Media/iphone8.png">
        <div class="table_buy"><table border="1">
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
    </body>
</html>