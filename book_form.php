<?php

$localhost = "localhost";
$username = "root";
$password = "";
$db_booking = "book_form";

$conn = mysqli_connect($localhost, $username, $password, $db_booking);

if (isset($_POST['send'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $location = $_POST['location'];
    $guests = $_POST['guests'];
    $arrivals = $_POST['arrivals'];
    $leaving = $_POST['leaving'];

    $request = "insert into booking(name, email, phone, address, location, guests, arrivals, leaving) values ('$name', '$email', '$phone','$address','$location','$guests','$arrivals','$leaving')";

    mysqli_query($conn, $request);

    header('location:book.php');
} else {
    echo "somethine went wrong try again";
}
