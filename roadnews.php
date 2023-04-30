<?php                 
   include "database.php";
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
            $sql = "SELECT * FROM news";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "id: " . $row["id"]. 
                     " - Name: " . $row["title"]. " " 
                     . $row["pdate"]. "<br>";
            }
            } else {
            echo "0 results";
            }
            $conn->close();

        ?>
    </div>
    <?php include "bscript.php"; ?>
  </body>
</html>
