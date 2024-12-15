<?php
include 'db_connect.php';
session_start();  // Start the session

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize user input to prevent SQL injection
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = $_POST['password'];  // Password is hashed, so no need to sanitize further

    // Use prepared statement to securely query the database
    $stmt = $conn->prepare("SELECT * FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();

        // Verify the hashed password
        if (password_verify($password, $user['password'])) {
            // Set session variables for logged-in user
            $_SESSION['username'] = $user['username'];
            $_SESSION['user_id'] = $user['id'];  // Assuming you have an 'id' column in the users table

            // Redirect to welcome page after successful login
            header("Location: welcome.php");
            exit();  // Stop script execution after redirection
        } else {
            // Show error if the password is invalid
            echo "<script>alert('Invalid password');</script>";
        }
    } else {
        // Show error if the username is not found
        echo "<script>alert('User not found');</script>";
    }

    // Close the statement
    $stmt->close();
}

// Close the database connection
$conn->close();
?>
