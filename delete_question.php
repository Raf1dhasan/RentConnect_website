<?php
include 'db_connect.php';

if (isset($_GET['id'])) {
    $question_id = $_GET['id'];

    $delete_question_query = "DELETE FROM questions WHERE id='$question_id'";
    if (mysqli_query($conn, $delete_question_query)) {
        header("Location: list_questions.php");
        exit();
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>
