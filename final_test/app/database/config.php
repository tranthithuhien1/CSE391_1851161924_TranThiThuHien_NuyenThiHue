<?php
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $db   = 'blog';
    $conn = mysqli_connect($host,$user,$pass, $db);
    if(!$conn){
        die("Không thể kết nối");
    }
?>