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
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script>
            function set_language() {
                var language=jQuery('#language').val();
                window.location.href='http://localhost/ZMTMO-site/php/buy.php?language='+language;
            }
        </script>
        <img class="img" src="../Media/front.png" style="left: 200px;">
        <img class="img" src="../Media/photos/iphone7.png" style="left: 600px;">
        <img class="img" src="../Media/photos/iphone8.png" style="left: 1000px;">
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
    </body>
</html>