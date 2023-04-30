<?php 
    include "database.php";         //進行資料庫的連接工作
    $title = $_POST["title"];       //從表單拿到使用者輸入的消息
    // 以下這行是設定SQL語言，用來插入一筆記錄
    // 因為id和pdate都是由資料庫自動產生的，
    // 所以，我們只要提供title這個欄位就好了
    $sql = "INSERT INTO news (title) VALUES ('$title')";
    $conn->query($sql);  // 真正執行資料庫的操作
    $conn->close();
    header("Location: roadnews.php");
?>