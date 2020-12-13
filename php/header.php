<?php
include ('lang_mutations.php');
?>
<header>
            <a href="index.php?language=<?php echo $language?>"><img src="../Media/logo1.svg" id="logo"></a>
            <a href="characteristics.php?language=<?php echo $language?>"><?php echo $top_nav[$language]['0']?></a>
            <a href="media.php?language=<?php echo $language?>" <?php setcookie("lang", $language); ?>><?php echo $top_nav[$language]['1']?></a>
            <a href="comments.php?language=<?php echo $language?>"><?php echo $top_nav[$language]['2']?></a>
            <a href="accessories.php?language=<?php echo $language?>"><?php echo $top_nav[$language]['3']?></a>
            <a href="buy.php?language=<?php echo $language?>"><?php echo $top_nav[$language]['4']?></a>
            <a href="contacts.php?language=<?php echo $language?>"><?php echo $top_nav[$language]['5']?></a>
            <hr>
</header>
<div class="dropdownn">
    <button class="mainmenubtnn">Menu</button>
      <div class="dropdownn-child">
          <a href="index.php?language=<?php echo $language?>"><?php echo $top_nav[$language]['6']?></a>
            <a href="characteristics.php?language=<?php echo $language?>"><?php echo $top_nav[$language]['0']?></a>
            <a href="media.php?language=<?php echo $language?>" <?php setcookie("lang", $language); ?>><?php echo $top_nav[$language]['1']?></a>
            <a href="comments.php?language=<?php echo $language?>"><?php echo $top_nav[$language]['2']?></a>
            <a href="accessories.php?language=<?php echo $language?>"><?php echo $top_nav[$language]['3']?></a>
            <a href="buy.php?language=<?php echo $language?>"><?php echo $top_nav[$language]['4']?></a>
            <a href="contacts.php?language=<?php echo $language?>"><?php echo $top_nav[$language]['5']?></a>
    </div>
</div>
    