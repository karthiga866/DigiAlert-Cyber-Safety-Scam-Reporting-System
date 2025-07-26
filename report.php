<?php
include 'connect.php';

$name = isset($_POST['name']) ? $_POST['name'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$scamType = isset($_POST['scamType']) ? $_POST['scamType'] : '';
$description = isset($_POST['description']) ? $_POST['description'] : '';

if ($name && $email && $scamType && $description) {
    $stmt = $db->prepare("INSERT INTO reports (name, email, scam_type, description) 
                          VALUES (:name, :email, :scam_type, :description)");
    $stmt->bindValue(':name', $name, SQLITE3_TEXT);
    $stmt->bindValue(':email', $email, SQLITE3_TEXT);
    $stmt->bindValue(':scam_type', $scamType, SQLITE3_TEXT);
    $stmt->bindValue(':description', $description, SQLITE3_TEXT);

    if ($stmt->execute()) {
        echo "Report submitted successfully!";
    } else {
        echo "Error submitting report.";
    }
} else {
    echo "All fields are required.";
}
?>
