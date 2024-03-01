<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $company = $_POST["company"];
    $address = $_POST["address"];
    $country = $_POST["country"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $comments = $_POST["comments"];

    $to = "your@email.com"; // Replace with your email address
    $subject = "Mensaje atraves de PEBCO";
    $message = "Name: $name\n";
    $message .= "Company: $company\n";
    $message .= "Address: $address\n";
    $message .= "Country: $country\n";
    $message .= "Phone: $phone\n";
    $message .= "Email: $email\n";
    $message .= "Comments: $comments\n";

    $headers = "From: $email";

    if (mail($to, $subject, $message, $headers)) {
        echo "Thank you for your submission. We will get back to you as soon as possible.";
    } else {
        echo "Oops! Something went wrong. Please try again later.";
    }
}
?>