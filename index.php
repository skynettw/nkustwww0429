<?php
  session_start();
?>
<!doctype html>
<html>
  <head>
    <title>何敏煌的網站</title>
    <?php include "blink.php"; ?>
  </head>
  <body>
    <div class="container">
        <h2>歡迎來到何老師的PHP示範網站</h2>
        <?php include "menu.php"; ?>
        <hr>
        <?php
            //for($i=1; $i<=6; $i++) {
            //    echo "<h$i>Hello</h$i>";
            //}
        ?>

<?php 
    if ($_SESSION["user"]!="admin") 
    {
?>
<form action="login.php" method="POST">
    <table>
        <tr>
            <td align=right>Username:</td>
            <td align=left><input type=text name=username required></td>
        </tr>
        <tr>
            <td align=right>Password:</td>
            <td align=left><input type=password name=password required>
        </td>
        </tr>
        <tr><td colspan=2><input type=submit value="登入"></td></tr>
    </table>
</form>
<?php 
    } else {
        echo "<a href='logout.php' class='btn btn-primary'>登出</a>";
    }
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











