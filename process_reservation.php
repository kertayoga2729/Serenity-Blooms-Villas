<?php
include 'includes/db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $check_in = $_POST['check_in'];
    $check_out = $_POST['check_out'];
    $guests = $_POST['guests'];
    $message = $_POST['message'];

    $sql = "INSERT INTO reservations (name, email, phone, check_in, check_out, guests, message)
            VALUES ('$name', '$email', '$phone', '$check_in', '$check_out', '$guests', '$message')";

    if ($conn->query($sql) === TRUE) {
        echo "Reservasi berhasil!";
    } else {
        echo "Error: " . $conn->error;
    }

    $conn->close();
}
?>