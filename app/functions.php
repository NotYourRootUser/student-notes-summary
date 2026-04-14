<?php

function getOpenNotes($studentNotes) {
    $filteredNotes = [];
    foreach ($studentNotes as $studentNote) {
        if ($studentNote["status"] === "open") {
            $filteredNotes[] = $studentNote;
        }
    }
    return $filteredNotes;
    
}