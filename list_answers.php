<?php
include 'db_connect.php';

$questions_with_answers_query = "
    SELECT q.question_text, q.user_name, a.answer_text
    FROM questions q
    JOIN answers a ON q.id = a.question_id
";
$result = mysqli_query($conn, $questions_with_answers_query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>List of Answers</title>
</head>
<body>
    <h2>Questions with Answers</h2>
    <?php while ($row = mysqli_fetch_assoc($result)): ?>
        <div class="card mt-3">
            <h5><?= htmlspecialchars($row['user_name']) ?> asked: <?= htmlspecialchars($row['question_text']) ?></h5>
            <p>Answer: <?= htmlspecialchars($row['answer_text']) ?></p>
        </div>
    <?php endwhile; ?>
</body>
</html>
