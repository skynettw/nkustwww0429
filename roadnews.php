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
        <h2>高科馬路消息</h2>
        <?php include "menu.php"; ?>
        <hr>
        <form action="bmi.php" method="POST">
        身高：<input type=text size=10 name=h required>公分<br>
        體重：<input type=text size=10 name=w required>公斤<br>
        <input type=submit value="開始計算"><br>
        </form>
        <?php


        ?>
    </div>
    <?php include "bscript.php"; ?>
  </body>
</html>
