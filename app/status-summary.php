<?php
require_once "data.php";
require_once "functions.php";

$totalNotes = count($studentNotes);
$openNotes = countOpenNotes($studentNotes);
$closedNotes = countClosedNotes($studentNotes);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Notes</title>
</head>

<body>

    <h1>Student Notes Status Summary</h1>
    <p><a href="./index.php">All notes</a></p>
    <p><a href="./open-notes.php">Open notes</a></p>
    <p><a href="./status-summary.php">Notes summary</a></p>
    <p>Total notes: <?php echo $totalNotes; ?></p>
    <p>Open notes: <?php echo $openNotes; ?></p>
    <p>Closed notes: <?php echo $closedNotes; ?></p>

</body>

</html>