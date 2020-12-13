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
                window.location.href='http://localhost/ZMTMO-site/php/comments.php?language='+language;
            }
        </script>
                <form action="" method="POST">
            <label> <?php echo $user_exp[$language]['0']?>
                <input type="text" name="Name" class="comment_name" required>
            </label><br><br>
            <label><?php echo $user_exp[$language]['1']?><br>
                <textarea name="Comment" class="comment_section" required></textarea>
            </label><br><br>
            <input type="submit" name="Submit" value="<?php echo $user_exp[$language]['2']?>" id="sub_btn">
        </form>
        <section class="commentSection">
            <?php
                #Read comments
                 $read = fopen("../comments.txt", "r+t");
                 echo "<br><br>Comments<br><br><hr>".fread($read, 1024);
                 fclose($read);
            ?>
        </section> 
    </body>
</html>

<?php
 
 if(isset($_POST['Submit'])){
  /*print "<h1>Your comment has been submitted!</h1>";*/
  $Name = $_POST['Name'];
  $Comment = $_POST['Comment'];
  #Get old comments
  $old = fopen("../comments.txt", "r+t");
  $old_comments = fread($old, 1024);
  #Delete everything, write down new and old comments
  $write = fopen("../comments.txt", "w+");
  $string = "<b>".$Name."</b><br>".$Comment."<br>\n".$old_comments;
  fwrite($write, $string);
  fclose($write);
  fclose($old);
 }
?>