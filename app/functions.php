<?php

function getOpenNotes($studentNotes)
{
    $filteredNotes = [];
    foreach ($studentNotes as $studentNote) {
        if ($studentNote["status"] === "open") {
            $filteredNotes[] = $studentNote;
        }
    }
    return $filteredNotes;
}

function countOpenNotes($studentNotes)
{
    $openNotesCount = 0;
    foreach ($studentNotes as $studentNote) {
        if ($studentNote["status"] === "open") {
            $openNotesCount++;
        }
    }
    return $openNotesCount;
}

function countClosedNotes($studentNotes) {
    $closedNotesCount = 0;
    foreach ($studentNotes as $studentNote) {
        if ($studentNote["status"] === "closed") {
            $closedNotesCount++;

        }
    }
    return $closedNotesCount;
}