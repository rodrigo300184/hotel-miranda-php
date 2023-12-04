<?php

require_once('setup.php');

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $full_name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $phone_number = htmlspecialchars($_POST["phone"]);
    $subject_of_review = htmlspecialchars($_POST["subject"]);
    $review_body = htmlspecialchars($_POST["contactMessage"]);
    $sql = "INSERT INTO contact (full_name, email, phone_number, subject_of_review, review_body) 
                VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssss", $full_name, $email, $phone_number, $subject_of_review, $review_body);
    if ($stmt->execute()) {
        $notification = array('message' => 'Thank you! Your review has been sent to our team.', 'error' => false);
        echo $blade->run('contact', ['notification' =>  $notification]);
    } else {
        $notification = array('message' => 'Ops! Something went wrong. Form not sent!', 'error' => true);
        echo $blade->run('contact', ['notification' =>  $notification]);
    }
    $stmt->close();
} else {
    echo $blade->run('contact');
}
$conn->close();
