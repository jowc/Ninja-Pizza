<?php

//connect to database

$connect = mysqli_connect('localhost', 'testadmin', 'testadmin', 'ninja_pizza');

if (!$connect) {
    echo "Connection error: " . mysqli_connect_error();
}
