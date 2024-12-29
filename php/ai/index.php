<?php
session_start();

// Define questions and answers
$questions = [
    [
        'question' => 'What is 5 + 3?',
        'options' => [6, 7, 8, 9],
        'answer' => 8
    ],
    [
        'question' => 'What is 12 - 4?',
        'options' => [6, 7, 8, 9],
        'answer' => 8
    ],
    [
        'question' => 'What is 3 * 4?',
        'options' => [10, 11, 12, 13],
        'answer' => 12
    ],
    [
        'question' => 'What is 16 / 4?',
        'options' => [2, 3, 4, 5],
        'answer' => 4
    ],
];

if (!isset($_SESSION['current_question'])) {
    $_SESSION['current_question'] = 0;
    $_SESSION['score'] = 0;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $selected_answer = $_POST['answer'];
    $correct_answer = $questions[$_SESSION['current_question']]['answer'];

    if ($selected_answer == $correct_answer) {
        $_SESSION['score']++;
        $feedback = "Correct! Your score is: " . $_SESSION['score'];
    } else {
        $feedback = "Wrong! The correct answer was: " . $correct_answer;
    }

    $_SESSION['current_question']++;
}

if ($_SESSION['current_question'] >= count($questions)) {
    $final_score = $_SESSION['score'];
    session_destroy();
    header("Location: result.php?score=$final_score");
    exit();
}

$current_question = $questions[$_SESSION['current_question']];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator Quiz</title>
</head>
<body>
    <h1>Calculator Quiz</h1>
    <form method="POST">
        <p><?php echo $current_question['question']; ?></p>
        <?php foreach ($current_question['options'] as $option): ?>
            <label>
                <input type="radio" name="answer" value="<?php echo $option; ?>" required>
                <?php echo $option; ?>
            </label><br>
        <?php endforeach; ?>
        <button type="submit">Next</button>
    </form>
    <?php if (isset($feedback)): ?>
        <p><?php echo $feedback; ?></p>
    <?php endif; ?>
</body>
</html>