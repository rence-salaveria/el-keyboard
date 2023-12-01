<?php
// set the variables from form input (name, email, subject, message)
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$conn = new mysqli('localhost', 'root', '', 'el_keyboard');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query to insert a record into the "contact_submissions" table
$sql = "INSERT INTO contact_form_submissions (name, email, message, subject) VALUES ('$name', '$email', '$message', '$subject')";

// Execute the query
if ($conn->query($sql) === TRUE) {
    // replace with confirmation page
    echo "Record inserted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>
