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
        美金：<input type=text size=10 name=usd required>元 
        <input type=submit value="開始換算">
        </form>

        <?php
            $usd = $_POST["usd"];
            if ($usd!="") {
                $ntd = $usd * 30.34;
                echo "美金" . 
                    $usd . "元等於台幣" . 
                    $ntd . "元";
            }
        ?>
    </div>
    <?php include "bscript.php"; ?>
  </body>
</html>
