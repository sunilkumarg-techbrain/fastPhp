<?php
    $host='localhost';
    $username='root';
    $password='BlueVegan@5';
    $dbname = "my_db";
    $conn=mysqli_connect($host,$username,$password,"$dbname");
    if(!$conn)
        {
          die('Could NOT Connect to MySql Server:');
        }
?>