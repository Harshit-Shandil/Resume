<?php
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$enquiry = $_POST['enquiry'];

// Data connection
$conn = new mysqli('localhost', 'root', '', 'portfolio');
if ($conn->connect_error) {
    die('Connection Failed: ' . $conn->connect_error);
} else {
    $stmt = $conn->prepare("INSERT INTO contact_details_2 (name, email, phone, enquiry) VALUES (?, ?, ?, ?)");
    
    // Assuming 'phone' is an integer column
    $stmt->bind_param("ssis", $name, $email, $phone, $enquiry);
    $stmt->execute();
    
    echo "Message sent successful";
    
    $stmt->close();
    $conn->close();
}
?>
