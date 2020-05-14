<?php

$connect = mysqli_connect("172.19.0.3", "him", "los", "testing");

echo "<pre>";
var_dump($connect);
echo "</pre>";
//$query = "CREATE TABLE `users`(`id` INT, `name` VARCHAR(50))";
//mysqli_query($connect, $query);

mysqli_close($connect);

