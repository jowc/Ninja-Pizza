<?php
//conect to database
include "public/config/db.php";

//write query for all pizzas
$sql = 'SELECT title, ingredients, id FROM pizzas ORDER BY created_at';

//make query & get result
$result = mysqli_query($connect, $sql);

// fetch the result row as an array
$pizzas = mysqli_fetch_all($result, MYSQLI_ASSOC);

// Free memory results
mysqli_free_result($result);

// close connection
mysqli_close($connect);

// print_r($pizzas);

?>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="public/assets/style.css" />
    <!-- <link rel="stylesheet" type="text/css" href="test.css"/> -->
    <title> Ninja Pizza </title>
</head>

<body class="w-full min-h-full">

    <?php include "public/components/navigation/header.php" ?>

    <?php include "public/components/base/pizzas.php" ?>

    <?php include "public/components/navigation/footer.php" ?>