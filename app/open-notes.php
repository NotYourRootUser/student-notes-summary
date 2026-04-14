<?php
require_once "data.php";
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
    <?php foreach ($studentNotes as $studentNote) {
        if ($studentNote["status"] === "open") { ?>
            <h1>
                <?php echo $studentNote["student_name"] ?>
            </h1>
            <p>
                <?php echo $studentNote["note_text"] ?>
            </p>

    <?php }} ?>



</body>

</html>