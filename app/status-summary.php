<?php
require_once "data.php";

$totalNotes = count($studentNotes);
$openNotes = 0;
$closedNotes = 0;

foreach ($studentNotes as $studentNote) {
    if ($studentNote["status"] === "open") {
        $openNotes++;
    }
}

foreach ($studentNotes as $studentNote) {
    if ($studentNote["status"] === "closed") {
        $closedNotes++;
    }
}
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
    <p>Total notes: <?php echo $totalNotes; ?></p>
    <p>Open notes: <?php echo $openNotes; ?></p>
    <p>Closed notes: <?php echo $closedNotes; ?></p>

</body>

</html>