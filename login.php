<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="public/assets/style.css" />
    <title> Log In </title>
</head>

<body class="">
    <?php include 'public/components/navigation/header.php' ?>

    <div class="w-full my-32">
        <div class="max-w-5xl mx-auto">
            <form action="add.php" method="POST" class="bg-gray-200 py-12 px-8 capitalize text-center rounded-lg shadow w-9/12 mx-auto">
                <div>
                    <h1 class="font-bold text-gray-800 text-2xl">
                        Log In
                    </h1>
                </div>
                <div class="mt-6">
                    <input type="text" id="alias" name="alias" placeholder="Username*" class=" pl-3 py-3 shadow rounded w-6/12" required>
                </div>
                <div class="mt-4">
                    <input type="password" id="pwd" name=pwd" placeholder="Password*" class=" pl-3 py-3 shadow rounded w-6/12" required>
                </div>
                <div class="mt-6">
                    <button name="button" class=" px-4 py-2 shadow rounded antialiased">Log In</button>
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

</body>

</html>