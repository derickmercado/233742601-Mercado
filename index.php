<!--From formspree.com-!>

<?php
include("index.html");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];

    $to = "derick.mercado2124@gmail.com"; 
    $subject = "New Survey Submission";
    $message = "Name: $name\nEmail: $email";
    $headers = "From: $email";

    if (mail($to, $subject, $message, $headers)) {
        echo "Thank you! Your survey has been submitted.";
    } else {
        echo "Sorry, something went wrong. Please try again.";
    }
}
?>
