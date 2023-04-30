<?php 
    include "database.php";
    $id = $_GET["id"];
    // 以下這行是用來刪除 $id 的這筆記錄
    $sql = "DELETE FROM bodyinfo WHERE id=$id";
    $conn->query($sql);  // 此行實際執行資料庫操作
    $conn->close();
    header("Location: bodyinfo.php");
?>