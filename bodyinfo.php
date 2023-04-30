<?php                 
   session_start();
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
        <h2 class="alert alert-primary">身體健康管理</h2>
        <?php include "menu.php"; ?>
        <hr>
        <?php
            if($_SESSION["user"]=="admin") {
        ?>
        <form action="addnews.php" method="POST">
        馬路消息：<input type=text size=100 name=title required>
        <input type=submit value="新增"><br>
        </form>
        <?php 
            }
        ?>

        <?php
            $sql = "SELECT * FROM bodyinfo order by id desc";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                echo "<table class='table table-striped table-hover'>";
                echo "<tr><th>姓名</th><th>身高</th><th>體重</th>";
                if($_SESSION["user"]=="admin") {
                    echo "<th>管理</th>";
                }
                echo "</tr>";
                while($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["name"]    . "</td>" .  
                         "<td>" . $row["h"] . "</td>" .  
                         "<td>" . $row["w"] . "</td>";
                    if($_SESSION["user"]=="admin") {
                        echo "<td><a href='delete.php?id=" .
                        $row["id"] . "' class='btn btn-sm btn-outline-danger'>刪除</td>";
                    }
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
