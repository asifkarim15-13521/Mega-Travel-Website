<?php
// book_form.php

$connection = mysqli_connect('localhost','root','','book_db');

if (isset($_POST['send'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $location = $_POST['location'];
    $guests = $_POST['guests'];
    $arrivals = $_POST['arrivals'];
    $leaving = $_POST['leaving'];

    $request = "INSERT INTO book_form (name, email, phone, address, location, guests, arrivals, leaving) 
                VALUES ('$name', '$email', '$phone', '$address', '$location', '$guests', '$arrivals', '$leaving')";
    mysqli_query($connection, $request);

    session_start();
    $_SESSION['success_message'] = "<br><h3>Booking successfull.</h3><br>";
    header('location:book.php'); 
} else {
    echo '<br><h3>Something went wrong, please try again!</h2?<br>';
}
?>
