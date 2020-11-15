<!DOCTYPE html>
<html>
    <head>
        <title>buy</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="style2.css">
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@600&display=swap" rel="stylesheet">
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
        <header>
            <a href="index.php"><img src="Media/logo1.svg" id="logo"></a>
            <a href="characteristics.php" >Characteristics</a>
            <a href="media.php" >Media</a>
            <a href="user_exp.php" >Comments</a>
            <a href="accessories.php" >Accessories</a>
            <a href="buy.php" style="color: #A6D23F;">Compare</a>
            <a href="contacts.php">Contacts</a>
            <select onchange="set_language()" name="language" id="language" class="lang">
                        <option value="en">ENG</option>
                        <option value="ru">RU</option>
                        <option value="sk">SK</option>
                    </select>
            <hr>
        </header>
        <img class="img" src="Media/front.png" style="left: 200px;">
        <img class="img" src="Media/photos/iphone7.png" style="left: 600px;">
        <img class="img" src="Media/photos/iphone8.png" style="left: 1000px;">
        <div style="position: absolute; height: 800px;margin-bottom: 300px;width: 100%"><table border="1">
            <tr>
                <th>Height:</th>
                <td>5.44 inches (138.3 mm)</td>
                <td>5.44 inches (138.3 mm)</td>
                <td>5.45 inches (138.4 mm)</td>
            </tr>
            <tr>
                <th>Width:</th>
                <td>2.64 inches (67.1 mm)</td>
                <td>2.64 inches (67.1 mm)</td>
                <td>2.65 inches (67.3 mm)</td>
            </tr>
            <tr>
                <th>Depth:</th>
                <td>0.28 inch (7.1 mm)</td>
                <td>0.28 inch (7.1 mm)</td>
                <td>0.29 inch (7.3 mm)</td>
            </tr>
            <tr>
                <th>Weight:</th>
                <td>5.04 ounces (143 grams)</td>
                <td>4.87 ounces (138 grams)</td>
                <td>5.22 ounces (148 grams)</td>
            </tr>
            </table></div>
        <footer>
            <hr>
            <a href="mailto:xtrdnrmnd@gmail.com">xtrdnrmnd@gmail.com</a>
            <br>©xtrdnrmnd 2020
        </footer>
    </body>
</html>