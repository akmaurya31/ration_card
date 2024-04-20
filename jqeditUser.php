<?php
// Connect to your MySQL database
require_once("dbConnection.php");


print_r($_POST);
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and validate the input
    $name = $_POST['name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $contactDetail = $_POST['contactDetail'];
    $password = $_POST['password'];
    $pay_date = $_POST['pay_date'];
    $pay =$_POST['status'];

    // Set user_id, assuming it comes from somewhere in your application
    $user_id = $_POST['uid'];

    // Update the user information directly in the SQL query
    $sql = "UPDATE users SET name='$name', username='$username', email='$email', contact_number='$contactDetail', password='$password',pay='$pay',pay_date='$pay_date' WHERE id=$user_id";

    // Execute the query
    if ($mysqli->query($sql) === TRUE) {
        echo "User information updated successfully.";
    } else {
        echo "Error updating user information: " . $mysqli->error;
    }
}

// Close connection
$mysqli->close();
?>
