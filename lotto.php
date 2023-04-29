<!doctype html>
<html>
  <head>
    <title>何敏煌的網站</title>
    <?php include "blink.php"; ?>
  </head>
  <body>
    <div class="container">
        <h2>樂透預測</h2>
        <?php include "menu.php"; ?>
        <hr>
        <?php
            $numbers = range(1, 42);
            shuffle($numbers);
            for($i=0; $i<6; $i++) {
                echo "<button type='button' " .
                     " class='btn btn-danger'>" . 
                    $numbers[$i] . "</button>&nbsp";
            }
        ?>
    </div>
    <?php include "bscript.php"; ?>
  </body>
</html>
