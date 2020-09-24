<?php
//conect to database
$connect = mysqli_connect('localhost', 'testadmin', 'testadmin', 'ninja_pizza');

if (!$connect) {
    echo "Connection error: " . mysqli_connect_error();
}

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
    <title> <?php echo $title; ?></title>
</head>

<body class="w-full min-h-full flex flex-col justify-start inline-flex items-start flex-none">

    <?php include "public/components/navigation/header.php" ?>

    <?php include "public/components/base/pizzas.php" ?>

    <?php include "public/components/navigation/footer.php" ?>