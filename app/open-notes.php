<?php
require_once "data.php";
require_once "functions.php";

$openNotes = getOpenNotes($studentNotes);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Notes</title>
</head>
<body>

    <h1>Open Student Notes</h1>
        <p><a href="./index.php">All notes</a></p>
    <p><a href="./open-notes.php">Open notes</a></p>
    <p><a href="./status-summary.php">Notes summary</a></p>

    <?php foreach ($openNotes as $studentNote) { ?>
        <h2><?php echo $studentNote["student_name"]; ?></h2>
        <p><?php echo $studentNote["note_text"]; ?></p>
    <?php } ?>

</body>
</html>