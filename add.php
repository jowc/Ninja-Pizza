<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="public/assets/style.css" />
    <title> Add Pizza </title>
</head>

<body class="">
    <?php include 'public/components/navigation/header.php' ?>

    <div class="w-full my-32">
        <div class="max-w-5xl mx-auto">
            <form action="add.php" method="GET" class="bg-gray-200 py-12 px-8 capitalize text-center rounded-lg shadow w-9/12 mx-auto">
                <div>
                    <h1 class="font-bold text-gray-800 text-2xl">
                        Add Pizza
                    </h1>
                </div>
                <div class="mt-6">
                    <input type="text" id="title" name="title" placeholder="Ingredient title*" class=" pl-3 py-3 shadow rounded w-6/12" required>
                </div>
                <div class="mt-4">
                    <input type="email" id="email" name="email" placeholder="Email address*" class=" pl-3 py-3 shadow rounded w-6/12" required>
                </div>
                <div class="mt-4">
                    <input type="text" id="Ingredient" name="ingredient" placeholder="Ingredients eg maize, rice*" class=" pl-3 py-3 shadow rounded w-6/12" required>
                </div>
                <div class="mt-6">
                    <button name="button" class=" px-4 py-2 shadow rounded antialiased">Add Pizza</button>
                </div>
                <div class="mt-4">
                    <p class="text-red-700">
                        <?php $errors ?>
                    </p>
                </div>
            </form>
        </div>
    </div>

    <?php include 'public/components/navigation/footer.php' ?>

    <?php

    include "public/config/db.php";

    $errors = array('title' => '', 'ingredients' => '', 'email' => '');

    // check if form has been sent with data 

    if (isset($_GET['button'])) {
        if (empty($_GET['title'])) {
            $errors['title'] = "you must fill title";
        }
        if (empty($_GET['ingredient'])) {
            $errors['ingredients'] = "you must fill comma seperated values";
        }
        if (empty($_GET['email'])) {
            $errors['email'] = "fill in your email";
        }

        // check if form elements contains data or not.

        if (array_filter($errors)) {
            header('location: index.php');
        }

        if (!empty($_GET['title']) && !empty($_GET['ingredient']) && !empty($_GET['email'])) {
            $title = mysqli_escape_string($connect, $_GET['title']);
            $email = mysqli_escape_string($connect, $_GET['email']);
            $ingredient = mysqli_escape_string($connect, $_GET['ingredient']);

            //sql insert query
            $sql = "INSERT INTO pizzas(title, ingredients, email) VALUES('$title', '$ingredient', '$email')";
            if (mysqli_query($connect, $sql)) {
                //success
                header("location:index.php");
            } else {
                echo "Error: " . mysqli_error($connect);
            }
        }
    }

    ?>