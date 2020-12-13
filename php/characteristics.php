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
        <title>characteristics</title>
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
                window.location.href='http://localhost/ZMTMO-site/php/characteristics.php?language='+language;
            }
        </script>
        <table class="table one" border="1">
            <tr>
                <th><?php echo $buy_tex[$language]['0']?></th>
                <td><?php echo $buy_tex[$language]['1']?></td>
            </tr>
            <tr>
                <th><?php echo $buy_tex[$language]['4']?></th>
                <td><?php echo $buy_tex[$language]['5']?></td>
            </tr>
            <tr>
                <th><?php echo $buy_tex[$language]['8']?></th>
                <td><?php echo $buy_tex[$language]['9']?></td>
            </tr>
            <tr>
                <th><?php echo $buy_tex[$language]['12']?></th>
                <td><?php echo $buy_tex[$language]['13']?></td>
            </tr>
        </table>
        <table border="1" class="table two">
            <tr>
                <th><?php echo $charact[$language]['5']?></th>
            </tr>
            <tr>
                <td>16GB</td>
            </tr>
            <tr>
                <td>32GB</td>
            </tr>
            <tr>
                <td>64GB</td>
            </tr>
            <tr>
                <td>128GB</td>
            </tr>
        </table>
        <table border="1" class="table three">
            <tr>
                <th><?php echo $charact[$language]['0']?></th>
            </tr>
            <tr>
                <td><?php echo $charact[$language]['1']?></td>
            </tr>
            <tr>
                <th><?php echo $charact[$language]['2']?></th>
            </tr>
            <tr>
                <th><?php echo $charact[$language]['3']?></th>
            </tr>
            <tr>
                <th><?php echo $charact[$language]['4']?></th>
            </tr>
        </table>
        <article id="prop">
            <?php echo $charact[$language]['6']?><br><ul><li><?php echo $charact[$language]['7']?></li>
            <li><?php echo $charact[$language]['8']?></li>
            <li><?php echo $charact[$language]['9']?></li>
            <li><?php echo $charact[$language]['10']?></li>
            <li><?php echo $charact[$language]['11']?></li>
            <li><?php echo $charact[$language]['12']?></li>
            <li><?php echo $charact[$language]['13']?></li>
            <li><?php echo $charact[$language]['14']?></li>
            <li><?php echo $charact[$language]['15']?></li>
            <li><?php echo $charact[$language]['16']?></li>
            <li><?php echo $charact[$language]['17']?></li></ul><br><br>
            <?php echo $charact[$language]['18']?><br><ul><li><?php echo $charact[$language]['19']?></li>
            <li><?php echo $charact[$language]['20']?></li></ul><br><br>
            <?php echo $charact[$language]['21']?><br><ul><li><?php echo $charact[$language]['22']?></li>
            <li><?php echo $charact[$language]['23']?></li>
            <li><?php echo $charact[$language]['24']?></li>
            <li><?php echo $charact[$language]['25']?></li>
            <li><?php echo $charact[$language]['26']?></li>
            <li><?php echo $charact[$language]['27']?></li>
            <li><?php echo $charact[$language]['28']?></li>
            <li><?php echo $charact[$language]['29']?></li>
            <li><?php echo $charact[$language]['30']?></li>
            <li><?php echo $charact[$language]['31']?></li>
            <li><?php echo $charact[$language]['32']?></li>
            <li><?php echo $charact[$language]['33']?></li>
            <li><?php echo $charact[$language]['34']?></li>
            <li><?php echo $charact[$language]['35']?></li>
            <li><?php echo $charact[$language]['36']?></li>
            <li><?php echo $charact[$language]['37']?></li>
            <li><?php echo $charact[$language]['38']?></li>
            <li><?php echo $charact[$language]['39']?></li>
            <li><?php echo $charact[$language]['40']?></li></ul><br><br>
            <?php echo $charact[$language]['41']?><br><ul>
            <li><?php echo $charact[$language]['42']?></li>
            <li><?php echo $charact[$language]['43']?></li>
            <li><?php echo $charact[$language]['44']?></li>
            <li><?php echo $charact[$language]['45']?></li>
            <li><?php echo $charact[$language]['46']?></li>
            <li><?php echo $charact[$language]['47']?></li>
            <li><?php echo $charact[$language]['48']?></li>
            <li><?php echo $charact[$language]['49']?></li>
            <li><?php echo $charact[$language]['50']?></li>
            <li><?php echo $charact[$language]['51']?></li>
            <li><?php echo $charact[$language]['52']?></li>
            <li><?php echo $charact[$language]['53']?></li>
            <li><?php echo $charact[$language]['54']?></li>
            <li><?php echo $charact[$language]['55']?></li></ul><br><br>
            <?php echo $charact[$language]['56']?><br><ul><li>
            <li><?php echo $charact[$language]['57']?></li>
            <li><?php echo $charact[$language]['58']?></li>
            <li><?php echo $charact[$language]['59']?></li>
            <li><?php echo $charact[$language]['60']?></li>
            <li><?php echo $charact[$language]['61']?></li>
            <li><?php echo $charact[$language]['62']?></li>
            <li><?php echo $charact[$language]['63']?></li></ul><br><br>
            <?php echo $charact[$language]['64']?><br><ul><li><?php echo $charact[$language]['65']?></li>
            <li><?php echo $charact[$language]['66']?></li>
            <li><?php echo $charact[$language]['67']?></li>
            <li><?php echo $charact[$language]['68']?></li>
            <li><?php echo $charact[$language]['69']?></li>
            <li><?php echo $charact[$language]['70']?></li></ul><br><br>
            <?php echo $charact[$language]['71']?><br><ul><li><?php echo $charact[$language]['72']?></li></ul><br><br>
            <?php echo $charact[$language]['73']?><br><ul><li><?php echo $charact[$language]['74']?></li></ul><br><br>
        </article>
    </body>
</html>