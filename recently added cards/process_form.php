<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];

    $to = "jyotishmoykonwar365@gmail.com";  // Replace with your email address
    $subject = "New Form Submission";
    $message = "Name: $name\nEmail: $email\nPhone: $phone";

    // Use the mail() function to send the email
    mail($to, $subject, $message);

    echo "Form submitted successfully!";
} else {
    // If someone tries to access this script directly
    echo "Access denied.";
}
?>
