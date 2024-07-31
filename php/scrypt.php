<?php
$new_tasks = $_POST['new_tasks'];
//echo $new_tasks;
require "db.php";

$sql = "INSERT INTO `tasks` (`tasks`) VALUES ('$new_tasks');";
if(mysqli_query($conn, $sql)){
    echo "Данные успешно добавлены";
} else{
    echo "Ошибка: " . mysqli_error($conn);
}
//mysqli_close($conn);
/*
$result = $db->query('SELECT * FROM `tasks`'); // запрос на выборку
$data = [];
// получаем все строки в цикле по одной и записываем в массив
while($row = $result->fetch_assoc())
    $data[] = $row;


//Подключаем файл с HTML шаблоном
include 'index.php';*/


//header('location: /');
?>