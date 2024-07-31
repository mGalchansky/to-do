<?php
$servername = "MySQL-8.2";
$database = "to_do_list";
$username = "root";
$password = "";

// Создаем соединение

$conn = mysqli_connect($servername, $username, $password, $database);


// Проверяем соединение

/* if (!$conn) {

    die("Connection failed: " . mysqli_connect_error());

}
echo "Connected successfully";
mysqli_close($conn);*/
?>