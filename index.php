<!doctype html>
<html>
  <head>
    <title>何敏煌的網站</title>
    <?php include "blink.php"; ?>
  </head>
  <body>
    <div class="container">
        <h2>Welcome to my website!!</h2>
        <hr>
        <?php
            //for($i=1; $i<=6; $i++) {
            //    echo "<h$i>Hello</h$i>";
            //}
        ?>
        西元
        <select>
            <?php
                for($i=1900; $i<=2023; $i++) {
                    echo "<option value='$i'>$i</option>";
                }  
            ?>
        </select>
        年
        <select>
            <?php
                for($i=1; $i<=12; $i++) {
                    echo "<option value='$i'>$i</option>";
                }  
            ?>
        </select>
        月
        <select>
            <?php
                for($i=1; $i<=31; $i++) {
                    echo "<option value='$i'>$i</option>";
                }  
            ?>
        </select>
        日
    </div>
    <?php include "bscript.php"; ?>
  </body>
</html>











