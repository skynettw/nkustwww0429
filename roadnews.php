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
        <br>
        <h2 class="alert alert-primary">高科馬路消息</h2>
        <?php include "menu.php"; ?>
        <hr>
        <form action="addnews.php" method="POST">
        馬路消息：<input type=text size=100 name=title required>
        <input type=submit value="新增"><br>
        </form>
        <?php
            $sql = "SELECT * FROM news order by pdate desc";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                echo "<table class='table table-striped table-hover'>";
                echo "<tr><th>編號</th><th>馬路消息</th><th>張貼日期</th></tr>";
                while($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["id"]    . "</td>" .  
                         "<td>" . $row["title"] . "</td>" .  
                         "<td>" . $row["pdate"] . "</td>";
                    echo "</tr>";
                }
                echo "</table>";
            } else {
                echo "0 results";
            }
            $conn->close();

        ?>
    </div>
    <?php include "bscript.php"; ?>
  </body>
</html>
