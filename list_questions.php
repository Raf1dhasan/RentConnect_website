<?php
include 'db_connect.php';

// Fetch all questions
$questions_query = "SELECT * FROM questions ORDER BY created_at DESC";
$questions_result = mysqli_query($conn, $questions_query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>List of Questions</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>All Questions</h2>
        <?php while ($question = mysqli_fetch_assoc($questions_result)): ?>
            <div class="card mt-3">
                <div class="card-body">
                    <h5 class="card-title"><?= htmlspecialchars($question['user_name'] ?? 'Unknown User') ?>:</h5>
                    <p class="card-text"><?= htmlspecialchars($question['question']) ?></p>

                    <!-- Display Answers -->
                    <h6>Answers:</h6>
                    <?php
                    $answers_query = "SELECT * FROM answers WHERE question_id = " . $question['id'];
                    $answers_result = mysqli_query($conn, $answers_query);
                    if (mysqli_num_rows($answers_result) > 0) {
                        while ($answer = mysqli_fetch_assoc($answers_result)) {
                            echo "<p>" . htmlspecialchars($answer['answer']) . "</p>";
                        }
                    } else {
                        echo "<p>No answers yet.</p>";
                    }
                    ?>

                    <!-- Answer Form -->
                    <form action="submit_answer.php" method="POST" class="mt-3">
                        <input type="hidden" name="question_id" value="<?= $question['id'] ?>">
                        <div class="mb-3">
                            <input type="text" name="answer_text" class="form-control" placeholder="Your Answer" required>
                        </div>
                        <button type="submit" class="btn btn-success">Submit Answer</button>
                        <a href="delete_question.php?id=<?= $question['id'] ?>" class="btn btn-danger">Delete Question</a>
                    </form>
                </div>
            </div>
        <?php endwhile; ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
