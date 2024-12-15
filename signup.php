<?php
include 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    // Server-side email and phone validation
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<h2>Invalid email format</h2>";
        exit();
    }

    if (!preg_match("/^[0-9]{10}$/", $phone)) {
        echo "<h2>Invalid phone number. It must be 10 digits.</h2>";
        exit();
    }

    // Check if username already exists
    $check = $conn->query("SELECT * FROM users WHERE username='$username'");
    if ($check->num_rows > 0) {
        echo "<h2>Username already exists!</h2>";
    } else {
        $sql = "INSERT INTO users (username, email, phone, password) VALUES ('$username', '$email', '$phone', '$password')";
        if ($conn->query($sql) === TRUE) {
            echo '<h2>Signup Successful!</h2>';
            echo '<p>User registered successfully. Please <a href="index.html">login here</a> with your credentials.</p>';
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}
$conn->close();
?>
