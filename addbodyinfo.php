<?php 
    include "database.php";         //進行資料庫的連接工作
    $name = $_POST["name"];       
    $h = $_POST["h"];       
    $w = $_POST["w"];       
    $sql = "INSERT INTO bodyinfo (name, h, w) VALUES ('$name', '$h', '$w')";
    $conn->query($sql);  // 真正執行資料庫的操作
    $conn->close();
    header("Location: bodyinfo.php");
?>