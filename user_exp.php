<!DOCTYPE html>
<html>
    <head>
        <title>user</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="style2.css">
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@600&display=swap" rel="stylesheet">
    </head>
    <body>
        <header>
            <a href="index.php"><img src="Media/logo1.svg" id="logo"></a>
            <a href="characteristics.php" >Characteristics</a>
            <a href="media.php" >Media</a>
            <a href="user_exp.php" style="color: #A6D23F;">Comments</a>
            <a href="accessories.php" >Accessories</a>
            <a href="buy.php" >Compare</a>
            <a href="contacts.php">Contacts</a>
            <select onchange="set_language()" name="language" id="language" class="lang">
                <option value="en" >ENG</option>
                <option value="ru" >RU</option>
                <option value="sk" >SK</option>
            </select>
            <hr>
        </header>
        <form action="" method="POST">
            <label> Name:
                <input type="text" name="Name" style="width: 295px" required>
            </label><br><br>
            <label> Comment: <br>
                <textarea name="Comment" style="width: 400px; height: 250px;" required></textarea>
            </label><br><br>
            <input type="submit" name="Submit" value="Submit Comment" id="sub_btn">
        </form>
        <footer>
            <hr>
            <a href="mailto:xtrdnrmnd@gmail.com">xtrdnrmnd@gmail.com</a>
            <br>©xtrdnrmnd 2020
        </footer>
    </body>
</html>
<?php
 
 if(isset($_POST['Submit'])){
  print "<h1>Your comment has been submitted!</h1>";
  $Name = $_POST['Name'];
  $Comment = $_POST['Comment'];
  #Get old comments
  $old = fopen("comments.txt", "r+t");
  $old_comments = fread($old, 1024);
  #Delete everything, write down new and old comments
  $write = fopen("comments.txt", "w+");
  $string = "<b>".$Name."</b><br>".$Comment."<br>\n".$old_comments;
  fwrite($write, $string);
  fclose($write);
  fclose($old);
 }
 #Read comments
 $read = fopen("comments.txt", "r+t");
 echo "<br><br>Comments<hr>".fread($read, 1024);
 fclose($read);

?>