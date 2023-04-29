<?php                 
   $currency = array("美金"=>30.4, 
                     "港幣"=>3.76,
                     "英鎊"=>37.5,
                     "澳幣"=>19.93);
?>
<!doctype html>
<html>
  <head>
    <title>何敏煌的網站</title>
    <?php include "blink.php"; ?>
  </head>
  <body>
    <div class="container">
        <h2>台幣換算</h2>
        <?php include "menu.php"; ?>
        <hr>
        <form action="rate.php" method="POST">
        幣別：
        <select name="ctype">
        <?php 
            foreach(array_keys($currency) as $curr) {
                echo "<option value='$curr'>$curr</option>";
            }
        ?>
        </select>
        <input type=text size=10 name=dollar required>元 
        <input type=submit value="開始換算">
        </form>

        <?php
            $dollar = $_POST["dollar"];
            $ctype = $_POST["ctype"];
            if ($dollar!="") {
                $ntd = $dollar * $currency[$ctype];
                echo $ctype . 
                    $dollar . "元等於台幣" . 
                    $ntd . "元";
            }
        ?>
    </div>
    <?php include "bscript.php"; ?>
  </body>
</html>
