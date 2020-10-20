<?php

include('public/config/db.php');
//if Get has data passed
if (isset($_GET['id'])) {
    $id = mysqli_escape_string($connect, $_GET['id']);
    $sql = "SELECT * FROM pizzas WHERE id = $id";
    $result = mysqli_query($connect, $sql);
    $pizza = mysqli_fetch_assoc($result);
    // mysqli_free_result($pizza);
    // mysqli_close($pizza);
}
// print_r($pizza);
?>
<!Doctype HTML>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="public/assets/style.css" />
    <title>Pizza Details Here</title>
</head>

<body class="w-full min-h-full">

    <?php include "public/components/navigation/header.php" ?>

    <div class="mx-auto my-16 text-center bg-gray-300 max-w-5xl pt-12 rounded">
        <?php if ($pizza) : ?>
            <h1 class="text-3xl"><?php echo htmlspecialchars($pizza['title']); ?></h1>
            <p class="mt-3 text-xl">Ingredients: <?php echo htmlspecialchars($pizza['ingredients']); ?></p>
            <p class="mt-3 text-xl">Email: <?php echo htmlspecialchars($pizza['email']); ?></p>
            <p class="mt-3 text-xl">Added: <?php echo htmlspecialchars($pizza['created_at']); ?></p>
            <div class="bg-gray-200 flex mt-12 text-white">
                <div class=" w-6/12 justify-start my-4">
                    <button class="p-4 bg-red-700 rounded-md">Delete</button>
                </div>
                <div class="  w-6/12 justify-end my-4">
                    <button class="p-4 bg-blue-400 rounded-md">Return</button>
                </div>
            </div>
        <?php else : ?>
            <h1 class="text-2xl ">Error 404:</h1>
            <p class="text-xl mt-3 capitalize pb-6">no such pizza :(</p>
        <?php endif ?>
    </div>



    <?php include "public/components/navigation/footer.php" ?>