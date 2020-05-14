<?php

$connect = mysqli_connect("172.19.0.3", "root", "cc", "shop");

var_dump($connect);

//$query = "CREATE TABLE `users`(`id` INT, `name` VARCHAR(50))";
//mysqli_query($connect, $query);

mysqli_close($connect);

