<!DOCTYPE html>
<html>
    <head>
        <title>other</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="style2.css">
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@600&display=swap" rel="stylesheet">
        <style>
            .text_other {
                font-family: 'Roboto Mono', monospace;
                color:#A6D23F;
                font-size:30px;
                position:absolute;
            }
            .tex2 {
                font-family: 'Roboto Mono', monospace;
                color: white;
                position: absolute;
            }
        </style>
    </head>
    <body>
        <header>
            <a href="index.php"><img src="Media/logo.png" id="logo"></a>
            <a href="characteristics.php" >Characteristics</a>
            <a href="media.php" style="color: #A6D23F;">Media</a>
            <a href="user_exp.php" >Comments</a>
            <a href="accessories.php">Accessories</a>
            <a href="buy.php" >Compare</a>
            <a href="contacts.php">Contacts</a>
            <select onchange="set_language()" name="language" id="language" class="lang">
                <option value="en">ENG</option>
                <option value="ru">RU</option>
                <option value="sk">SK</option>
            </select>
            <hr>
        </header>
        <p class="text_other" style="top:200px; left:100px;">GIFS</p>
        <img src="Media/gifs/one.gif" style="position:absolute; top: 300px; left:300px;height:400px;">
        <img src="Media/gifs/two.gif" style="position:absolute; top: 300px; left:900px;height:400px;">
        <p class="text_other" style="top:700px; left:100px;">RINGTONES</p>
        <audio style="position: absolute; top: 800px; left:100px;" controls>
            <source src="Media/audios/opening.mp3" type="audio/mpeg">
        </audio>
        <audio style="position: absolute; top: 800px; left:450px;" controls>
            <source src="Media/audios/audio2.mp3" type="audio/mpeg">
        </audio>
        <audio style="position: absolute; top: 800px; left:800px;" controls>
            <source src="Media/audios/audio3.mp3" type="audio/mpeg">
        </audio>
        <div class="tex2" style="top: 900px; left:100px;"><ul><li>Apex</li>
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
        <footer>
            <hr>
            <a href="mailto:xtrdnrmnd@gmail.com">xtrdnrmnd@gmail.com</a>
            <br>©xtrdnrmnd 2020
        </footer>
    </body>
</html>