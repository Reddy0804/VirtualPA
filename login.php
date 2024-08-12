<?php
$uname = $_POST['uname'];
$password1 = $_POST['password1'];

$server = "localhost";
$username = "root";
$password_db = "";
$database = "loginpage";

$conn = new mysqli($server, $username, $password_db, $database);

if($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM register WHERE uname = '$uname' AND password1 = '$password1'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Redirect to success page
    header("Location: home.html");
    exit;
} else {
    echo "Invalid username or password.";
}

$conn->close();
?>
