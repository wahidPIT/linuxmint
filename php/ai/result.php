<?php
if (!isset($_GET['score'])) {
    header("Location: index.php");
    exit();
}

$score = intval($_GET['score']);
$rating = ($score / 4) * 100; // Assuming 4 questions

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz Result</title>
</head>
<body>
    <h1>Your Score: <?php echo $score; ?>/4</h1>
    <h2>Rating: <?php echo $rating; ?>%</h2>
    <a href="index.php">Take the Quiz Again</a>
</body>
</html>