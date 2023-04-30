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
        <h2>BMI計算</h2>
        <?php include "menu.php"; ?>
        <hr>
        <form action="bmi.php" method="POST">
        身高：<input type=text size=10 name=h required>公分<br>
        體重：<input type=text size=10 name=w required>公斤<br>
        <input type=submit value="開始計算"><br>
        </form>
        <?php
            $h = $_POST["h"];
            $w = $_POST["w"];
            if($h!="" && $w!="") {
                $bmi =round($w / ($h/100)**2, 2);
                echo "BMI:$bmi<br>";
                if ($bmi<18.5) {
                    echo "你的體重過輕！<br>";
                } else if ($bmi>=18.5 && $bmi<24) {
                    echo "你的體重剛剛好！<br>";
                } else {
                    echo "<p style='color:white;background-color:red;'>你有點點小胖，要小心身體健康喔！</p><br>";
                }
            }
        ?>
    </div>
    <?php include "bscript.php"; ?>
  </body>
</html>
